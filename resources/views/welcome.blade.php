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
    <div class="overlay" id="overlay"></div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="p-6">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-xl font-bold text-red-700">Menu</h2>
                <button id="closeMenu" class="text-gray-600">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            
            <!-- Login Options in Mobile Menu -->
            <div class="mb-6 pb-6 border-b">
    <div class="flex gap-2 sm:gap-3 md:gap-4">
        <a href="{{ route('portal.login') }}" class="flex-1 bg-red-50 text-red-700 py-1.5 sm:py-2 md:py-2.5 px-2 sm:px-3 rounded-lg text-center font-medium text-xs sm:text-sm md:text-base hover:bg-red-700 hover:text-white transition">
            <i class="fas fa-user-graduate mr-1 sm:mr-2 text-xs sm:text-sm md:text-base"></i>Student Portal
        </a>
        <a href="#" class="flex-1 bg-red-50 text-red-700 py-1.5 sm:py-2 md:py-2.5 px-2 sm:px-3 rounded-lg text-center font-medium text-xs sm:text-sm md:text-base hover:bg-red-700 hover:text-white transition">
            <i class="fas fa-chalkboard-user mr-1 sm:mr-2 text-xs sm:text-sm md:text-base"></i>Staff Portal
        </a>
    </div>
</div>
            
            <ul class="space-y-4">
                <li><a href="#Home" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">Home</a></li>
                <li><a href="#about" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">About</a></li>
                <li><a href="#News" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">News</a></li>
                <li><a href="#programs" class="mobile-nav-link block py-2 text-gray-800 hover:text-red-700">Programs</a></li>
                
                <!--<li>
                    <div class="block py-2 text-gray-800 font-medium">Media</div>
                    <div class="pl-4 mt-2 space-y-2 border-l-2 border-red-200">
                        <a href="#news" class="mobile-nav-link block py-1 text-gray-600 hover:text-red-700">News</a>
                        <a href="#announcements" class="mobile-nav-link block py-1 text-gray-600 hover:text-red-700">Announcements</a>
                        <a href="#vacancies" class="mobile-nav-link block py-1 text-gray-600 hover:text-red-700">Vacancies</a>
                        <a href="#documents" class="mobile-nav-link block py-1 text-gray-600 hover:text-red-700">Documents</a>
                    </div>
                </li>-->
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
            <span>Mon - Fri: 09:00 - 18:00</span>
        </div>
        <div class="flex items-center gap-4">
    <div class="hidden md:flex items-center gap-4">
        <a href="{{ route('portal.login') }}" class="hover:text-gray-200 transition flex items-center gap-1">
            <i class="fas fa-user-graduate"></i>
            <span>Student Portal</span>
        </a>
        <span class="text-gray-300">|</span>
        <a href="{{ route('staff.login') }}" class="hover:text-gray-200 transition flex items-center gap-1">
            <i class="fas fa-chalkboard-user"></i>
            <span>Staff Portal</span>
        </a>
    </div>
    <input type="text" placeholder="Search..." class="px-3 py-1 rounded text-black text-sm outline-none w-full md:w-auto">
