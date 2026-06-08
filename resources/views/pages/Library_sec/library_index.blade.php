@extends('layouts.app')

@section('title', 'The Myles Crofton Library - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-12">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-4">
            <i class="fas fa-book text-white text-2xl"></i>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold mb-4">The Myles Crofton <span class="text-yellow-300">Library</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Your gateway to knowledge, research, and academic excellence
        </p>
    </div>
</section>

<!-- Image Slider Carousel (Redesigned - Compact) -->
<section class="py-8 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="relative overflow-hidden rounded-xl shadow-lg">
            <!-- Slider Container -->
            <div id="librarySlider" class="relative h-64 md:h-80 lg:h-96">
                <div class="absolute inset-0 flex transition-transform duration-500 ease-in-out" id="sliderTrack">
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('images/carausel/library2.jpg') }}" alt="Library Main Hall" class="w-full h-64 md:h-80 lg:h-96 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <p class="text-white text-sm md:text-base font-semibold">Library Main Hall</p>
                        </div>
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('images/carausel/library3.jpg') }}" alt="Study Area" class="w-full h-64 md:h-80 lg:h-96 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <p class="text-white text-sm md:text-base font-semibold">Quiet Study Area</p>
                        </div>
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('images/carausel/library4.jpg') }}" alt="Computer Lab" class="w-full h-64 md:h-80 lg:h-96 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <p class="text-white text-sm md:text-base font-semibold">Computer Lab</p>
                        </div>
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('images/carausel/library5.jpg') }}" alt="Book Stacks" class="w-full h-64 md:h-80 lg:h-96 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <p class="text-white text-sm md:text-base font-semibold">Book Stacks</p>
                        </div>
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('images/carausel/library6.jpg') }}" alt="Group Study Room" class="w-full h-64 md:h-80 lg:h-96 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <p class="text-white text-sm md:text-base font-semibold">Group Study Room</p>
                        </div>
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('images/carausel/library8.jpg') }}" alt="Reading Area" class="w-full h-64 md:h-80 lg:h-96 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <p class="text-white text-sm md:text-base font-semibold">Reading Area</p>
                        </div>
                    </div>
                </div>
                
                <!-- Slider Navigation Buttons -->
                <button id="sliderPrev" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full transition">
                    <i class="fas fa-chevron-left text-xl"></i>
                </button>
                <button id="sliderNext" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full transition">
                    <i class="fas fa-chevron-right text-xl"></i>
                </button>
                
                <!-- Slider Dots -->
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2" id="sliderDots"></div>
            </div>
        </div>
    </div>
</section>

<!-- Opening Hours & Library Services (Primary Focus - Top of Page) -->
<section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Opening Hours -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-red-600 text-white px-6 py-4">
                    <h2 class="text-xl font-bold flex items-center gap-2">
                        <i class="fas fa-clock"></i>
                        Opening Hours
                    </h2>
                </div>
                <div class="p-6">
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b">
                            <span class="text-gray-700 font-semibold">Monday - Thursday</span>
                            <span class="text-gray-800">8:00 AM - 10:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b">
                            <span class="text-gray-700 font-semibold">Friday</span>
                            <span class="text-gray-800">8:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b">
                            <span class="text-gray-700 font-semibold">Saturday</span>
                            <span class="text-gray-800">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b">
                            <span class="text-gray-700 font-semibold">Sunday</span>
                            <span class="text-gray-800">2:00 PM - 8:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b">
                            <span class="text-gray-700 font-semibold">Exam Week</span>
                            <span class="text-red-600 font-semibold">Extended Hours</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-700 font-semibold">24/7 Study Area</span>
                            <span class="text-green-600 font-semibold">Available</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Library Services -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-red-600 text-white px-6 py-4">
                    <h2 class="text-xl font-bold flex items-center gap-2">
                        <i class="fas fa-concierge-bell"></i>
                        Library Services
                    </h2>
                </div>
                <div class="p-6">
                    <div class="grid gap-4">
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                            <i class="fas fa-search text-red-600 text-lg mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">Catalogs & Search</h3>
                                <p class="text-sm text-gray-600">Search our digital catalog for books, journals, and research materials</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                            <i class="fas fa-database text-red-600 text-lg mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">Archives & Repositories</h3>
                                <p class="text-sm text-gray-600">Access past exam papers, theses, and institutional repositories</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                            <i class="fas fa-chalkboard-user text-red-600 text-lg mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">Research Support</h3>
                                <p class="text-sm text-gray-600">Get expert help from our librarians for your research projects</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                            <i class="fas fa-wifi text-red-600 text-lg mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">Digital Resources</h3>
                                <p class="text-sm text-gray-600">Free high-speed Wi-Fi and access to e-books, e-journals, and databases</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Library Resources Section -->
