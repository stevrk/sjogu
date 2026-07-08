@extends('layouts.app')

@section('title', $program->name . ' - St John of God University')

@section('content')
<section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto max-w-6xl">
        <!-- Back Link -->
        <div class="mb-6">
            <a href="{{ route('programs.department', $program->department_name) }}" 
               class="inline-flex items-center gap-2 text-gray-600 hover:text-red-600 text-sm transition">
                ← Back to {{ $program->department_name }} Department
            </a>
        </div>

        <!-- Program Header -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg mb-8">
            @if($program->picture)
                <div class="h-64 md:h-80 overflow-hidden">
                    <img src="{{ asset('storage/' . $program->picture) }}" 
                         alt="{{ $program->name }}"
                         class="w-full h-full object-cover">
                </div>
            @endif
            <div class="p-6 md:p-8">
                <div class="flex flex-wrap gap-3 mb-4">
                    <span class="px-3 py-1 text-xs rounded-full font-semibold 
                        @if($program->program_type == 'generic') bg-green-100 text-green-700
                        @elseif($program->program_type == 'upgrading') bg-orange-100 text-orange-700
                        @endif">
                        {{ $program->program_type_label }}
                    </span>
                    @if($program->duration)
                        <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-semibold">
                            {{ $program->duration }}
                        </span>
                    @endif
                    @if($program->study_mode)
                        <span class="bg-purple-100 text-purple-700 text-xs px-3 py-1 rounded-full font-semibold">
                            {{ $program->study_mode }}
                        </span>
                    @endif
                </div>
                <h1 class="text-2xl md:text-4xl font-bold text-gray-800 mb-2">{{ $program->name }}</h1>
                <p class="text-red-600 mb-4">Department of {{ $program->department_name }}</p>
                
                @if($program->description)
                    <p class="text-gray-600 leading-relaxed">{{ $program->description }}</p>
                @endif
            </div>
        </div>

        <!-- Program Details & Entry Requirements Side by Side -->
        <div class="grid lg:grid-cols-2 gap-6 mb-8">
            <!-- Program Details -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <i class="fas fa-info-circle text-red-600"></i>
                    Program Details
                </h2>
                <div class="space-y-3">
                    @if($program->duration)
                        <div class="flex items-start gap-3">
                            <i class="fas fa-clock text-red-500 mt-1 text-sm"></i>
                            <div>
                                <p class="text-sm font-semibold text-gray-700">Duration</p>
                                <p class="text-sm text-gray-600">{{ $program->duration }}</p>
                            </div>
                        </div>
                    @endif
                    
                    @if($program->study_mode)
                        <div class="flex items-start gap-3">
                            <i class="fas fa-chalkboard-user text-red-500 mt-1 text-sm"></i>
                            <div>
                                <p class="text-sm font-semibold text-gray-700">Study Mode</p>
                                <p class="text-sm text-gray-600">{{ $program->study_mode }}</p>
                            </div>
                        </div>
                    @endif
                    
                    @if($program->duration_semesters)
                        <div class="flex items-start gap-3">
                            <i class="fas fa-layer-group text-red-500 mt-1 text-sm"></i>
                            <div>
                                <p class="text-sm font-semibold text-gray-700">Semesters</p>
                                <p class="text-sm text-gray-600">{{ $program->duration_semesters }}</p>
                            </div>
                        </div>
                    @endif
                    
                    <div class="flex items-start gap-3">
                        <i class="fas fa-tag text-red-500 mt-1 text-sm"></i>
                        <div>
                            <p class="text-sm font-semibold text-gray-700">Program Type</p>
                            <p class="text-sm text-gray-600">{{ $program->program_type_label }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <i class="fas fa-building text-red-500 mt-1 text-sm"></i>
                        <div>
                            <p class="text-sm font-semibold text-gray-700">Department</p>
                            <p class="text-sm text-gray-600">{{ $program->department_name }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Entry Requirements -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <i class="fas fa-graduation-cap text-red-600"></i>
                    Entry Requirements
                </h2>
                @if($program->hasEntryRequirements())
                    <ul class="space-y-3">
                        @foreach($program->entry_requirements as $requirement)
                            <li class="flex items-start gap-3 text-gray-600 text-sm">
                                <i class="fas fa-check-circle text-green-500 mt-0.5 text-sm"></i>
                                <span>{{ $requirement['item'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500 text-sm">No specific entry requirements listed.</p>
                @endif
            </div>
        </div>

        <!-- Career Opportunities (Full Width) -->
        @if($program->hasCareerOpportunities())
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                <i class="fas fa-briefcase text-red-600"></i>
                Career Opportunities
            </h2>
            <div class="grid md:grid-cols-2 gap-3">
                @foreach($program->career_opportunities as $career)
                    <div class="flex items-start gap-2 text-gray-600">
                        <i class="fas fa-arrow-right text-red-500 mt-1 text-sm"></i>
                        <span>{{ $career['item'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
        @endif

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
        <div class="mt-6 bg-gray-50 rounded-xl p-6 text-center">
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
</section>
@endsection