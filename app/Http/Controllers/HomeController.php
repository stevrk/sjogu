<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Announcement;
use App\Models\ImportantDate;
use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $latestNews = News::where('is_published', true)
            ->orderBy('date', 'desc')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        
        $importantDates = ImportantDate::where('is_active', true)
            ->where('display_start_date', '<=', now())
            ->where(function ($query) {
                $query->whereNull('display_end_date')
                      ->orWhere('display_end_date', '>=', now());
            })
            ->orderBy('order', 'asc')
            ->orderBy('display_start_date', 'asc')
            ->get();
        
        $announcements = Announcement::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();
        
        $departments = Department::orderBy('name', 'asc')->get();
        
        return view('welcome', compact('latestNews', 'importantDates', 'announcements', 'departments'));
    }
}