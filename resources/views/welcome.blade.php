<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St John of God University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            max-width: 300px;
            height: 100vh;
            background: white;
            z-index: 1000;
            transition: right 0.3s ease;
            box-shadow: -5px 0 20px rgba(0,0,0,0.1);
        }
        .mobile-menu.active {
            right: 0;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 999;
            display: none;
        }
        .overlay.active {
            display: block;
        }
        /* Carousel */
        .carousel-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        .carousel-slide.active {
            opacity: 1;
        }
        /* Dropdown Menu */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 8px;
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: all 0.3s;
        }
        .dropdown-content a:hover {
            background-color: #fef2f2;
            color: #dc2626;
        }
        
        /* Active section highlighting */
        .nav-active {
            color: #dc2626 !important;
        }
        
        /* Scroll padding for fixed header */
        section {
            scroll-margin-top: 80px;
        }
    </style>
</head>
<body>

    <!-- Overlay -->
    <div class="overlay" id="overlay"> </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
    <div class="p-6">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-xl font-bold text-red-700">Menu</h2>
            <button id="closeMenu" class="text-gray-600">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        
        <!-- Login Options in Mobile Menu - Single Portal Link -->
        <div class="mb-6 pb-6 border-b">
            <div class="flex gap-2 sm:gap-3 md:gap-4">
                <a href="{{ route('portal.login') }}" class="flex-1 bg-red-50 text-red-700 py-1.5 sm:py-2 md:py-2.5 px-2 sm:px-3 rounded-lg text-center font-medium text-xs sm:text-sm md:text-base hover:bg-red-700 hover:text-white transition">
                    <i class="fas fa-sign-in-alt mr-1 sm:mr-2 text-xs sm:text-sm md:text-base"></i>Portal Login
                </a>
            </div>
        </div>
        
        <ul class="space-y-4">
            <li><a href="#Home" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">Home</a></li>
            <li><a href="#about" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">About</a></li>
            <li><a href="#News" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">News</a></li>
            <li><a href="#programs" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">Programs</a></li>
            <li><a href="#research" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">Research Hub</a></li>
            <li><a href="#students" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">Students</a</li>
            <li><a href="#library" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">Library</a></li>
            <li><a href="#contact" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">Contact</a></li>
        </ul>
        <a href="#Enroll" class="mobile-nav-link mt-6 bg-red-700 text-white w-full py-2 rounded text-center block hover:bg-red-800 transition">Enroll Now</a>
    </div>
</div>

    <!-- TOP BAR - Hidden on mobile -->
    <div class="bg-red-700 text-white text-sm py-2 px-4 md:px-6 hidden md:flex flex-col md:flex-row justify-between items-center gap-2">
    <div class="flex gap-4 md:gap-6">
        <span>+265 123 456 789</span>
        <span>info@sjoguniversity.com</span>
        <span>Mon - Fri: 08:00 - 17:00</span>
    </div>
    <div class="flex items-center gap-4">
        <div class="hidden md:flex items-center gap-4">
            <a href="{{ route('portal.login') }}" class="hover:text-gray-200 transition flex items-center gap-1">
                <i class="fas fa-sign-in-alt"></i>
                <span>Portal Login</span>
            </a>
        </div>
        <input type="text" placeholder="Search..." class="px-3 py-1 rounded text-black text-sm outline-none w-full md:w-auto">
    </div>
    </div>

   <nav class="bg-white px-4 md:px-6 py-4 flex justify-between items-center shadow sticky top-0 z-50">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 md:w-14 md:h-14 lg:w-16 lg:h-16 rounded-full flex items-center justify-center overflow-hidden shadow-md">
            <img src="{{ asset('images/logo_stjohn.png') }}" alt="St John of God University Logo" class="w-full h-full object-cover">
        </div>
        <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-bold break-words whitespace-normal leading-tight">
            St John of God University
        </h1>
    </div>
    
    <div class="flex items-center gap-4">
        <ul class="hidden md:flex gap-8 font-medium">
            <li><a href="#Home" class="nav-link hover:text-red-600 transition">Home</a></li>
             <li><a href="#News" class="nav-link hover:text-red-600 transition">News</a></li>
            <li><a href="#about" class="nav-link hover:text-red-600 transition">About</a></li>
           
            <li><a href="#programs" class="nav-link hover:text-red-600 transition">Programs</a></li>
            <li><a href="#research" class="nav-link hover:text-red-600 transition">Research Hub</a></li>
            <li><a href="#students" class="nav-link hover:text-red-600 transition">Students</a></li>
            <li><a href="#library" class="nav-link hover:text-red-600 transition">Library</a></li>
            <li><a href="#contact" class="nav-link hover:text-red-600 transition">Contact</a></li>
        </ul>
        
        <div class="flex items-center gap-4">
            <button id="hamburgerBtn" class="md:hidden text-gray-700">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
</nav>



 <!-- HERO SECTION WITH CAROUSEL -->

<!-- HERO SECTION WITH CAROUSEL -->
<section id="Home" class="relative bg-black">
    <div class="relative h-[400px] md:h-[550px] lg:h-[600px] overflow-hidden">
        
        <!-- Slide 1 - Campus Excellence -->
        <div class="carousel-slide active" data-slide="0">
            <img src="{{ asset('images/admin block.jpeg') }}" class="w-full h-full object-cover object-center opacity-50">
            <div class="absolute inset-0 flex items-center">
                <div class="text-left px-4 md:px-16 max-w-3xl">
                    <!-- Tagline -->
                    <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                        <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Welcome to SJOGU</span>
                    </div>
                    <!-- Main Heading -->
                    <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                        Where <span class="text-red-500 relative inline-block">Excellence 
                            <svg class="absolute -bottom-1 md:-bottom-2 left-0 w-full h-0.5 md:h-1" viewBox="0 0 100 4" preserveAspectRatio="none">
                                <path d="M0,2 Q25,0 50,2 T100,2" stroke="#dc2626" stroke-width="2" fill="none"/>
                            </svg>
                        </span> 
                        <span class="text-white">Meets</span> 
                        <span class="text-red-500">Compassion</span>
                    </h3>
                    <!-- Description -->
                    <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                        State-of-the-art facilities designed to shape the next generation of healthcare leaders
                    </p>
                    <!-- Buttons - Smaller on mobile -->
                    <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                        <a href="#programs" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
                            Explore Programs 
                            <i class="fas fa-arrow-right text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                        </a>
                        <a href="#Enroll" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition text-xs md:text-base">
                            Apply Now 
                            <i class="fas fa-user-graduate text-[10px] md:text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2 - Student Life -->
        <div class="carousel-slide" data-slide="1">
            <img src="{{ asset('images/students_2.jpeg') }}" class="w-full h-full object-cover object-center opacity-50">
            <div class="absolute inset-0 flex items-center">
                <div class="text-left px-4 md:px-16 max-w-3xl">
                    <!-- Tagline -->
                    <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                        <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Community & Growth</span>
                    </div>
                    <!-- Main Heading -->
                    <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                        Join a <span class="text-red-500">Vibrant</span><br>
                        <span class="text-white">Community of</span> 
                        <span class="text-red-500">Leaders</span>
                    </h3>
                    <!-- Description -->
                    <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                        Connect, grow, and thrive with fellow students from across Malawi and beyond
                    </p>
                    <!-- Buttons - Smaller on mobile -->
                    <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                        <a href="#students" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
                            Student Life 
                            <i class="fas fa-users text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                        </a>
                        <a href="#Enroll" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition text-xs md:text-base">
                            Join Us 
                            <i class="fas fa-heart text-[10px] md:text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3 - Academic Excellence -->
        <div class="carousel-slide" data-slide="2">
            <img src="{{ asset('images/class_room.jpeg') }}" class="w-full h-full object-cover object-center opacity-50">
            <div class="absolute inset-0 flex items-center">
                <div class="text-left px-4 md:px-16 max-w-3xl">
                    <!-- Tagline -->
                    <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                        <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Academic Excellence</span>
                    </div>
                    <!-- Main Heading -->
                    <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                        Transform <span class="text-red-500">Your</span><br>
                        <span class="text-white">Future</span> 
                        <span class="text-red-500">Today</span>
                    </h3>
                    <!-- Description -->
                    <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                        World-class education with experienced faculty and hands-on clinical training
                    </p>
                    <!-- Buttons - Smaller on mobile -->
                    <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                        <a href="#programs" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
                            View Programs 
                            <i class="fas fa-graduation-cap text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                        </a>
                        <a href="#about" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition text-xs md:text-base">
                            Learn More 
                            <i class="fas fa-book-open text-[10px] md:text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 4 - Call to Action / Enrollment -->
        <div class="carousel-slide" data-slide="3">
            <img src="{{ asset('images/graduation.jpg') }}" class="w-full h-full object-cover object-center opacity-50">
            <div class="absolute inset-0 flex items-center">
                <div class="text-left px-4 md:px-16 max-w-3xl">
                    <!-- Tagline -->
                    <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                        <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Limited Seats Available</span>
                    </div>
                    <!-- Main Heading -->
                    <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                        Your <span class="text-red-500">Journey</span><br>
                        <span class="text-white">Starts</span> 
                        <span class="text-red-500">Here</span>
                    </h3>
                    <!-- Description -->
                    <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                        Take the first step toward a rewarding career in healthcare. Applications for 2025/2026 are now open.
                    </p>
                    <!-- Buttons - Smaller on mobile -->
                    <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                        <a href="#Enroll" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-2 md:py-3.5 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-lg">
                            Enroll Now 
                            <i class="fas fa-arrow-right text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                        </a>
                        <a href="#contact" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-2 md:py-3.5 rounded-lg font-semibold transition text-xs md:text-lg">
                            Contact Us 
                            <i class="fas fa-envelope text-[10px] md:text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carousel Buttons -->
        <button id="prevBtn" class="hidden md:flex absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white w-10 h-10 rounded-full items-center justify-center transition z-20 backdrop-blur-sm">
            <i class="fas fa-chevron-left text-lg"></i>
        </button>
        <button id="nextBtn" class="hidden md:flex absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white w-10 h-10 rounded-full items-center justify-center transition z-20 backdrop-blur-sm">
            <i class="fas fa-chevron-right text-lg"></i>
        </button>
        
        <!-- Dots -->
        <div class="absolute bottom-4 md:bottom-6 left-1/2 -translate-x-1/2 flex gap-2 md:gap-3 z-20">
            <button class="dot w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all" data-dot="0"></button>
            <button class="dot w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all" data-dot="1"></button>
            <button class="dot w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all" data-dot="2"></button>
            <button class="dot w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all" data-dot="3"></button>
        </div>
    </div>
</section>
<!-- VICE CHANCELLOR'S WELCOME REMARKS SECTION -->

<section id="welcome" class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
      
        <div class="text-center mb-12">
            
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Vice Chancellor's <span class="text-red-600">Remarks</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full"></div>
            <p class="text-gray-500 max-w-2xl mx-auto mt-3">
                A warm welcome from the leader of our academic community
            </p>
        </div>

        <div class="grid md:grid-cols-12 gap-8 items-stretch">
            <!-- Left: Vice Chancellor's Photo -->
            <div class="md:col-span-5">
                <div class="relative h-full">
                    <!-- Main Image -->
                    <div class="rounded-2xl overflow-hidden shadow-xl h-full">
                        <img src="{{ asset('images/VC.jpeg') }}" alt="Vice Chancellor - Charles Masulani Mwale, PhD" class="w-full h-full object-cover min-h-[450px]">
                    </div>
                    
                    <!-- Decorative Red Elements -->
                    <div class="absolute -bottom-3 -right-3 w-24 h-24 bg-red-600 rounded-2xl -z-10 hidden md:block"></div>
                    <div class="absolute -top-3 -left-3 w-20 h-20 bg-red-50 rounded-2xl -z-10 hidden md:block"></div>
                    
                    <!-- Quote Badge -->
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-xl shadow-lg px-4 py-2 flex items-center gap-2">
                        <i class="fas fa-quote-left text-red-600 text-sm"></i>
                        <p class="text-xs font-semibold text-gray-700">Servant Leadership</p>
                    </div>

                    <!-- Years Badge -->
                    <div class="absolute top-4 right-4 bg-red-600 rounded-xl px-3 py-1.5 shadow-lg">
                        <p class="text-white text-xs font-bold">20+ Years</p>
                    </div>
                </div>
            </div>

            <!-- Right: Welcome Message Content -->
            <div class="md:col-span-7 flex flex-col justify-between">
                <div>
                    <!-- Name & Title -->
            <div class="mb-5 text-center">
    <div class="flex items-center justify-center gap-2 mb-1">
        <i class="fas fa-crown text-yellow-500 text-xs"></i>
        <span class="text-red-600 text-xs font-semibold uppercase tracking-wider">University Leadership</span>
    </div>
    <h3 class="text-2xl md:text-3xl font-bold text-gray-800">Dr. Charles Masulani Mwale</h3>
    <div class="flex items-center justify-center gap-3 mt-1 flex-wrap">
        <p class="text-red-600 font-semibold">Vice Chancellor</p>
        <span class="text-gray-300">|</span>
        <div class="flex items-center gap-1">
            <i class="fas fa-graduation-cap text-gray-400 text-xs"></i>
            <span class="text-gray-500 text-sm">PhD, MSc, BSc</span>
        </div>
    </div>
