@extends('layouts.app')

@section('title', 'Student Life - St John of God University')

@section('content')
<!-- Hero Section with Interactive Slider -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-12">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-4">
            <i class="fas fa-users text-white text-2xl"></i>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Student <span class="text-yellow-300">Life</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Everything you need for a successful and enjoyable university experience
        </p>
    </div>
</section>

<!-- Interactive Image Slider/Carousel for Campus Life -->
<section class="py-12 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Campus <span class="text-red-600">Moments</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Take a visual tour of student life at St John of God University
            </p>
        </div>

        <!-- Interactive Slider/Carousel -->
        <div class="relative overflow-hidden rounded-2xl shadow-2xl">
            <!-- Main Slider Container -->
            <div id="campusSlider" class="relative h-[400px] md:h-[500px] lg:h-[550px]">
                <div class="absolute inset-0 flex transition-transform duration-500 ease-in-out" id="sliderTrack">
                    <!-- Slide 1 -->
                    <div class="w-full flex-shrink-0 relative">
                        <img src="{{ asset('images/carausel/carausel1.jpg') }}" alt="Students on campus" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-xl md:text-2xl font-bold">Vibrant Campus Life</h3>
                            <p class="text-sm md:text-base text-white/90">Students enjoying the beautiful campus environment</p>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="w-full flex-shrink-0 relative">
                        <img src="{{ asset('images/carausel/carausel3.jpg') }}" alt="Graduation Ceremony" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-xl md:text-2xl font-bold">Graduation Day</h3>
                            <p class="text-sm md:text-base text-white/90">Celebrating academic achievements with pride</p>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="w-full flex-shrink-0 relative">
                        <img src="{{ asset('images/carausel/campus_life.jpg') }}" alt="Group Study" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-xl md:text-2xl font-bold">Collaborative Learning</h3>
                            <p class="text-sm md:text-base text-white/90">Students engaged in group study sessions</p>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="w-full flex-shrink-0 relative">
                        <img src="{{ asset('images/carausel/campus_life2.jpg') }}" alt="Sports Activities" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-xl md:text-2xl font-bold">Sports & Recreation</h3>
                            <p class="text-sm md:text-base text-white/90">Staying active and building teamwork skills</p>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="w-full flex-shrink-0 relative">
                        <img src="{{ asset('images/carausel/computer_lab.jpg') }}" alt="Computer Lab" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-xl md:text-2xl font-bold">Modern Facilities</h3>
                            <p class="text-sm md:text-base text-white/90">State-of-the-art computer labs for students</p>
                        </div>
                    </div>
                    <!-- Slide 6 -->
                    <div class="w-full flex-shrink-0 relative">
                        <img src="{{ asset('images/carausel/counsel.jpg') }}" alt="Student Council" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-xl md:text-2xl font-bold">Student Leadership</h3>
                            <p class="text-sm md:text-base text-white/90">Student Council representing student voices</p>
                        </div>
                    </div>
                </div>

                <!-- Slider Navigation Buttons -->
                <button id="sliderPrev" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition-all hover:scale-110">
                    <i class="fas fa-chevron-left text-xl"></i>
                </button>
                <button id="sliderNext" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition-all hover:scale-110">
                    <i class="fas fa-chevron-right text-xl"></i>
                </button>

                <!-- Slider Dots/Indicators -->
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2" id="sliderDots"></div>

                <!-- Pause/Play Button -->
                <button id="playPauseBtn" class="absolute bottom-6 right-6 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full transition">
                    <i class="fas fa-pause text-sm"></i>
                </button>
            </div>
        </div>

        <!-- Thumbnail Navigation -->
        <div class="flex justify-center gap-2 mt-4 overflow-x-auto pb-2">
            <div class="thumbnail w-20 h-14 md:w-24 md:h-16 rounded-lg overflow-hidden cursor-pointer opacity-60 hover:opacity-100 transition" data-index="0">
                <img src="{{ asset('images/carausel/carausel1.jpg') }}" alt="Thumb 1" class="w-full h-full object-cover">
            </div>
            <div class="thumbnail w-20 h-14 md:w-24 md:h-16 rounded-lg overflow-hidden cursor-pointer opacity-60 hover:opacity-100 transition" data-index="1">
                <img src="{{ asset('images/carausel/carausel3.jpg') }}" alt="Thumb 2" class="w-full h-full object-cover">
            </div>
            <div class="thumbnail w-20 h-14 md:w-24 md:h-16 rounded-lg overflow-hidden cursor-pointer opacity-60 hover:opacity-100 transition" data-index="2">
                <img src="{{ asset('images/carausel/campus_life.jpg') }}" alt="Thumb 3" class="w-full h-full object-cover">
            </div>
            <div class="thumbnail w-20 h-14 md:w-24 md:h-16 rounded-lg overflow-hidden cursor-pointer opacity-60 hover:opacity-100 transition" data-index="3">
                <img src="{{ asset('images/carausel/campus_life2.jpg') }}" alt="Thumb 4" class="w-full h-full object-cover">
            </div>
            <div class="thumbnail w-20 h-14 md:w-24 md:h-16 rounded-lg overflow-hidden cursor-pointer opacity-60 hover:opacity-100 transition" data-index="4">
                <img src="{{ asset('images/carausel/computer_lab.jpg') }}" alt="Thumb 5" class="w-full h-full object-cover">
            </div>
            <div class="thumbnail w-20 h-14 md:w-24 md:h-16 rounded-lg overflow-hidden cursor-pointer opacity-60 hover:opacity-100 transition" data-index="5">
                <img src="{{ asset('images/carausel/counsel.jpg') }}" alt="Thumb 6" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Students section - Quick Access -->
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
            <div class="relative">
                <img src="{{ asset('images/carausel/carausel1.jpg') }}" alt="Students on campus" class="rounded-lg shadow-xl w-full h-[400px] object-cover">
                <div class="absolute -bottom-5 -left-5 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg">
                    <p class="text-2xl font-bold">500+</p>
                    <p class="text-sm">Active Students</p>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Quick Access</h3>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <a href="#" class="bg-white rounded-lg p-4 text-center hover:shadow-md transition border border-gray-100">
                        <i class="fas fa-user-graduate text-red-600 text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-800 text-sm">Student Portal</p>
                    </a>
                    <a href="#" class="bg-white rounded-lg p-4 text-center hover:shadow-md transition border border-gray-100">
                        <i class="fas fa-calendar-alt text-red-600 text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-800 text-sm">Academic Calendar</p>
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
                    <p class="text-gray-600 text-sm">Contact Student Affairs Office: <strong>+265 991 887 119</strong></p>
                    <p class="text-gray-600 text-sm mt-1">Email: <strong>collegehs@sjog.mw</strong></p>
                </div>
            </div>
        </div>

        <!-- Three Main Sections: Accommodation, Student Council, Things to Do -->
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('images/carausel/accomodation.jpg') }}" alt="Student Accommodation" class="w-full h-48 object-cover">
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
                    <button onclick="openAccommodationModal()" class="w-full bg-red-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-700 transition inline-flex items-center justify-center gap-2">
                        Apply for Accommodation <i class="fas fa-arrow-right text-xs"></i>
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('images/carausel/counsel.jpg') }}" alt="Student Council" class="w-full h-48 object-cover">
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
                </div>
            </div>

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
                </div>
            </div>
        </div>

        <!-- Additional Student Resources -->
        <div class="grid md:grid-cols-5 gap-4 mb-8">
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
                <i class="fas fa-heart text-red-600 text-2xl mb-2"></i>
                <p class="font-medium text-gray-800 text-sm">Psychosocial Support</p>
            </div>
            <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition">
                <i class="fas fa-church text-red-600 text-2xl mb-2"></i>
                <p class="font-medium text-gray-800 text-sm">Chaplaincy</p>
            </div>
        </div>
    </div>
