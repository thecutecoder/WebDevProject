<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function index()
    {
        $student = Students :: all();

        return view('welcome') -> with ('student', $student);
    }

    public function update($id)
    {
        $student = Students::find($id);
        return view('student.update', compact('student','id'));
    }

    public function store(Request $request)
    {
        $student = new Students;
        $student -> full_name = $request -> input ('name');
        $student -> password = $request -> input ('password');
        $student -> home_address = $request -> input ('address');
        $student -> email = $request -> input ('email');
        $student -> years = $request -> input ('year');
        if($request ->file('image'))
        {
            $file = $request ->file('image');
            $extention = $file ->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file ->move('image',$filename);
            $student->student_image = $filename;
        }else{
            return $request;
            $student->student_image ='';
        }
        $student -> save();
        return view('welcome')->with('student', $student);
    }

    public function show($id)
    {
        $student = Students::find($id);
        return view('student.studentprofile', compact('student','id'));
    }

    public function profileUpdated(Request $request, $id)
    {
        $student = Students::find($id);
        $student -> password = $request -> input ('password');
        $student -> full_name = $request -> input ('fullname');
        $student -> email = $request -> input ('email');
        $student -> home_address = $request -> input ('address');
        if($request ->hasfile('image'))
        {
            $destination = 'image'.$student->student_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request ->file('image');
            $extention = $file ->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file ->move('image',$filename);
            $student->student_image = $filename;
        }
        $student -> update();

        return redirect()->back()->with ('status', "Your information is successfully updated.");
    }
}
