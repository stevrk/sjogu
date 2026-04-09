<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Login - St John of God University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-8">
            <!-- Logo and School Name -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <div class="w-20 h-20 flex items-center justify-center">
                        <img src="{{ asset('images/logo_stjohn.png') }}" alt="St John of God University Logo" class="w-14 h-14 object-cover">
                    </div>
                </div>
                <h1 class="text-xl font-bold text-gray-800">St John of God University</h1>
                <p class="text-sm text-red-600 font-semibold mt-1">Portal Login</p>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-envelope text-gray-400 text-xs mr-1"></i> Email Address
                    </label>
                    <input type="email" name="email" placeholder="Enter your email address" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-lock text-gray-400 text-xs mr-1"></i> Password
                    </label>
                    <input type="password" name="password" placeholder="Enter your password" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                </div>

                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-red-600 hover:text-red-700 transition">Forgot Password?</a>
                </div>

                <button type="submit" class="w-full bg-red-600 text-white py-2.5 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2">
                    <i class="fas fa-sign-in-alt"></i> Login to Portal
                </button>
            </form>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-red-600 transition inline-flex items-center gap-1">
                    <i class="fas fa-arrow-left text-xs"></i> Back to School Website
                </a>
            </div>
        </div>
    </div>

</body>
</html>