</div>
    </div>

    <nav  class="bg-white px-4 md:px-6 py-4 flex justify-between items-center shadow sticky top-0 z-50">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center overflow-hidden">
                <img src="{{ asset('images/logo_stjohn.png') }}" alt="St John of God University Logo" class="w-full h-full object-cover">
            </div>
            <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold break-words whitespace-normal">
                St John Of God University
            </h1>
        </div>
        
        <div class="flex items-center gap-4">
            <ul class="hidden md:flex gap-8 font-medium">
                <li><a href="#Home" class="nav-link hover:text-red-600 transition">Home</a></li>
                <li><a href="#about" class="nav-link hover:text-red-600 transition">About</a></li>
                <li><a href="#News" class="nav-link hover:text-red-600 transition">News</a></li>
                <li><a href="#programs" class="nav-link hover:text-red-600 transition">Programs</a></li>
                
                <!--<li class="dropdown">
                    <a href="#" class="hover:text-red-600 transition inline-flex items-center gap-1">
                        Media
                        <i class="fas fa-chevron-down text-xs"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#news">News</a>
                        <a href="#announcements">Announcements</a>
                        <a href="#vacancies">Vacancies</a>
                        <a href="#documents">Documents</a>
                    </div>
                </li>-->
                
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
<section id="Home" class="relative">
    <div class="relative h-[400px] md:h-[500px] overflow-hidden">
        <!-- Slide 1 -->
        <div class="carousel-slide active" data-slide="0">
            <img src="{{ asset('images/admin block.jpeg') }}" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-slide" data-slide="1">
            <img src="{{ asset('images/students_2.jpeg') }}" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-slide" data-slide="2">
            <img src="{{ asset('images/class_room.jpeg') }}" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        </div>
        
        <!-- Carousel Buttons - Hidden on mobile, visible on tablet/desktop -->
        <button id="prevBtn" class="hidden md:flex absolute left-4 top-1/2 -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full hover:bg-opacity-75">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button id="nextBtn" class="hidden md:flex absolute right-4 top-1/2 -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full hover:bg-opacity-75">
            <i class="fas fa-chevron-right"></i>
        </button>
        
        <!-- Dots - Responsive sizing -->
        <div class="absolute bottom-3 md:bottom-4 left-1/2 -translate-x-1/2 flex gap-1.5 md:gap-2">
            <button class="dot w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-white bg-opacity-50" data-dot="0"></button>
            <button class="dot w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-white bg-opacity-50" data-dot="1"></button>
            <button class="dot w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-white bg-opacity-50" data-dot="2"></button>
        </div>
    </div>

    <!-- Red Content Box - Responsive overlay on carousel -->
  <div class="absolute left-3 right-3 md:left-10 md:right-auto bottom-3 md:bottom-10 bg-white text-gray-800 p-3 md:p-10 w-auto md:w-[450px] shadow-xl rounded-lg md:rounded-none">
    <h2 class="text-sm md:text-3xl font-bold leading-tight mb-1 md:mb-4">
        Transform Your Future at <span class="text-red-600">SJOGU</span>
    </h2>
    <p class="mb-2 md:mb-6 text-gray-600 text-xs md:text-base">
        Empowering growth, knowledge, & success Today!
    </p>
    <div class="flex flex-row gap-2 md:gap-3">
        <a href="#programs" class="flex-1 md:flex-none bg-red-600 text-white px-2 md:px-6 py-1 md:py-2 rounded font-medium hover:bg-red-700 transition text-xs md:text-base text-center">
            See All Programs →
        </a>
        <a href="#Enroll" class="flex-1 md:flex-none bg-gray-800 hover:bg-gray-900 text-white px-2 md:px-6 py-1 md:py-2 rounded font-medium transition border border-gray-300 text-xs md:text-base text-center">
            ENROLL NOW
        </a>
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
                            <span><i class="far fa-calendar-alt mr-1"></i> March 15, 2024</span>
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
                    <img src="{{ asset('images/news1.jpg') }}" alt="Research" class="w-full h-32 object-cover">
                    <div class="p-3">
                        <div class="flex items-center gap-2 text-xs text-gray-500 mb-1">
                            <span><i class="far fa-calendar-alt mr-1"></i> April 5, 2024</span>
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
                            <span><i class="far fa-calendar-alt mr-1"></i> March 10, 2024</span>
                            <span class="bg-blue-100 text-blue-600 px-1.5 py-0.5 rounded text-xs">Important</span>
                        </div>
                        <h3 class="text-sm font-bold text-gray-800 mb-1">Applications Open 2024/25</h3>
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

        <!-- RIGHT: CONTENT -->
        <div>
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
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">5,000+</div>
                <p class="text-gray-600">Active Students</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">12+</div>
                <p class="text-gray-600">Academic Programs</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">150+</div>
                <p class="text-gray-600">Qualified Lecturers</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">25+</div>
                <p class="text-gray-600">Awards & Recognitions</p>
            </div>
        </div>

        <!-- Mission, Vision, Values Section -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Our <span class="text-yellow-400">Foundation</span></h2>
            <p class="text-gray-300">Guiding principles that shape our institution</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Mission -->
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-bullseye text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Our Mission</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    To provide quality healthcare education that fosters intellectual growth, spiritual development, and social responsibility, preparing students to become ethical leaders and compassionate servants of society.
                </p>
            </div>

            <!-- Vision -->
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-eye text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Our Vision</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    To be a leading Catholic university recognized globally for academic excellence, research innovation, and transformative impact on healthcare communities.
                </p>
            </div>

            <!-- Core Values -->
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-heart text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Core Values</h3>
                <div class="space-y-2">
                    <div class="flex items-center gap-2 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-sm"></i>
                        <span class="text-gray-600 text-sm">Compassion</span>
                    </div>
                    <div class="flex items-center gap-2 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-sm"></i>
                        <span class="text-gray-600 text-sm">Excellence</span>
                    </div>
                    <div class="flex items-center gap-2 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-sm"></i>
                        <span class="text-gray-600 text-sm">Integrity</span>
                    </div>
                    <div class="flex items-center gap-2 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-sm"></i>
                        <span class="text-gray-600 text-sm">Community</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="programs" class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">Our Academic Programs</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Courses & <span class="text-red-600">Programs</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Explore our diverse range of healthcare programs designed to shape future medical professionals
            </p>
        </div>

        <!-- Entry Requirements - Simple Card -->
        <div class="bg-gray-50 rounded-lg p-6 mb-12 border border-gray-200">
            <div class="flex items-center gap-3 mb-4">
                <i class="fas fa-graduation-cap text-2xl text-red-600"></i>
                <h3 class="text-xl font-bold text-gray-800">Entry Requirements</h3>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-red-600 mb-2">Generic Programs</h4>
                    <ul class="space-y-1 text-gray-600 text-sm">
                        <li>• Full MSCE with 6 credits including English, Mathematics, Biology, and Physical Science</li>
                        <li>• O-Level equivalent qualifications accepted</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-red-600 mb-2">Upgrading Programs</h4>
                    <ul class="space-y-1 text-gray-600 text-sm">
                        <li>• Certificate or Diploma in relevant field from accredited institution</li>
                        <li>• BSc in Nursing or related field for University Certificate programs</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Programs Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Program Card 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <img src="{{ asset('images/news2.jpg') }}" alt="Clinical Medicine" class="w-full h-48 object-cover">
                <div class="p-5">
                    <!--<div class="flex gap-2 mb-3">
                        <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Generic</span>
                        <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">Upgrading</span>
                    </div>-->
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Diploma in Clinical Medicine</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">Comprehensive training in clinical medicine preparing students for primary healthcare delivery.</p>
                    <div class="flex items-center justify-between pt-3 border-t">
                        <span class="text-sm text-gray-500">Duration: 3 Years</span>
                        <button onclick="openModal('modal1')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Program Card 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <img src="{{ asset('images/midwifery.jpg') }}" alt="Nursing and Midwifery" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Nursing and Midwifery</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">Professional nursing program combining theoretical knowledge with practical clinical skills.</p>
                    <div class="flex items-center justify-between pt-3 border-t">
                        <span class="text-sm text-gray-500">Duration: 4 Years</span>
                        <button onclick="openModal('modal2')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Program Card 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <img src="{{ asset('images/mental.jpg') }}" alt="Mental Health" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Clinical Medicine - Mental Health</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">Specialized program focusing on mental health assessment, diagnosis, and treatment.</p>
                    <div class="flex items-center justify-between pt-3 border-t">
                        <span class="text-sm text-gray-500">Duration: 4 Years</span>
                        <button onclick="openModal('modal3')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Program Card 4 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <img src="{{ asset('images/Psychiatric Nursing.jpg') }}" alt="Psychiatric Nursing" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Psychiatric Nursing</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">Advanced nursing program specializing in psychiatric care and mental health services.</p>
                    <div class="flex items-center justify-between pt-3 border-t">
                        <span class="text-sm text-gray-500">Duration: 4 Years</span>
                        <button onclick="openModal('modal4')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Program Card 5 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <img src="{{ asset('images/midwifery.jpg') }}" alt="Certificate Nursing" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">University Certificate in Nursing and Midwifery</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">Foundation program for aspiring nurses and midwives.</p>
                    <div class="flex items-center justify-between pt-3 border-t">
                        <span class="text-sm text-gray-500">Duration: 1 Year</span>
                        <button onclick="openModal('modal5')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Program Card 6 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <img src="{{ asset('images/public health.jpg') }}" alt="Public Health" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Bachelor of Science in Public Health</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">Comprehensive program focusing on community health, epidemiology, and health promotion.</p>
                    <div class="flex items-center justify-between pt-3 border-t">
                        <span class="text-sm text-gray-500">Duration: 4 Years</span>
                        <button onclick="openModal('modal6')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>
            <!--card 7-->
               <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <img src="{{ asset('images/psychotherapy.jpg') }}" alt="Bachelor in Psychotherapy" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Bsc in Psychotherapy</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">Train to become a qualified psychotherapist specializing in mental health diagnosis, therapeutic counseling, and evidence-based interventions.</p>
                    <div class="flex items-center justify-between pt-3 border-t">
                        <span class="text-sm text-gray-500">Duration: 4 Years</span>
                        <button onclick="openModal('modal7')" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>
            
        </div>

        
    </div>
