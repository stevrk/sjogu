FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libsqlite3-dev \
    zip \
    unzip \
    nodejs \
    npm

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd pdo_sqlite

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY . /var/www/html

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Create required directories
RUN mkdir -p /var/www/html/storage/framework/cache \
    /var/www/html/storage/framework/sessions \
    /var/www/html/storage/framework/views \
    /var/www/html/bootstrap/cache \
    /var/www/html/database

# Create SQLite database file
RUN touch /var/www/html/database/database.sqlite

# Set permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html/storage
RUN chmod -R 755 /var/www/html/bootstrap/cache
RUN chmod -R 755 /var/www/html/database
RUN chmod -R 755 /var/www/html/public
RUN chmod 755 /var/www/html/public/index.php

# FIX: Configure Apache virtual host to serve from public directory
RUN a2dissite 000-default.conf
RUN echo '<VirtualHost *:10000>' > /etc/apache2/sites-available/laravel.conf
RUN echo '    DocumentRoot /var/www/html/public' >> /etc/apache2/sites-available/laravel.conf
RUN echo '    <Directory /var/www/html/public>' >> /etc/apache2/sites-available/laravel.conf
RUN echo '        Options Indexes FollowSymLinks' >> /etc/apache2/sites-available/laravel.conf
RUN echo '        AllowOverride All' >> /etc/apache2/sites-available/laravel.conf
RUN echo '        Require all granted' >> /etc/apache2/sites-available/laravel.conf
RUN echo '    </Directory>' >> /etc/apache2/sites-available/laravel.conf
RUN echo '    ErrorLog ${APACHE_LOG_DIR}/error.log' >> /etc/apache2/sites-available/laravel.conf
RUN echo '    CustomLog ${APACHE_LOG_DIR}/access.log combined' >> /etc/apache2/sites-available/laravel.conf
RUN echo '</VirtualHost>' >> /etc/apache2/sites-available/laravel.conf
RUN a2ensite laravel.conf

# Configure Apache to listen on port 10000
RUN sed -i "s/Listen 80/Listen 10000/g" /etc/apache2/ports.conf
RUN echo "Listen 10000" >> /etc/apache2/ports.conf

# Set ServerName to suppress warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 10000

CMD ["apache2-foreground"]