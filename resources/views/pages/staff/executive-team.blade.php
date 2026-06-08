@extends('layouts.app')

@section('title', 'Executive Team - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-16">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Executive <span class="text-yellow-300">Team</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Meet our dedicated executive leadership team guiding the university towards excellence
        </p>
    </div>
</section>

<!-- Executive Leadership Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Executive <span class="text-red-600">Leadership</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Our executive leadership team guiding the university towards excellence
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- Vice Chancellor -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Vice Chancellor</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/VC.jpg')))
                            <img src="{{ asset('images/staff/VC.jpg') }}" alt="Charles Masulani Mwale, PhD" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-tie text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Dr. Charles Masulani Mwale, PhD</h4>
                    <p class="text-red-600 text-sm mb-2">Vice Chancellor</p>
                    <p class="text-sm text-gray-500 mb-3">PhD, MSc, BSc</p>
                    <p class="text-gray-600 text-sm">Leading the university with vision and excellence in higher education.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:vc@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265991887119" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Deputy Vice Chancellor -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Deputy Vice Chancellor</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/DVC.jpg')))
                            <img src="{{ asset('images/staff/DVC.jpg') }}" alt="Prof. Esmie Mkwinda, PhD" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-tie text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Dr. Esmie Mkwinda, PhD</h4>
                    <p class="text-red-600 text-sm mb-2">Deputy Vice Chancellor</p>
                    <p class="text-sm text-gray-500 mb-3">PhD</p>
                    <p class="text-gray-600 text-sm">Supporting the Vice Chancellor in academic and administrative leadership.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:dvc@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265991887119" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dean of Faculty -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Dean of Faculty</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/Dean of faculty.jpg')))
                            <img src="{{ asset('images/staff/Dean of faculty.jpg') }}" alt="Chimwemwe Munthali, MSc" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-chalkboard-user text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Chimwemwe Munthali, MSc</h4>
                    <p class="text-red-600 text-sm mb-2">Dean of Faculty</p>
                    <p class="text-sm text-gray-500 mb-3">MSc</p>
                    <p class="text-gray-600 text-sm">Overseeing academic programs and faculty development.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:dean@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265991887119" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Registrar -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Registrar</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/Registrar.jpg')))
                            <img src="{{ asset('images/staff/Registrar.jpg') }}" alt="Chisomo Chithyola" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-tie text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Chisomo Chithyola</h4>
                    <p class="text-red-600 text-sm mb-2">Registrar</p>
                    <p class="text-sm text-gray-500 mb-3">MBA</p>
                    <p class="text-gray-600 text-sm">Managing student records, admissions, and academic registrations.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:registrar@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265991887119" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Coordinator of Quality Assurance -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Quality Assurance</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/quality assuarance.jpg')))
                            <img src="{{ asset('images/staff/quality assuarance.jpg') }}" alt="Zione Mugala" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-clipboard-list text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Zione Mugala</h4>
                    <p class="text-red-600 text-sm mb-2">Coordinator of Quality Assurance</p>
                    <p class="text-sm text-gray-500 mb-3">MSc</p>
                    <p class="text-gray-600 text-sm">Ensuring academic standards and institutional quality compliance.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:qa@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265991887119" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection