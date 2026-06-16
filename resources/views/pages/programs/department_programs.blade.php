@extends('layouts.app')

@section('title', $department . ' Programs - St John of God University')

@section('content')
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ $department }} <span class="text-red-600">Programs</span></h1>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                @if($department == 'Clinical Medicine')
                    Explore our comprehensive programs in Clinical Medicine
                @elseif($department == 'Nursing and Midwifery')
                    Explore our comprehensive programs in Nursing and Midwifery
                @elseif($department == 'Psycho-Social Counselling')
                    Explore our comprehensive programs in Psycho-Social Counselling
                @endif
            </p>
        </div>

        <!-- Programs Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($programs as $slug => $program)
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/' . $program['image']) }}" 
                         alt="{{ $program['title'] }}"
                         class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $program['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $program['overview'] }}</p>
                    
                    <div class="flex items-center justify-between pt-3 border-t">
                        <div class="flex gap-2">
                            @if($program['has_generic'])
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded">Generic</span>
                            @endif
                            @if($program['has_upgrading'])
                                <span class="text-xs bg-orange-100 text-orange-700 px-2 py-1 rounded">Upgrading</span>
                            @endif
                        </div>
                        <a href="{{ route('programs.show', $slug) }}" 
                           class="text-red-600 font-semibold text-sm hover:text-red-700 transition">
                            View Details →
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500">No programs found in this department.</p>
            </div>
            @endforelse
        </div>

       
    </div>
</section>
@endsection