<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller
{
    // show login page
    public function login()
    {
        return view('scholar-scroll.users.index');
    }

    // authenticate user
    public function authenticate(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (Auth::guard('platinum')->attempt(['platinum_email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        }else if(Auth::guard('staff')->attempt(['staff_email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('/');
        }else if(Auth::guard('mentor')->attempt(['mentor_email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('/');
        }else{
            return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
        }
        
    }

    // logout
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
