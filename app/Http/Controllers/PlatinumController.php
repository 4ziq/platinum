<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Platinum;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
use Illuminate\Support\Facades\Auth;

class PlatinumController extends Controller
{
    
    //index
    public function index(){
        return view('scholar-scroll.main');
    }

    //show registration form
    public function create()
    {
        return view('scholar-scroll.register-user');
    }

    // create new user
    public function store(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'platinum_name' => 'required',
            'platinum_email' => ['required', 'email', Rule::unique('platinum', 'platinum_email')]
        ]);

        //generate password
        // String of all alphanumeric character
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $password = substr(str_shuffle($str_result), 0, 10);

        //push into array
        $formFields['platinum_password'] = 123;

        //create user
        Platinum::create($formFields);

        //redirect
        return redirect('/register-user')->with('message', 'user created');
    }

    //shows profile page
    public function profile(Request $request){
        $id = auth()->guard('platinum')->id();
        $platinum = Platinum::where('id', $id)->get();
        return view('users.profile', ['platinum'=>$platinum]);
    }

    

}
