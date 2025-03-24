<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function uiuxCourse()
    {
        return view('pages.uiux-course.coursepage');
    }
    
    public function showModule($module)
    {
 
        return view('pages.uiux-course.Modules.' . $module);
    }
    
    public function showLesson($lesson)
    {
        return view('pages.uiux-course.Lessons.' . $lesson);
    }
}