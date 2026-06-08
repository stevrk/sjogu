@extends('layouts.app')

@section('title', 'Research Hub - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-16">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-4">
            <i class="fas fa-flask text-white text-2xl"></i>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Research <span class="text-yellow-300">Hub</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Advancing healthcare knowledge through innovative research and collaboration
        </p>
    </div>
</section>

<!-- Research Impact Stats -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Research <span class="text-red-600">Impact</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Our research initiatives are making a difference in healthcare delivery and policy
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-file-alt text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">45+</p>
                <p class="text-gray-500 text-sm">Research Papers</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">12+</p>
                <p class="text-gray-500 text-sm">Active Projects</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-globe text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">8+</p>
                <p class="text-gray-500 text-sm">Collaborations</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chart-line text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">5+</p>
                <p class="text-gray-500 text-sm">Grants Funded</p>
            </div>
        </div>
    </div>
</section>

<!-- Research Areas by Department -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Research <span class="text-red-600">Departments</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Key research areas across our academic departments
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Department 1: Clinical Medicine -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border-l-4 border-red-600">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-stethoscope text-red-600 text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Clinical Medicine</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Infectious diseases, internal medicine, surgical innovations, and patient care optimization
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Malaria Research</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">HIV/AIDS</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Tuberculosis</span>
                </div>
            </div>

            <!-- Department 2: Nursing and Midwifery -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border-l-4 border-red-600">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-hand-holding-heart text-red-600 text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Nursing & Midwifery</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Maternal health, neonatal care, nursing education, and community health nursing
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Maternal Health</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Child Care</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Nursing Education</span>
                </div>
            </div>

            <!-- Department 3: Psycho-Social Counselling -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border-l-4 border-red-600">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-brain text-red-600 text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Psycho-Social Counselling</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Mental health, trauma counselling, substance abuse, and community psychosocial support
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Mental Health</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Trauma Care</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Substance Abuse</span>
                </div>
            </div>

            <!-- Department 4: Public Health -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border-l-4 border-red-600">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-chart-bar text-red-600 text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Public Health</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Epidemiology, health promotion, disease prevention, and health policy research
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Epidemiology</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Health Policy</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Disease Prevention</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Research Projects -->
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
            </div>
        </div>
    </div>
</section>

<!-- Research Partners -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Research <span class="text-red-600">Partners</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Collaborating with leading institutions to advance healthcare research
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-center">
            <div class="text-center p-4 grayscale hover:grayscale-0 transition">
                <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-university text-gray-500 text-3xl"></i>
                </div>
                <p class="text-sm text-gray-600 font-medium">University of Malawi</p>
            </div>
            <div class="text-center p-4 grayscale hover:grayscale-0 transition">
                <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-globe-africa text-gray-500 text-3xl"></i>
                </div>
                <p class="text-sm text-gray-600 font-medium">WHO Malawi</p>
            </div>
            <div class="text-center p-4 grayscale hover:grayscale-0 transition">
                <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-heartbeat text-gray-500 text-3xl"></i>
                </div>
                <p class="text-sm text-gray-600 font-medium">Malawi Ministry of Health</p>
            </div>
            <div class="text-center p-4 grayscale hover:grayscale-0 transition">
                <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-chart-line text-gray-500 text-3xl"></i>
                </div>
                <p class="text-sm text-gray-600 font-medium">CDC Malawi</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 px-4 md:px-16 bg-gradient-to-r from-red-700 to-red-800">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Interested in Research?</h2>
        <p class="text-red-100 mb-6 max-w-2xl mx-auto">
            Join our research community. Collaborate with our faculty or pursue your own research interests.
        </p>
        
        <div class="flex flex-wrap gap-4 justify-center mb-8">
            <a href="mailto:research@sjog.mw" class="bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Contact Research Office
            </a>
        </div>
        
        <!-- Contact Information below the button -->
        <div class="text-center space-y-2">
            <p class="text-red-100 text-sm">Or reach out directly:</p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <div class="flex items-center gap-2">
                    <i class="fas fa-phone-alt text-yellow-300 text-sm"></i>
                    <a href="tel:+265991887119" class="text-white hover:text-yellow-300 transition text-sm">
                        +265 991 887 119
                    </a>
                </div>
                <span class="text-red-400 hidden md:inline">|</span>
                <div class="flex items-center gap-2">
                    <i class="fas fa-envelope text-yellow-300 text-sm"></i>
                    <a href="mailto:collegehs@sjog.mw" class="text-white hover:text-yellow-300 transition text-sm">
                        collegehs@sjog.mw
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection