<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display the home page with latest news.
     */
    public function home()
    {
        // Fetch 3 latest published news articles
        $latestNews = News::where('is_published', true)
            ->orderBy('date', 'desc')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        
        return view('welcome', compact('latestNews'));
    }

    /**
     * Display all news articles.
     */
    public function index()
    {
        $news = News::where('is_published', true)
            ->orderBy('date', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        
        return view('pages.news.news_index', compact('news'));
    }

    /**
     * Display a single news article.
     */
    public function show($slug)
{
    $news = News::where('slug', $slug)
        ->where('is_published', true)
        ->firstOrFail();
    
    $relatedNews = News::where('is_published', true)
        ->where('id', '!=', $news->id)
        ->where('category', $news->category)
        ->orderBy('date', 'desc')
        ->limit(3)
        ->get();
    
    return view('pages.news.news_show', compact('news', 'relatedNews'));
}
}