</div>
                    

                    <!-- Welcome Message Text -->
                <div class="space-y-3 text-gray-600 leading-relaxed text-[15px] text-center">
                    <p class="flex items-center justify-center gap-2">
                        <i class="fas fa-envelope-open-text text-red-500 text-xs"></i>
                        <span class="font-medium text-gray-700">Dear Prospective Students, Parents, and Partners,</span>
                    </p>
                    <p>
                        It is my distinct honor and privilege to welcome you to <span class="font-semibold text-gray-800">St. John of God University (SJOGU)</span>. 
                        As an institution rooted in the rich tradition of the Hospitaller Order of St. John of God, 
                        we are committed to providing a transformative educational experience that blends academic 
                        excellence with compassionate service.
                    </p>
                    <p>
                        At SJOGU, we believe that true education goes beyond textbooks and lectures. It is about nurturing 
                        the whole person — intellectually, spiritually, and professionally. Our programs are designed to 
                        equip you with the knowledge, skills, and values necessary to become a competent healthcare 
                        professional who serves with dignity, respect, and compassion.
                    </p>
                    <p>
                        Whether you are joining us for the first time or continuing your academic journey, you will find 
                        a supportive community dedicated to your success. Our experienced faculty, modern facilities, 
                        and strong partnerships with healthcare institutions ensure that you receive a world-class 
                        education right here in Malawi.
                    </p>
                    <p class="italic text-gray-700 border-l-2 border-red-600 pl-3 inline-block mx-auto">
                        I invite you to explore all that SJOGU has to offer. Together, let us build a healthier, 
                        more compassionate future for our communities and beyond.
                    </p>
                </div>
                </div>

                <!-- Call to Action Buttons + Signature -->
                <div>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="#about" class="bg-red-600 text-white px-5 py-2.5 rounded-xl font-semibold hover:bg-red-700 transition flex items-center gap-2 shadow-md">
                            Learn More <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                        <a href="#Enroll" class="border-2 border-red-600 text-red-600 px-5 py-2.5 rounded-xl font-semibold hover:bg-red-600 hover:text-white transition flex items-center gap-2">
                            Apply Now <i class="fas fa-user-graduate text-xs"></i>
                        </a>
                    </div>

                    <!-- Signature Line -->
                    <div class="mt-5 pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-red-50 rounded-full flex items-center justify-center">
                                <i class="fas fa-pen-fancy text-red-500 text-sm"></i>
                            </div>
                            <div>
                                <p class="text-gray-800 font-semibold text-sm">Dr. Charles Masulani Mwale, PhD</p>
                                <p class="text-gray-400 text-xs">Vice Chancellor, St John of God University</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>

<!-- NEWS & ANNOUNCEMENTS SECTION -->
<section id="News" class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-10">
           
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">News & <span class="text-red-600">Announcements</span></h2>
           

             <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide text-sm">Stay Updated</p>
            <p class="text-gray-600 text-sm max-w-2xl mx-auto">
                Latest updates, events, and important information from St John of God University
            </p>
        </div>

        <div class="grid md:grid-cols-12 gap-5">
            <!-- COLUMN 1: Important Dates & Announcements -->
            <div class="md:col-span-3">
                <div class="bg-white rounded-lg shadow-md border border-gray-100 p-3 mb-5">
                    <h3 class="font-bold text-gray-800 mb-2 flex items-center gap-2 text-sm">
                        <i class="fas fa-calendar-alt text-red-600"></i> Important Dates
                    </h3>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-gray-600">Registration Deadline</span>
                            <span class="font-semibold text-gray-800">April 15</span>
                        </div>
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-gray-600">Mid-Semester Exams</span>
                            <span class="font-semibold text-gray-800">May 5-10</span>
                        </div>
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-gray-600">Graduation Ceremony</span>
                            <span class="font-semibold text-gray-800">June 28</span>
                        </div>
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-gray-600">Orientation</span>
                            <span class="font-semibold text-gray-800">July 15-17</span>
                        </div>
                    </div>
                </div>

                <!-- Announcements -->
                <div class="bg-white rounded-lg shadow-md border border-gray-100">
                    <div class="bg-red-600 text-white px-3 py-2 rounded-t-lg">
                        <h3 class="font-bold text-sm flex items-center gap-2">
                            <i class="fas fa-bullhorn text-xs"></i> Announcements
                        </h3>
                    </div>
                    <div class="divide-y divide-gray-100">
                        <div class="p-2 hover:bg-gray-50 transition">
                            <div class="flex items-start gap-2">
                                <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-calendar-check text-red-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold text-gray-800">Mid-Semester Break</p>
                                    <p class="text-xs text-gray-500">April 20-28</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 hover:bg-gray-50 transition">
                            <div class="flex items-start gap-2">
                                <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-file-alt text-red-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold text-gray-800">Scholarship Open</p>
                                    <p class="text-xs text-gray-500">Deadline: April 30</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 hover:bg-gray-50 transition">
                            <div class="flex items-start gap-2">
                                <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-chalkboard-teacher text-red-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold text-gray-800">Guest Lecture</p>
                                    <p class="text-xs text-gray-500">April 12, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 border-t">
                        <a href="#" class="block text-center text-red-600 font-semibold text-xs hover:text-red-700 transition">
                            View All →
                        </a>
                    </div>
                </div>
            </div>

            <!-- COLUMN 2: News Article 1 -->
            <div class="md:col-span-3">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 h-full">
                    <img src="{{ asset('images/graduation.jpg') }}" alt="Graduation" class="w-full h-32 object-cover">
                    <div class="p-3">
                        <div class="flex items-center gap-2 text-xs text-gray-500 mb-1">
                            <span><i class="far fa-calendar-alt mr-1"></i> March 15, 2026</span>
                            <span class="bg-red-100 text-red-600 px-1.5 py-0.5 rounded text-xs">Featured</span>
                        </div>
                        <h3 class="text-sm font-bold text-gray-800 mb-1">18th Graduation Ceremony</h3>
                        <p class="text-gray-600 text-xs mb-2">The university announces its 18th graduation ceremony scheduled for June 2024.</p>
                        <a href="#" class="text-red-600 text-xs font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
                            Read More <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- COLUMN 3: News Article 2 -->
            <div class="md:col-span-3">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 h-full">
                    <img src="{{ asset('images/research.jpeg') }}" alt="Research" class="w-full h-32 object-cover">
                    <div class="p-3">
                        <div class="flex items-center gap-2 text-xs text-gray-500 mb-1">
                            <span><i class="far fa-calendar-alt mr-1"></i> April 5, 2026</span>
                            <span class="bg-green-100 text-green-600 px-1.5 py-0.5 rounded text-xs">Event</span>
                        </div>
                        <h3 class="text-sm font-bold text-gray-800 mb-1">Research Conference 2024</h3>
                        <p class="text-gray-600 text-xs mb-2">Join us for the annual International Research Conference.</p>
                        <a href="#" class="text-red-600 text-xs font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
                            Read More <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- COLUMN 4: News Article 3 -->
            <div class="md:col-span-3">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 h-full">
                    <img src="{{ asset('images/news2.jpg') }}" alt="Admissions" class="w-full h-32 object-cover">
                    <div class="p-3">
                        <div class="flex items-center gap-2 text-xs text-gray-500 mb-1">
                            <span><i class="far fa-calendar-alt mr-1"></i> March 10, 2026</span>
                            <span class="bg-blue-100 text-blue-600 px-1.5 py-0.5 rounded text-xs">Important</span>
                        </div>
                        <h3 class="text-sm font-bold text-gray-800 mb-1">Applications Open 2026/27</h3>
                        <p class="text-gray-600 text-xs mb-2">Applications now open for the upcoming academic year.</p>
                        <a href="#" class="text-red-600 text-xs font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
                            Read More <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-10">
            <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-lg font-semibold text-sm hover:bg-red-700 transition">
                View All News & Announcements
            </a>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="py-16 px-4 md:px-16 bg-red-700">
    <div class="grid md:grid-cols-2 gap-8 md:gap-10 items-center">

        <!-- LEFT: IMAGE - Responsive sizing -->
        <div class="relative flex justify-center md:justify-start">
            <div class="w-full md:w-auto">
                <img src="{{ asset('images/admin_block.jpeg') }}"
                    class="w-full md:w-[450px] lg:w-[500px] h-[300px] md:h-[420px] object-cover rounded-xl shadow-lg mx-auto md:mx-0">
                
                <!-- Experience Box - Responsive positioning -->
                <div class="absolute bottom-4 left-4 md:bottom-5 md:left-5 bg-white px-4 md:px-5 py-2 md:py-3 shadow rounded">
                    <h3 class="text-lg md:text-xl font-bold text-red-600">20+</h3>
                    <p class="text-xs md:text-sm text-gray-600">Years of Excellence</p>
                </div>
            </div>
        </div>

        <!-- RIGHT: CONTENT - Centered -->
        <div class="text-center">
            <h2 class="text-2xl md:text-4xl font-bold mb-4 text-white">
                About St John Of God <span class="text-yellow-300">University</span>
            </h2>

            <!-- Description - Responsive text sizes -->
            <p class="text-sm md:text-base text-red-100 mb-4 leading-relaxed">
                St. John of God University (SJOGU) is a training institution of higher learning for health professionals 
                in Malawi and its neighboring countries since its inception in 2003. The University is a member of 
                CHAM and operates under the proprietorship of Saint John of God Brothers of the Catholic church.
            </p>

            <p class="text-sm md:text-base text-red-100 mb-4 leading-relaxed">
                The University offers programmes accredited by the National Council of Higher Education (NCHE) and approved by 
                Nurses and Midwives Council of Malawi (NMCM) and Medical Council of Malawi (MCM).
            </p>

            <p class="text-sm md:text-base text-red-100 mb-6 leading-relaxed">
                SJOGU is committed to training highly qualified healthcare professionals and strives to be a Centre of 
                excellence in education, training, and research across Malawi and the sub-Saharan region.
            </p>
        </div>

    </div>
</section>

<!-- FACTS, MISSION, VISION, VALUES SECTION - Background Image -->
<section class="py-16 px-4 md:px-16 relative bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('images/students_2.jpeg') }}');">
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    
    <div class="container mx-auto relative z-10">
        <!-- Facts Section -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">SJOGU by <span class="text-yellow-400">Numbers</span></h2>
            <p class="text-gray-300">Our impact in numbers</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">500+</div>
                <p class="text-gray-600">Active Students</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">10+</div>
                <p class="text-gray-600">Academic Programs</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">20+</div>
                <p class="text-gray-600">Qualified Lecturers</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">5+</div>
                <p class="text-gray-600">Awards & Recognitions</p>
            </div>
        </div>

        <!-- Mission, Vision, Values Section -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Our <span class="text-yellow-400">Foundation</span></h2>
            <p class="text-gray-300">Guiding principles that shape our institution</p>
        </div>
        <div class="grid md:grid-cols-4 gap-6">
            <!-- Mission -->
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-5 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-bullseye text-yellow-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Our Mission</h3>
                <p class="text-gray-600 text-xs leading-relaxed">
                    To Provide Quality and Holistic Teaching, Learning and Research
                    <br>
                    In the manner of St John of God 
                </p>
            </div>

            <!-- Vision -->
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-5 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-eye text-yellow-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Our Vision</h3>
                <p class="text-gray-600 text-xs leading-relaxed">
                    In the next five years St John of God University aspires to become a center of excellence in academics and research in health and related fields whilst upholding the Christian values in the student learning
                </p>
            </div>

            <!-- Philosophy -->
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-5 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-brain text-yellow-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Our Philosophy</h3>
                <p class="text-gray-600 text-xs leading-relaxed">
                    The University upholds the philosophy of the Hospitaller Order of St John of God that promotes the Dignity of individuals
                </p>
            </div>

            <!-- Core Values -->
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-5 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-heart text-yellow-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Core Values</h3>
                <div class="grid grid-cols-2 gap-1">
                    <div class="flex items-center gap-1 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-xs"></i>
                        <span class="text-gray-600 text-xs">Hospitality</span>
                    </div>
                    <div class="flex items-center gap-1 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-xs"></i>
                        <span class="text-gray-600 text-xs">Compassion</span>
                    </div>
                    <div class="flex items-center gap-1 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-xs"></i>
                        <span class="text-gray-600 text-xs">Respect</span>
                    </div>
                    <div class="flex items-center gap-1 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-xs"></i>
                        <span class="text-gray-600 text-xs">Justice</span>
                    </div>
                    <div class="flex items-center gap-1 justify-center col-span-2">
                        <i class="fas fa-check-circle text-yellow-600 text-xs"></i>
                        <span class="text-gray-600 text-xs">Excellence</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LEADERSHIP / EXECUTIVE STAFF SECTION -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">University Leadership</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Executive <span class="text-red-600">Staff</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Meet the dedicated leaders guiding St John of God University towards excellence
            </p>
        </div>
     <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
    <!-- Vice Chancellor - Top Leadership -->
    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
        <div class="bg-red-600 px-6 py-4">
            <h3 class="text-xl font-bold text-white">Vice Chancellor</h3>
        </div>
        <div class="p-6 text-center">
            <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                <img src="{{ asset('images/VC.jpeg') }}" alt="Charles Masulani Mwale, PhD" class="w-full h-full object-cover">
            </div>
            <h4 class="text-xl font-bold text-gray-800">Charles Masulani Mwale, PhD</h4>
            <p class="text-red-600 text-sm mb-3">Vice Chancellor</p>
            <p class="text-gray-600 text-sm">Leading the university with vision and excellence in higher education.</p>
        </div>
    </div>

   

    <!-- Registrar - Third in Hierarchy -->
    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
    <div class="bg-red-600 px-6 py-4">
        <h3 class="text-xl font-bold text-white">Deputy Vice Chancellor</h3>
    </div>
    <div class="p-6 text-center">
        <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
            <img src="{{ asset('images/Registrar.jpeg') }}" alt="Esmie Mkwinda, PhD" class="w-full h-full object-cover">
        </div>
        <h4 class="text-xl font-bold text-gray-800">Esmie Mkwinda, PhD</h4>
        <p class="text-red-600 text-sm mb-3">Deputy Vice Chancellor</p>
        <p class="text-gray-600 text-sm">Supporting the Vice Chancellor in academic and administrative leadership.</p>
    </div>
</div>
     <!-- Dean of Faculty - Second in Hierarchy -->
    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
        <div class="bg-red-600 px-6 py-4">
            <h3 class="text-xl font-bold text-white">Dean of Faculty</h3>
        </div>
        <div class="p-6 text-center">
            <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                <img src="{{ asset('images/Dean.jpeg') }}" alt="Chimwemwe Munthali" class="w-full h-full object-cover">
            </div>
            <h4 class="text-xl font-bold text-gray-800">Chimwemwe Munthali, Msc</h4>
            <p class="text-red-600 text-sm mb-3">Dean of Faculty</p>
            <p class="text-gray-600 text-sm">Overseeing academic programs and faculty development.</p>
        </div>
    </div>
</div>
       

        <!-- View All Staff Button -->
<div class="text-center mt-12">
            <a href="#" class="inline-block border-2 border-red-600 text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-red-600 hover:text-white transition">
                View All Staff →
            </a>
        </div>
    </div>
</section>




<!-- PROGRAMS SECTION -->
<section id="programs" class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
       <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">Our Academic Programs</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Courses & <span class="text-red-600">Programs</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Explore our diverse range of healthcare programs across four departments: Clinical Medicine, Nursing, Psycho-Social Counselling, and Public Health
            </p>
        </div>

        <!-- Entry Requirements -->
        <div class="bg-gray-50 rounded-lg p-6 mb-12 border border-gray-200">
            <div class="flex items-center gap-3 mb-4">
                <i class="fas fa-graduation-cap text-2xl text-red-600"></i>
                <h3 class="text-xl font-bold text-gray-800">Entry Requirements Overview</h3>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-red-600 mb-2">Generic Programs</h4>
                    <ul class="space-y-1 text-gray-600 text-sm">
                        <li>• Full Malawi School Certificate of Education (MSCE) or equivalent with six (6) credits</li>
                        <li>• Credits must include: English, Mathematics, Biology, Physics, Chemistry</li>
                        <li>• For Psychotherapy: six (6) credits including English and Mathematics</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-red-600 mb-2">Upgrading Programs</h4>
                    <ul class="space-y-1 text-gray-600 text-sm">
                        <li>• Diploma in relevant field from accredited institution</li>
                        <li>• Minimum two (2) years post-qualification clinical/work experience</li>
                        <li>• Current registration with professional regulatory body (Medical Council of Malawi / Nurses and Midwives Council of Malawi)</li>
                        <li>• Full MSCE with six (6) credits including English and relevant sciences</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Department: Clinical Medicine -->
        <div class="mb-12">
            <div class="flex items-center gap-3 mb-6 border-b border-red-200 pb-3">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-stethoscope text-red-600 text-lg"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Department of Clinical Medicine</h3>
            </div>
            <div class="flex justify-center">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl">
                    <!-- Diploma in Clinical Medicine (Generic) -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 w-80 md:w-auto">
                        <img src="{{ asset('images/news2.jpg') }}" alt="Clinical Medicine" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <div class="flex gap-2 mb-2">
                                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Generic</span>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">3 Years</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Diploma in Clinical Medicine</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">Comprehensive training in clinical medicine preparing students for primary healthcare delivery.</p>
                            <div class="flex items-center justify-between pt-3 border-t">
                                <span class="text-sm text-gray-500">Full-time | 3 Years</span>
                                <button onclick="openModal('modal1')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Diploma in Clinical Medicine (Upgrading) -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 w-80 md:w-auto">
                        <img src="{{ asset('images/news2.jpg') }}" alt="Clinical Medicine Upgrading" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <div class="flex gap-2 mb-2">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">Upgrading</span>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">2 Years</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Diploma in Clinical Medicine (Upgrading)</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">Upgrading program for qualified Medical Assistants with Certificate in Clinical Medicine.</p>
                            <div class="flex items-center justify-between pt-3 border-t">
                                <span class="text-sm text-gray-500">Full-time | 2 Years</span>
                                <button onclick="openModal('modal8')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- BSc Clinical Medicine - Mental Health (Upgrading) -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 w-80 md:w-auto">
                        <img src="{{ asset('images/clinical medicine_mental.jpeg') }}" alt="Mental Health" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <div class="flex gap-2 mb-2">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">Upgrading</span>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">2 Years</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Clinical Medicine (Mental Health) - Upgrading</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">For qualified Clinical Officers with Diploma in Clinical Medicine or Mental Health.</p>
                            <div class="flex items-center justify-between pt-3 border-t">
                                <span class="text-sm text-gray-500">Full-time | 2 Years</span>
                                <button onclick="openModal('modal3')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- BSC PUBLIC HEALTH -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 w-80 md:w-auto">
                        <img src="{{ asset('images/public health.jpg') }}" alt="Public Health" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <div class="flex gap-2 mb-2">
                                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Generic</span>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">4 Years</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Bachelor of Science in Public Health</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">Comprehensive program focusing on community health, epidemiology, and health promotion.</p>
                            <div class="flex items-center justify-between pt-3 border-t">
                                <span class="text-sm text-gray-500">Full-time | 4 Years</span>
                                <button onclick="openModal('modal6')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Department: Nursing -->
        <div class="mb-12">
            <div class="flex items-center gap-3 mb-6 border-b border-red-200 pb-3">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-hand-holding-heart text-red-600 text-lg"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Department of Nursing and Midwifery</h3>
            </div>
            <div class="flex justify-center">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl">
                    <!-- BSc Nursing and Midwifery (Generic) -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 w-80 md:w-auto">
                        <img src="{{ asset('images/Nursing_stud.jpeg') }}" alt="Nursing and Midwifery" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <div class="flex gap-2 mb-2">
                                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Generic</span>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">4 Years</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Nursing and Midwifery</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">Professional nursing program combining theoretical knowledge with practical clinical skills.</p>
                            <div class="flex items-center justify-between pt-3 border-t">
                                <span class="text-sm text-gray-500">Full-time | 4 Years</span>
                                <button onclick="openModal('modal2')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- BSc Mental Health Psychiatric Nursing (Upgrading) -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 w-80 md:w-auto">
                        <img src="{{ asset('images/Nursing_stud2.jpeg') }}" alt="Psychiatric Nursing" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <div class="flex gap-2 mb-2">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">Upgrading</span>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">2 Years</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Mental Health Psychiatric Nursing - Upgrading</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">For Registered Nurses/Registered Nurse Midwives with University Diploma.</p>
                            <div class="flex items-center justify-between pt-3 border-t">
                                <span class="text-sm text-gray-500">Full-time | 2 Years</span>
                                <button onclick="openModal('modal4')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Department: Psycho-Social Counselling -->
        <div class="mb-12">
            <div class="flex items-center gap-3 mb-6 border-b border-red-200 pb-3">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-brain text-red-600 text-lg"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Department of Psycho-Social Counselling</h3>
            </div>
            <div class="flex justify-center">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl">
                    <!-- BSc in Psychotherapy (Generic) -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 w-80 md:w-auto">
                        <img src="{{ asset('images/psycho.jpeg')}}" alt="Psychotherapy" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <div class="flex gap-2 mb-2">
                                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Generic</span>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">4 Years</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Psychotherapy (Psychosocial Counselling)</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">Two exit points: Diploma after 4 semesters, Bachelor's after 8 semesters.</p>
                            <div class="flex items-center justify-between pt-3 border-t">
                                <span class="text-sm text-gray-500">Full-time | 4 Years</span>
                                <button onclick="openModal('modal7')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- BSc in Psychotherapy (Upgrading) -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 w-80 md:w-auto">
                        <img src="{{ asset('images/psychotherapy1.jpeg') }}" alt="Psychotherapy Upgrading" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <div class="flex gap-2 mb-2">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">Upgrading</span>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">2 Years</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Psychotherapy - Upgrading</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">For qualified Counsellors with Diploma in Psychosocial Counselling.</p>
                            <div class="flex items-center justify-between pt-3 border-t">
                                <span class="text-sm text-gray-500">Full-time | 2 Years</span>
                                <button onclick="openModal('modal9')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MODALS FOR EACH PROGRAM -->

<!-- Modal 1: Diploma in Clinical Medicine (Generic) -->
<div id="modal1" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-stethoscope text-xl"></i>
                <h3 class="text-xl font-bold">Diploma in Clinical Medicine (Generic)</h3>
            </div>
            <button onclick="closeModal('modal1')" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-info-circle text-red-600"></i> Program Overview</h4>
                        <p class="text-gray-600 text-sm">Comprehensive training in clinical medicine preparing students for primary healthcare delivery. The program equips students with knowledge and skills to diagnose, treat, and manage common medical conditions.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-clock text-red-600"></i> Duration</h4>
                        <p class="text-gray-600 text-sm">3 Years (6 Semesters) - Full Time</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-tasks text-red-600"></i> Program Structure</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Year 1: Basic Sciences (Anatomy, Physiology, Biochemistry)</li>
                            <li>Year 2: Clinical Medicine, Pharmacology, Pathology</li>
                            <li>Year 3: Clinical Rotations, Community Health, Internship</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-graduation-cap text-red-600"></i> Entry Requirements</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>MSCE with 6 credits including English, Maths, Biology, Physics, Chemistry</li>
                            <li>Minimum grade of C in each required subject</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-briefcase text-red-600"></i> Career Opportunities</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Clinical Officer in public/private hospitals</li>
                            <li>Rural Health Center Medical Officer</li>
                            <li>NGO Health Program Coordinator</li>
                            <li>Private Practice</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-check-circle text-red-600"></i> Accreditation</h4>
                        <p class="text-gray-600 text-sm">Accredited by Medical Council of Malawi (MCM) and National Council for Higher Education (NCHE)</p>
                    </div>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t flex gap-3">
                <button onclick="closeModal('modal1')" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2: BSc in Nursing and Midwifery (Generic) -->
<div id="modal2" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-hand-holding-heart text-xl"></i>
                <h3 class="text-xl font-bold">BSc in Nursing and Midwifery (Generic)</h3>
            </div>
            <button onclick="closeModal('modal2')" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-info-circle text-red-600"></i> Program Overview</h4>
                        <p class="text-gray-600 text-sm">Professional nursing program combining theoretical knowledge with practical clinical skills. Students learn patient care, midwifery, community health nursing, and leadership skills.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-clock text-red-600"></i> Duration</h4>
                        <p class="text-gray-600 text-sm">4 Years (8 Semesters) - Full Time</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-tasks text-red-600"></i> Program Structure</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Year 1: Nursing Fundamentals, Anatomy, Physiology</li>
                            <li>Year 2: Medical-Surgical Nursing, Pharmacology</li>
                            <li>Year 3: Midwifery, Pediatric Nursing, Mental Health</li>
                            <li>Year 4: Community Health, Leadership, Research, Internship</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-graduation-cap text-red-600"></i> Entry Requirements</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>MSCE with 6 credits including English, Maths, Biology, Physics, Chemistry</li>
                            <li>Minimum grade of C in required subjects</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-briefcase text-red-600"></i> Career Opportunities</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Registered Nurse/Midwife in hospitals</li>
                            <li>Nurse Educator</li>
                            <li>Community Health Nurse</li>
                            <li>Nursing Administrator</li>
                            <li>Clinical Nurse Specialist</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-check-circle text-red-600"></i> Accreditation</h4>
                        <p class="text-gray-600 text-sm">Accredited by Nurses and Midwives Council of Malawi (NMCM) and NCHE</p>
                    </div>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t flex gap-3">
                <button onclick="closeModal('modal2')" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3: BSc in Clinical Medicine (Mental Health) Upgrading -->
<div id="modal3" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-brain text-xl"></i>
                <h3 class="text-xl font-bold">BSc in Clinical Medicine (Mental Health) - Upgrading</h3>
            </div>
            <button onclick="closeModal('modal3')" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-info-circle text-red-600"></i> Program Overview</h4>
                        <p class="text-gray-600 text-sm">Upgrading program for qualified Clinical Officers specializing in mental health. Focuses on psychiatric assessment, diagnosis, treatment, and mental health policy.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-clock text-red-600"></i> Duration</h4>
                        <p class="text-gray-600 text-sm">2 Years (4 Semesters) - Full Time</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-tasks text-red-600"></i> Program Structure</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Advanced Psychiatric Assessment</li>
                            <li>Psychopharmacology</li>
                            <li>Mental Health Policy & Management</li>
                            <li>Clinical Rotations in Psychiatric Units</li>
                            <li>Research Project</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-graduation-cap text-red-600"></i> Entry Requirements</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Diploma in Clinical Medicine or Mental Health</li>
                            <li>Registered with Medical Council of Malawi</li>
                            <li>2 years post-qualification experience</li>
                            <li>MSCE with 6 credits</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-briefcase text-red-600"></i> Career Opportunities</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Mental Health Clinical Officer</li>
                            <li>Psychiatric Unit Supervisor</li>
                            <li>Mental Health Program Coordinator</li>
                            <li>Forensic Mental Health Officer</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t flex gap-3">
                <button onclick="closeModal('modal3')" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4: BSc in Mental Health Psychiatric Nursing Upgrading -->
<div id="modal4" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-heartbeat text-xl"></i>
                <h3 class="text-xl font-bold">BSc in Mental Health Psychiatric Nursing - Upgrading</h3>
            </div>
            <button onclick="closeModal('modal4')" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-info-circle text-red-600"></i> Program Overview</h4>
                        <p class="text-gray-600 text-sm">Advanced nursing program for Registered Nurses specializing in psychiatric and mental health care. Focuses on therapeutic interventions, mental health assessment, and patient management.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-clock text-red-600"></i> Duration</h4>
                        <p class="text-gray-600 text-sm">2 Years (4 Semesters) - Full Time</p>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-graduation-cap text-red-600"></i> Entry Requirements</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Diploma in Nursing or Midwifery</li>
                            <li>Registered with Nurses and Midwives Council of Malawi</li>
                            <li>2 years clinical experience</li>
                            <li>MSCE with 6 credits</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-briefcase text-red-600"></i> Career Opportunities</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Psychiatric Nurse Specialist</li>
                            <li>Mental Health Unit Manager</li>
                            <li>Community Mental Health Nurse</li>
                            <li>Nurse Educator in Psychiatry</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t flex gap-3">
                <button onclick="closeModal('modal4')" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6: BSc in Public Health -->
<div id="modal6" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-chart-line text-xl"></i>
                <h3 class="text-xl font-bold">Bachelor of Science in Public Health</h3>
            </div>
            <button onclick="closeModal('modal6')" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-info-circle text-red-600"></i> Program Overview</h4>
                        <p class="text-gray-600 text-sm">Comprehensive program focusing on community health, epidemiology, health promotion, disease prevention, and health policy. Students learn to address public health challenges at local and global levels.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-clock text-red-600"></i> Duration</h4>
                        <p class="text-gray-600 text-sm">4 Years (8 Semesters) - Full Time</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-tasks text-red-600"></i> Program Structure</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Epidemiology & Biostatistics</li>
                            <li>Health Promotion & Education</li>
                            <li>Environmental Health</li>
                            <li>Health Policy & Management</li>
                            <li>Research Methods & Community Projects</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-graduation-cap text-red-600"></i> Entry Requirements</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>MSCE with 6 credits including English, Maths, Biology</li>
                            <li>Minimum grade of C in required subjects</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-briefcase text-red-600"></i> Career Opportunities</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Public Health Officer</li>
                            <li>Epidemiologist</li>
                            <li>Health Program Manager</li>
                            <li>NGO Health Coordinator</li>
                            <li>Health Policy Analyst</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t flex gap-3">
                <button onclick="closeModal('modal6')" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 7: BSc in Psychotherapy (Generic) -->
<div id="modal7" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-comments text-xl"></i>
                <h3 class="text-xl font-bold">BSc in Psychotherapy (Psychosocial Counselling)</h3>
            </div>
            <button onclick="closeModal('modal7')" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-info-circle text-red-600"></i> Program Overview</h4>
                        <p class="text-gray-600 text-sm">Two exit points: Diploma in Psychosocial Counselling after 4 semesters, BSc in Psychotherapy after 8 semesters. Prepares students for professional counselling and psychotherapy practice.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-clock text-red-600"></i> Duration</h4>
                        <p class="text-gray-600 text-sm">4 Years (8 Semesters) - Full Time (Diploma exit after 2 years)</p>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-graduation-cap text-red-600"></i> Entry Requirements</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>MSCE with 6 credits including English and Mathematics</li>
                            <li>Minimum grade of C in English</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-briefcase text-red-600"></i> Career Opportunities</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Psychosocial Counsellor</li>
                            <li>Psychotherapist</li>
                            <li>School Counsellor</li>
                            <li>NGO Mental Health Coordinator</li>
                            <li>Private Practice Therapist</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t flex gap-3">
                <button onclick="closeModal('modal7')" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 8: Diploma in Clinical Medicine (Upgrading) -->
<div id="modal8" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-arrow-up text-xl"></i>
                <h3 class="text-xl font-bold">Diploma in Clinical Medicine (Upgrading)</h3>
            </div>
            <button onclick="closeModal('modal8')" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-info-circle text-red-600"></i> Program Overview</h4>
                        <p class="text-gray-600 text-sm">Upgrading program for qualified Medical Assistants with Certificate in Clinical Medicine. Bridges knowledge gaps and enhances clinical competencies to Diploma level.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-clock text-red-600"></i> Duration</h4>
                        <p class="text-gray-600 text-sm">2 Years (4 Semesters) - Full Time</p>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-graduation-cap text-red-600"></i> Entry Requirements</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Certificate in Clinical Medicine</li>
                            <li>Registered with Medical Council of Malawi</li>
                            <li>2 years work experience</li>
                            <li>MSCE with 6 credits</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t flex gap-3">
                <button onclick="closeModal('modal8')" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 9: BSc in Psychotherapy (Upgrading) -->
<div id="modal9" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-chalkboard-user text-xl"></i>
                <h3 class="text-xl font-bold">BSc in Psychotherapy - Upgrading</h3>
            </div>
            <button onclick="closeModal('modal9')" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-info-circle text-red-600"></i> Program Overview</h4>
                        <p class="text-gray-600 text-sm">Upgrading program for qualified Counsellors with Diploma in Psychosocial Counselling. Advanced training in psychotherapy techniques, mental health assessment, and therapeutic interventions.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-clock text-red-600"></i> Duration</h4>
                        <p class="text-gray-600 text-sm">2 Years (4 Semesters) - Full Time</p>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-graduation-cap text-red-600"></i> Entry Requirements</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Diploma in Psychosocial Counselling</li>
                            <li>2 years counselling experience</li>
                            <li>MSCE with 6 credits including English</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2"><i class="fas fa-briefcase text-red-600"></i> Career Opportunities</h4>
                        <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                            <li>Senior Psychotherapist</li>
                            <li>Counselling Supervisor</li>
                            <li>Mental Health Program Manager</li>
                            <li>Clinical Supervisor</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t flex gap-3">
                <button onclick="closeModal('modal9')" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
    }
    
    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    }
    
    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
        const modals = document.querySelectorAll('[id^="modal"]');
        modals.forEach(modal => {
            if (e.target === modal) {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });
    });
</script>