</section>
<!-- Modals -->
<!-- Modal 1 - Diploma in Clinical Medicine -->
<div id="modal1" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b px-6 py-4 flex justify-between items-center">
            <h3 class="text-xl font-bold text-gray-800">Diploma in Clinical Medicine</h3>
            <button onclick="closeModal('modal1')" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <img src="{{ asset('images/news2.jpg') }}" alt="Clinical Medicine" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="flex gap-2 mb-4">
                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Generic</span>
                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">Upgrading</span>
            </div>
            <h4 class="font-semibold text-gray-800 mb-2">Program Overview</h4>
            <p class="text-gray-600 mb-4">The Diploma in Clinical Medicine program provides comprehensive training in clinical medicine, preparing students for primary healthcare delivery. Students gain hands-on experience in diagnosis, treatment, and patient care.</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Duration</h4>
            <p class="text-gray-600 mb-4">3 Years (Full-time)</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Entry Requirements</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Full MSCE with 6 credits including English, Mathematics, Biology, and Physical Science</li>
                <li>O-Level equivalent qualifications accepted</li>
                <li>For upgrading: Diploma in Clinical Medicine or related field</li>
            </ul>
            
            <h4 class="font-semibold text-gray-800 mb-2">Career Opportunities</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Clinical Officer in hospitals and health centers</li>
                <li>Private practice</li>
                <li>Public health officer</li>
                <li>Medical research assistant</li>
            </ul>
            
            <button class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">Apply Now</button>
        </div>
    </div>
</div>

<!-- Modal 2 - BSc in Nursing and Midwifery -->
<div id="modal2" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b px-6 py-4 flex justify-between items-center">
            <h3 class="text-xl font-bold text-gray-800">BSc in Nursing and Midwifery</h3>
            <button onclick="closeModal('modal2')" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <img src="{{ asset('images/midwifery.jpg') }}" alt="Nursing and Midwifery" class="w-full h-64 object-cover rounded-lg mb-4">
            <h4 class="font-semibold text-gray-800 mb-2">Program Overview</h4>
            <p class="text-gray-600 mb-4">Professional nursing program combining theoretical knowledge with practical clinical skills. Students are trained in patient care, midwifery, and healthcare management.</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Duration</h4>
            <p class="text-gray-600 mb-4">4 Years (Full-time)</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Entry Requirements</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Full MSCE with 6 credits including English, Mathematics, Biology, and Physical Science</li>
                <li>O-Level equivalent qualifications accepted</li>
            </ul>
            
            <h4 class="font-semibold text-gray-800 mb-2">Career Opportunities</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Registered Nurse/Midwife in hospitals</li>
                <li>Nurse educator</li>
                <li>Community health nurse</li>
                <li>Clinical nurse specialist</li>
            </ul>
            
            <button class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">Apply Now</button>
        </div>
    </div>
</div>

<!-- Modal 3 - BSc in Clinical Medicine - Mental Health -->
<div id="modal3" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b px-6 py-4 flex justify-between items-center">
            <h3 class="text-xl font-bold text-gray-800">BSc in Clinical Medicine - Mental Health</h3>
            <button onclick="closeModal('modal3')" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <img src="{{ asset('images/mental.jpg') }}" alt="Mental Health" class="w-full h-64 object-cover rounded-lg mb-4">
            <h4 class="font-semibold text-gray-800 mb-2">Program Overview</h4>
            <p class="text-gray-600 mb-4">Specialized program focusing on mental health assessment, diagnosis, and treatment. Students learn to manage psychiatric conditions and provide mental health care.</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Duration</h4>
            <p class="text-gray-600 mb-4">4 Years (Full-time)</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Entry Requirements</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Full MSCE with 6 credits including relevant sciences</li>
                <li>Diploma in Clinical Medicine or related field for upgrading</li>
            </ul>
            
            <h4 class="font-semibold text-gray-800 mb-2">Career Opportunities</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Mental Health Clinical Officer</li>
                <li>Psychiatric care specialist</li>
                <li>Mental health program coordinator</li>
                <li>Community mental health worker</li>
            </ul>
            
            <button class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">Apply Now</button>
        </div>
    </div>
