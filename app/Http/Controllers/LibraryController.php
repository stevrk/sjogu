<?php

namespace App\Http\Controllers;

use App\Models\LibraryAnnouncement;
use App\Models\LibraryStaff;
use App\Models\LibraryContent;
use App\Models\LibraryHours;
use App\Models\LibraryService;
use App\Models\LibraryResource;
use App\Models\LibraryContact;
use App\Models\LibraryEnquiry;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $announcements = LibraryAnnouncement::where('is_active', true)
            ->orderBy('order', 'asc')
            ->orderBy('date', 'desc')
            ->get();
        
        $staff = LibraryStaff::where('is_active', true)
            ->orderBy('order', 'asc')
            ->orderBy('name', 'asc')
            ->get();
        
        $history = LibraryContent::where('section', 'history')
            ->where('is_active', true)
            ->first();
        
        $hours = LibraryHours::orderBy('order', 'asc')->get();
        
        $services = LibraryService::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();
        
        $resources = LibraryResource::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();
        
        $contact = LibraryContact::where('is_active', true)->first();
        
        return view('pages.library_sec.library_index', compact(
            'announcements', 
            'staff', 
            'history', 
            'hours', 
            'services', 
            'resources',
            'contact'
        ));
    }

    public function storeEnquiry(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'inquiry_type' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Create the enquiry
        LibraryEnquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'inquiry_type' => $request->inquiry_type,
            'message' => $request->message,
            'status' => 'unread',
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully! Our librarian will get back to you soon.');
    }
}