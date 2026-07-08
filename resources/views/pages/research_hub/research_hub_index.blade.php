@extends('layouts.app')

@section('title', 'Research Hub - St John of God University')

@section('content')
<!-- Hero Section -->


<!-- Featured Research Projects - Moved to Top -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Featured <span class="text-red-600">Research</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Highlighted ongoing and completed research projects
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-lg transition">
                <div class="flex items-start gap-3 mb-3">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-microscope text-red-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Malaria Prevention in Rural Communities</h3>
                        <p class="text-sm text-red-600">Department of Public Health</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm">Investigating effective malaria prevention strategies and interventions in rural Malawi communities to reduce transmission rates.</p>
                <div class="mt-3 flex items-center gap-2 text-xs text-gray-500">
                    <i class="fas fa-calendar-alt text-red-400"></i>
                    <span>2023 - 2026</span>
                    <span class="mx-1">|</span>
                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded">Active</span>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-lg transition">
                <div class="flex items-start gap-3 mb-3">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-heartbeat text-red-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Maternal Mortality Reduction</h3>
                        <p class="text-sm text-red-600">Dept of Nursing & Midwifery</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm">Research on factors contributing to maternal mortality and evidence-based interventions to improve maternal health outcomes.</p>
                <div class="mt-3 flex items-center gap-2 text-xs text-gray-500">
                    <i class="fas fa-calendar-alt text-red-400"></i>
                    <span>2023 - 2025</span>
                    <span class="mx-1">|</span>
                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded">Active</span>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-lg transition">
                <div class="flex items-start gap-3 mb-3">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-hand-holding-heart text-red-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Youth Mental Health Awareness</h3>
                        <p class="text-sm text-red-600">Dept of Psycho-Social Counselling</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm">Addressing mental health challenges among youth through awareness programs, counselling services, and community engagement.</p>
                <div class="mt-3 flex items-center gap-2 text-xs text-gray-500">
                    <i class="fas fa-calendar-alt text-red-400"></i>
                    <span>2024 - 2027</span>
                    <span class="mx-1">|</span>
                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded">Active</span>
                </div>
            </div>
        </div>

        
    </div>
</section>

<!-- Research Impact Stats -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Research <span class="text-red-600">Impact</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Our research initiatives are making a difference in healthcare delivery and policy
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-file-alt text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">45+</p>
                <p class="text-gray-500 text-sm">Research Papers</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">12+</p>
                <p class="text-gray-500 text-sm">Active Projects</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-globe text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">8+</p>
                <p class="text-gray-500 text-sm">Collaborations</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chart-line text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">5+</p>
                <p class="text-gray-500 text-sm">Grants Funded</p>
            </div>
        </div>
    </div>
</section>




@endsection