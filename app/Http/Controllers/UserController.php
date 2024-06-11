<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // show login page
    public function login(){
        return view('users.index');
    }

    // authenticate user
    public function authenticate(Request $request){
        // dd($request);
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(Auth::attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/');
        }else{
            return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
        }

        
    }

    //show registration form
    public function create()
    {
        return view('scholar-scroll.register-user');
    }

    // create new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')]
        ]);

        //generate password
        // String of all alphanumeric character
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $password = substr(str_shuffle($str_result), 0, 10);

        //push into array
        $formFields['password'] = 123;

        //create user
        User::create($formFields);

        //redirect
        return redirect('/register-user')->with('message', 'user created');
    }

    //shows profile page
    public function profile($id){
        $current_user_id = Auth()->user()->id;
        // $profile = Profile::;

        return view('users.profile');
    }
}
