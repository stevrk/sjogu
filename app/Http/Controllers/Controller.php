<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

abstract class Controller
{
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
}