<!-- ADMISSIONS SECTION - Red Background -->
<section id="Enroll" class="py-16 px-4 md:px-16 bg-red-700">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <p class="text-red-200 font-semibold mb-2 uppercase tracking-wide">Join Us</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Admissions <span class="text-yellow-300">2026/2027</span></h2>
            <p class="text-red-100 max-w-2xl mx-auto">
                Take the first step towards your future career in healthcare. Apply now to join our community of excellence.
            </p>
        </div>

       <div class="grid md:grid-cols-2 gap-8">
    <!-- Online Application Card -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition">
        <div class="bg-red-800 px-6 py-4">
            <h3 class="text-xl font-bold text-white flex items-center gap-2">
                <i class="fas fa-globe"></i> Apply Online
            </h3>
        </div>
        <div class="p-6">
            <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                <i class="fas fa-laptop text-3xl text-red-600"></i>
            </div>
            <h4 class="text-lg font-bold text-gray-800 text-center mb-3">Online Application</h4>
            <p class="text-gray-600 text-sm text-center mb-4">
                Complete your application online in minutes. Upload required documents and submit digitally.
            </p>
            <ul class="text-sm text-gray-600 mb-6 space-y-2">
                <li class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-500 text-xs"></i>
                    <span>Easy step-by-step process</span>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-500 text-xs"></i>
                    <span>Upload documents directly</span>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-500 text-xs"></i>
                    <span>Track application status</span>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-500 text-xs"></i>
                    <span>Receive instant confirmation</span>
                </li>
            </ul>
            <button onclick="openApplicationModal()" class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2">
                <i class="fas fa-arrow-right"></i> Apply Online Now
            </button>
        </div>
    </div>

    <!-- Download Application Form Card -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition">
        <div class="bg-red-800 px-6 py-4">
            <h3 class="text-xl font-bold text-white flex items-center gap-2">
                <i class="fas fa-download"></i> Download Forms
            </h3>
        </div>
        <div class="p-6">
            <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                <i class="fas fa-file-pdf text-3xl text-red-600"></i>
            </div>
            <h4 class="text-lg font-bold text-gray-800 text-center mb-3">Application Forms</h4>
            <p class="text-gray-600 text-sm text-center mb-4">
                Download the application form, fill it manually, and submit to the admissions office.
            </p>
            <div class="space-y-3 mb-6">
                <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                        <span class="text-sm text-gray-700">Undergraduate Application Form</span>
                    </div>
                    <button onclick="downloadForm('undergraduate')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                        <i class="fas fa-download text-xs"></i> Download
                    </button>
                </div>
                <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                        <span class="text-sm text-gray-700">Postgraduate Application Form</span>
                    </div>
                    <button onclick="downloadForm('postgraduate')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                        <i class="fas fa-download text-xs"></i> Download
                    </button>
                </div>
                <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                        <span class="text-sm text-gray-700">International Student Form</span>
                    </div>
                    <button onclick="downloadForm('international')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                        <i class="fas fa-download text-xs"></i> Download
                    </button>
                </div>
                <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                        <span class="text-sm text-gray-700">Scholarship Application Form</span>
                    </div>
                    <button onclick="downloadForm('scholarship')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                        <i class="fas fa-download text-xs"></i> Download
                    </button>
                </div>
            </div>
            <div class="flex gap-3">
                <button onclick="downloadAllForms()" class="flex-1 bg-gray-800 text-white py-2 rounded-lg font-semibold hover:bg-gray-900 transition flex items-center justify-center gap-2 text-sm">
                    <i class="fas fa-download"></i> Download All
                </button>
                <button onclick="viewAllForms()" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2 text-sm">
                    <i class="fas fa-eye"></i> View Forms
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Dummy Application Form Modal -->
<div id="applicationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-file-alt text-xl"></i>
                <h3 class="text-xl font-bold">Online Application Form</h3>
            </div>
            <button onclick="closeApplicationModal()" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
           

            <!-- Application Fee Section -->
            <div class="bg-red-50 border-2 border-red-200 rounded-lg p-4 mb-5">
                <div class="flex items-center justify-between flex-wrap gap-3">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-receipt text-white text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Application Fee</p>
                            <p class="text-2xl font-bold text-red-600">MK 12,000</p>
                            <p class="text-xs text-gray-500">Non-refundable application processing fee</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-gray-600 mb-1">Payment Methods:</p>
                        <div class="flex gap-2">
                            <span class="bg-white px-2 py-1 rounded text-xs"><i class="fas fa-mobile-alt"></i> Airtel Money</span>
                            <span class="bg-white px-2 py-1 rounded text-xs"><i class="fas fa-mobile-alt"></i> TNM Mpamba</span>
                            <span class="bg-white px-2 py-1 rounded text-xs"><i class="fas fa-university"></i> Bank Deposit</span>
                        </div>
                    </div>
                </div>
            </div>

            <form id="applicationForm">
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-user text-red-500 text-xs mr-1"></i> Full Name *
                        </label>
                        <input type="text" id="fullName" required placeholder="Enter your full name" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-calendar-alt text-red-500 text-xs mr-1"></i> Date of Birth *
                        </label>
                        <input type="date" id="dob" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-envelope text-red-500 text-xs mr-1"></i> Email Address *
                        </label>
                        <input type="email" id="email" required placeholder="your.email@example.com" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-phone text-red-500 text-xs mr-1"></i> Phone Number *
                        </label>
                        <input type="tel" id="phone" required placeholder="+265 999 123 456" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-graduation-cap text-red-500 text-xs mr-1"></i> Program Applying For *
                    </label>
                    <select id="program" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                        <option value="">Select Program</option>
                        <option>Diploma in Clinical Medicine</option>
                        <option>BSc in Nursing and Midwifery</option>
                        <option>BSc in Clinical Medicine - Mental Health</option>
                        <option>BSc in Psychiatric Nursing</option>
                        <option>University Certificate in Nursing and Midwifery</option>
                        <option>Bachelor of Science in Public Health</option>
                    </select>
                </div>
                
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-certificate text-red-500 text-xs mr-1"></i> Highest Qualification *
                        </label>
                        <input type="text" id="qualification" required placeholder="e.g., MSCE, Diploma, Degree" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-calendar-check text-red-500 text-xs mr-1"></i> Year of Completion
                        </label>
                        <input type="text" id="completionYear" placeholder="e.g., 2022" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-file-pdf text-red-500 text-xs mr-1"></i> Upload Documents
                    </label>
                    <input type="file" id="documents" multiple 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 transition">
                    <p class="text-xs text-gray-500 mt-1">
                        <i class="fas fa-info-circle"></i> Upload academic certificates, national ID, and passport photo (PDF, JPG, PNG - Max 5MB each)
                    </p>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-money-bill-wave text-red-500 text-xs mr-1"></i> Payment Reference Number
                    </label>
                    <input type="text" id="paymentRef" placeholder="Enter payment reference number (e.g., ATR123456789)" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                    <p class="text-xs text-gray-500 mt-1">
                        <i class="fas fa-info-circle"></i> After paying MK 12,000 application fee, enter your transaction reference number
                    </p>
                </div>
                
                <div class="mb-5">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-comment text-red-500 text-xs mr-1"></i> Additional Information
                    </label>
                    <textarea id="additionalInfo" rows="3" placeholder="Any additional information you'd like to share (e.g., work experience, special needs, etc.)..." 
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition"></textarea>
                </div>
                
                <!-- Terms and Conditions -->
                <div class="mb-5">
                    <label class="flex items-start gap-2 cursor-pointer">
                        <input type="checkbox" id="termsCheckbox" required class="mt-1 w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">
                        <span class="text-sm text-gray-700">
                            I confirm that all information provided is accurate and complete. I understand that providing false information may lead to disqualification.
                        </span>
                    </label>
                </div>
                
                <div class="flex gap-3">
                    <button type="submit" class="flex-1 bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane"></i> Submit Application
                    </button>
                    <button type="button" onclick="closeApplicationModal()" class="flex-1 bg-gray-300 text-gray-700 py-3 rounded-lg font-semibold hover:bg-gray-400 transition">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Open application modal function
    function openApplicationModal() {
        const modal = document.getElementById('applicationModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
    
    // Close application modal function
    function closeApplicationModal() {
        const modal = document.getElementById('applicationModal');
        modal.classList.remove('flex');
        modal.classList.add('hidden');
        // Optional: Reset form when closing
        // document.getElementById('applicationForm').reset();
    }
    
    // Handle form submission (demo only)
    const applicationForm = document.getElementById('applicationForm');
    if (applicationForm) {
        applicationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values for demo
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const program = document.getElementById('program').value;
            const paymentRef = document.getElementById('paymentRef').value;
            const termsChecked = document.getElementById('termsCheckbox').checked;
            
            // Simple validation for demo
            if (!fullName || !email || !program) {
                alert('⚠️ Please fill in all required fields (*)\n\nThis is a demonstration form.');
                return;
            }
            
            if (!termsChecked) {
                alert('⚠️ Please accept the terms and conditions to continue.');
                return;
            }
            
            // Show success message
            alert(`🎓 Application Submitted (Demo)\n\n━━━━━━━━━━━━━━━━━━━━━━━━\n✅ Application Received!\n\n📝 Applicant: ${fullName}\n📧 Email: ${email}\n🎯 Program: ${program}\n💰 Application Fee: MK 12,000\n📋 Payment Ref: ${paymentRef || 'Not provided'}\n━━━━━━━━━━━━━━━━━━━━━━━━\n\n📢 This is a demonstration. No actual application has been submitted.\n\nFor real applications, please visit our admissions office.\n\nThank you for your interest in SJOGU! 🎓`);
            
            // Close modal after submission
            closeApplicationModal();
            
            // Reset form (optional)
            applicationForm.reset();
        });
    }
    
    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
        const modal = document.getElementById('applicationModal');
        if (e.target === modal) {
            closeApplicationModal();
        }
    });
</script>

<!-- Success Modal -->
<div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 text-center">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-check-circle text-3xl text-green-600"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Application Submitted!</h3>
        <p class="text-gray-600 mb-6">Thank you for applying. We will review your application and get back to you within 7-14 business days.</p>
        <button onclick="closeSuccessModal()" class="w-full bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">
            Close
        </button>
    </div>
</div>

<script>
    // Modal functions
    function openApplicationModal() {
        document.getElementById('applicationModal').classList.remove('hidden');
        document.getElementById('applicationModal').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    
    function closeApplicationModal() {
        document.getElementById('applicationModal').classList.add('hidden');
        document.getElementById('applicationModal').classList.remove('flex');
        document.body.style.overflow = '';
    }
    
    function openSuccessModal() {
        document.getElementById('successModal').classList.remove('hidden');
        document.getElementById('successModal').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    
    function closeSuccessModal() {
        document.getElementById('successModal').classList.add('hidden');
        document.getElementById('successModal').classList.remove('flex');
        document.body.style.overflow = '';
    }
    
    // Form submission handler
    document.getElementById('applicationForm')?.addEventListener('submit', function(e) {
        e.preventDefault();
        closeApplicationModal();
        openSuccessModal();
        // Reset form
        this.reset();
    });
    
    // Download functions (simulated)
    function downloadForm(formType) {
        alert(`Downloading ${formType} application form...\n\nIn a real implementation, this would download a PDF file.`);
    }
    
    function downloadAllForms() {
        alert('Downloading all application forms...\n\nIn a real implementation, this would download a ZIP file containing all forms.');
    }
    
    function viewAllForms() {
        alert('Viewing all forms...\n\nIn a real implementation, this would open a PDF viewer or show the forms.');
    }
</script>

        <!-- Additional Info -->
        <div class="mt-8 bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded">
            <div class="flex items-start gap-3">
                <i class="fas fa-info-circle text-yellow-600 mt-1"></i>
                <div>
                    <p class="text-sm text-gray-700">
                        <strong class="font-semibold">Application Deadline:</strong> May 31st, 2026
                    </p>
                    <p class="text-sm text-gray-600 mt-1">
                        For inquiries, contact admissions office: <strong>admissions@sjogu.edu</strong> or call <strong>+265 123 456 789</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Research Hub-->

<section id="research" class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-12 h-12 bg-red-100 rounded-xl mb-3">
                <i class="fas fa-flask text-red-600 text-xl"></i>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Research <span class="text-red-600">Hub</span></h2>
            <div class="w-16 h-0.5 bg-red-600 mx-auto rounded-full mb-3"></div>
            <p class="text-gray-500 max-w-2xl mx-auto text-sm">
                Advancing healthcare knowledge through innovative research and collaboration
            </p>
        </div>

        <!-- Research Stats Highlights -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
            <div class="bg-white rounded-lg p-3 text-center shadow-sm border border-gray-100">
                <i class="fas fa-file-alt text-red-600 text-xl mb-1"></i>
                <p class="text-lg font-bold text-gray-800">45+</p>
                <p class="text-gray-500 text-xs">Research Papers</p>
            </div>
            <div class="bg-white rounded-lg p-3 text-center shadow-sm border border-gray-100">
                <i class="fas fa-users text-red-600 text-xl mb-1"></i>
                <p class="text-lg font-bold text-gray-800">12+</p>
                <p class="text-gray-500 text-xs">Active Projects</p>
            </div>
            <div class="bg-white rounded-lg p-3 text-center shadow-sm border border-gray-100">
                <i class="fas fa-globe text-red-600 text-xl mb-1"></i>
                <p class="text-lg font-bold text-gray-800">8+</p>
                <p class="text-gray-500 text-xs">Collaborations</p>
            </div>
            <div class="bg-white rounded-lg p-3 text-center shadow-sm border border-gray-100">
                <i class="fas fa-chart-line text-red-600 text-xl mb-1"></i>
                <p class="text-lg font-bold text-gray-800">5+</p>
                <p class="text-gray-500 text-xs">Grants Funded</p>
            </div>
        </div>

        <!-- Research Areas by Department -->
        <div class="mb-8">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-gray-800">Research <span class="text-red-600">Departments</span></h3>
                <p class="text-gray-500 text-sm">Key research areas across our academic departments</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Department 1: Clinical Medicine -->
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition border-l-4 border-red-600">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-stethoscope text-red-600 text-lg"></i>
                        <h4 class="font-bold text-gray-800">Clinical Medicine</h4>
                    </div>
                    <p class="text-gray-600 text-xs leading-relaxed mb-2">
                        Infectious diseases, internal medicine, surgical innovations, and patient care optimization
                    </p>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Malaria Research</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">HIV/AIDS</span>
                    </div>
                </div>

                <!-- Department 2: Nursing and Midwifery -->
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition border-l-4 border-red-600">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-hand-holding-heart text-red-600 text-lg"></i>
                        <h4 class="font-bold text-gray-800">Nursing & Midwifery</h4>
                    </div>
                    <p class="text-gray-600 text-xs leading-relaxed mb-2">
                        Maternal health, neonatal care, nursing education, and community health nursing
                    </p>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Maternal Health</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Child Care</span>
                    </div>
                </div>

                <!-- Department 3: Psycho-Social Counselling -->
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition border-l-4 border-red-600">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-brain text-red-600 text-lg"></i>
                        <h4 class="font-bold text-gray-800">Psycho-Social Counselling</h4>
                    </div>
                    <p class="text-gray-600 text-xs leading-relaxed mb-2">
                        Mental health, trauma counselling, substance abuse, and community psychosocial support
                    </p>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Mental Health</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Trauma Care</span>
                    </div>
                </div>

                <!-- Department 4: Public Health -->
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition border-l-4 border-red-600">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-chart-bar text-red-600 text-lg"></i>
                        <h4 class="font-bold text-gray-800">Public Health</h4>
                    </div>
                    <p class="text-gray-600 text-xs leading-relaxed mb-2">
                        Epidemiology, health promotion, disease prevention, and health policy research
                    </p>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Epidemiology</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Health Policy</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Research Projects -->
        <div class="mb-8">
            <div class="text-center mb-5">
                <h3 class="text-xl font-bold text-gray-800">Featured <span class="text-red-600">Research</span></h3>
                <div class="w-12 h-0.5 bg-red-600 mx-auto mt-1 rounded-full"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-white rounded-lg p-3 shadow-sm">
                    <div class="flex items-start gap-2">
                        <i class="fas fa-microscope text-red-600 text-base mt-0.5"></i>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-sm">Malaria Prevention in Rural Communities</h4>
                            <p class="text-gray-500 text-xs mt-1">Department of Public Health</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-3 shadow-sm">
                    <div class="flex items-start gap-2">
                        <i class="fas fa-heartbeat text-red-600 text-base mt-0.5"></i>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-sm">Maternal Mortality Reduction</h4>
                            <p class="text-gray-500 text-xs mt-1">Dept of Nursing & Midwifery</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-3 shadow-sm">
                    <div class="flex items-start gap-2">
                        <i class="fas fa-hand-holding-heart text-red-600 text-base mt-0.5"></i>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-sm">Youth Mental Health Awareness</h4>
                            <p class="text-gray-500 text-xs mt-1">Dept of Psycho-Social Counselling</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View More Button (Non-functional) -->
        <div class="text-center">
            <a href="#" id="viewMoreResearchBtn" class="inline-flex items-center gap-2 bg-red-600 text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-red-700 transition shadow-md">
                <i class="fas fa-search"></i>
                View More Research
                <i class="fas fa-arrow-right text-sm"></i>
            </a>
           
        </div>
    </div>
</section>

<!-- Simple Alert Script for View More Button -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const viewMoreBtn = document.getElementById('viewMoreResearchBtn');
        if (viewMoreBtn) {
            viewMoreBtn.addEventListener('click', function(e) {
                e.preventDefault();
                alert('Research Hub - Demo Version\n\nThis is a demonstration. The full research repository will be available soon.\n\nDepartments:\n• Clinical Medicine\n• Nursing and Midwifery\n• Psycho-Social Counselling\n• Public Health');
            });
        }
    });
</script>









<!-- STUDENT SECTION -->
<section id="students" class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">For Current Students</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Student <span class="text-red-600">Life</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Everything you need for a successful and enjoyable university experience
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-12">
            <!-- Left: Picture -->
            <div class="relative">
                <img src="{{ asset('images/students_2.jpeg') }}" alt="Students on campus" class="rounded-lg shadow-xl w-full h-[400px] object-cover">
                <div class="absolute -bottom-5 -left-5 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg">
                    <p class="text-2xl font-bold">3,000+</p>
                    <p class="text-sm">Active Students</p>
                </div>
            </div>

            <!-- Right: Quick Access -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Quick Access</h3>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <a href="{{ route('portal.login') }}" class="bg-white rounded-lg p-4 text-center hover:shadow-md transition border border-gray-100">
                        <i class="fas fa-user-graduate text-red-600 text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-800 text-sm">Student Portal</p>
                    </a>
                    <a href="#" class="bg-white rounded-lg p-4 text-center hover:shadow-md transition border border-gray-100">
                        <i class="fas fa-calendar-alt text-red-600 text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-800 text-sm">Academic Calendar</p>
                    </a>
                    <a href="#" class="bg-white rounded-lg p-4 text-center hover:shadow-md transition border border-gray-100">
                        <i class="fas fa-book text-red-600 text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-800 text-sm">E-Learning</p>
                    </a>
                    <a href="#" class="bg-white rounded-lg p-4 text-center hover:shadow-md transition border border-gray-100">
                        <i class="fas fa-credit-card text-red-600 text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-800 text-sm">Fee Payment</p>
                    </a>
                </div>
                <div class="bg-white rounded-lg p-5 border border-gray-100">
                    <div class="flex items-center gap-3 mb-3">
                        <i class="fas fa-headset text-red-600 text-xl"></i>
                        <span class="font-semibold text-gray-800">Need Help?</span>
                    </div>
                    <p class="text-gray-600 text-sm">Contact Student Affairs Office: <strong>+265 123 456 789</strong></p>
                    <p class="text-gray-600 text-sm mt-1">Email: <strong>students@sjogu.edu</strong></p>
                </div>
            </div>
        </div>

        <!-- Three Main Sections: Accommodation, Student Council, Things to Do -->
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <!-- Accommodation -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('images/Accomodation.jpg') }}" alt="Student Accommodation" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <i class="fas fa-home text-red-600 text-xl"></i>
                        <h3 class="text-xl font-bold text-gray-800">Accommodation</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Comfortable and affordable on-campus housing with modern amenities. Safe and conducive environment for learning.</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Single & Shared Rooms</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> 24/7 Security</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Common Areas & Study Rooms</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Affordable Rates</li>
                    </ul>
                    <a href="#" class="text-red-600 font-semibold text-sm hover:underline inline-flex items-center gap-1">
                        Apply for Accomodation <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Student Council -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('images/students_council.jpg') }}" alt="Student Council" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <i class="fas fa-users text-red-600 text-xl"></i>
                        <h3 class="text-xl font-bold text-gray-800">Student Council</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Your voice matters! The Student Council represents student interests and organizes campus activities.</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Student Representatives</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Monthly Meetings</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Event Planning</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Student Welfare</li>
                    </ul>
                    <a href="#" class="text-red-600 font-semibold text-sm hover:underline inline-flex items-center gap-1">
                        Meet Your Representatives <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Things to Do -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('images/sports.jpeg') }}" alt="Things to Do" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <i class="fas fa-calendar-week text-red-600 text-xl"></i>
                        <h3 class="text-xl font-bold text-gray-800">Things to Do</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Explore campus life beyond the classroom. Join clubs, attend events, and make lasting memories.</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Sports & Recreation</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Cultural Events</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Student Clubs (20+)</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Weekly Social Events</li>
                    </ul>
                    <a href="#" class="text-red-600 font-semibold text-sm hover:underline inline-flex items-center gap-1">
                        View Activities <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional Student Resources -->
        <div class="grid md:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition">
                <i class="fas fa-futbol text-red-600 text-2xl mb-2"></i>
                <p class="font-medium text-gray-800 text-sm">Sports</p>
            </div>
            <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition">
                <i class="fas fa-music text-red-600 text-2xl mb-2"></i>
                <p class="font-medium text-gray-800 text-sm">Music & Arts</p>
            </div>
            <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition">
                <i class="fas fa-handshake text-red-600 text-2xl mb-2"></i>
                <p class="font-medium text-gray-800 text-sm">Volunteer Programs</p>
            </div>
            <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition">
                <i class="fas fa-church text-red-600 text-2xl mb-2"></i>
                <p class="font-medium text-gray-800 text-sm">Chaplaincy</p>
            </div>
        </div>
    </div>
</section>


<!-- LIBRARY SECTION -->
<section id="library" class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">Knowledge Hub</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">The Miles Crofton <span class="text-red-600">Library</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Your gateway to knowledge, research, and academic excellence
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left: Image -->
            <div class="relative">
                <img src="{{ asset('images/library.jpeg') }}" alt="The Miles Crofton Library" class="rounded-lg shadow-xl w-full h-[400px] object-cover">
                <div class="absolute -bottom-5 -right-5 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg">
                    <p class="text-2xl font-bold">20,000+</p>
                    <p class="text-sm">Books & Resources</p>
                </div>
            </div>

            <!-- Right: Content -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Discover The Miles Crofton Library</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    The Miles Crofton Library at St John of God University is a modern, well-equipped facility named in honor of a distinguished benefactor. Designed to support your academic journey, it offers thousands of books, journals, and digital resources in a conducive environment for learning and research.
                </p>
                
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-book text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Print Books</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-laptop text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">E-Resources</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-journal-whills text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Journals</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-wifi text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Free Wi-Fi</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-clock text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Extended Hours</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-users text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Study Rooms</span>
                    </div>
                </div>

                <a href="#" class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition">
                    Explore Library Resources →
                </a>
            </div>
        </div>

        <!-- Library Services -->
        <div class="grid md:grid-cols-3 gap-6 mt-12">
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-search text-red-600 text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800 mb-2">Online Catalog</h4>
                <p class="text-gray-600 text-sm">Search our digital catalog for books, journals, and research materials</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-database text-red-600 text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800 mb-2">Digital Archives</h4>
                <p class="text-gray-600 text-sm">Access past exam papers, thesis, and institutional repositories</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chalkboard-user text-red-600 text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800 mb-2">Research Support</h4>
                <p class="text-gray-600 text-sm">Get help from our librarians for your research projects</p>
            </div>
        </div>

        <!-- Library Hours -->
        <div class="mt-12 bg-white rounded-lg shadow-md p-6">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-gray-800">Library Hours</h3>
                <p class="text-sm text-gray-500 mt-1">The Miles Crofton Library</p>
            </div>
            <div class="grid md:grid-cols-2 gap-4 max-w-2xl mx-auto">
                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-gray-600">Monday - Friday</span>
                    <span class="font-semibold text-gray-800">8:00 AM - 10:00 PM</span>
                </div>
                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-gray-600">Saturday</span>
                    <span class="font-semibold text-gray-800">9:00 AM - 6:00 PM</span>
                </div>
                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-gray-600">Sunday</span>
                    <span class="font-semibold text-gray-800">2:00 PM - 8:00 PM</span>
                </div>
                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-gray-600">Public Holidays</span>
                    <span class="font-semibold text-gray-800">Closed</span>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="text-sm text-gray-500">
                    <i class="fas fa-phone-alt mr-2"></i> Library Help Desk: +265 123 456 789
                </p>
            </div>
        </div>
    </div>
</section>

<!--University Partner-->
<section id="partners" class="py-16 px-4 md:px-16 bg-red-700">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-12 h-12 bg-white/20 rounded-2xl mb-3">
                <i class="fas fa-handshake text-white text-xl"></i>
            </div>
            <p class="text-red-100 font-semibold mb-2 uppercase tracking-wide">Our Collaborators</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Trusted <span class="text-yellow-300">Partners</span></h2>
            <div class="w-20 h-1 bg-yellow-300 mx-auto rounded-full"></div>
            <p class="text-red-100 max-w-2xl mx-auto mt-3">
                Working together to advance healthcare education and research
            </p>
        </div>

        <!-- Partners Grid - Centered -->
        <div class="flex justify-center">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 xl:grid-cols-6 gap-4 md:gap-6 max-w-7xl">
                
                <!-- Partner 1 - CHAM -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/christian health association.jpeg') }}" 
                             alt="CHAM"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">CHAM</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Christian Health Association</p>
                </div>

                <!-- Partner 2 - Seed Global Health -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/seed health.jpeg') }}" 
                             alt="Seed Global Health"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">Seed Global Health</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Health Workforce</p>
                </div>

                <!-- Partner 3 - GAIA -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/Global health.jpeg') }}" 
                             alt="GAIA"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">GAIA</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Global Health</p>
                </div>

                <!-- Partner 4 - Uniservitate -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/service_learning.png') }}" 
                             alt="Uniservitate"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">Uniservitate</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Service Learning</p>
                </div>

                <!-- Partner 5 - Medic to Medic -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/medic to medic.jpeg') }}" 
                             alt="Medic to Medic"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">Medic to Medic</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Medical Education Support</p>
                </div>

                <!-- Partner 6 - Book Aid International -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/book_aid.jpeg') }}" 
                             alt="Book Aid International"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">Book Aid International</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Library Resources</p>
                </div>

            </div>
        </div>

        <!-- Additional Text -->
        <div class="text-center mt-10">
            <p class="text-sm text-red-100">
                <i class="fas fa-plus-circle text-yellow-300 text-xs mr-1"></i>
                More partnerships are being established to enhance our academic programs
            </p>
        </div>
    </div>
</section>

<!--Allumin Section -->

<section id="alumni" class="py-12 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <!-- Section Header - Compact -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-10 h-10 bg-red-50 rounded-xl mb-2">
                <i class="fas fa-users text-red-600 text-lg"></i>
            </div>
            <p class="text-red-600 font-semibold mb-1 text-sm uppercase tracking-wide">Our Community</p>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Alumni <span class="text-red-600">Network</span></h2>
            <div class="w-16 h-0.5 bg-red-600 mx-auto rounded-full"></div>
            <p class="text-gray-500 text-sm max-w-2xl mx-auto mt-2">
                Connecting graduates making a difference in healthcare across Malawi and beyond
            </p>
        </div>

        <!-- Stats Row - More Compact -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="text-center bg-gray-50 rounded-xl p-3 hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-1">
                    <i class="fas fa-user-graduate text-red-600 text-base"></i>
                </div>
                <p class="text-xl md:text-2xl font-bold text-gray-800">3,000+</p>
                <p class="text-gray-500 text-xs">Alumni Members</p>
            </div>
            <div class="text-center bg-gray-50 rounded-xl p-3 hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-1">
                    <i class="fas fa-globe-africa text-red-600 text-base"></i>
                </div>
                <p class="text-xl md:text-2xl font-bold text-gray-800">15+</p>
                <p class="text-gray-500 text-xs">Countries</p>
            </div>
            <div class="text-center bg-gray-50 rounded-xl p-3 hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-1">
                    <i class="fas fa-calendar-alt text-red-600 text-base"></i>
                </div>
                <p class="text-xl md:text-2xl font-bold text-gray-800">20+</p>
                <p class="text-gray-500 text-xs">Years</p>
            </div>
            <div class="text-center bg-gray-50 rounded-xl p-3 hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-1">
                    <i class="fas fa-chalkboard-user text-red-600 text-base"></i>
                </div>
                <p class="text-xl md:text-2xl font-bold text-gray-800">85%</p>
                <p class="text-gray-500 text-xs">Employed</p>
            </div>
        </div>

        <!-- Featured Alumni - 2 columns instead of 3 for compactness -->
        <div class="mb-8">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-gray-800">Featured <span class="text-red-600">Alumni</span></h3>
                <div class="w-12 h-0.5 bg-red-600 mx-auto mt-1 rounded-full"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-5">
                <!-- Alumni 1 -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
                    <div class="w-28 h-28 flex-shrink-0">
                        <img src="{{ asset('images/alumni1.jpg') }}" 
                             alt="Alumni"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <i class="fas fa-quote-left text-red-500 text-xs"></i>
                            <p class="text-gray-500 text-xs">Class of 2018</p>
                        </div>
                        <h4 class="text-base font-bold text-gray-800 mb-0.5">Dr. Sarah Mwale</h4>
                        <p class="text-red-600 text-xs mb-1">Senior Clinical Officer</p>
                        <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                            "SJOGU gave me the foundation and confidence to excel in my career."
                        </p>
                    </div>
                </div>

                <!-- Alumni 2 -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
                    <div class="w-28 h-28 flex-shrink-0">
                        <img src="{{ asset('images/alumni2.jpg') }}" 
                             alt="Alumni"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <i class="fas fa-quote-left text-red-500 text-xs"></i>
                            <p class="text-gray-500 text-xs">Class of 2019</p>
                        </div>
                        <h4 class="text-base font-bold text-gray-800 mb-0.5">John Banda</h4>
                        <p class="text-red-600 text-xs mb-1">Public Health Specialist</p>
                        <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                            "The holistic education at SJOGU shaped my approach to community health."
                        </p>
                    </div>
                </div>

                <!-- Alumni 3 -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
                    <div class="w-28 h-28 flex-shrink-0">
                        <img src="{{ asset('images/alumni3.jpg') }}" 
                             alt="Alumni"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <i class="fas fa-quote-left text-red-500 text-xs"></i>
                            <p class="text-gray-500 text-xs">Class of 2020</p>
                        </div>
                        <h4 class="text-base font-bold text-gray-800 mb-0.5">Grace Phiri</h4>
                        <p class="text-red-600 text-xs mb-1">Nurse Educator</p>
                        <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                            "Returning as an educator after graduating from SJOGU feels like coming home."
                        </p>
                    </div>
                </div>

                <!-- Alumni 4 - Added to balance -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
                    <div class="w-28 h-28 flex-shrink-0">
                        <img src="{{ asset('images/alumni4.jpg') }}" 
                             alt="Alumni"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <i class="fas fa-quote-left text-red-500 text-xs"></i>
                            <p class="text-gray-500 text-xs">Class of 2017</p>
                        </div>
                        <h4 class="text-base font-bold text-gray-800 mb-0.5">Dr. Michael Chirwa</h4>
                        <p class="text-red-600 text-xs mb-1">Medical Director</p>
                        <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                            "SJOGU alumni network has been instrumental in my professional growth."
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alumni Benefits - More compact -->
        <div class="mb-8">
            <div class="text-center mb-5">
                <h3 class="text-xl font-bold text-gray-800">Alumni <span class="text-red-600">Benefits</span></h3>
                <div class="w-12 h-0.5 bg-red-600 mx-auto mt-1 rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="text-center p-2 bg-red-50 rounded-lg hover:bg-red-100 transition">
                    <i class="fas fa-handshake text-red-600 text-lg mb-1"></i>
                    <p class="font-semibold text-gray-800 text-xs">Networking</p>
                </div>
                <div class="text-center p-2 bg-red-50 rounded-lg hover:bg-red-100 transition">
                    <i class="fas fa-chalkboard-user text-red-600 text-lg mb-1"></i>
                    <p class="font-semibold text-gray-800 text-xs">Education</p>
                </div>
                <div class="text-center p-2 bg-red-50 rounded-lg hover:bg-red-100 transition">
                    <i class="fas fa-briefcase text-red-600 text-lg mb-1"></i>
                    <p class="font-semibold text-gray-800 text-xs">Career</p>
                </div>
                <div class="text-center p-2 bg-red-50 rounded-lg hover:bg-red-100 transition">
                    <i class="fas fa-newspaper text-red-600 text-lg mb-1"></i>
                    <p class="font-semibold text-gray-800 text-xs">Newsletter</p>
                </div>
            </div>
        </div>

        <!-- CTA Buttons - Compact -->
        <div class="bg-red-700 rounded-xl p-5 text-center">
            <h3 class="text-xl font-bold text-white mb-2">Stay Connected</h3>
            <p class="text-red-100 text-sm mb-4 max-w-xl mx-auto">
                Join our growing alumni network and shape the future of healthcare
            </p>
            <div class="flex flex-wrap gap-3 justify-center">
                <a href="#" id="registerAlumniBtn" class="bg-white text-red-600 px-5 py-2 rounded-lg font-semibold hover:bg-gray-100 transition flex items-center gap-2 text-sm">
                    <i class="fas fa-user-plus"></i> Register
                </a>
                <a href="#" id="whatsappBtn" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg font-semibold transition flex items-center gap-2 text-sm shadow-md">
                    <i class="fab fa-whatsapp"></i> Join WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Alumni Registration Popup Modal (Compact) -->
<div id="alumniModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl max-w-md w-full mx-4 transform transition-all duration-300">
        <!-- Modal Header -->
        <div class="bg-red-600 text-white rounded-t-xl px-5 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <i class="fas fa-user-graduate"></i>
                    <h3 class="font-bold">Alumni Registration</h3>
                </div>
                <button id="closeModalBtn" class="text-white hover:text-gray-200 text-2xl leading-none">&times;</button>
            </div>
            <p class="text-red-100 text-xs mt-1">Demo Version - No data saved</p>
        </div>
        
        <!-- Modal Body -->
        <div class="p-5">
            <form id="alumniForm">
                <div class="grid grid-cols-2 gap-3">
                    <div class="mb-3 col-span-2">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-user text-gray-400 text-xs mr-1"></i> Full Name *
                        </label>
                        <input type="text" id="fullName" placeholder="Enter full name" 
                            class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-envelope text-gray-400 text-xs mr-1"></i> Email *
                        </label>
                        <input type="email" id="email" placeholder="Email address" 
                            class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-phone text-gray-400 text-xs mr-1"></i> Phone
                        </label>
                        <input type="tel" id="phone" placeholder="Phone number" 
                            class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-calendar-alt text-gray-400 text-xs mr-1"></i> Grad Year
                        </label>
                        <select id="gradYear" class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                            <option value="">Select year</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-graduation-cap text-gray-400 text-xs mr-1"></i> Program
                        </label>
                        <select id="program" class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                            <option value="">Select program</option>
                            <option>Bachelor of Medicine</option>
                            <option>Bachelor of Nursing</option>
                            <option>Bachelor of Public Health</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-xs font-medium text-gray-700 mb-1">
                        <i class="fas fa-briefcase text-gray-400 text-xs mr-1"></i> Occupation
                    </label>
                    <input type="text" id="occupation" placeholder="Current job title" 
                        class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                </div>
                
                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2 text-sm">
                    <i class="fas fa-paper-plane"></i> Register (Demo)
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Success Toast -->
<div id="successToast" class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg hidden items-center gap-2 z-50 text-sm">
    <i class="fas fa-check-circle"></i>
    <div>
        <p class="font-semibold">Registration Successful!</p>
        <p class="text-xs opacity-90">Thank you for joining</p>
    </div>
</div>

<script>
    const modal = document.getElementById('alumniModal');
    const registerBtn = document.getElementById('registerAlumniBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const alumniForm = document.getElementById('alumniForm');
    const successToast = document.getElementById('successToast');
    const whatsappBtn = document.getElementById('whatsappBtn');
    
    registerBtn.addEventListener('click', function(e) {
        e.preventDefault();
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
    
    function closeModal() {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }
    
    closeModalBtn.addEventListener('click', closeModal);
    
    modal.addEventListener('click', function(e) {
        if (e.target === modal) closeModal();
    });
    
    alumniForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const fullName = document.getElementById('fullName').value;
        const email = document.getElementById('email').value;
        
        if (!fullName || !email) {
            alert('Please fill in name and email');
            return;
        }
        
        successToast.classList.remove('hidden');
        setTimeout(() => successToast.classList.add('hidden'), 3000);
        alumniForm.reset();
        closeModal();
    });
    
    whatsappBtn.addEventListener('click', function(e) {
        e.preventDefault();
        alert('Demo: WhatsApp group link would open here');
    });
</script>















<!-- FOOTER WITH CONTACT INFO -->
<footer id="contact" class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-12">
        <!-- Contact Information Section -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Get In <span class="text-red-400">Touch</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">
                Have questions? We're here to help. Reach out to us through any of the channels below.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <!-- Phone -->
            <div class="text-center">
                <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone-alt text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Phone</h3>
                <p class="text-gray-400 text-sm">+265 123 456 789</p>
                <p class="text-gray-400 text-sm">+265 987 654 321</p>
            </div>

            <!-- Email -->
            <div class="text-center">
                <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-envelope text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Email</h3>
                <p class="text-gray-400 text-sm">info@sjogu.edu</p>
                <p class="text-gray-400 text-sm">admissions@sjogu.edu</p>
            </div>

            <!-- Location -->
            <div class="text-center">
                <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Location</h3>
                <p class="text-gray-400 text-sm">St John of God University</p>
                <p class="text-gray-400 text-sm">Mzuzu, Malawi</p>
            </div>
        </div>

        <!-- Footer Links -->
        <div class="grid md:grid-cols-4 gap-8 py-8 border-t border-gray-800">
            <div>
                <h4 class="text-lg font-semibold mb-4 text-red-400">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Academic Programs</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Admissions</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Research</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-red-400">Resources</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Student Portal</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Staff Portal</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Library</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">E-Learning</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-red-400">Support</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">FAQs</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Help Desk</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Student Support</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">IT Support</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-red-400">Follow Us</h4>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <div class="mt-4">
                    <p class="text-sm text-gray-400 mb-2">Subscribe to Newsletter</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="flex-1 px-3 py-2 rounded-l-md text-gray-900 text-sm">
                        <button class="bg-red-600 px-4 py-2 rounded-r-md hover:bg-red-700 transition">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-8 pt-6 text-center text-sm text-gray-500">
            <p>&copy; 2024 St John of God University. All rights reserved.</p>
        </div>
    </div>
</footer>


    

  
   

   

    <script>

        // Function to close mobile menu

        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
        }
        
        // Mobile Menu Toggle
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');
        const closeMenu = document.getElementById('closeMenu');
        
        hamburgerBtn?.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            overlay.classList.add('active');
        });
        
        function closeMenuFunc() {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
        }
        
        closeMenu?.addEventListener('click', closeMenuFunc);
        overlay?.addEventListener('click', closeMenuFunc);
        
        // Smooth scroll and close mobile menu for all mobile navigation links
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId && targetId !== '#') {
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        // Close mobile menu
                        closeMenuFunc();
                        // Scroll to element with offset for sticky header
                        const offset = 80;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - offset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
        
        // Smooth scroll for desktop navigation links
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId && targetId !== '#') {
                    e.preventDefault();
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        const offset = 80;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - offset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
        
        

                //modal js
                function openModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }
}

            function closeModal(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    document.body.style.overflow = '';
                }
            }

// Close modal when clicking outside
window.onclick = function(event) {
    const modals = document.querySelectorAll('[id^="modal"]');
    modals.forEach(modal => {
        if (event.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    });
}
    </script>


    <script>

        // Carousel

            let currentSlide = 0;
            const slides = document.querySelectorAll('.carousel-slide');
            const dots = document.querySelectorAll('.dot');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            if (slides.length > 0) {
                function showSlide(index) {
                    slides.forEach((slide, i) => {
                        slide.classList.toggle('active', i === index);
                    });
                    dots.forEach((dot, i) => {
                        dot.style.opacity = i === index ? '1' : '0.5';
                    });
                    currentSlide = index;
                }
                
                function nextSlide() {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                }
                
                function prevSlide() {
                    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                    showSlide(currentSlide);
                }
                
                prevBtn?.addEventListener('click', prevSlide);
                nextBtn?.addEventListener('click', nextSlide);
                
                dots.forEach((dot, i) => {
                    dot.addEventListener('click', () => showSlide(i));
                });
                
                // Auto play
                setInterval(nextSlide, 5000);
            }

            // Highlight active navigation link based on scroll position
            const sections = document.querySelectorAll('section[id]');

            function updateActiveNav() {
                const scrollPosition = window.scrollY + 100;
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionBottom = sectionTop + section.offsetHeight;
                    const sectionId = section.getAttribute('id');
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                        document.querySelectorAll('.nav-link').forEach(link => {
                            link.classList.remove('nav-active');
                            if (link.getAttribute('href') === `#${sectionId}`) {
                                link.classList.add('nav-active');
                            }
                        });
                    }
                });
            }

            window.addEventListener('scroll', updateActiveNav);
            updateActiveNav();

    </script>