</div>

<!-- Modal 4 - BSc in Psychiatric Nursing -->
<div id="modal4" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b px-6 py-4 flex justify-between items-center">
            <h3 class="text-xl font-bold text-gray-800">BSc in Psychiatric Nursing</h3>
            <button onclick="closeModal('modal4')" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <img src="{{ asset('images/Psychiatric Nursing.jpg') }}" alt="Psychiatric Nursing" class="w-full h-64 object-cover rounded-lg mb-4">
            <h4 class="font-semibold text-gray-800 mb-2">Program Overview</h4>
            <p class="text-gray-600 mb-4">Advanced nursing program specializing in psychiatric care and mental health services. Students gain expertise in mental health assessment and therapeutic interventions.</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Duration</h4>
            <p class="text-gray-600 mb-4">4 Years (Full-time)</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Entry Requirements</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Full MSCE with 6 credits including relevant sciences</li>
                <li>Diploma in Nursing or related field for upgrading</li>
            </ul>
            
            <h4 class="font-semibold text-gray-800 mb-2">Career Opportunities</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Psychiatric Nurse Specialist</li>
                <li>Mental Health Nurse Educator</li>
                <li>Psychiatric unit manager</li>
                <li>Community mental health nurse</li>
            </ul>
            
            <button class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">Apply Now</button>
        </div>
    </div>
</div>

<!-- Modal 5 - University Certificate -->
<div id="modal5" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b px-6 py-4 flex justify-between items-center">
            <h3 class="text-xl font-bold text-gray-800">University Certificate in Nursing and Midwifery</h3>
            <button onclick="closeModal('modal5')" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <img src="{{ asset('images/midwifery.jpg') }}" alt="Certificate Nursing" class="w-full h-64 object-cover rounded-lg mb-4">
            <h4 class="font-semibold text-gray-800 mb-2">Program Overview</h4>
            <p class="text-gray-600 mb-4">Foundation program for aspiring nurses and midwives. Provides basic knowledge and skills in nursing and midwifery practice.</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Duration</h4>
            <p class="text-gray-600 mb-4">1 Year (Full-time)</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Entry Requirements</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Full MSCE with 6 credits</li>
                <li>BSc in Nursing or related field for university certificate programs</li>
            </ul>
            
            <h4 class="font-semibold text-gray-800 mb-2">Career Opportunities</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Nurse Assistant</li>
                <li>Community Health Worker</li>
                <li>Pathway to BSc in Nursing</li>
            </ul>
            
            <button class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">Apply Now</button>
        </div>
    </div>
</div>

<!-- Modal 6 - Public Health -->
<div id="modal6" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b px-6 py-4 flex justify-between items-center">
            <h3 class="text-xl font-bold text-gray-800">Bachelor of Science in Public Health</h3>
            <button onclick="closeModal('modal6')" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <img src="{{ asset('images/public health.jpg') }}" alt="Public Health" class="w-full h-64 object-cover rounded-lg mb-4">
            <h4 class="font-semibold text-gray-800 mb-2">Program Overview</h4>
            <p class="text-gray-600 mb-4">Comprehensive program focusing on community health, epidemiology, and health promotion. Students learn to address public health challenges and promote wellness.</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Duration</h4>
            <p class="text-gray-600 mb-4">4 Years (Full-time)</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Entry Requirements</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Full MSCE with 6 credits including Biology, Chemistry, and Mathematics</li>
                <li>O-Level equivalent qualifications accepted</li>
            </ul>
            
            <h4 class="font-semibold text-gray-800 mb-2">Career Opportunities</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Public Health Officer</li>
                <li>Epidemiologist</li>
                <li>Health Program Manager</li>
                <li>Community Health Specialist</li>
                <li>Health Policy Analyst</li>
            </ul>
            
            <button class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">Apply Now</button>
        </div>
    </div>
</div>

<!--card 7-->
<!-- Modal 7 - Bachelor in Psychotherapy -->
<div id="modal7" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b px-6 py-4 flex justify-between items-center">
            <h3 class="text-xl font-bold text-gray-800">Bsc in Psychotherapy</h3>
            <button onclick="closeModal('modal7')" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <img src="{{ asset('images/psychotherapy.jpg') }}" alt="Psychotherapy" class="w-full h-64 object-cover rounded-lg mb-4">
            
            <h4 class="font-semibold text-gray-800 mb-2">Program Overview</h4>
            <p class="text-gray-600 mb-4">The Bachelor in Psychotherapy program provides comprehensive training in therapeutic techniques, mental health assessment, and evidence-based psychotherapy practices. Students gain practical skills in counseling, psychological assessment, and therapeutic interventions for various mental health conditions.</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Duration</h4>
            <p class="text-gray-600 mb-4">4 Years (Full-time)</p>
            
            <h4 class="font-semibold text-gray-800 mb-2">Entry Requirements</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Full MSCE with 6 credits including English, Psychology, and Biology</li>
                <li>O-Level equivalent qualifications accepted</li>
                <li>Strong interest in mental health and counseling</li>
            </ul>
            
            <h4 class="font-semibold text-gray-800 mb-2">Career Opportunities</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Clinical Psychotherapist</li>
                <li>Mental Health Counselor</li>
                <li>School Psychologist</li>
                <li>Rehabilitation Specialist</li>
                <li>Private Practice Therapist</li>
                <li>Mental Health Program Coordinator</li>
            </ul>
            
            <h4 class="font-semibold text-gray-800 mb-2">Core Modules</h4>
            <ul class="text-gray-600 mb-4 list-disc pl-5">
                <li>Introduction to Psychotherapy</li>
                <li>Cognitive Behavioral Therapy (CBT)</li>
                <li>Psychodynamic Approaches</li>
                <li>Trauma and Crisis Intervention</li>
                <li>Ethics in Mental Health Practice</li>
                <li>Clinical Supervision and Practice</li>
            </ul>
            
            <button class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">Apply Now</button>
        </div>
    </div>
</div>
<!-- ADMISSIONS SECTION - Red Background -->
<section id="Enroll" class="py-16 px-4 md:px-16 bg-red-700">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <p class="text-red-200 font-semibold mb-2 uppercase tracking-wide">Join Us</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Admissions <span class="text-yellow-300">2025/2026</span></h2>
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
        <div class="sticky top-0 bg-white border-b px-6 py-4 flex justify-between items-center">
            <h3 class="text-xl font-bold text-gray-800">Online Application Form</h3>
            <button onclick="closeApplicationModal()" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-6">
            <form id="applicationForm">
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                        <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Date of Birth *</label>
                        <input type="date" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                        <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Program Applying For *</label>
                    <select required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                        <option value="">Select Program</option>
                        <option>Diploma in Clinical Medicine</option>
                        <option>BSc in Nursing and Midwifery</option>
                        <option>BSc in Clinical Medicine - Mental Health</option>
                        <option>BSc in Psychiatric Nursing</option>
                        <option>University Certificate in Nursing and Midwifery</option>
                        <option>Bachelor of Science in Public Health</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Highest Qualification *</label>
                    <input type="text" required placeholder="e.g., MSCE, Diploma, Degree" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Upload Documents</label>
                    <input type="file" multiple class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    <p class="text-xs text-gray-500 mt-1">Upload academic certificates, ID, and passport photo (PDF, JPG, PNG)</p>
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Additional Information</label>
                    <textarea rows="3" placeholder="Any additional information you'd like to share..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500"></textarea>
                </div>
                
                <div class="flex gap-3">
                    <button type="submit" class="flex-1 bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">
                        Submit Application
                    </button>
                    <button type="button" onclick="closeApplicationModal()" class="flex-1 bg-gray-300 text-gray-700 py-3 rounded-lg font-semibold hover:bg-gray-400 transition">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

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
                        <strong class="font-semibold">Application Deadline:</strong> May 31st, 2024
                    </p>
                    <p class="text-sm text-gray-600 mt-1">
                        For inquiries, contact admissions office: <strong>admissions@sjogu.edu</strong> or call <strong>+265 123 456 789</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
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
</body>
</html>