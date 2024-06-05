<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
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
        $formFields['password'] = $password;

        //create user
        User::create($formFields);

        //redirect
        return redirect('/register-user')->with('message', 'user created');
    }
}
