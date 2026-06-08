@extends('layouts.app')

@section('title', 'Home - St John of God University')

@section('content')
    <!-- HERO SECTION WITH CAROUSEL -->
    <section id="Home" class="relative bg-black">
        <div class="relative h-[400px] md:h-[550px] lg:h-[600px] overflow-hidden">
            
            <!-- Slide 1 - Campus Excellence -->
            <div class="carousel-slide active" data-slide="0">
                <img src="{{ asset('images/carausel/carausel2.jpg') }}" class="w-full h-full object-cover object-center opacity-50">
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
                        <!-- Buttons -->
                        <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                            <a href="{{ route('programs') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
                                Explore Programs 
                                <i class="fas fa-arrow-right text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                            </a>
                            <a href="{{ route('enroll') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition text-xs md:text-base">
                                Apply Now 
                                <i class="fas fa-user-graduate text-[10px] md:text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 - Student Life -->
            <div class="carousel-slide" data-slide="1">
                <img src="{{ asset('images/carausel/lib.jpg') }}" class="w-full h-full object-cover object-center opacity-50">
                <div class="absolute inset-0 flex items-center">
                    <div class="text-left px-4 md:px-16 max-w-3xl">
                        <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                            <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Community & Growth</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                            Join a <span class="text-red-500">Vibrant</span><br>
                            <span class="text-white">Community of</span> 
                            <span class="text-red-500">Leaders</span>
                        </h3>
                        <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                            Connect, grow, and thrive with fellow students from across Malawi and beyond
                        </p>
                        <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                            <a href="{{ route('students') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
                                Student Life 
                                <i class="fas fa-users text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                            </a>
                            <a href="{{ route('enroll') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition text-xs md:text-base">
                                Join Us 
                                <i class="fas fa-heart text-[10px] md:text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 - Academic Excellence -->
            <div class="carousel-slide" data-slide="2">
                <img src="{{ asset('images/carausel/carausel6.jpg') }}" class="w-full h-full object-cover object-center opacity-50">
                <div class="absolute inset-0 flex items-center">
                    <div class="text-left px-4 md:px-16 max-w-3xl">
                        <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                            <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Academic Excellence</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                            Transform <span class="text-red-500">Your</span><br>
                            <span class="text-white">Future</span> 
                            <span class="text-red-500">Today</span>
                        </h3>
                        <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                            World-class education with experienced faculty and hands-on clinical training
                        </p>
                        <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                            <a href="{{ route('programs') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
                                View Programs 
                                <i class="fas fa-graduation-cap text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                            </a>
                            <a href="{{ route('about') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition text-xs md:text-base">
                                Learn More 
                                <i class="fas fa-book-open text-[10px] md:text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 4 - Call to Action / Enrollment -->
            <div class="carousel-slide" data-slide="3">
                <img src="{{ asset('images/carausel/carausel_last.jpg') }}" class="w-full h-full object-cover object-center opacity-50">
                <div class="absolute inset-0 flex items-center">
                    <div class="text-left px-4 md:px-16 max-w-3xl">
                        <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                            <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Limited Seats Available</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                            Your <span class="text-red-500">Journey</span><br>
                            <span class="text-white">Starts</span> 
                            <span class="text-red-500">Here</span>
                        </h3>
                        <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                            Take the first step toward a rewarding career in healthcare. Applications for 2025/2026 are now open.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                            <a href="{{ route('enroll') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-2 md:py-3.5 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-lg">
                                Enroll Now 
                                <i class="fas fa-arrow-right text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                            </a>
                            <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-2 md:py-3.5 rounded-lg font-semibold transition text-xs md:text-lg">
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
    
