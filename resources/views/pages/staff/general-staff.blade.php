@extends('layouts.app')

@section('title', 'Staff Directory - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-16">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Staff <span class="text-yellow-300">Directory</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Meet our dedicated team of educators, professionals, and support staff
        </p>
    </div>
</section>

<!-- Academic Staff - Lecturers -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Academic <span class="text-red-600">Staff</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Our distinguished faculty members committed to academic excellence
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Lecturer 1 - Clinical Medicine -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-3">
                    <h3 class="text-lg font-bold text-white">Department of Clinical Medicine</h3>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="w-40 h-40 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-full">
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-md text-4xl text-red-400"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Dr. John Banda, MD</h4>
                        <p class="text-red-600 text-sm mb-2">Senior Lecturer</p>
                        <p class="text-sm text-gray-500 mb-3">MD, MMed (Internal Medicine)</p>
                    </div>
                    
                    <!-- Research Projects Section -->
                    <div class="mt-4 pt-3 border-t border-gray-200">
                        <h5 class="font-semibold text-gray-800 text-sm mb-2 flex items-center gap-2">
                            <i class="fas fa-flask text-red-600 text-xs"></i> Research Projects
                        </h5>
                        <ul class="space-y-1 text-xs text-gray-600">
                            <li class="flex items-start gap-1">• <span>Epidemiology of Non-Communicable Diseases in Urban Malawi (2024-2026)</span></li>
                            <li class="flex items-start gap-1">• <span>Antimicrobial Resistance Patterns in Community-Acquired Infections (2023-2025)</span></li>
                            <li class="flex items-start gap-1">• <span>Telemedicine Adoption in Rural Healthcare Delivery (2024)</span></li>
                        </ul>
                    </div>
                    
                    <div class="mt-3 flex justify-center gap-3 pt-2">
                        <a href="mailto:j.banda@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-envelope"></i> Email
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-book"></i> Publications
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lecturer 2 - Clinical Medicine -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-3">
                    <h3 class="text-lg font-bold text-white">Department of Clinical Medicine</h3>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="w-40 h-40 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-full">
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-nurse text-4xl text-red-400"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Dr. Mary Phiri, PhD</h4>
                        <p class="text-red-600 text-sm mb-2">Associate Professor</p>
                        <p class="text-sm text-gray-500 mb-3">PhD, MSc (Epidemiology)</p>
                    </div>
                    
                    <div class="mt-4 pt-3 border-t border-gray-200">
                        <h5 class="font-semibold text-gray-800 text-sm mb-2 flex items-center gap-2">
                            <i class="fas fa-flask text-red-600 text-xs"></i> Research Projects
                        </h5>
                        <ul class="space-y-1 text-xs text-gray-600">
                            <li class="flex items-start gap-1">• <span>Malaria Elimination Strategies in Northern Malawi (2023-2027)</span></li>
                            <li class="flex items-start gap-1">• <span>Impact of Climate Change on Infectious Disease Patterns (2024-2026)</span></li>
                            <li class="flex items-start gap-1">• <span>Community-Based Health Interventions for TB Control (2023-2025)</span></li>
                        </ul>
                    </div>
                    
                    <div class="mt-3 flex justify-center gap-3 pt-2">
                        <a href="mailto:m.phiri@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-envelope"></i> Email
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-book"></i> Publications
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lecturer 3 - Nursing and Midwifery -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-3">
                    <h3 class="text-lg font-bold text-white">Department of Nursing & Midwifery</h3>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="w-40 h-40 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-full">
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-nurse text-4xl text-red-400"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Mrs. Grace Mwale, MSc</h4>
                        <p class="text-red-600 text-sm mb-2">Senior Lecturer</p>
                        <p class="text-sm text-gray-500 mb-3">MSc (Nursing), BSc</p>
                    </div>
                    
                    <div class="mt-4 pt-3 border-t border-gray-200">
                        <h5 class="font-semibold text-gray-800 text-sm mb-2 flex items-center gap-2">
                            <i class="fas fa-flask text-red-600 text-xs"></i> Research Projects
                        </h5>
                        <ul class="space-y-1 text-xs text-gray-600">
                            <li class="flex items-start gap-1">• <span>Improving Maternal Health Outcomes in Rural Malawi (2023-2026)</span></li>
                            <li class="flex items-start gap-1">• <span>Neonatal Care Practices and Infant Mortality Reduction (2024-2025)</span></li>
                            <li class="flex items-start gap-1">• <span>Nursing Education Curriculum Reform for Competency-Based Training (2024)</span></li>
                        </ul>
                    </div>
                    
                    <div class="mt-3 flex justify-center gap-3 pt-2">
                        <a href="mailto:g.mwale@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-envelope"></i> Email
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-book"></i> Publications
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lecturer 4 - Nursing and Midwifery -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-3">
                    <h3 class="text-lg font-bold text-white">Department of Nursing & Midwifery</h3>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="w-40 h-40 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-full">
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-md text-4xl text-red-400"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Mr. Peter Kachingwe, RN</h4>
                        <p class="text-red-600 text-sm mb-2">Lecturer</p>
                        <p class="text-sm text-gray-500 mb-3">RN, BSc (Nursing)</p>
                    </div>
                    
                    <div class="mt-4 pt-3 border-t border-gray-200">
                        <h5 class="font-semibold text-gray-800 text-sm mb-2 flex items-center gap-2">
                            <i class="fas fa-flask text-red-600 text-xs"></i> Research Projects
                        </h5>
                        <ul class="space-y-1 text-xs text-gray-600">
                            <li class="flex items-start gap-1">• <span>Community Health Nursing Interventions in Underserved Areas (2023-2025)</span></li>
                            <li class="flex items-start gap-1">• <span>Patient Safety Culture in Malawian Hospitals (2024)</span></li>
                            <li class="flex items-start gap-1">• <span>Nursing Workforce Retention Strategies in Rural Settings (2024-2026)</span></li>
                        </ul>
                    </div>
                    
                    <div class="mt-3 flex justify-center gap-3 pt-2">
                        <a href="mailto:p.kachingwe@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-envelope"></i> Email
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-book"></i> Publications
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lecturer 5 - Psycho-Social Counselling -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-3">
                    <h3 class="text-lg font-bold text-white">Department of Psycho-Social Counselling</h3>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="w-40 h-40 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-full">
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-tie text-4xl text-red-400"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Dr. Chimwemwe Banda, PhD</h4>
                        <p class="text-red-600 text-sm mb-2">Senior Lecturer</p>
                        <p class="text-sm text-gray-500 mb-3">PhD (Clinical Psychology), MA</p>
                    </div>
                    
                    <div class="mt-4 pt-3 border-t border-gray-200">
                        <h5 class="font-semibold text-gray-800 text-sm mb-2 flex items-center gap-2">
                            <i class="fas fa-flask text-red-600 text-xs"></i> Research Projects
                        </h5>
                        <ul class="space-y-1 text-xs text-gray-600">
                            <li class="flex items-start gap-1">• <span>Mental Health Interventions for Trauma Survivors in Post-Conflict Regions (2023-2026)</span></li>
                            <li class="flex items-start gap-1">• <span>Substance Abuse Prevention Among Youth in Malawi (2024-2027)</span></li>
                            <li class="flex items-start gap-1">• <span>Community-Based Psychosocial Support for Orphans and Vulnerable Children (2024-2025)</span></li>
                        </ul>
                    </div>
                    
                    <div class="mt-3 flex justify-center gap-3 pt-2">
                        <a href="mailto:c.banda@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-envelope"></i> Email
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-book"></i> Publications
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lecturer 6 - Psycho-Social Counselling -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-3">
                    <h3 class="text-lg font-bold text-white">Department of Psycho-Social Counselling</h3>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="w-40 h-40 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-full">
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-friends text-4xl text-red-400"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Mrs. Linda Jere, MA</h4>
                        <p class="text-red-600 text-sm mb-2">Lecturer</p>
                        <p class="text-sm text-gray-500 mb-3">MA (Counselling Psychology)</p>
                    </div>
                    
                    <div class="mt-4 pt-3 border-t border-gray-200">
                        <h5 class="font-semibold text-gray-800 text-sm mb-2 flex items-center gap-2">
                            <i class="fas fa-flask text-red-600 text-xs"></i> Research Projects
                        </h5>
                        <ul class="space-y-1 text-xs text-gray-600">
                            <li class="flex items-start gap-1">• <span>Family Therapy Effectiveness in Addressing Adolescent Behavioral Issues (2024-2026)</span></li>
                            <li class="flex items-start gap-1">• <span>Addiction Counselling Models for Substance Use Disorders in Malawi (2023-2025)</span></li>
                            <li class="flex items-start gap-1">• <span>Workplace Mental Health Programs for Healthcare Professionals (2024)</span></li>
                        </ul>
                    </div>
                    
                    <div class="mt-3 flex justify-center gap-3 pt-2">
                        <a href="mailto:l.jere@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-envelope"></i> Email
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-book"></i> Publications
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lecturer 7 - Public Health -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-3">
                    <h3 class="text-lg font-bold text-white">Department of Public Health</h3>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="w-40 h-40 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-full">
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-globe-africa text-4xl text-red-400"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Dr. Andrew Msiska, PhD</h4>
                        <p class="text-red-600 text-sm mb-2">Associate Professor</p>
                        <p class="text-sm text-gray-500 mb-3">PhD (Public Health), MPH</p>
                    </div>
                    
                    <div class="mt-4 pt-3 border-t border-gray-200">
                        <h5 class="font-semibold text-gray-800 text-sm mb-2 flex items-center gap-2">
                            <i class="fas fa-flask text-red-600 text-xs"></i> Research Projects
                        </h5>
                        <ul class="space-y-1 text-xs text-gray-600">
                            <li class="flex items-start gap-1">• <span>Health Systems Strengthening for Universal Health Coverage in Malawi (2023-2028)</span></li>
                            <li class="flex items-start gap-1">• <span>Nutritional Interventions for Stunting Reduction in Children Under Five (2024-2026)</span></li>
                            <li class="flex items-start gap-1">• <span>Health Policy Analysis for Non-Communicable Disease Prevention (2024-2025)</span></li>
                        </ul>
                    </div>
                    
                    <div class="mt-3 flex justify-center gap-3 pt-2">
                        <a href="mailto:a.msiska@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-envelope"></i> Email
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-book"></i> Publications
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lecturer 8 - Public Health -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-3">
                    <h3 class="text-lg font-bold text-white">Department of Public Health</h3>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="w-40 h-40 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-full">
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-chart-line text-4xl text-red-400"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Mrs. Fiona Chirwa, MPH</h4>
                        <p class="text-red-600 text-sm mb-2">Lecturer</p>
                        <p class="text-sm text-gray-500 mb-3">MPH, BSc</p>
                    </div>
                    
                    <div class="mt-4 pt-3 border-t border-gray-200">
                        <h5 class="font-semibold text-gray-800 text-sm mb-2 flex items-center gap-2">
                            <i class="fas fa-flask text-red-600 text-xs"></i> Research Projects
                        </h5>
                        <ul class="space-y-1 text-xs text-gray-600">
                            <li class="flex items-start gap-1">• <span>Health Promotion Strategies for Malaria Prevention in Pregnancy (2024-2026)</span></li>
                            <li class="flex items-start gap-1">• <span>Community Engagement Models for Vaccination Uptake (2023-2025)</span></li>
                            <li class="flex items-start gap-1">• <span>Water, Sanitation, and Hygiene (WASH) Interventions in Schools (2024)</span></li>
                        </ul>
                    </div>
                    
                    <div class="mt-3 flex justify-center gap-3 pt-2">
                        <a href="mailto:f.chirwa@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-envelope"></i> Email
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-book"></i> Publications
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lecturer 9 - Basic Sciences -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-3">
                    <h3 class="text-lg font-bold text-white">Department of Basic Sciences</h3>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="w-40 h-40 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-full">
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-microscope text-4xl text-red-400"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Dr. William Ngoma, PhD</h4>
                        <p class="text-red-600 text-sm mb-2">Senior Lecturer</p>
                        <p class="text-sm text-gray-500 mb-3">PhD (Biochemistry), MSc</p>
                    </div>
                    
                    <div class="mt-4 pt-3 border-t border-gray-200">
                        <h5 class="font-semibold text-gray-800 text-sm mb-2 flex items-center gap-2">
                            <i class="fas fa-flask text-red-600 text-xs"></i> Research Projects
                        </h5>
                        <ul class="space-y-1 text-xs text-gray-600">
                            <li class="flex items-start gap-1">• <span>Biomarkers for Early Detection of Chronic Kidney Disease (2023-2026)</span></li>
                            <li class="flex items-start gap-1">• <span>Pharmacogenomics of Antiretroviral Therapy in Malawian Populations (2024-2027)</span></li>
                            <li class="flex items-start gap-1">• <span>Medicinal Plants Used in Traditional Medicine for Diabetes Management (2024-2025)</span></li>
                        </ul>
                    </div>
                    
                    <div class="mt-3 flex justify-center gap-3 pt-2">
                        <a href="mailto:w.ngoma@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-envelope"></i> Email
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-700 transition text-sm">
                            <i class="fas fa-book"></i> Publications
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Staff Section -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Support <span class="text-red-600">Staff</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Dedicated professionals ensuring smooth university operations
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Administrative Assistant -->
            <div class="bg-white rounded-lg p-5 text-center shadow-md hover:shadow-lg transition">
                <div class="w-24 h-24 mx-auto mb-3 overflow-hidden bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-user-circle text-5xl text-red-400"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800">Mrs. Ruth Phoya</h4>
                <p class="text-red-600 text-sm mb-2">Senior Administrative Assistant</p>
                <div class="mt-2 pt-2 border-t border-gray-100">
                    <p class="text-xs text-gray-500">Office of the Vice Chancellor</p>
                </div>
                <div class="mt-2 flex justify-center gap-3">
                    <a href="mailto:r.phoya@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-xs">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                </div>
            </div>

            <!-- IT Support -->
            <div class="bg-white rounded-lg p-5 text-center shadow-md hover:shadow-lg transition">
                <div class="w-24 h-24 mx-auto mb-3 overflow-hidden bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-laptop-code text-5xl text-red-400"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800">Mr. Kondwani Kaliati</h4>
                <p class="text-red-600 text-sm mb-2">IT Support Officer</p>
                <div class="mt-2 pt-2 border-t border-gray-100">
                    <p class="text-xs text-gray-500">ICT Department</p>
                </div>
                <div class="mt-2 flex justify-center gap-3">
                    <a href="mailto:k.kaliati@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-xs">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                </div>
            </div>

            <!-- Finance Officer -->
            <div class="bg-white rounded-lg p-5 text-center shadow-md hover:shadow-lg transition">
                <div class="w-24 h-24 mx-auto mb-3 overflow-hidden bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-chart-pie text-5xl text-red-400"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800">Mr. James Mwale</h4>
                <p class="text-red-600 text-sm mb-2">Finance Officer</p>
                <div class="mt-2 pt-2 border-t border-gray-100">
                    <p class="text-xs text-gray-500">Accounts Department</p>
                </div>
                <div class="mt-2 flex justify-center gap-3">
                    <a href="mailto:j.mwale@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-xs">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                </div>
            </div>

            <!-- Librarian -->
            <div class="bg-white rounded-lg p-5 text-center shadow-md hover:shadow-lg transition">
                <div class="w-24 h-24 mx-auto mb-3 overflow-hidden bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-book text-5xl text-red-400"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800">Mr. Robert Chalochiwawa</h4>
                <p class="text-red-600 text-sm mb-2">University Librarian</p>
                <div class="mt-2 pt-2 border-t border-gray-100">
                    <p class="text-xs text-gray-500">Library Services</p>
                </div>
                <div class="mt-2 flex justify-center gap-3">
                    <a href="mailto:library@sjogu.edu" class="text-red-600 hover:text-red-700 transition text-xs">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical & Laboratory Staff -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Technical & <span class="text-red-600">Laboratory Staff</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Skilled professionals supporting practical learning and research
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-lg p-5 text-center shadow-md hover:shadow-lg transition">
                <div class="w-20 h-20 mx-auto mb-3 overflow-hidden bg-gray-200 rounded-full flex items-center justify-center">
                    <i class="fas fa-flask text-3xl text-red-400"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800">Mr. Davie Banda</h4>
                <p class="text-red-600 text-sm">Senior Laboratory Technician</p>
                <p class="text-gray-500 text-xs mt-1">Clinical Medicine Lab</p>
                <div class="mt-2 pt-2 border-t border-gray-200">
                    <p class="text-xs text-gray-600">Research Support: Assisting in malaria research and diagnostic training</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-5 text-center shadow-md hover:shadow-lg transition">
                <div class="w-20 h-20 mx-auto mb-3 overflow-hidden bg-gray-200 rounded-full flex items-center justify-center">
                    <i class="fas fa-microscope text-3xl text-red-400"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800">Mrs. Alice Nyirenda</h4>
                <p class="text-red-600 text-sm">Lab Assistant</p>
                <p class="text-gray-500 text-xs mt-1">Basic Sciences Lab</p>
                <div class="mt-2 pt-2 border-t border-gray-200">
                    <p class="text-xs text-gray-600">Research Support: Specimen preparation for biochemistry research</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-5 text-center shadow-md hover:shadow-lg transition">
                <div class="w-20 h-20 mx-auto mb-3 overflow-hidden bg-gray-200 rounded-full flex items-center justify-center">
                    <i class="fas fa-laptop-medical text-3xl text-red-400"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800">Mr. Gift Manda</h4>
                <p class="text-red-600 text-sm">Computer Lab Technician</p>
                <p class="text-gray-500 text-xs mt-1">ICT & Computer Labs</p>
                <div class="mt-2 pt-2 border-t border-gray-200">
                    <p class="text-xs text-gray-600">Research Support: Data management and IT infrastructure for research projects</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 px-4 md:px-16 bg-gradient-to-r from-red-700 to-red-800">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Join Our Team</h2>
        <p class="text-red-100 mb-6 max-w-2xl mx-auto">
            Interested in becoming part of our dedicated team? Check out available career opportunities.
        </p>
        <a href="#" class="inline-flex items-center gap-2 bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
            View Career Opportunities <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section>
@endsection