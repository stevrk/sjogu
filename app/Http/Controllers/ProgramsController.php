<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Department;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
     public function byDepartment($id)
    {
        // Find department by ID
        $department = Department::findOrFail($id);
        
        // Get programs for this department
        $programs = Program::where('department_name', $department->name)
            ->where('is_active', true)
            ->orderBy('order', 'asc')
            ->orderBy('name', 'asc')
            ->get();
        
        return view('pages.programs.department', compact('department', 'programs'));
    }

    public function show($id)
    {
        // Find program by ID
        $program = Program::where('is_active', true)->findOrFail($id);
        
        return view('pages.programs.show', compact('program'));
    }

    
   
    

    
  
   
}