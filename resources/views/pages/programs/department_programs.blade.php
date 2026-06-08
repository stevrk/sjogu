@extends('layouts.app')

@section('title', $department . ' Programs - St John of God University')

@section('content')
<!-- PROGRAMS SECTION -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">{{ $department }}</p>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ $department }} <span class="text-red-600">Programs</span></h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                @if($department == 'Clinical Medicine')
                    Train to become a qualified clinical officer and make a difference in healthcare delivery.
                @elseif($department == 'Nursing and Midwifery')
                    Join the noble profession of nursing and provide compassionate care to those in need.
                @elseif($department == 'Psycho-Social Counselling')
                    Help others overcome challenges and improve mental wellbeing through professional counselling.
                @endif
            </p>
        </div>

        <!-- Department Description Card -->
        <div class="bg-red-50 rounded-lg p-6 mb-12 border border-red-200">
            <div class="flex items-center gap-3 mb-4">
                @if($department == 'Clinical Medicine')
                    <i class="fas fa-stethoscope text-3xl text-red-600"></i>
                @elseif($department == 'Nursing and Midwifery')
                    <i class="fas fa-hand-holding-heart text-3xl text-red-600"></i>
                @elseif($department == 'Psycho-Social Counselling')
                    <i class="fas fa-brain text-3xl text-red-600"></i>
                @endif
                <h2 class="text-xl font-bold text-gray-800">About {{ $department }}</h2>
            </div>
            <p class="text-gray-700 mb-4">
                @if($department == 'Clinical Medicine')
                    The Department of Clinical Medicine offers comprehensive training programs that prepare students for primary healthcare delivery. Our programs equip students with knowledge and skills to diagnose, treat, and manage common medical conditions in various healthcare settings.
                @elseif($department == 'Nursing and Midwifery')
                    The Department of Nursing and Midwifery provides professional nursing education combining theoretical knowledge with practical clinical skills. Students learn patient care, midwifery, community health nursing, and leadership skills.
                @elseif($department == 'Psycho-Social Counselling')
                    The Department of Psycho-Social Counselling prepares students for professional counselling and psychotherapy practice. Our programs offer two exit points: Diploma in Psychosocial Counselling and BSc in Psychotherapy.
                @endif
            </p>
        </div>

        <!-- Programs Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($programs as $slug => $program)
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <!-- Program Image -->
                @if(isset($program['image']) && $program['image'])
                    <img src="{{ asset('images/' . $program['image']) }}" 
                         alt="{{ $program['title'] }}"
                         class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-5xl opacity-50"></i>
                    </div>
                @endif
                
                <div class="p-5">
                    <!-- Badges -->
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 text-xs rounded font-semibold 
                            @if($program['type'] == 'Generic') bg-green-100 text-green-700
                            @elseif($program['type'] == 'Upgrading') bg-orange-100 text-orange-700
                            @else bg-blue-100 text-blue-700 @endif">
                            {{ $program['type'] }}
                        </span>
                        <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded font-semibold">
                            {{ $program['duration'] }}
                        </span>
                    </div>
                    
                    <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">{{ $program['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-3">{{ $program['overview'] }}</p>
                    
                    <!-- Study Mode -->
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <i class="fas fa-clock text-red-600 text-xs"></i>
                        <span>{{ $program['study_mode'] }}</span>
                    </div>
                    
                    <div class="flex items-center justify-between pt-3 border-t">
                        <span class="text-sm text-gray-500">{{ $program['duration_semesters'] }}</span>
                        <a href="{{ route('programs.show', $program['slug']) }}" 
                           class="text-red-600 text-sm font-semibold hover:text-red-700 transition flex items-center gap-1">
                            Read More <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <i class="fas fa-folder-open text-gray-400 text-6xl mb-4"></i>
                <p class="text-gray-500 text-lg">No programs found in this department.</p>
            </div>
            @endforelse
        </div>

        <!-- Entry Requirements Section -->
        <div class="bg-gray-50 rounded-lg p-6 mt-12 border border-gray-200">
            <div class="flex items-center gap-3 mb-4">
                <i class="fas fa-graduation-cap text-2xl text-red-600"></i>
                <h2 class="text-xl font-bold text-gray-800">Entry Requirements Overview</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold text-red-600 mb-2">Generic Programs</h3>
                    <ul class="space-y-1 text-gray-600 text-sm">
                        <li>• Full Malawi School Certificate of Education (MSCE) or equivalent with six (6) credits</li>
                        <li>• Credits must include: English, Mathematics, Biology, Physics, Chemistry</li>
                        <li>• For Psychotherapy: six (6) credits including English and Mathematics</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-red-600 mb-2">Upgrading Programs</h3>
                    <ul class="space-y-1 text-gray-600 text-sm">
                        <li>• Diploma in relevant field from accredited institution</li>
                        <li>• Minimum two (2) years post-qualification clinical/work experience</li>
                        <li>• Current registration with professional regulatory body</li>
                        <li>• Full MSCE with six (6) credits including English and relevant sciences</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-8">
            <a href="{{ route('programs') }}" class="inline-flex items-center gap-2 text-red-600 hover:text-red-700 font-semibold transition">
                <i class="fas fa-arrow-left"></i>
                <span>Back to All Programs</span>
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush