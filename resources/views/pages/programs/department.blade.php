@extends('layouts.app')

@section('title', $department->name . ' Programs - St John of God University')

@section('content')
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ $department->name }} <span class="text-red-600">Programs</span></h1>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Explore our comprehensive programs in {{ $department->name }}
            </p>
        </div>

        <!-- Programs Grid -->
        @if($programs->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($programs as $program)
                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                        @if($program->picture)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $program->picture) }}" 
                                     alt="{{ $program->name }}"
                                     class="w-full h-full object-cover">
                            </div>
                        @else
                            <div class="h-48 bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-white text-5xl opacity-50"></i>
                            </div>
                        @endif
                        <div class="p-5">
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span class="px-2 py-1 text-xs rounded font-semibold 
                                    @if($program->program_type == 'generic') bg-green-100 text-green-700
                                    @elseif($program->program_type == 'upgrading') bg-orange-100 text-orange-700
                                    @endif">
                                    {{ $program->program_type_label }}
                                </span>
                                @if($program->duration)
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded font-semibold">
                                        {{ $program->duration }}
                                    </span>
                                @endif
                            </div>
                            
                            <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $program->name }}</h3>
                            
                            @if($program->description)
                                <p class="text-gray-600 text-sm mb-3 line-clamp-3">{{ Str::limit($program->description, 100) }}</p>
                            @endif
                            
                            @if($program->study_mode)
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                    <i class="fas fa-chalkboard-user text-red-600 text-xs"></i>
                                    <span>{{ $program->study_mode }}</span>
                                </div>
                            @endif
                            
                            <a href="{{ route('programs.show', $program->id) }}" 
                               class="inline-flex items-center justify-between w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2.5 px-4 rounded-lg transition group">
                                <span>View Program Details</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <i class="fas fa-folder-open text-gray-400 text-6xl mb-4"></i>
                <p class="text-gray-500 text-lg">No programs found in this department.</p>
            </div>
        @endif

       
       
    </div>
</section>

@push('styles')
<style>
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush
@endsection