<!-- NEWS & ANNOUNCEMENTS SECTION -->
<section id="News" class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Section Header - Simplified (no title, just the news grid) -->
        
        <div class="grid md:grid-cols-12 gap-5">
            <!-- COLUMN 1: Important Dates & Announcements -->
            <div class="md:col-span-3">
                <!-- Important Dates - Redesigned with red header -->
                <div class="bg-white rounded-lg shadow-md border border-gray-100 overflow-hidden mb-5">
                    <div class="bg-red-600 text-white px-3 py-2">
                        <h3 class="font-bold text-sm flex items-center gap-2">
                            <i class="fas fa-calendar-alt text-xs"></i> Important Dates
                        </h3>
                    </div>
                    <div class="p-3 space-y-2">
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
                <div class="bg-white rounded-lg shadow-md border border-gray-100 overflow-hidden">
                    <div class="bg-red-600 text-white px-3 py-2">
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
                        <a href="{{ route('news') }}" class="block text-center text-red-600 font-semibold text-xs hover:text-red-700 transition">
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
                        <a href="{{ route('news.show', '18th-graduation-ceremony') }}" class="text-red-600 text-xs font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
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
                        <a href="{{ route('news.show', 'research-conference-2024') }}" class="text-red-600 text-xs font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
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
                        <a href="{{ route('news.show', 'applications-open-2026-27') }}" class="text-red-600 text-xs font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
                            Read More <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-10">
            <a href="{{ route('news') }}" class="inline-block bg-red-600 text-white px-6 py-2 rounded-lg font-semibold text-sm hover:bg-red-700 transition">
                View All News
            </a>
        </div>
    </div>
</section>

   
  <!-- ABOUT SECTION -->
<section id="about" class="py-16 px-4 md:px-16 bg-red-700">
    <div class="grid md:grid-cols-2 gap-8 md:gap-10 items-center">

        <!-- LEFT: IMAGE -->
        <div class="relative flex justify-center md:justify-start">
            <div class="w-full md:w-auto">
                <img src="{{ asset('images/carausel/admin_block.jpg') }}"
                    class="w-full md:w-[450px] lg:w-[500px] h-[300px] md:h-[420px] object-cover rounded-xl shadow-lg mx-auto md:mx-0">
                
                <div class="absolute bottom-4 left-4 md:bottom-5 md:left-5 bg-white px-4 md:px-5 py-2 md:py-3 shadow rounded">
                    <h3 class="text-lg md:text-xl font-bold text-red-600">20+</h3>
                    <p class="text-xs md:text-sm text-gray-600">Years of Excellence</p>
                </div>
            </div>
        </div>

        <!-- RIGHT: CONTENT -->
        <div class="text-center">
            <h2 class="text-2xl md:text-4xl font-bold mb-4 text-white">
                About St John Of God <span class="text-yellow-300">University</span>
            </h2>

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
            
            <!-- Learn More Button -->
            <div class="mt-4">
                <a href="{{ route('about') }}" 
                   class="inline-flex items-center gap-2 bg-white text-red-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition shadow-md group">
                    <span>Learn More About SJOGU</span>
                    <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- FACTS, MISSION, VISION, VALUES SECTION with updated statistics -->
<section class="py-16 px-4 md:px-16 relative bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('images/students_2.jpeg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    
    <div class="container mx-auto relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">500+</div>
                <p class="text-gray-600">Students</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">10+</div>
                <p class="text-gray-600">Programs</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">20+</div>
                <p class="text-gray-600">Lecturers</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">5+</div>
                <p class="text-gray-600">Awards</p>
            </div>
        </div>
    </div>
</section>









