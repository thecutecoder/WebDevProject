<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = courses :: all();
        return view('welcome') -> with ('courses', $courses);
    }
}
