@extends('layouts.app')

@section('title', 'Resources & Downloads - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-16">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-4">
            <i class="fas fa-download text-white text-2xl"></i>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Resources & <span class="text-yellow-300">Downloads</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Access important documents, forms, and resources for your academic journey
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Quick Links Navigation -->
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <a href="#application-forms" class="bg-white hover:bg-red-600 text-gray-700 hover:text-white px-4 py-2 rounded-lg text-sm font-semibold transition shadow-sm">
                <i class="fas fa-file-alt mr-2"></i>Application Forms
            </a>
            <a href="#fee-structure" class="bg-white hover:bg-red-600 text-gray-700 hover:text-white px-4 py-2 rounded-lg text-sm font-semibold transition shadow-sm">
                <i class="fas fa-money-bill-wave mr-2"></i>Fee Structure
            </a>
            <a href="#student-handbook" class="bg-white hover:bg-red-600 text-gray-700 hover:text-white px-4 py-2 rounded-lg text-sm font-semibold transition shadow-sm">
                <i class="fas fa-book mr-2"></i>Student Handbook
            </a>
        </div>

        <!-- Application Forms Section -->
        <div id="application-forms" class="mb-12">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-red-600 text-lg"></i>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Application <span class="text-red-600">Forms</span></h2>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="divide-y divide-gray-100">
                    <div class="flex items-center justify-between p-5 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-pdf text-red-600 text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Undergraduate Application Form</h3>
                                <p class="text-xs text-gray-500">PDF, 450 KB</p>
                            </div>
                        </div>
                        <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm transition flex items-center gap-2">
                            <i class="fas fa-download text-xs"></i> Download
                        </a>
                    </div>
                    <div class="flex items-center justify-between p-5 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-pdf text-red-600 text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Postgraduate Application Form</h3>
                                <p class="text-xs text-gray-500">PDF, 520 KB</p>
                            </div>
                        </div>
                        <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm transition flex items-center gap-2">
                            <i class="fas fa-download text-xs"></i> Download
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fee Structure Section -->
        <div id="fee-structure" class="mb-12">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-money-bill-wave text-red-600 text-lg"></i>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Fee <span class="text-red-600">Structure</span></h2>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="divide-y divide-gray-100">
                    <div class="flex items-center justify-between p-5 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-pdf text-red-600 text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">2026/2027 Fee Structure</h3>
                                <p class="text-xs text-gray-500">PDF, 320 KB</p>
                            </div>
                        </div>
                        <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm transition flex items-center gap-2">
                            <i class="fas fa-download text-xs"></i> Download
                        </a>
                    </div>
                    <div class="flex items-center justify-between p-5 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-pdf text-red-600 text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Scholarship & Bursary Guide</h3>
                                <p class="text-xs text-gray-500">PDF, 280 KB</p>
                            </div>
                        </div>
                        <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm transition flex items-center gap-2">
                            <i class="fas fa-download text-xs"></i> Download
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Handbook Section -->
        <div id="student-handbook" class="mb-12">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-book text-red-600 text-lg"></i>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Student <span class="text-red-600">Handbook</span></h2>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="divide-y divide-gray-100">
                    <div class="flex items-center justify-between p-5 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-pdf text-red-600 text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Student Handbook 2026</h3>
                                <p class="text-xs text-gray-500">PDF, 1.2 MB</p>
                            </div>
                        </div>
                        <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm transition flex items-center gap-2">
                            <i class="fas fa-download text-xs"></i> Download
                        </a>
                    </div>
                    <div class="flex items-center justify-between p-5 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-pdf text-red-600 text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Academic Policies & Procedures</h3>
                                <p class="text-xs text-gray-500">PDF, 420 KB</p>
                            </div>
                        </div>
                        <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm transition flex items-center gap-2">
                            <i class="fas fa-download text-xs"></i> Download
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Help Section -->
        <div class="mt-12 bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6 text-center border border-red-200">
            <i class="fas fa-question-circle text-3xl text-red-600 mb-3"></i>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Can't find what you're looking for?</h3>
            <p class="text-gray-600 mb-4">Contact our support team for assistance with any documents or resources.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-red-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-red-700 transition">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
                <a href="tel:+265991887119" class="inline-flex items-center gap-2 border-2 border-red-600 text-red-600 px-5 py-2 rounded-lg font-semibold hover:bg-red-600 hover:text-white transition">
                    <i class="fas fa-phone-alt"></i> Call Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection