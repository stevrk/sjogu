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

<!-- History of the Library Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">History of the <span class="text-red-600">Library</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                A legacy of knowledge and learning at St John of God University
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <p class="text-gray-600 leading-relaxed mb-4">
                    The Myles Crofton Library was established in 2003 alongside the founding of St John of God University. Named in honor of a distinguished benefactor whose vision was to create a center of academic excellence, the library has grown from a small collection of textbooks to a comprehensive resource center serving the entire university community.
                </p>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Over the past two decades, the library has continuously evolved to meet the changing needs of students and faculty. From traditional print collections to digital resources, the Myles Crofton Library has remained at the forefront of academic support, providing access to thousands of books, journals, and online databases.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Today, the library stands as a testament to the university's commitment to academic excellence, serving as the intellectual hub where students, researchers, and faculty come together to learn, discover, and innovate.
                </p>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('images/carausel/library1.jpg') }}" alt="Myles Crofton Library History" class="rounded-xl shadow-lg w-full h-[350px] object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Opening Hours, Services & Resources - Horizontal Layout -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Opening Hours -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
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
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                <div class="bg-red-600 text-white px-6 py-4">
                    <h2 class="text-xl font-bold flex items-center gap-2">
                        <i class="fas fa-concierge-bell"></i>
                        Library Services
                    </h2>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg hover:bg-red-50 transition">
                            <i class="fas fa-search text-red-600 text-lg mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">Catalogs & Search</h3>
                                <p class="text-sm text-gray-600">Search our digital catalog for books, journals, and research materials</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg hover:bg-red-50 transition">
                            <i class="fas fa-database text-red-600 text-lg mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">Archives & Repositories</h3>
                                <p class="text-sm text-gray-600">Access past exam papers, theses, and institutional repositories</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg hover:bg-red-50 transition">
                            <i class="fas fa-chalkboard-user text-red-600 text-lg mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">Research Support</h3>
                                <p class="text-sm text-gray-600">Get expert help from our librarians for your research projects</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg hover:bg-red-50 transition">
                            <i class="fas fa-wifi text-red-600 text-lg mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">Digital Resources</h3>
                                <p class="text-sm text-gray-600">Free high-speed Wi-Fi and access to e-books, e-journals, and databases</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Library Resources -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                <div class="bg-red-600 text-white px-6 py-4">
                    <h2 class="text-xl font-bold flex items-center gap-2">
                        <i class="fas fa-book-open"></i>
                        Library Resources
                    </h2>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-lg hover:bg-red-50 transition">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-book text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-800">20,000+</p>
                                <p class="text-sm text-gray-600">Print Books</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-lg hover:bg-red-50 transition">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-laptop text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-800">10,000+</p>
                                <p class="text-sm text-gray-600">E-Books</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-lg hover:bg-red-50 transition">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-journal-whills text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-800">100+</p>
                                <p class="text-sm text-gray-600">Journal Subscriptions</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-lg hover:bg-red-50 transition">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-database text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-800">15+</p>
                                <p class="text-sm text-gray-600">Online Databases</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Library Announcements Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Library <span class="text-red-600">Announcements</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600">Stay updated with the latest library news and events</p>
        </div>

        <div class="space-y-4">
            <div class="bg-gray-50 rounded-lg p-5 border-l-4 border-red-600 hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">New E-Book Collection Added</h3>
                        <p class="text-sm text-gray-600 mt-1">We've added 500+ new e-books to our digital collection in health sciences.</p>
                    </div>
                    <span class="text-xs text-gray-400">March 15, 2026</span>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-5 border-l-4 border-red-600 hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Extended Hours During Exam Week</h3>
                        <p class="text-sm text-gray-600 mt-1">Library will remain open until midnight during exam period (May 5-20).</p>
                    </div>
                    <span class="text-xs text-gray-400">March 10, 2026</span>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-5 border-l-4 border-red-600 hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Research Skills Workshop</h3>
                        <p class="text-sm text-gray-600 mt-1">Join our free workshop on academic research and citation management.</p>
                    </div>
                    <span class="text-xs text-gray-400">March 5, 2026</span>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-5 border-l-4 border-red-600 hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Library System Maintenance</h3>
                        <p class="text-sm text-gray-600 mt-1">Scheduled maintenance on April 10, 2026. Online services may be temporarily unavailable.</p>
                    </div>
                    <span class="text-xs text-gray-400">March 1, 2026</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Talk to the Librarian Feature -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto max-w-4xl">
        <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-2xl shadow-lg overflow-hidden">
            <div class="p-8 text-center text-white">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 rounded-full mb-4">
                    <i class="fas fa-comments text-white text-3xl"></i>
                </div>
                <h2 class="text-3xl font-bold mb-3">Talk to the Librarian</h2>
                <p class="text-red-100 mb-8 max-w-2xl mx-auto">Need help finding resources or have a question? Our librarians are here to assist you.</p>
                
                <div class="grid md:grid-cols-3 gap-4 text-left">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/265991887119" target="_blank" class="bg-white/10 backdrop-blur-sm rounded-lg p-4 hover:bg-white/20 transition">
                        <div class="flex items-center gap-3">
                            <i class="fab fa-whatsapp text-2xl text-green-300"></i>
                            <div>
                                <p class="font-semibold text-sm">WhatsApp</p>
                                <p class="text-xs text-red-100">+265 991 887 119</p>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Email -->
                    <a href="mailto:library@sjogu.edu" class="bg-white/10 backdrop-blur-sm rounded-lg p-4 hover:bg-white/20 transition">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-envelope text-2xl text-yellow-300"></i>
                            <div>
                                <p class="font-semibold text-sm">Email</p>
                                <p class="text-xs text-red-100">library@sjog.mw</p>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Phone -->
                    <a href="tel:+265991887119" class="bg-white/10 backdrop-blur-sm rounded-lg p-4 hover:bg-white/20 transition">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone-alt text-2xl text-yellow-300"></i>
                            <div>
                                <p class="font-semibold text-sm">Call Us</p>
                                <p class="text-xs text-red-100">+265 991 887 119</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- Enquiry Form -->
                <div class="mt-8 pt-6 border-t border-white/20">
                    <p class="text-sm text-red-100 mb-4">Or send us a message and we'll get back to you:</p>
                    <form action="#" method="POST" class="space-y-3 max-w-2xl mx-auto">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-3">
                            <input type="text" name="name" placeholder="Your Name" class="px-4 py-2.5 rounded-lg text-gray-900 text-sm">
                            <input type="email" name="email" placeholder="Your Email" class="px-4 py-2.5 rounded-lg text-gray-900 text-sm">
                        </div>
                        <select name="inquiry_type" class="w-full px-4 py-2.5 rounded-lg text-gray-900 text-sm">
                            <option value="">Select Inquiry Type</option>
                            <option value="research">Research Assistance</option>
                            <option value="resources">Resource Request</option>
                            <option value="announcement">Library Announcement</option>
                            <option value="other">Other</option>
                        </select>
                        <textarea name="message" rows="3" placeholder="Your Message" class="w-full px-4 py-2.5 rounded-lg text-gray-900 text-sm"></textarea>
                        <button type="submit" class="w-full bg-yellow-500 text-gray-900 py-2.5 rounded-lg font-semibold hover:bg-yellow-400 transition">
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