<!--library section-->
<section id="library" class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">Knowledge Hub</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">The Myles Crofton <span class="text-red-600">Library</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Your gateway to knowledge, research, and academic excellence
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left: Image -->
            <div class="relative">
                <img src="{{ asset('images/carausel/library1.jpg') }}" alt="The Miles Crofton Library" class="rounded-lg shadow-xl w-full h-[400px] object-cover">
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

                <a href="{{ route('library') }}" class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition">
                    View Library Details →
                </a>
            </div>
        </div>

        <!-- Library Services -->
             <div class="grid md:grid-cols-3 gap-6 mt-12">
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-search text-red-600 text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800 mb-2">Catalogs</h4>
                <p class="text-gray-600 text-sm">Search our catalog for books, journals, and research materials</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-database text-red-600 text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800 mb-2">Archives</h4>
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
        
        <!-- View More Button -->
        <div class="text-center mt-8">
            <a href="{{ route('library') }}" class="inline-flex items-center gap-2 bg-red-600 text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-red-700 transition shadow-md">
                <i class="fas fa-book"></i>
                Explore Library Resources
                <i class="fas fa-arrow-right text-sm"></i>
            </a>
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

        <!-- Featured Alumni - 2 columns -->
        <div class="mb-8">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-gray-800">Featured <span class="text-red-600">Alumni</span></h3>
                <div class="w-12 h-0.5 bg-red-600 mx-auto mt-1 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-5">
                <!-- Alumni 1: Frank Magagula -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
                    <div class="w-28 h-28 flex-shrink-0">
                        <img src="{{ asset('images/alumni/frank_magagula.jpeg') }}" 
                             alt="Frank Magagula"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <i class="fas fa-quote-left text-red-500 text-xs"></i>
                            <p class="text-gray-500 text-xs">Class of 2016</p>
                        </div>
                        <h4 class="text-base font-bold text-gray-800 mb-0.5">Frank Magagula</h4>
                        <p class="text-red-600 text-xs mb-1">Clinical Psychologist</p>
                        <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                            St John of God Hospitaller Services
                        </p>
                    </div>
                </div>

                <!-- Alumni 2: Raphael Nyirenda Jnr -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
                    <div class="w-28 h-28 flex-shrink-0">
                        <img src="{{ asset('images/alumni/raphael_nyirenda.jpeg') }}" 
                             alt="Raphael Nyirenda Jnr"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <i class="fas fa-quote-left text-red-500 text-xs"></i>
                            <p class="text-gray-500 text-xs">Class of 2016</p>
                        </div>
                        <h4 class="text-base font-bold text-gray-800 mb-0.5">Raphael Nyirenda Jnr</h4>
                        <p class="text-red-600 text-xs mb-1">Director</p>
                        <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                            Mtendere Rehabilitation Center - Mzuzu
                        </p>
                    </div>
                </div>

                <!-- Alumni 3: Mbawemi Nyasulu -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
                    <div class="w-28 h-28 flex-shrink-0">
                        <img src="{{ asset('images/alumni/mbawemi_nyasulu.jpeg') }}" 
                             alt="Mbawemi Nyasulu"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <i class="fas fa-quote-left text-red-500 text-xs"></i>
                            <p class="text-gray-500 text-xs">Class of 2015</p>
                        </div>
                        <h4 class="text-base font-bold text-gray-800 mb-0.5">Mbawemi Nyasulu</h4>
                        <p class="text-red-600 text-xs mb-1">Psychosocial Counsellor</p>
                        <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                            Mental Health Professional
                        </p>
                    </div>
                </div>

                <!-- Alumni 4: Br. Louis Kuyokwa, OH -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
                    <div class="w-28 h-28 flex-shrink-0">
                        <img src="{{ asset('images/alumni/louis_kuyokwa.jpeg') }}" 
                             alt="Br. Louis Kuyokwa"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <i class="fas fa-quote-left text-red-500 text-xs"></i>
                            <p class="text-gray-500 text-xs">Class of 2023</p>
                        </div>
                        <h4 class="text-base font-bold text-gray-800 mb-0.5">Br. Louis Kuyokwa, OH</h4>
                        <p class="text-red-600 text-xs mb-1">Registered Nurse</p>
                        <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                            Saint John of God Lilongwe
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alumni Benefits -->
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
                <button id="registerAlumniBtn" class="bg-white text-red-600 px-5 py-2 rounded-lg font-semibold hover:bg-gray-100 transition flex items-center gap-2 text-sm">
                    <i class="fas fa-user-plus"></i> Register
                </button>
                <button id="whatsappBtn" class="bg-gray-400 text-white px-5 py-2 rounded-lg font-semibold cursor-not-allowed flex items-center gap-2 text-sm">
                    <i class="fab fa-whatsapp"></i> Join WhatsApp (Coming Soon)
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Alumni Registration Popup Modal - Coming Soon -->
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
            <p class="text-red-100 text-xs mt-1">Coming Soon</p>
        </div>
        
        <!-- Modal Body -->
        <div class="p-5">
            <!-- Coming Soon Banner -->
            <div class="bg-yellow-50 border-l-4 border-yellow-500 rounded-lg p-3 mb-4">
                <div class="flex items-center gap-2">
                    <i class="fas fa-info-circle text-yellow-600"></i>
                    <span class="font-semibold text-yellow-700 text-sm">Registration Coming Soon</span>
                </div>
                <p class="text-xs text-gray-600 mt-1">
                    The alumni registration portal is currently under development. Please check back soon.
                </p>
            </div>
            
            <form id="alumniForm" onsubmit="return false;">
                <div class="grid grid-cols-2 gap-3">
                    <div class="mb-3 col-span-2">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-user text-gray-400 text-xs mr-1"></i> Full Name
                        </label>
                        <input type="text" disabled placeholder="Coming Soon" 
                            class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed">
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-envelope text-gray-400 text-xs mr-1"></i> Email
                        </label>
                        <input type="email" disabled placeholder="Coming Soon" 
                            class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed">
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-phone text-gray-400 text-xs mr-1"></i> Phone
                        </label>
                        <input type="tel" disabled placeholder="Coming Soon" 
                            class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed">
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-calendar-alt text-gray-400 text-xs mr-1"></i> Grad Year
                        </label>
                        <select disabled class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed">
                            <option>Select year (Coming Soon)</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-graduation-cap text-gray-400 text-xs mr-1"></i> Program
                        </label>
                        <select disabled class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed">
                            <option>Select program (Coming Soon)</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-xs font-medium text-gray-700 mb-1">
                        <i class="fas fa-briefcase text-gray-400 text-xs mr-1"></i> Occupation
                    </label>
                    <input type="text" disabled placeholder="Coming Soon" 
                        class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed">
                </div>
                
                <button type="button" disabled class="w-full bg-gray-400 text-white py-2 rounded-lg font-semibold cursor-not-allowed flex items-center justify-center gap-2 text-sm">
                    <i class="fas fa-paper-plane"></i> Register (Coming Soon)
                </button>
            </form>
            
            <div class="mt-4 p-2 bg-gray-50 rounded-lg">
                <p class="text-xs text-center text-gray-500">
                    <i class="fas fa-clock mr-1"></i> Online registration will be available soon
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('alumniModal');
    const registerBtn = document.getElementById('registerAlumniBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
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
    
    // WhatsApp button - disabled with message
    whatsappBtn.addEventListener('click', function(e) {
        e.preventDefault();
        alert('The WhatsApp alumni group will be available soon. Please check back later.');
    });
</script>







    

 

   
    
@endsection

@push('styles')
<style>
    /* Carousel Styles */
    .carousel-slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: opacity 0.5s ease;
    }
    .carousel-slide.active {
        opacity: 1;
    }
</style>
@endpush

@push('scripts')
<script>
    // Carousel functionality
    document.addEventListener('DOMContentLoaded', function() {
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
                    if (i === index) {
                        dot.style.opacity = '1';
                        dot.style.backgroundColor = 'white';
                    } else {
                        dot.style.opacity = '0.5';
                        dot.style.backgroundColor = 'white';
                    }
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
            
            if (prevBtn && nextBtn) {
                prevBtn.addEventListener('click', prevSlide);
                nextBtn.addEventListener('click', nextSlide);
            }
            
            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => showSlide(i));
            });
            
            // Auto play every 5 seconds
            let autoPlay = setInterval(nextSlide, 5000);
            
            // Pause auto-play on hover
            const carouselContainer = document.querySelector('.relative.h-\\[400px\\]');
            if (carouselContainer) {
                carouselContainer.addEventListener('mouseenter', () => {
                    clearInterval(autoPlay);
                });
                
                carouselContainer.addEventListener('mouseleave', () => {
                    autoPlay = setInterval(nextSlide, 5000);
                });
            }
        }
    });
</script>
@endpush









