@extends('layouts.app')

@section('title', $program['title'] . ' - St John of God University')

@section('content')
<section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Program Header with Description on TOP of Image -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg mb-8">
            <!-- Program Title & Description Section (Above Image) -->
            <div class="p-6 md:p-8 pb-4">
                <!-- Program Type Badges -->
                <div class="flex flex-wrap gap-3 mb-4">
                    @if($program['has_generic'])
                    <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-semibold">
                        <i class="fas fa-graduation-cap mr-1"></i> Generic Program Available
                    </span>
                    @endif
                    @if($program['has_upgrading'])
                    <span class="bg-orange-100 text-orange-700 text-xs px-3 py-1 rounded-full font-semibold">
                        <i class="fas fa-chart-line mr-1"></i> Upgrading Program Available
                    </span>
                    @endif
                </div>
                <h1 class="text-2xl md:text-4xl font-bold text-gray-800 mb-2">{{ $program['title'] }}</h1>
                <p class="text-red-600 mb-4">Department of {{ $program['department'] }}</p>
                
                <!-- Programme Description/Caption at TOP of Image -->
                <div class="bg-red-50 border-l-4 border-red-600 p-4 rounded-r-lg mt-2">
                    <p class="text-gray-700 text-sm md:text-base">
                        <i class="fas fa-quote-left text-red-400 mr-2"></i>
                        {{ $program['overview'] }}
                    </p>
                </div>
            </div>
            
            <!-- Program Image (Now Below Description) -->
            <div class="h-64 md:h-96 overflow-hidden">
                <img src="{{ asset('images/' . $program['image']) }}" 
                     alt="{{ $program['title'] }}" 
                     class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Program Options Tabs (if both Generic & Upgrading available) -->
        @if($program['has_generic'] && $program['has_upgrading'])
        <div class="bg-white rounded-xl shadow-md mb-8 overflow-hidden">
            <div class="flex border-b">
                <button onclick="switchTab('generic')" id="genericTabBtn" class="tab-btn flex-1 px-6 py-4 text-center font-semibold transition bg-red-600 text-white">
                    <i class="fas fa-graduation-cap mr-2"></i> Generic Program
                </button>
                <button onclick="switchTab('upgrading')" id="upgradingTabBtn" class="tab-btn flex-1 px-6 py-4 text-center font-semibold transition bg-gray-100 text-gray-700 hover:bg-gray-200">
                    <i class="fas fa-chart-line mr-2"></i> Upgrading Program
                </button>
            </div>
        </div>
        @endif

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Left Column - Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Career Prospects Section -->
                @if($program['has_generic'])
                <div id="genericContent" class="generic-content space-y-8">
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <i class="fas fa-briefcase text-red-600"></i>
                            Career Prospects
                        </h2>
                        <ul class="space-y-2">
                            @foreach($program['generic']['career_opportunities'] as $career)
                                <li class="flex items-start gap-2 text-gray-600">
                                    <i class="fas fa-arrow-right text-red-500 mt-1 text-sm"></i>
                                    <span>{{ $career }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                @if($program['has_upgrading'])
                <div id="upgradingContent" class="upgrading-content space-y-8" @if($program['has_generic']) style="display: none;" @endif>
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <i class="fas fa-briefcase text-red-600"></i>
                            Career Prospects
                        </h2>
                        <ul class="space-y-2">
                            @foreach($program['upgrading']['career_opportunities'] as $career)
                                <li class="flex items-start gap-2 text-gray-600">
                                    <i class="fas fa-arrow-right text-red-500 mt-1 text-sm"></i>
                                    <span>{{ $career }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>

            <!-- Right Column - Sidebar -->
            <div class="space-y-6">
                <!-- Entry Requirements Section -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-graduation-cap text-red-600"></i>
                        Entry Requirements
                    </h2>
                    
                    @if($program['has_generic'])
                    <div id="genericRequirements">
                        <div class="bg-green-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold text-green-800 mb-3 flex items-center gap-2">
                                <i class="fas fa-graduation-cap text-sm"></i> Generic Program
                            </p>
                            <ul class="space-y-2">
                                @foreach($program['generic']['entry_requirements'] as $requirement)
                                    <li class="flex items-start gap-2 text-gray-600 text-sm">
                                        <i class="fas fa-check-circle text-green-500 mt-0.5 text-xs"></i>
                                        <span>{{ $requirement }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                    @if($program['has_upgrading'])
                    <div id="upgradingRequirements" @if($program['has_generic']) style="display: none;" @endif>
                        <div class="bg-orange-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold text-orange-800 mb-3 flex items-center gap-2">
                                <i class="fas fa-chart-line text-sm"></i> Upgrading Program
                            </p>
                            <ul class="space-y-2">
                                @foreach($program['upgrading']['entry_requirements'] as $requirement)
                                    <li class="flex items-start gap-2 text-gray-600 text-sm">
                                        <i class="fas fa-check-circle text-orange-500 mt-0.5 text-xs"></i>
                                        <span>{{ $requirement }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                    @if(!$program['has_generic'] && $program['has_upgrading'])
                        <ul class="space-y-2">
                            @foreach($program['upgrading']['entry_requirements'] as $requirement)
                                <li class="flex items-start gap-2 text-gray-600 text-sm">
                                    <i class="fas fa-check-circle text-green-500 mt-0.5 text-xs"></i>
                                    <span>{{ $requirement }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    @if($program['has_generic'] && !$program['has_upgrading'])
                        <ul class="space-y-2">
                            @foreach($program['generic']['entry_requirements'] as $requirement)
                                <li class="flex items-start gap-2 text-gray-600 text-sm">
                                    <i class="fas fa-check-circle text-green-500 mt-0.5 text-xs"></i>
                                    <span>{{ $requirement }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <!-- Programme Duration -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-clock text-red-600"></i>
                        Programme Duration
                    </h2>
                    @if($program['has_generic'])
                    <div class="mb-3 pb-3 border-b">
                        <p class="font-semibold text-green-700 text-sm">Generic Program:</p>
                        <p class="text-gray-600">{{ $program['generic']['duration'] }} ({{ $program['generic']['duration_semesters'] }})</p>
                        <p class="text-sm text-gray-500">Study Mode: {{ $program['generic']['study_mode'] }}</p>
                    </div>
                    @endif
                    @if($program['has_upgrading'])
                    <div>
                        <p class="font-semibold text-orange-700 text-sm">Upgrading Program:</p>
                        <p class="text-gray-600">{{ $program['upgrading']['duration'] }} ({{ $program['upgrading']['duration_semesters'] }})</p>
                        <p class="text-sm text-gray-500">Study Mode: {{ $program['upgrading']['study_mode'] }}</p>
                    </div>
                    @endif
                </div>

                <!-- Accreditation -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-certificate text-red-600"></i>
                        Accreditation
                    </h2>
                    <p class="text-gray-600">{{ $program['accreditation'] }}</p>
                </div>

                <!-- Apply Now CTA -->
                <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-xl p-6 text-white text-center">
                    <i class="fas fa-user-graduate text-3xl mb-3"></i>
                    <h3 class="text-xl font-bold mb-2">Ready to Apply?</h3>
                    <p class="text-sm text-red-100 mb-4">Take the first step towards your career in healthcare</p>
                    <a href="{{ route('enroll') }}" class="inline-block bg-white text-red-600 px-6 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
                        Apply Now
                    </a>
                </div>

                <!-- Need Help -->
                <div class="bg-gray-50 rounded-xl p-6 text-center">
                    <i class="fas fa-question-circle text-2xl text-red-600 mb-2"></i>
                    <h3 class="font-bold text-gray-800 mb-2">Need More Information?</h3>
                    <p class="text-sm text-gray-600 mb-3">Contact our admissions office</p>
                    <div class="space-y-2 text-sm">
                        <p class="text-gray-600">
                            <i class="fas fa-phone-alt text-red-500 w-5"></i> +265 991 887 119
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-envelope text-red-500 w-5"></i> collegehs@sjog.mw
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function switchTab(tab) {
        const genericContent = document.getElementById('genericContent');
        const upgradingContent = document.getElementById('upgradingContent');
        const genericRequirements = document.getElementById('genericRequirements');
        const upgradingRequirements = document.getElementById('upgradingRequirements');
        const genericTabBtn = document.getElementById('genericTabBtn');
        const upgradingTabBtn = document.getElementById('upgradingTabBtn');
        
        if (tab === 'generic') {
            if (genericContent) genericContent.style.display = 'block';
            if (upgradingContent) upgradingContent.style.display = 'none';
            if (genericRequirements) genericRequirements.style.display = 'block';
            if (upgradingRequirements) upgradingRequirements.style.display = 'none';
            
            if (genericTabBtn) {
                genericTabBtn.classList.remove('bg-gray-100', 'text-gray-700');
                genericTabBtn.classList.add('bg-red-600', 'text-white');
            }
            if (upgradingTabBtn) {
                upgradingTabBtn.classList.remove('bg-red-600', 'text-white');
                upgradingTabBtn.classList.add('bg-gray-100', 'text-gray-700');
            }
        } else {
            if (genericContent) genericContent.style.display = 'none';
            if (upgradingContent) upgradingContent.style.display = 'block';
            if (genericRequirements) genericRequirements.style.display = 'none';
            if (upgradingRequirements) upgradingRequirements.style.display = 'block';
            
            if (upgradingTabBtn) {
                upgradingTabBtn.classList.remove('bg-gray-100', 'text-gray-700');
                upgradingTabBtn.classList.add('bg-red-600', 'text-white');
            }
            if (genericTabBtn) {
                genericTabBtn.classList.remove('bg-red-600', 'text-white');
                genericTabBtn.classList.add('bg-gray-100', 'text-gray-700');
            }
        }
    }
</script>

<style>
    .tab-btn {
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .generic-content, .upgrading-content {
        transition: all 0.3s ease;
    }
</style>
@endsection