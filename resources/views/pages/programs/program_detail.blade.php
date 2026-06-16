@extends('layouts.app')

@section('title', $program['title'] . ' - St John of God University')

@section('content')
<section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto max-w-5xl">
        <!-- Back Link -->
        <div class="mb-6">
            <a href="{{ route('programs.' . strtolower(str_replace(' ', '-', $program['department']))) }}" 
               class="inline-flex items-center gap-2 text-gray-600 hover:text-red-600 text-sm">
                ← Back to {{ $program['department'] }} Department
            </a>
        </div>

        <!-- Program Header -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg mb-8">
            <div class="h-64 md:h-80 overflow-hidden">
                <img src="{{ asset('images/' . $program['image']) }}" 
                     alt="{{ $program['title'] }}"
                     class="w-full h-full object-cover">
            </div>
            <div class="p-6 md:p-8">
                <h1 class="text-2xl md:text-4xl font-bold text-gray-800 mb-2">{{ $program['title'] }}</h1>
                <p class="text-red-600 mb-4">{{ $program['department'] }}</p>
                <p class="text-gray-600 leading-relaxed">{{ $program['overview'] }}</p>
            </div>
        </div>

        <!-- Program Options (if both available) -->
        @if($program['has_generic'] && $program['has_upgrading'])
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Generic Option -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border-t-4 border-green-500">
                    <div class="bg-green-50 px-6 py-3">
                        <h2 class="text-xl font-bold text-green-800 flex items-center gap-2">
                            <i class="fas fa-graduation-cap"></i> Generic Program
                        </h2>
                    </div>
                    <div class="p-6">
                        <div class="mb-4">
                            <p class="text-sm text-gray-500">Duration</p>
                            <p class="font-semibold">{{ $program['generic']['duration'] }} ({{ $program['generic']['duration_semesters'] }})</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-sm text-gray-500">Study Mode</p>
                            <p class="font-semibold">{{ $program['generic']['study_mode'] }}</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-sm text-gray-500">Career Opportunities</p>
                            <ul class="list-disc list-inside text-sm text-gray-600 mt-1">
                                @foreach($program['generic']['career_opportunities'] as $career)
                                    <li>{{ $career }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Entry Requirements</p>
                            <ul class="list-disc list-inside text-sm text-gray-600 mt-1">
                                @foreach($program['generic']['entry_requirements'] as $req)
                                    <li>{{ $req }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Upgrading Option -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border-t-4 border-orange-500">
                    <div class="bg-orange-50 px-6 py-3">
                        <h2 class="text-xl font-bold text-orange-800 flex items-center gap-2">
                            <i class="fas fa-chart-line"></i> Upgrading Program
                        </h2>
                    </div>
                    <div class="p-6">
                        <div class="mb-4">
                            <p class="text-sm text-gray-500">Duration</p>
                            <p class="font-semibold">{{ $program['upgrading']['duration'] }} ({{ $program['upgrading']['duration_semesters'] }})</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-sm text-gray-500">Study Mode</p>
                            <p class="font-semibold">{{ $program['upgrading']['study_mode'] }}</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-sm text-gray-500">Career Opportunities</p>
                            <ul class="list-disc list-inside text-sm text-gray-600 mt-1">
                                @foreach($program['upgrading']['career_opportunities'] as $career)
                                    <li>{{ $career }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Entry Requirements</p>
                            <ul class="list-disc list-inside text-sm text-gray-600 mt-1">
                                @foreach($program['upgrading']['entry_requirements'] as $req)
                                    <li>{{ $req }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @elseif($program['has_generic'])
            <!-- Generic Only -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Program Details</h2>
                        <p><strong>Duration:</strong> {{ $program['generic']['duration'] }} ({{ $program['generic']['duration_semesters'] }})</p>
                        <p class="mt-2"><strong>Study Mode:</strong> {{ $program['generic']['study_mode'] }}</p>
                        <h3 class="font-bold text-gray-800 mt-4 mb-2">Career Opportunities</h3>
                        <ul class="list-disc list-inside text-gray-600">
                            @foreach($program['generic']['career_opportunities'] as $career)
                                <li>{{ $career }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Entry Requirements</h2>
                        <ul class="list-disc list-inside text-gray-600">
                            @foreach($program['generic']['entry_requirements'] as $req)
                                <li>{{ $req }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @elseif($program['has_upgrading'])
            <!-- Upgrading Only -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Program Details</h2>
                        <p><strong>Duration:</strong> {{ $program['upgrading']['duration'] }} ({{ $program['upgrading']['duration_semesters'] }})</p>
                        <p class="mt-2"><strong>Study Mode:</strong> {{ $program['upgrading']['study_mode'] }}</p>
                        <h3 class="font-bold text-gray-800 mt-4 mb-2">Career Opportunities</h3>
                        <ul class="list-disc list-inside text-gray-600">
                            @foreach($program['upgrading']['career_opportunities'] as $career)
                                <li>{{ $career }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Entry Requirements</h2>
                        <ul class="list-disc list-inside text-gray-600">
                            @foreach($program['upgrading']['entry_requirements'] as $req)
                                <li>{{ $req }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <!-- Accreditation & Apply -->
        <div class="mt-8 space-y-6">
           

            <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-xl p-6 text-white text-center">
                <h3 class="text-2xl font-bold mb-2">Ready to Start Your Journey?</h3>
                <p class="mb-4">Apply now to join St John of God University</p>
                <a href="{{ route('enroll') }}" class="inline-block bg-white text-red-600 px-6 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection