@extends('layouts.app')

@section('title', 'About Us - St John of God University')

@section('content')
<!-- Hero Section -->

<!-- History Section -->
<section id="history" class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Our <span class="text-red-600">History</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-500 max-w-2xl mx-auto">The journey of excellence in healthcare education</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <p class="text-gray-600 leading-relaxed mb-4 text-center">
                    St. John of God University (SJOGU) was established in 2003 as a training institution of higher learning for health professionals in Malawi and neighboring countries. 
                    The University is a proud member of the Christian Health Association of Malawi (CHAM) and operates under the proprietorship of the Saint John of God Brothers of the Catholic Church.
                </p>
                <p class="text-gray-600 leading-relaxed mb-4 text-center">
                    Since its inception, SJOGU has grown from a small institution to a respected university, producing thousands of qualified healthcare professionals who serve across Malawi, Africa, and beyond.
                </p>
                <p class="text-gray-600 leading-relaxed text-center">
                    Our commitment to excellence, compassion, and service has made us a center of choice for students seeking quality healthcare education.
                </p>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('images/admin_block.jpeg') }}" alt="Campus" class="rounded-xl shadow-lg w-full h-[300px] md:h-[400px] object-cover">
            </div>
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
            
        </div>

    </div>
</section>
<!-- Stats Section -->
<section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">SJOGU by the <span class="text-red-600">Numbers</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Our impact in healthcare education at a glance
            </p>
        </div>

        <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-2xl p-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center text-white">
                    <div class="text-3xl md:text-4xl font-bold mb-2">500+</div>
                    <p class="text-sm text-red-100">Students</p>
                </div>
                <div class="text-center text-white">
                    <div class="text-3xl md:text-4xl font-bold mb-2">6</div>
                    <p class="text-sm text-red-100">Programs</p>
                </div>
                <div class="text-center text-white">
                    <div class="text-3xl md:text-4xl font-bold mb-2">20+</div>
                    <p class="text-sm text-red-100">Lecturers</p>
                </div>
                <div class="text-center text-white">
                    <div class="text-3xl md:text-4xl font-bold mb-2">20+</div>
                    <p class="text-sm text-red-100">Years of Excellence</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Mission, Vision, Philosophy & Core Values Section -->
<section class="py-16 px-4 md:px-16 bg-gradient-to-b from-red-700 to-red-800">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Our <span class="text-yellow-400">Foundation</span></h2>
            <div class="w-20 h-1 bg-yellow-400 mx-auto rounded-full mb-4"></div>
            <p class="text-red-100 max-w-2xl mx-auto">Guiding principles that shape our institution</p>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <!-- Mission -->
            <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-bullseye text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Our Mission</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    To Provide Quality and Holistic Teaching, Learning and Research in the manner of St John of God.
                </p>
            </div>

            <!-- Vision -->
            <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-eye text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Our Vision</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    To become a center of excellence in academics and research in health and related fields whilst upholding Christian values.
                </p>
            </div>

            <!-- Philosophy -->
            <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-brain text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Our Philosophy</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Upholds the philosophy of the Hospitaller Order of St John of God that promotes the Dignity of individuals.
                </p>
            </div>

            <!-- Core Values -->
            <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-heart text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Core Values</h3>
                <div class="flex flex-wrap gap-2 justify-center">
                    <span class="bg-red-50 text-red-600 px-2 py-1 rounded text-sm">Hospitality</span>
                    <span class="bg-red-50 text-red-600 px-2 py-1 rounded text-sm">Compassion</span>
                    <span class="bg-red-50 text-red-600 px-2 py-1 rounded text-sm">Respect</span>
                    <span class="bg-red-50 text-red-600 px-2 py-1 rounded text-sm">Justice</span>
                    <span class="bg-red-50 text-red-600 px-2 py-1 rounded text-sm">Excellence</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Accreditation Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Accreditation & <span class="text-red-600">Recognition</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-500 max-w-2xl mx-auto">Approved and recognized by leading professional bodies</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- NCHE -->
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition group">
                <div class="w-24 h-24 mx-auto mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/nche.png') }}" 
                         alt="NCHE Logo" 
                         class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">NCHE Accredited</h3>
                <p class="text-sm text-gray-600">National Council for Higher Education</p>
            </div>

            <!-- NMCM -->
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition group">
                <div class="w-24 h-24 mx-auto mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/NMCM.png') }}" 
                         alt="NMCM Logo" 
                         class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">NMCM Approved</h3>
                <p class="text-sm text-gray-600">Nurses and Midwives Council of Malawi</p>
            </div>

            <!-- MCM -->
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition group">
    <div class="w-32 h-32 mx-auto mb-4 flex items-center justify-center">
        <img src="{{ asset('images/MCM.png') }}" 
             alt="MCM Logo" 
             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
    </div>
    <h3 class="text-lg font-bold text-gray-800 mb-2">MCM Recognized</h3>
    <p class="text-sm text-gray-600">Medical Council of Malawi</p>
</div>
        </div>
    </div>
</section>

<!-- Vice Chancellor's Remarks Section -->
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
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <img src="{{ asset('images/staff/VC.jpg') }}" alt="Vice Chancellor - Charles Masulani Mwale, PhD" class="w-full h-[350px] md:h-[480px] object-cover object-top">
                    </div>
                    <div class="absolute -bottom-3 -right-3 w-24 h-24 bg-red-600 rounded-2xl -z-10 hidden md:block"></div>
                    <div class="absolute -top-3 -left-3 w-20 h-20 bg-red-50 rounded-2xl -z-10 hidden md:block"></div>
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-xl shadow-lg px-4 py-2 flex items-center gap-2">
                        <i class="fas fa-quote-left text-red-600 text-sm"></i>
                        <p class="text-xs font-semibold text-gray-700">Servant Leadership</p>
                    </div>
                    <div class="absolute top-4 right-4 bg-red-600 rounded-xl px-3 py-1.5 shadow-lg">
                        <p class="text-white text-xs font-bold">20+ Years</p>
                    </div>
                </div>
            </div>

            <!-- Right: Welcome Message Content - All Centered -->
            <div class="md:col-span-7 flex flex-col justify-between">
                <div>
                    <div class="mb-5 text-center">
                        <div class="flex items-center justify-center gap-2 mb-1">
                            <i class="fas fa-crown text-yellow-500 text-xs"></i>
                            <span class="text-red-600 text-xs font-semibold uppercase tracking-wider">University Leadership</span>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-800">Dr. Charles Masulani Mwale</h3>
                        <div class="flex items-center justify-center gap-3 mt-1 flex-wrap">
                            <p class="text-red-600 font-semibold">Vice Chancellor</p>
                            <span class="text-gray-300 hidden md:inline">|</span>
                            <div class="flex items-center gap-1">
                                <i class="fas fa-graduation-cap text-gray-400 text-xs"></i>
                                <span class="text-gray-500 text-sm">PhD, MSc, BSc</span>
                            </div>
                        </div>
                    </div>

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
                        <div class="flex justify-center">
                            <p class="italic text-gray-700 border-l-2 border-red-600 pl-3 max-w-lg text-left">
                                I invite you to explore all that SJOGU has to offer. Together, let us build a healthier, 
                                more compassionate future for our communities and beyond.
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    

                    
                </div>
            </div>
        </div>
    </div>
</section>





@endsection