</section>

<!-- Accommodation Application Modal -->
<div id="accommodationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-md w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-home text-xl"></i>
                <h3 class="text-xl font-bold">Accommodation Application</h3>
            </div>
            <button onclick="closeAccommodationModal()" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        
        <div class="p-6">
            <div class="bg-yellow-50 border-l-4 border-yellow-500 rounded-lg p-4 mb-4">
                <div class="flex items-center gap-2 mb-2">
                    <i class="fas fa-info-circle text-yellow-600"></i>
                    <span class="font-semibold text-yellow-700">Online Application Coming Soon</span>
                </div>
                <p class="text-sm text-gray-600">The online accommodation application system is currently under development. Please check back soon.</p>
            </div>
            
            <div class="mt-4 p-3 bg-gray-50 rounded-lg">
                <p class="text-xs text-center text-gray-500">
                    <i class="fas fa-clock mr-1"></i> Online applications will be available soon
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    // Interactive Slider Functionality
    const sliderTrack = document.getElementById('sliderTrack');
    const slides = sliderTrack ? sliderTrack.children.length : 0;
    let currentIndex = 0;
    let autoSlideInterval;
    let isPlaying = true;

    function updateSlider() {
        if (sliderTrack) {
            sliderTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
            updateDots();
            updateThumbnails();
        }
    }

    function nextSlide() {
        if (currentIndex < slides - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSlider();
        resetAutoSlide();
    }

    function prevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = slides - 1;
        }
        updateSlider();
        resetAutoSlide();
    }

    function createDots() {
        const dotsContainer = document.getElementById('sliderDots');
        if (dotsContainer) {
            dotsContainer.innerHTML = '';
            for (let i = 0; i < slides; i++) {
                const dot = document.createElement('button');
                dot.className = `w-2 h-2 rounded-full transition-all ${i === 0 ? 'bg-white w-6' : 'bg-white/50'}`;
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    updateSlider();
                    resetAutoSlide();
                });
                dotsContainer.appendChild(dot);
            }
        }
    }

    function updateDots() {
        const dots = document.querySelectorAll('#sliderDots button');
        dots.forEach((dot, i) => {
            if (i === currentIndex) {
                dot.className = 'w-6 h-2 rounded-full bg-white transition-all';
            } else {
                dot.className = 'w-2 h-2 rounded-full bg-white/50 transition-all';
            }
        });
    }

    function updateThumbnails() {
        const thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails.forEach((thumb, i) => {
            if (i === currentIndex) {
                thumb.classList.add('ring-2', 'ring-red-500');
                thumb.style.opacity = '1';
            } else {
                thumb.classList.remove('ring-2', 'ring-red-500');
                thumb.style.opacity = '0.6';
            }
        });
    }

    function startAutoSlide() {
        if (autoSlideInterval) clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(() => {
            if (isPlaying) {
                nextSlide();
            }
        }, 5000);
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    function togglePlayPause() {
        isPlaying = !isPlaying;
        const playPauseBtn = document.getElementById('playPauseBtn');
        const icon = playPauseBtn.querySelector('i');
        if (isPlaying) {
            icon.className = 'fas fa-pause text-sm';
            startAutoSlide();
        } else {
            icon.className = 'fas fa-play text-sm';
            clearInterval(autoSlideInterval);
        }
    }

    // Initialize slider
    if (sliderTrack && slides > 0) {
        createDots();
        startAutoSlide();
        
        const prevBtn = document.getElementById('sliderPrev');
        const nextBtn = document.getElementById('sliderNext');
        const playPauseBtn = document.getElementById('playPauseBtn');
        
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);
        if (playPauseBtn) playPauseBtn.addEventListener('click', togglePlayPause);
        
        // Thumbnail clicks
        const thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails.forEach((thumb, index) => {
            thumb.addEventListener('click', () => {
                currentIndex = index;
                updateSlider();
                resetAutoSlide();
            });
        });
        
        // Pause on hover
        const sliderContainer = document.getElementById('campusSlider');
        if (sliderContainer) {
            sliderContainer.addEventListener('mouseenter', () => {
                if (isPlaying) {
                    clearInterval(autoSlideInterval);
                }
            });
            sliderContainer.addEventListener('mouseleave', () => {
                if (isPlaying) {
                    startAutoSlide();
                }
            });
        }
    }

    // Modal functions
    function openAccommodationModal() {
        document.getElementById('accommodationModal').classList.remove('hidden');
        document.getElementById('accommodationModal').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    
    function closeAccommodationModal() {
        document.getElementById('accommodationModal').classList.add('hidden');
        document.getElementById('accommodationModal').classList.remove('flex');
        document.body.style.overflow = 'auto';
    }
    
    window.addEventListener('click', function(e) {
        const modal = document.getElementById('accommodationModal');
        if (e.target === modal) {
            closeAccommodationModal();
        }
    });
</script>
@endsection