<style>
    /* Chatbot Floating Button */
    .chatbot-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        z-index: 1000;
    }
    
    .chatbot-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.3);
    }
    
    .chatbot-btn i {
        font-size: 28px;
        color: white;
    }
    
    /* Tooltip/Prompt */
    .chatbot-prompt {
        position: fixed;
        bottom: 100px;
        right: 30px;
        background: white;
        padding: 12px 18px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        font-size: 14px;
        font-weight: 500;
        color: #333;
        white-space: nowrap;
        z-index: 999;
        animation: pulse 2s infinite;
        border-left: 4px solid #dc2626;
    }
    
    .chatbot-prompt:after {
        content: '';
        position: absolute;
        bottom: -10px;
        right: 20px;
        border-width: 10px 10px 0 10px;
        border-style: solid;
        border-color: white transparent transparent transparent;
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: translateY(0);
            opacity: 1;
        }
        50% {
            transform: translateY(-5px);
            opacity: 0.9;
        }
    }
    
    /* Chatbot Modal */
    .chatbot-modal {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 350px;
        max-width: calc(100vw - 60px);
        background: white;
        border-radius: 20px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        z-index: 1001;
        display: none;
        flex-direction: column;
        overflow: hidden;
        animation: slideUp 0.3s ease;
    }
    
    .chatbot-modal.active {
        display: flex;
    }
    
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .chatbot-header {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .chatbot-header h3 {
        font-size: 16px;
        font-weight: 600;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .chatbot-header h3 i {
        font-size: 20px;
    }
    
    .chatbot-close {
        background: rgba(255,255,255,0.2);
        border: none;
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .chatbot-close:hover {
        background: rgba(255,255,255,0.3);
        transform: rotate(90deg);
    }
    
    .chatbot-body {
        padding: 20px;
        max-height: 350px;
        overflow-y: auto;
    }
    
    .faq-item {
        margin-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 12px;
    }
    
    .faq-question {
        font-weight: 600;
        color: #333;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        margin-bottom: 8px;
    }
    
    .faq-question i {
        color: #dc2626;
        font-size: 12px;
        transition: transform 0.3s;
    }
    
    .faq-question.active i {
        transform: rotate(90deg);
    }
    
    .faq-answer {
        color: #666;
        font-size: 13px;
        line-height: 1.5;
        padding-left: 24px;
        display: none;
    }
    
    .faq-answer.show {
        display: block;
    }
    
    /* Chat Input Section */
    .chatbot-input-section {
        padding: 15px 20px 20px 20px;
        border-top: 1px solid #e5e7eb;
        background-color: #ffffff;
    }
    
    .demo-notice {
        background-color: #fef3c7;
        border-left: 4px solid #f59e0b;
        padding: 8px 12px;
        margin-bottom: 12px;
        border-radius: 8px;
    }
    
    .demo-notice p {
        font-size: 11px;
        color: #92400e;
        margin: 0;
    }
    
    .demo-notice i {
        margin-right: 6px;
    }
    
    .chatbot-input-wrapper {
        display: flex;
        gap: 10px;
        align-items: center;
    }
    
    .chatbot-input-wrapper input {
        flex: 1;
        padding: 10px 12px;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        font-size: 13px;
        outline: none;
        transition: all 0.3s;
    }
    
    .chatbot-input-wrapper input:focus {
        border-color: #dc2626;
        box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
    }
    
    .chatbot-input-wrapper input::placeholder {
        color: #9ca3af;
        font-size: 12px;
    }
    
    .send-btn {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        border: none;
        color: white;
        padding: 10px 16px;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 500;
    }
    
    .send-btn:hover {
        transform: scale(1.02);
        background: linear-gradient(135deg, #b91c1c, #991b1b);
    }
    
    .demo-hint {
        text-align: center;
        margin-top: 10px;
        font-size: 10px;
        color: #9ca3af;
    }
    
    .demo-hint i {
        margin-right: 4px;
    }
    
    .chatbot-footer {
        padding: 15px 20px;
        border-top: 1px solid #f0f0f0;
        background: #fafafa;
        font-size: 12px;
        color: #999;
        text-align: center;
    }
    
    /* Overlay for mobile */
    .chatbot-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 1000;
        display: none;
    }
    
    .chatbot-overlay.active {
        display: block;
    }
    
    @media (max-width: 640px) {
        .chatbot-modal {
            width: calc(100vw - 40px);
            right: 20px;
            bottom: 90px;
        }
        .chatbot-prompt {
            display: none;
        }
        .chatbot-body {
            max-height: 300px;
        }
    }
</style>

<!-- Floating Chatbot Button -->
<div class="chatbot-btn" id="chatbotBtn">
    <i class="fas fa-comment-dots"></i>
</div>

<!-- Chatbot Prompt/Tooltip -->
<div class="chatbot-prompt" id="chatbotPrompt">
    <i class="fas fa-robot text-red-600 mr-2"></i> How may I assist you today?
</div>

<!-- Chatbot Modal -->
<div class="chatbot-modal" id="chatbotModal">
    <div class="chatbot-header">
        <h3>
            <i class="fas fa-headset"></i>
            SJOGU Assistant
        </h3>
        <button class="chatbot-close" id="chatbotCloseBtn">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="chatbot-body">
        <div class="mb-4 text-center">
            <i class="fas fa-robot text-4xl text-red-600 mb-2"></i>
            <p class="text-gray-600 text-sm">Hello! I'm your virtual assistant. Here are some frequently asked questions:</p>
        </div>
        
        <!-- FAQ 1 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="1">
                <i class="fas fa-chevron-right"></i>
                When are the application deadlines?
            </div>
            <div class="faq-answer" data-answer="1">
                Applications for the 2025/2026 academic year close on <strong>May 31st, 2026</strong>. Late applications may be considered on a case-by-case basis.
            </div>
        </div>
        
        <!-- FAQ 2 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="2">
                <i class="fas fa-chevron-right"></i>
                What programs are offered at SJOGU?
            </div>
            <div class="faq-answer" data-answer="2">
                We offer programs in Clinical Medicine, Nursing and Midwifery, Psycho-Social Counselling, and Public Health. Both generic and upgrading programs are available.
            </div>
        </div>
        
        <!-- FAQ 3 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="3">
                <i class="fas fa-chevron-right"></i>
                How do I apply for admission?
            </div>
            <div class="faq-answer" data-answer="3">
                You can apply online through our Admissions section or download the application form and submit it to the admissions office along with required documents.
            </div>
        </div>
        
        <!-- FAQ 4 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="4">
                <i class="fas fa-chevron-right"></i>
                What are the entry requirements?
            </div>
            <div class="faq-answer" data-answer="4">
                Generic programs require MSCE with 6 credits including English, Mathematics, Biology, Physics, and Chemistry. Upgrading programs require a Diploma in a relevant field.
            </div>
        </div>
        
        <!-- FAQ 5 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="5">
                <i class="fas fa-chevron-right"></i>
                Is there accommodation available?
            </div>
            <div class="faq-answer" data-answer="5">
                Yes, we offer comfortable on-campus accommodation with single and shared rooms, 24/7 security, and common study areas.
            </div>
        </div>
        
        <!-- FAQ 6 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="6">
                <i class="fas fa-chevron-right"></i>
                How can I contact the admissions office?
            </div>
            <div class="faq-answer" data-answer="6">
                You can email admissions@sjogu.edu or call +265 123 456 789. Our office hours are Monday-Friday, 8:00 AM - 5:00 PM.
            </div>
        </div>
        
        <!-- FAQ 7 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="7">
                <i class="fas fa-chevron-right"></i>
                Are there scholarships available?
            </div>
            <div class="faq-answer" data-answer="7">
                Yes, merit-based and need-based scholarships are available. Contact the financial aid office for more information.
            </div>
        </div>
        
        <!-- FAQ 8 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="8">
                <i class="fas fa-chevron-right"></i>
                Is SJOGU accredited?
            </div>
            <div class="faq-answer" data-answer="8">
                Yes, SJOGU is accredited by the National Council for Higher Education (NCHE) and our programs are approved by NMCM and MCM.
            </div>
        </div>
    </div>
    
    <!-- Chat Input Section - Demo -->
    <div class="chatbot-input-section">
        <!--<div class="demo-notice">
            <p><i class="fas fa-info-circle"></i> <strong>Demo Mode:</strong> This is a demonstration chatbot. No responses will be generated.</p>
        </div>-->
        
        <div class="chatbot-input-wrapper">
            <input type="text" 
                   id="chatbotInput" 
                   placeholder="Type your question here (demo)..."
                   autocomplete="off">
            <button id="sendChatBtn" class="send-btn">
                <i class="fas fa-paper-plane"></i>
                Send
            </button>
        </div>
        
        <!--<div class="demo-hint">
            <i class="fas fa-robot"></i> Demo chatbot - Ask anything about SJOGU (simulated responses)
        </div>-->
    </div>
    
   
</div>

<!-- Chatbot JavaScript -->
<script>
    // Chatbot elements
    const chatbotBtn = document.getElementById('chatbotBtn');
    const chatbotModal = document.getElementById('chatbotModal');
    const chatbotCloseBtn = document.getElementById('chatbotCloseBtn');
    const chatbotPrompt = document.getElementById('chatbotPrompt');
    const chatbotInput = document.getElementById('chatbotInput');
    const sendChatBtn = document.getElementById('sendChatBtn');
    
    // Open chatbot modal
    chatbotBtn?.addEventListener('click', () => {
        chatbotModal.classList.add('active');
        chatbotPrompt.style.display = 'none';
        // Focus on input when modal opens
        setTimeout(() => {
            if (chatbotInput) chatbotInput.focus();
        }, 300);
    });
    
    // Close chatbot modal
    function closeChatbotModal() {
        chatbotModal.classList.remove('active');
        setTimeout(() => {
            if (chatbotPrompt) chatbotPrompt.style.display = 'block';
        }, 300);
    }
    
    chatbotCloseBtn?.addEventListener('click', closeChatbotModal);
    
    // Close modal when clicking outside
    document.addEventListener('click', (e) => {
        if (chatbotModal.classList.contains('active')) {
            if (!chatbotModal.contains(e.target) && !chatbotBtn.contains(e.target)) {
                closeChatbotModal();
            }
        }
    });
    
    // FAQ Toggle functionality
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const faqId = question.getAttribute('data-faq');
            const answer = document.querySelector(`.faq-answer[data-answer="${faqId}"]`);
            
            // Toggle current answer
            answer.classList.toggle('show');
            question.classList.toggle('active');
            
            // Rotate chevron
            const chevron = question.querySelector('i');
            if (answer.classList.contains('show')) {
                chevron.style.transform = 'rotate(90deg)';
            } else {
                chevron.style.transform = 'rotate(0deg)';
            }
        });
    });
    
    // Demo chat response function
    function showDemoResponse() {
        const message = chatbotInput.value.trim();
        
        if (message === "") {
            alert("💬 Demo Chatbot\n\nPlease type a question to see how the chatbot would respond.\n\n📢 This is a demonstration - no actual AI responses are generated.\n\n💡 Try asking about:\n• Application deadlines\n• Programs offered\n• Entry requirements\n• Scholarships");
        } else {
            alert(`💬 SJOGU Assistant - Demo Response\n\n━━━━━━━━━━━━━━━━━━━━━━━━\n📝 You asked: "${message}"\n━━━━━━━━━━━━━━━━━━━━━━━━\n\n📢 This is a demonstration chatbot.\n\nFor real assistance, please:\n✓ Check our FAQ section above\n✓ Call: +265 123 456 789\n✓ Email: info@sjogu.edu\n✓ Visit our admissions office\n\nThank you for your interest in SJOGU! 🎓\n━━━━━━━━━━━━━━━━━━━━━━━━`);
        }
        
        // Clear input after sending (optional - comment out if you want to keep the message)
        // chatbotInput.value = "";
        
        // Keep focus on input for next question
        setTimeout(() => {
            chatbotInput.focus();
        }, 100);
    }
    
    // Send button click event
    sendChatBtn?.addEventListener('click', showDemoResponse);
    
    // Enter key press event
    chatbotInput?.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            showDemoResponse();
        }
    });
    
    // Auto-hide prompt after 8 seconds
    setTimeout(() => {
        if (chatbotPrompt) {
            chatbotPrompt.style.opacity = '0';
            setTimeout(() => {
                if (chatbotPrompt) chatbotPrompt.style.display = 'none';
            }, 500);
        }
    }, 8000);
</script>




</body>
</html>