<section class="py-12 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Library <span class="text-red-600">Resources</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Explore our extensive collection of academic resources</p>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <div class="text-center p-4 bg-gray-50 rounded-lg hover:shadow-lg transition">
                <i class="fas fa-book text-3xl text-red-600 mb-2"></i>
                <p class="text-2xl font-bold text-gray-800">20,000+</p>
                <p class="text-sm text-gray-600">Print Books</p>
            </div>
            <div class="text-center p-4 bg-gray-50 rounded-lg hover:shadow-lg transition">
                <i class="fas fa-laptop text-3xl text-red-600 mb-2"></i>
                <p class="text-2xl font-bold text-gray-800">10,000+</p>
                <p class="text-sm text-gray-600">E-Books</p>
            </div>
            <div class="text-center p-4 bg-gray-50 rounded-lg hover:shadow-lg transition">
                <i class="fas fa-journal-whills text-3xl text-red-600 mb-2"></i>
                <p class="text-2xl font-bold text-gray-800">100+</p>
                <p class="text-sm text-gray-600">Journal Subscriptions</p>
            </div>
            <div class="text-center p-4 bg-gray-50 rounded-lg hover:shadow-lg transition">
                <i class="fas fa-database text-3xl text-red-600 mb-2"></i>
                <p class="text-2xl font-bold text-gray-800">15+</p>
                <p class="text-sm text-gray-600">Online Databases</p>
            </div>
        </div>
    </div>
</section>

<!-- Library Staff Section -->
<section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Library <span class="text-red-600">Staff</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Meet our dedicated library team ready to assist you</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Staff Member 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/staff/librarian1.jpg') }}" alt="Head Librarian" class="w-full h-full object-cover">
                </div>
                <div class="p-4 text-center">
                    <h3 class="font-bold text-lg text-gray-800">Mrs. Jane Banda</h3>
                    <p class="text-red-600 text-sm font-semibold">Head Librarian</p>
                    <p class="text-gray-500 text-xs mt-1">MLIS, University of Malawi</p>
                    <p class="text-gray-600 text-sm mt-2">15+ years of experience in library management and information services.</p>
                    <div class="flex justify-center gap-3 mt-3">
                        <a href="mailto:j.banda@sjogu.edu" class="text-red-600 hover:text-red-700"><i class="fas fa-envelope"></i></a>
                        <a href="tel:+265991887119" class="text-red-600 hover:text-red-700"><i class="fas fa-phone-alt"></i></a>
                    </div>
                </div>
            </div>

            <!-- Staff Member 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/staff/librarian2.jpg') }}" alt="Assistant Librarian" class="w-full h-full object-cover">
                </div>
                <div class="p-4 text-center">
                    <h3 class="font-bold text-lg text-gray-800">Mr. Michael Phiri</h3>
                    <p class="text-red-600 text-sm font-semibold">Assistant Librarian</p>
                    <p class="text-gray-500 text-xs mt-1">BSc in Library Science</p>
                    <p class="text-gray-600 text-sm mt-2">Specializes in digital resources and research support services.</p>
                    <div class="flex justify-center gap-3 mt-3">
                        <a href="mailto:m.phiri@sjogu.edu" class="text-red-600 hover:text-red-700"><i class="fas fa-envelope"></i></a>
                        <a href="tel:+265991887119" class="text-red-600 hover:text-red-700"><i class="fas fa-phone-alt"></i></a>
                    </div>
                </div>
            </div>

            <!-- Staff Member 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/staff/librarian3.jpg') }}" alt="Library Assistant" class="w-full h-full object-cover">
                </div>
                <div class="p-4 text-center">
                    <h3 class="font-bold text-lg text-gray-800">Ms. Grace Mwale</h3>
                    <p class="text-red-600 text-sm font-semibold">Library Assistant</p>
                    <p class="text-gray-500 text-xs mt-1">Diploma in Library Studies</p>
                    <p class="text-gray-600 text-sm mt-2">Handles circulation desk and user support services.</p>
                    <div class="flex justify-center gap-3 mt-3">
                        <a href="mailto:g.mwale@sjogu.edu" class="text-red-600 hover:text-red-700"><i class="fas fa-envelope"></i></a>
                        <a href="tel:+265991887119" class="text-red-600 hover:text-red-700"><i class="fas fa-phone-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Talk to the Librarian Feature -->
<section class="py-12 px-4 md:px-16 bg-white">
    <div class="container mx-auto max-w-3xl">
        <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 text-center text-white">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-4">
                    <i class="fas fa-comments text-white text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold mb-2">Talk to the Librarian</h2>
                <p class="text-red-100 mb-6">Need help finding resources or have a question? Our librarians are here to assist you.</p>
                
                <div class="grid md:grid-cols-3 gap-4 text-left">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/265991887119" target="_blank" class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition">
                        <div class="flex items-center gap-3">
                            <i class="fab fa-whatsapp text-xl text-green-300"></i>
                            <div>
                                <p class="font-semibold text-sm">WhatsApp</p>
                                <p class="text-xs text-red-100">+265 991 887 119</p>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Email -->
                    <a href="mailto:library@sjogu.edu" class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-envelope text-xl text-yellow-300"></i>
                            <div>
                                <p class="font-semibold text-sm">Email</p>
                                <p class="text-xs text-red-100">library@sjog.mw</p>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Phone -->
                    <a href="tel:+265991887119" class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone-alt text-xl text-yellow-300"></i>
                            <div>
                                <p class="font-semibold text-sm">Call Us</p>
                                <p class="text-xs text-red-100">+265 991 887 119</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- Enquiry Form (Provision for future activation) -->
                <div class="mt-6 pt-4 border-t border-white/20">
                    <p class="text-sm text-red-100 mb-3">Or send us a message and we'll get back to you:</p>
                    <form action="#" method="POST" class="space-y-3">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-3">
                            <input type="text" name="name" placeholder="Your Name" class="px-3 py-2 rounded-lg text-gray-900 text-sm">
                            <input type="email" name="email" placeholder="Your Email" class="px-3 py-2 rounded-lg text-gray-900 text-sm">
                        </div>
                        <select name="inquiry_type" class="w-full px-3 py-2 rounded-lg text-gray-900 text-sm">
                            <option value="">Select Inquiry Type</option>
                            <option value="research">Research Assistance</option>
                            <option value="resources">Resource Request</option>
                            <option value="announcement">Library Announcement</option>
                            <option value="other">Other</option>
                        </select>
                        <textarea name="message" rows="3" placeholder="Your Message" class="w-full px-3 py-2 rounded-lg text-gray-900 text-sm"></textarea>
                        <button type="submit" class="w-full bg-yellow-500 text-gray-900 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition">
                            Send Message
                        </button>
                    </form>
                    <p class="text-xs text-red-200 mt-3 text-center">
                        <i class="fas fa-lock mr-1"></i> Your information will be kept confidential
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About the Library Section (Lower on the page) -->
<section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">About the <span class="text-red-600">Library</span></h2>
                <div class="w-20 h-1 bg-red-600 rounded-full mb-4"></div>
                <p class="text-gray-600 mb-4">
                    The Myles Crofton Library at St John of God University is a modern, well-equipped facility named in honor of a distinguished benefactor. Designed to support your academic journey, it offers thousands of books, journals, and digital resources in a conducive environment for learning and research.
                </p>
                <p class="text-gray-600 mb-4">
                    Our library serves as the intellectual hub of the university, providing students and faculty with access to a vast collection of resources, both physical and digital.
                </p>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-book text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">20,000+ Print Books</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-laptop text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">10,000+ E-Books</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-journal-whills text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">100+ Journal Subscriptions</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-wifi text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Free High-Speed Wi-Fi</span>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/lib2.jpg') }}" alt="Library Interior" class="rounded-xl shadow-lg w-full h-80 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Library Announcements Section (Admin updatable) -->
<section class="py-12 px-4 md:px-16 bg-white">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Library <span class="text-red-600">Announcements</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600">Stay updated with the latest library news and events</p>
        </div>

        <div class="space-y-4">
            <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-red-600">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">New E-Book Collection Added</h3>
                        <p class="text-sm text-gray-600 mt-1">We've added 500+ new e-books to our digital collection in health sciences.</p>
                    </div>
                    <span class="text-xs text-gray-400">March 15, 2026</span>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-red-600">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Extended Hours During Exam Week</h3>
                        <p class="text-sm text-gray-600 mt-1">Library will remain open until midnight during exam period (May 5-20).</p>
                    </div>
                    <span class="text-xs text-gray-400">March 10, 2026</span>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-red-600">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Research Skills Workshop</h3>
                        <p class="text-sm text-gray-600 mt-1">Join our free workshop on academic research and citation management.</p>
                    </div>
                    <span class="text-xs text-gray-400">March 5, 2026</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Image Slider Functionality
    const sliderTrack = document.getElementById('sliderTrack');
    const slides = sliderTrack ? sliderTrack.children.length : 0;
    let currentIndex = 0;
    let autoSlideInterval;

    function updateSlider() {
        if (sliderTrack) {
            sliderTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
            updateDots();
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
            for (let i = 0; i < slides; i++) {
                const dot = document.createElement('button');
                dot.className = `w-2 h-2 rounded-full transition-all ${i === 0 ? 'bg-white w-4' : 'bg-white/50'}`;
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
                dot.className = 'w-4 h-2 rounded-full bg-white transition-all';
            } else {
                dot.className = 'w-2 h-2 rounded-full bg-white/50 transition-all';
            }
        });
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            nextSlide();
        }, 5000);
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    // Initialize slider
    if (sliderTrack && slides > 0) {
        createDots();
        startAutoSlide();
        
        const prevBtn = document.getElementById('sliderPrev');
        const nextBtn = document.getElementById('sliderNext');
        
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);
        
        // Pause on hover
        const sliderContainer = document.getElementById('librarySlider');
        if (sliderContainer) {
            sliderContainer.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
            sliderContainer.addEventListener('mouseleave', startAutoSlide);
        }
    }
</script>
@endsection