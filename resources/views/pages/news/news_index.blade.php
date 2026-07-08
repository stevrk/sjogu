@extends('layouts.app')

@section('title', 'News & Announcements - St John of God University')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="container mx-auto px-4 md:px-16">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">News & <span class="text-red-600">Announcements</span></h1>
            <div class="w-24 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Stay updated with the latest news, events, and announcements from St John of God University
            </p>
        </div>

        <!-- Two-Column Layout: Left = Main/Featured News, Right = Announcements & Dates -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- RIGHT PANE: Announcements & Important Dates -->
            <div class="lg:col-span-1 order-1 lg:order-2">
                <!-- Important Dates -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
                    <div class="bg-red-600 text-white px-5 py-3">
                        <h3 class="font-bold flex items-center gap-2">
                            <i class="fas fa-calendar-alt"></i>
                            Important Dates
                        </h3>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex justify-between items-center border-b border-gray-100 pb-2">
                            <span class="text-gray-600 text-sm">Registration Deadline</span>
                            <span class="font-semibold text-red-600 text-sm">April 15, 2026</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-gray-100 pb-2">
                            <span class="text-gray-600 text-sm">Mid-Semester Exams</span>
                            <span class="font-semibold text-red-600 text-sm">May 5-10, 2026</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-gray-100 pb-2">
                            <span class="text-gray-600 text-sm">Graduation Ceremony</span>
                            <span class="font-semibold text-red-600 text-sm">June 28, 2026</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-gray-100 pb-2">
                            <span class="text-gray-600 text-sm">Orientation Week</span>
                            <span class="font-semibold text-red-600 text-sm">July 15-17, 2026</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 text-sm">Application Deadline</span>
                            <span class="font-semibold text-red-600 text-sm">May 31, 2026</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Announcements -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
                    <div class="bg-red-600 text-white px-5 py-3">
                        <h3 class="font-bold flex items-center gap-2">
                            <i class="fas fa-bullhorn"></i>
                            Quick Announcements
                        </h3>
                    </div>
                    <div class="divide-y divide-gray-100">
                        <div class="p-4 hover:bg-gray-50 transition">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-calendar-check text-red-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Mid-Semester Break</p>
                                    <p class="text-xs text-gray-500 mt-1">April 20-28, 2026</p>
                                    <p class="text-xs text-gray-600 mt-1">Campus facilities will operate on reduced hours.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-gray-50 transition">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-file-alt text-red-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Scholarship Applications Open</p>
                                    <p class="text-xs text-gray-500 mt-1">Deadline: April 30, 2026</p>
                                    <p class="text-xs text-gray-600 mt-1">Merit-based scholarships available for outstanding students.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-gray-50 transition">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-chalkboard-teacher text-red-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Guest Lecture Series</p>
                                    <p class="text-xs text-gray-500 mt-1">April 12, 2026</p>
                                    <p class="text-xs text-gray-600 mt-1">Special lecture on "Future of Healthcare in Africa".</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-gray-50 transition">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-users text-red-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Alumni Homecoming</p>
                                    <p class="text-xs text-gray-500 mt-1">May 15-16, 2026</p>
                                    <p class="text-xs text-gray-600 mt-1">All alumni are invited to the annual homecoming event.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LEFT PANE: Featured/Main News Stories -->
            <div class="lg:col-span-2 order-2 lg:order-1">
                <!-- Featured News Banner (Top Story) -->
                @if(isset($news) && $news->count() > 0)
                    @php
                        $featured = $news->where('is_featured', true)->first() ?? $news->first();
                    @endphp
                    <div class="mb-8 bg-gradient-to-r from-red-600 to-red-700 rounded-xl overflow-hidden shadow-lg">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-1/2 h-48 md:h-auto">
                                @if($featured->image)
                                    <img src="{{ asset('storage/' . $featured->image) }}" 
                                         alt="{{ $featured->title }}" 
                                         class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-gradient-to-r from-red-800 to-red-900 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-white text-5xl opacity-50"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="md:w-1/2 p-6 text-white">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="bg-white/20 backdrop-blur-sm px-2 py-1 rounded text-xs font-semibold">Featured Story</span>
                                    <span class="text-white/80 text-xs">
                                        <i class="far fa-calendar-alt mr-1"></i> {{ $featured->date ? $featured->date->format('M d, Y') : 'Date TBA' }}
                                    </span>
                                </div>
                                <h2 class="text-xl md:text-2xl font-bold mb-3">{{ $featured->title }}</h2>
                                <p class="text-white/90 text-sm mb-4 line-clamp-3">{{ $featured->excerpt ?? Str::limit(strip_tags($featured->content), 120) }}</p>
                                <a href="{{ route('news.show', $featured->slug) }}" 
                                   class="inline-flex items-center gap-2 bg-white text-red-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
                                    Read Full Article <i class="fas fa-arrow-right text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Main News Stories List (Remaining News) -->
                <div class="space-y-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-newspaper text-red-600"></i>
                        Latest News Stories
                    </h3>
                    
                    @if(isset($news) && $news->count() > 0)
                        @foreach($news as $item)
                            @if(!$item->is_featured || $item->id != $featured->id ?? null)
                                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition overflow-hidden">
                                    <div class="flex flex-col md:flex-row">
                                        <div class="md:w-48 h-48 md:h-auto">
                                            @if($item->image)
                                                <img src="{{ asset('storage/' . $item->image) }}" 
                                                     alt="{{ $item->title }}" 
                                                     class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center">
                                                    <i class="fas fa-newspaper text-white text-3xl opacity-50"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="flex-1 p-5">
                                            <div class="flex flex-wrap items-center gap-3 mb-2">
                                                @if($item->category)
                                                    <span class="bg-{{ $item->category_color ?? 'red' }}-100 text-{{ $item->category_color ?? 'red' }}-600 px-2 py-1 rounded text-xs font-semibold">
                                                        {{ $item->category }}
                                                    </span>
                                                @endif
                                                <span class="text-gray-500 text-xs">
                                                    <i class="far fa-calendar-alt mr-1"></i> {{ $item->date ? $item->date->format('M d, Y') : 'Date TBA' }}
                                                </span>
                                                @if($item->is_featured)
                                                    <span class="bg-yellow-100 text-yellow-700 px-2 py-0.5 rounded text-xs font-semibold">
                                                        <i class="fas fa-star mr-1"></i> Featured
                                                    </span>
                                                @endif
                                            </div>
                                            <h3 class="text-lg font-bold text-gray-800 mb-2 hover:text-red-600 transition">
                                                <a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a>
                                            </h3>
                                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $item->excerpt ?? Str::limit(strip_tags($item->content), 100) }}</p>
                                            <a href="{{ route('news.show', $item->slug) }}" 
                                               class="inline-flex items-center gap-1 text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                                Read More <i class="fas fa-arrow-right text-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="bg-white rounded-xl p-8 text-center">
                            <i class="fas fa-newspaper text-5xl text-gray-300 mb-3"></i>
                            <p class="text-gray-500">No news articles found.</p>
                        </div>
                    @endif
                </div>

                <!-- Pagination -->
                @if(isset($news) && method_exists($news, 'links'))
                    <div class="mt-8">
                        {{ $news->links() }}
                    </div>
                @endif
            </div>
        </div>
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
    
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Responsive order: On mobile, Announcements appear below News */
    @media (max-width: 1024px) {
        .order-1 {
            order: 2;
        }
        .order-2 {
            order: 1;
        }
    }
</style>
@endpush