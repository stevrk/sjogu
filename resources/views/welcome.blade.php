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

   
 

<!-- FACTS, MISSION, VISION, VALUES SECTION with updated statistics -->
<section class="py-16 px-4 md:px-16 relative bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('images/students_2.jpeg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    
    <div class="container mx-auto relative z-10">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">SJOGU by the <span class="text-yellow-400">Numbers</span></h2>
            <div class="w-20 h-1 bg-yellow-400 mx-auto rounded-full mb-4"></div>
            <!--<p class="text-gray-300 max-w-2xl mx-auto">
                Our impact in healthcare education at a glance
            </p>-->
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">
                    <span class="counter" data-target="500">0</span>+
                </div>
                <p class="text-gray-600">Students</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">
                    <span class="counter" data-target="10">0</span>+
                </div>
                <p class="text-gray-600">Programs</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">
                    <span class="counter" data-target="20">0</span>+
                </div>
                <p class="text-gray-600">Lecturers</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">
                    <span class="counter" data-target="5">0</span>+
                </div>
                <p class="text-gray-600">Awards</p>
            </div>
        </div>
    </div>
</section>



















    

 

   
    
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









