@extends('layouts.app')

@section('title', $news->title . ' - St John of God University')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="container mx-auto px-4 md:px-16">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-red-600 transition">
                <i class="fas fa-arrow-left text-sm"></i>
                Back to News
            </a>
        </div>

        <!-- Article Container -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <!-- Featured Image -->
            @if($news->image)
            <div class="h-64 md:h-96 overflow-hidden">
                <img src="{{ asset('storage/' . $news->image) }}" 
                     alt="{{ $news->title }}" 
                     class="w-full h-full object-cover">
            </div>
            @endif

            <!-- Article Content -->
            <div class="p-6 md:p-10">
                <!-- Meta Information -->
                <div class="flex flex-wrap items-center gap-4 mb-6 pb-4 border-b">
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <i class="far fa-calendar-alt"></i>
                        <span>{{ $news->date ? $news->date->format('F d, Y') : 'Date not specified' }}</span>
                    </div>
                    @if($news->category)
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <i class="fas fa-tag"></i>
                        <span class="bg-{{ $news->category_color ?? 'red' }}-100 text-{{ $news->category_color ?? 'red' }}-600 px-2 py-1 rounded text-xs font-semibold">
                            {{ $news->category }}
                        </span>
                    </div>
                    @endif
                    @if($news->is_featured)
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs font-semibold">
                            <i class="fas fa-star mr-1"></i> Featured
                        </span>
                    </div>
                    @endif
                </div>

                <!-- Title -->
                <h1 class="text-2xl md:text-4xl font-bold text-gray-800 mb-6">{{ $news->title }}</h1>

                <!-- Content -->
                <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
                    {!! $news->content !!}
                </div>

                <!-- Share Section -->
                <div class="mt-8 pt-6 border-t">
                    <div class="flex flex-wrap items-center gap-4">
                        <span class="text-gray-600 font-semibold">Share this article:</span>
                        <div class="flex gap-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                               target="_blank"
                               class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                                <i class="fab fa-facebook-f text-white text-sm"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($news->title) }}" 
                               target="_blank"
                               class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition">
                                <i class="fab fa-twitter text-white text-sm"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($news->title . ' - ' . url()->current()) }}" 
                               target="_blank"
                               class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center hover:bg-green-700 transition">
                                <i class="fab fa-whatsapp text-white text-sm"></i>
                            </a>
                            <a href="mailto:?subject={{ urlencode($news->title) }}&body={{ urlencode(url()->current()) }}" 
                               class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-900 transition">
                                <i class="fas fa-envelope text-white text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Articles Section -->
        @if(isset($relatedNews) && $relatedNews->count() > 0)
        <div class="mt-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Related News</h3>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach($relatedNews as $related)
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group">
                    @if($related->image)
                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="w-full h-40 object-cover group-hover:scale-105 transition duration-300">
                    @else
                        <div class="w-full h-40 bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center">
                            <i class="fas fa-newspaper text-white text-3xl opacity-50"></i>
                        </div>
                    @endif
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-2">
                            @if($related->category)
                                <span class="bg-{{ $related->category_color ?? 'red' }}-100 text-{{ $related->category_color ?? 'red' }}-600 text-xs px-2 py-0.5 rounded font-semibold">
                                    {{ $related->category }}
                                </span>
                            @endif
                            <span class="text-gray-400 text-xs">|</span>
                            <span class="text-gray-500 text-xs">
                                <i class="far fa-calendar-alt mr-1"></i> {{ $related->date ? $related->date->format('M d, Y') : 'Date TBA' }}
                            </span>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2 line-clamp-2 hover:text-red-600 transition">
                            <a href="{{ route('news.show', $related->slug) }}">{{ $related->title }}</a>
                        </h4>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $related->excerpt ?? Str::limit(strip_tags($related->content), 80) }}</p>
                        <a href="{{ route('news.show', $related->slug) }}" class="text-red-600 text-sm font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
                            Read More <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .prose p {
        margin-bottom: 1.5rem;
        line-height: 1.8;
    }
    
    .prose h2 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-top: 2rem;
        margin-bottom: 1rem;
        color: #1f2937;
    }
    
    .prose h3 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
        color: #1f2937;
    }
    
    .prose ul, .prose ol {
        margin: 1rem 0;
        padding-left: 2rem;
    }
    
    .prose li {
        margin: 0.5rem 0;
    }
    
    .prose blockquote {
        border-left: 4px solid #dc2626;
        padding-left: 1rem;
        margin: 1.5rem 0;
        font-style: italic;
        color: #4b5563;
    }
    
    .prose img {
        max-width: 100%;
        height: auto;
        border-radius: 0.5rem;
        margin: 1.5rem 0;
    }
</style>
@endpush