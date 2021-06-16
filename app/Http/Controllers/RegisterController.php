<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

   public function loginPage()
   {
    return view('auth.loginPage');

   }

   public function login (Request $request)
    {
        $this->validate($request,
        ['email' => 'required|email',
         'password' => 'required|alphaNum|min:3'

        ]);

        $student_data= array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($student_data))
        {
            return redirect('/welcome');

        }else{
            return back()->with('error','Incorrect login information. Please try again.');
        }
    }

    public function loginsuccess()
    {
        return view('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('auth.loginPage');
    }
}

