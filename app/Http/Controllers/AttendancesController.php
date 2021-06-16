<?php

namespace App\Http\Controllers;
use App\Models\attendances;
use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    public function index()
    {
        $attendances = attendances :: all();
        return view('attendance/index') -> with ('attendances', $attendances);
    }
    function showData($id)
    {
        $attendances = attendances :: find($id);
        return view('attendance/edit') -> with ('data',$attendances);
    }
    function update(Request $request, $id)
    {
        $data = attendances :: find($id);
        $data->attendance = $request-> input ('attendance');
        $data->update();
        return redirect('/attendance/index')->with ('status', "Your attendance is successfully recorded.");
    }
}
