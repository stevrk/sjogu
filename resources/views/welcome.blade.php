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
                            <a href="" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
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
                            <a href="" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
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
        <!-- Section Header -->
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">News & <span class="text-red-600">Announcements</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm">
                Stay updated with the latest news and announcements from St John of God University
            </p>
        </div>

        <div class="grid md:grid-cols-12 gap-5">
            <!-- COLUMN 1: Important Dates & Announcements -->
            <div class="md:col-span-3">
                <div class="bg-white rounded-lg shadow-md border border-gray-100 overflow-hidden mb-5">
    <div class="bg-red-600 text-white px-3 py-2.5">
        <h3 class="font-bold text-sm flex items-center gap-2">
            <i class="fas fa-calendar-alt text-xs"></i> Important Dates
        </h3>
    </div>
    <div class="p-3 space-y-2">
        @if(isset($importantDates) && $importantDates->count() > 0)
            @foreach($importantDates as $date)
                <div class="important-date-item border-b border-gray-100 pb-2 last:border-0 last:pb-0">
                    <!-- Click Area -->
                    <div class="date-click-area cursor-pointer" onclick="toggleDate(event, this)">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 flex-1 min-w-0">
                                <!-- Event Date with Year -->
                                <span class="event-date text-red-600 text-xs font-semibold whitespace-nowrap">
                                    @php
                                        $start = \Carbon\Carbon::parse($date->event_start_date ?? $date->display_start_date);
                                    @endphp
                                    
                                    @if($date->event_end_date)
                                        @php
                                            $end = \Carbon\Carbon::parse($date->event_end_date);
                                        @endphp
                                        @if($start->isSameDay($end))
                                            {{ $start->format('M d, Y') }}
                                        @elseif($start->year === $end->year && $start->month === $end->month)
                                            {{ $start->format('M d') }} - {{ $end->format('d, Y') }}
                                        @elseif($start->year === $end->year)
                                            {{ $start->format('M d') }} - {{ $end->format('M d, Y') }}
                                        @else
                                            {{ $start->format('M d, Y') }} - {{ $end->format('M d, Y') }}
                                        @endif
                                    @else
                                        {{ $start->format('M d, Y') }}
                                    @endif
                                </span>
                                
                                <!-- Title -->
                                <span class="title-text text-xs font-medium text-gray-700 truncate">{{ $date->title }}</span>
                            </div>
                            
                            <!-- Chevron Icon -->
                            <i class="fas fa-chevron-down text-gray-400 text-[10px] flex-shrink-0 ml-2 transition-transform duration-300"></i>
                        </div>
                        
                        <!-- Tap to read more hint -->
                        <div class="text-[10px] text-gray-400 mt-0.5 ml-[77px]">
                            Tap to read more
                        </div>
                    </div>
                    
                    <!-- Description (Hidden by default) -->
                    @if($date->description)
                        <div class="description-content pl-[77px] pr-2 text-xs text-gray-600 leading-relaxed" style="display: none;">
                            {{ $date->description }}
                        </div>
                    @endif
                </div>
            @endforeach
        @else
            <div class="text-center text-gray-500 text-xs py-2">
                No upcoming important dates
            </div>
        @endif
    </div>
</div>

<script>
    function toggleDate(event, element) {
        // Get the parent item
        const item = element.closest('.important-date-item');
        if (!item) return;
        
        const description = item.querySelector('.description-content');
        const chevron = item.querySelector('.fa-chevron-down');
        
        if (description) {
            // Toggle the description
            if (description.style.display === 'none' || description.style.display === '') {
                description.style.display = 'block';
                if (chevron) {
                    chevron.style.transform = 'rotate(180deg)';
                }
            } else {
                description.style.display = 'none';
                if (chevron) {
                    chevron.style.transform = 'rotate(0deg)';
                }
            }
        }
    }
</script>

<style>
    .important-date-item .date-click-area {
        cursor: pointer;
        padding: 4px 0;
    }
    
    .important-date-item .date-click-area:hover {
        background-color: #f9fafb;
        border-radius: 8px;
        margin: 0 -8px;
        padding: 4px 8px;
    }
    
    .important-date-item .description-content {
        transition: all 0.3s ease;
        padding-top: 4px;
    }
    
    .important-date-item .fa-chevron-down {
        transition: transform 0.3s ease;
    }
</style>
 <!-- Announcements -->
 <div class="bg-white rounded-lg shadow-md border border-gray-100 overflow-hidden">
    <div class="bg-red-600 text-white px-3 py-2.5">
        <h3 class="font-bold text-sm flex items-center gap-2">
            <i class="fas fa-bullhorn text-xs"></i> Announcements
        </h3>
    </div>
    <div class="p-3 space-y-2">
        @if(isset($announcements) && $announcements->count() > 0)
            @foreach($announcements as $announcement)
                <div class="announcement-item border-b border-gray-100 pb-2 last:border-0 last:pb-0">
                    <!-- Click Area -->
                    <div class="announcement-click-area cursor-pointer" onclick="toggleAnnouncement(event, this)">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 flex-1 min-w-0">
                                <!-- Title with limit -->
                                <span class="announcement-title text-xs font-medium text-gray-700 truncate">
                                    {{ Str::limit($announcement->title, 60) }}
                                </span>
                            </div>
                            
                            <!-- Chevron Icon -->
                            <i class="fas fa-chevron-down text-gray-400 text-[10px] flex-shrink-0 ml-2 transition-transform duration-300"></i>
                        </div>
                        
                        <!-- Tap to read more hint -->
                        <div class="text-[10px] text-gray-400 mt-0.5">
                            Tap to read more
                        </div>
                    </div>
                    
                    <!-- Description (Hidden by default) -->
                    @if($announcement->description)
                        <div class="announcement-description pl-2 pr-2 text-xs text-gray-600 leading-relaxed" style="display: none; padding-top: 4px;">
                            {{ $announcement->description }}
                        </div>
                    @endif
                </div>
            @endforeach
        @else
            <div class="text-center text-gray-500 text-xs py-2">
                No announcements available
            </div>
        @endif
    </div>
</div>

<script>
    function toggleAnnouncement(event, element) {
        // Get the parent item
        const item = element.closest('.announcement-item');
        if (!item) return;
        
        const description = item.querySelector('.announcement-description');
        const chevron = item.querySelector('.fa-chevron-down');
        
        if (description) {
            // Toggle the description
            if (description.style.display === 'none' || description.style.display === '') {
                description.style.display = 'block';
                if (chevron) {
                    chevron.style.transform = 'rotate(180deg)';
                }
            } else {
                description.style.display = 'none';
                if (chevron) {
                    chevron.style.transform = 'rotate(0deg)';
                }
            }
        }
    }
</script>

<style>
    .announcement-item .announcement-click-area {
        cursor: pointer;
        padding: 4px 0;
    }
    
    .announcement-item .announcement-click-area:hover {
        background-color: #f9fafb;
        border-radius: 8px;
        margin: 0 -8px;
        padding: 4px 8px;
    }
    
    .announcement-item .announcement-description {
        transition: all 0.3s ease;
        padding-top: 4px;
    }
    
    .announcement-item .fa-chevron-down {
        transition: transform 0.3s ease;
    }
    
    .announcement-item .announcement-title {
        font-weight: 500;
    }
</style>


</div>

            <!-- COLUMN 2,3,4: News Articles (Dynamic) -->
            @if(isset($latestNews) && $latestNews->count() > 0)
                @foreach($latestNews as $index => $news)
                    <div class="md:col-span-3">
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 h-full">
                            @if($news->image)
                                <img src="{{ asset('storage/'. $news->image) }}" alt="{{ $news->title }}" class="w-full h-32 object-cover">
                            @else
                                <div class="w-full h-32 bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center">
                                    <i class="fas fa-newspaper text-white text-2xl opacity-50"></i>
                                </div>
                            @endif
                            <div class="p-3">
                                <div class="flex items-center gap-2 text-xs text-gray-500 mb-1">
                                    <span><i class="far fa-calendar-alt mr-1"></i> {{ $news->date->format('M d, Y') }}</span>
                                    @if($news->is_featured)
                                        <span class="bg-red-100 text-red-600 px-1.5 py-0.5 rounded text-xs">Featured</span>
                                    @endif
                                    @if($news->category)
                                        <span class="bg-{{ $news->category_color ?? 'red' }}-100 text-{{ $news->category_color ?? 'red' }}-600 px-1.5 py-0.5 rounded text-xs">{{ $news->category }}</span>
                                    @endif
                                </div>
                                <h3 class="text-sm font-bold text-gray-800 mb-1 hover:text-red-600 transition">
                                    <a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a>
                                </h3>
                                <p class="text-gray-600 text-xs mb-2">{{ $news->excerpt ?? Str::limit(strip_tags($news->content), 80) }}</p>
                                <a href="{{ route('news.show', $news->slug) }}" class="text-red-600 text-xs font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
                                    Read More <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback if no news in database -->
                <div class="md:col-span-9">
                    <div class="bg-white rounded-lg shadow-md p-8 text-center">
                        <i class="fas fa-newspaper text-gray-300 text-4xl mb-3"></i>
                        <p class="text-gray-500 text-sm">No news articles found.</p>
                    </div>
                </div>
            @endif
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