<!-- Library Staff Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Library <span class="text-red-600">Staff</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Meet our dedicated library team ready to assist you</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Staff Member 1 -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition border border-gray-100">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('images/staff/librarian1.jpg') }}" alt="Head Librarian" class="w-full h-full object-cover">
                </div>
                <div class="p-5 text-center">
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
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition border border-gray-100">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('images/staff/librarian2.jpg') }}" alt="Assistant Librarian" class="w-full h-full object-cover">
                </div>
                <div class="p-5 text-center">
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
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition border border-gray-100">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('images/staff/librarian3.jpg') }}" alt="Library Assistant" class="w-full h-full object-cover">
                </div>
                <div class="p-5 text-center">
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

<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Library <span class="text-red-600">Gallery</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Explore our modern library facilities and spaces
            </p>
        </div>

        <!-- Simple Carousel -->
        <div class="relative overflow-hidden rounded-2xl shadow-2xl bg-black" id="galleryCarousel">
            <!-- Main Image Display -->
            <div class="relative" id="carouselContainer">
                <img src="{{ asset('images/carausel/library2.jpg') }}" 
                     alt="Library Main Hall" 
                     id="carouselImage"
                     class="w-full h-[350px] md:h-[450px] object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                    <h3 id="carouselCaption" class="text-xl md:text-2xl font-bold text-white">Library Main Hall</h3>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button id="prevSlide" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition hover:scale-110">
                <i class="fas fa-chevron-left text-xl"></i>
            </button>
            <button id="nextSlide" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition hover:scale-110">
                <i class="fas fa-chevron-right text-xl"></i>
            </button>

            <!-- Dots Indicator -->
            <div class="absolute bottom-20 left-1/2 -translate-x-1/2 flex gap-2" id="dotsContainer">
                <span class="dot active w-3 h-3 bg-white rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white/50 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white/50 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white/50 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white/50 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white/50 rounded-full cursor-pointer"></span>
            </div>
        </div>

        <!-- Thumbnails -->
        <div class="grid grid-cols-3 md:grid-cols-6 gap-3 mt-4">
            <div class="thumbnail-item cursor-pointer rounded-lg overflow-hidden shadow-md hover:shadow-xl transition hover:scale-105" data-index="0">
                <img src="{{ asset('images/carausel/library2.jpg') }}" alt="Main Hall" class="w-full h-16 object-cover">
            </div>
            <div class="thumbnail-item cursor-pointer rounded-lg overflow-hidden shadow-md hover:shadow-xl transition hover:scale-105" data-index="1">
                <img src="{{ asset('images/carausel/library3.jpg') }}" alt="Study Area" class="w-full h-16 object-cover">
            </div>
            <div class="thumbnail-item cursor-pointer rounded-lg overflow-hidden shadow-md hover:shadow-xl transition hover:scale-105" data-index="2">
                <img src="{{ asset('images/carausel/library4.jpg') }}" alt="Computer Lab" class="w-full h-16 object-cover">
            </div>
            <div class="thumbnail-item cursor-pointer rounded-lg overflow-hidden shadow-md hover:shadow-xl transition hover:scale-105" data-index="3">
                <img src="{{ asset('images/carausel/library5.jpg') }}" alt="Book Stacks" class="w-full h-16 object-cover">
            </div>
            <div class="thumbnail-item cursor-pointer rounded-lg overflow-hidden shadow-md hover:shadow-xl transition hover:scale-105" data-index="4">
                <img src="{{ asset('images/carausel/library6.jpg') }}" alt="Study Room" class="w-full h-16 object-cover">
            </div>
            <div class="thumbnail-item cursor-pointer rounded-lg overflow-hidden shadow-md hover:shadow-xl transition hover:scale-105" data-index="5">
                <img src="{{ asset('images/carausel/library8.jpg') }}" alt="Reading Area" class="w-full h-16 object-cover">
            </div>
        </div>
    </div>
</section>

<script>
    // Gallery Data
    const galleryImages = [
        { src: "{{ asset('images/carausel/library2.jpg') }}", caption: "Library Main Hall" },
        { src: "{{ asset('images/carausel/library3.jpg') }}", caption: "Quiet Study Area" },
        { src: "{{ asset('images/carausel/library4.jpg') }}", caption: "Computer Lab" },
        { src: "{{ asset('images/carausel/library5.jpg') }}", caption: "Book Stacks" },
        { src: "{{ asset('images/carausel/library6.jpg') }}", caption: "Group Study Room" },
        { src: "{{ asset('images/carausel/library8.jpg') }}", caption: "Reading Area" }
    ];

    let currentSlide = 0;
    const carouselImage = document.getElementById('carouselImage');
    const carouselCaption = document.getElementById('carouselCaption');
    const dots = document.querySelectorAll('.dot');
    const thumbnails = document.querySelectorAll('.thumbnail-item');

    // Update slide
    function updateSlide(index) {
        currentSlide = index;
        carouselImage.src = galleryImages[index].src;
        carouselImage.alt = galleryImages[index].caption;
        carouselCaption.textContent = galleryImages[index].caption;

        // Update dots
        dots.forEach((dot, i) => {
            dot.className = `dot w-3 h-3 rounded-full cursor-pointer ${i === currentSlide ? 'bg-white' : 'bg-white/50'}`;
        });

        // Update thumbnails
        thumbnails.forEach((thumb, i) => {
            thumb.className = `thumbnail-item cursor-pointer rounded-lg overflow-hidden shadow-md hover:shadow-xl transition hover:scale-105 ${i === currentSlide ? 'ring-2 ring-red-600 ring-offset-2' : ''}`;
        });
    }

    // Next slide
    function nextSlide() {
        const next = (currentSlide + 1) % galleryImages.length;
        updateSlide(next);
    }

    // Previous slide
    function prevSlide() {
        const prev = (currentSlide - 1 + galleryImages.length) % galleryImages.length;
        updateSlide(prev);
    }

    // Event Listeners
    document.getElementById('nextSlide').addEventListener('click', nextSlide);
    document.getElementById('prevSlide').addEventListener('click', prevSlide);

    // Dot clicks
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => updateSlide(index));
    });

    // Thumbnail clicks
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener('click', () => updateSlide(index));
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') prevSlide();
        if (e.key === 'ArrowRight') nextSlide();
    });

    // Auto-slide
    let autoSlide = setInterval(nextSlide, 5000);

    // Pause on hover
    const carousel = document.getElementById('galleryCarousel');
    carousel.addEventListener('mouseenter', () => clearInterval(autoSlide));
    carousel.addEventListener('mouseleave', () => {
        autoSlide = setInterval(nextSlide, 5000);
    });

    // Initialize
    updateSlide(0);
</script>

<style>
    .dot {
        transition: all 0.3s ease;
    }
    .dot:hover {
        transform: scale(1.2);
    }
    .thumbnail-item {
        transition: all 0.3s ease;
    }
    .thumbnail-item:hover {
        transform: scale(1.05);
    }
    .ring-2 {
        ring: 2px solid #dc2626;
    }
    .ring-offset-2 {
        ring-offset: 2px;
    }
    #carouselImage {
        transition: opacity 0.5s ease;
    }
</style>


@endsection