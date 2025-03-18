<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function uiuxCourse()
    {
        return view('courses.uiux.index');
    }
    
    public function showModule($module)
    {
        return view('courses.uiux.modules.' . $module);
    }
    
    public function showLesson($lesson)
    {
        return view('courses.uiux.lessons.' . $lesson);
    }
}