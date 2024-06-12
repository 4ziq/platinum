<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Mentor;
use App\Models\Platinum;
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
        } else if (Auth::guard('staff')->attempt(['staff_email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        } else if (Auth::guard('mentor')->attempt(['mentor_email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        } else {
            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        }
    }

    //shows profile page
    public function profile(Platinum $platinum, Staff $staff, Mentor $mentor)
    {
        if (auth()->guard('platinum')->user() != null) {
            //get authenticated user id
            $id = auth()->guard('platinum')->id();
            // retrieve data based on user id
            $platinum = Platinum::where('id', $id)->get();
            return view('scholar-scroll.users.profile-platinum', ['user' => $platinum]);

        } else if (auth()->guard('staff')->user() != null) {
            //get authenticated user id
            $id = auth()->guard('staff')->id();
            // retrieve data based on user id
            $staff = Staff::where('id', $id)->get();
            return view('scholar-scroll.users.profile-staff', ['user' => $staff]);

        } else if (auth()->guard('mentor')->user() != null) {
            //get authenticated user id
            $id = auth()->guard('mentor')->id();
            // retrieve data based on user id
            $mentor = Mentor::where('id', $id)->get();
            return view('scholar-scroll.users.profile-mentor', ['user' => $mentor]);

        }
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
