<?php

namespace App\Http\Controllers;
use App\Models\assignments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignment = assignments :: all();
        return view('assignment.index')-> with ('assignment', $assignment);
    }

    public function edit($id)
    {
        $assignment = assignments::find($id);
        return view('assignment.edit', compact('assignment','id'));
    }

    public function update(Request $request, $id)
    {
        $assignment = assignments::find($id);
        if($request -> hasfile('assignment'))
        {
            $destination = 'uploads'.$assignment -> assignment;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request -> file('assignment');
            $extention = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file -> move('uploads', $filename);
            $assignment -> assignment = $filename;
        }

        $assignment -> update();
        return redirect()->back()->with ('status', "Your assignment is successfully submitted.");
    }

    public function delete($id)
    {
        $assignment = assignments::find($id);
        $destination = 'uploads'.$assignment -> assignment;
        if(File::exists($destination))
            {
                File::delete($destination);
            }
        if ($assignment)
        {
            $assignment -> assignment = null;
            $assignment -> updated_at = null;
            $assignment -> save();
        }
        return redirect()->back()->with ('status-del', "Your assignment is deleted successfully.");
    }
}
