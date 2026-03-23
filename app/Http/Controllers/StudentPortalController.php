<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPortalController extends Controller
{   public function staffDashboard()
{
    return view('portal.staff-dashboard');
}

     public function login()
    {
        return view('portal.login');
    }
    public function dashboard()
    {
        return view('portal.Dashboard');
    }

    public function courses()
    {
        return view('portal.courses');
    }

    public function grades()
    {
        return view('portal.grades');
    }

    public function attendance()
    {
        return view('portal.attendance');
    }

    public function fees()
    {
        return view('portal.fees');
    }

    public function profile()
    {
        return view('portal.profile');
    }
}