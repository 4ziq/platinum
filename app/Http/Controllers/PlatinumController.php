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
        return view('users.create');
    }

    // create new user
    public function store(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'platinum_name' => 'required',
            'platinum_date_of_birth' => 'required',
            'platinum_gender' => 'required',
            'platinum_race' => 'required',
            'platinum_citizenship' => 'required',
            'platinum_religion' => 'required',
            'platinum_marital_status' => 'required',
            'platinum_employment_status' => 'required',
            'platinum_monthly_income' => 'required',
            'platinum_address' => 'required',
            'platinum_phone_num' => 'required',
            'platinum_email' => ['required', 'email', Rule::unique('platinum', 'platinum_email')],
            'platinum_education_level' => 'required',
            'platinum_field_of_expertise' => 'required',
            'platinum_university' => 'required',
            'platinum_supervisor' => 'required',
            'platinum_supervisor_email' => 'required',
            'platinum_package_type' => 'required',
        ]);

        //generate password
        // String of all alphanumeric character
        // $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        // $password = substr(str_shuffle($str_result), 0, 10);

        //push into array
        $formFields['platinum_password'] = 123;

        //create user
        Platinum::create($formFields);

        //redirect
        return redirect('/create')->with('message', 'user created');
    }

    //shows profile page
    public function profile(){

        //get authenticated user id
        $id = auth()->guard('platinum')->id();
        // retrieve data based on user id
        $platinum = Platinum::where('id', $id)->get();

        return view('users.profile', ['platinum'=>$platinum]);
    }

    public function edit(Platinum $platinum){
        return view('users.edit', ['platinum'=>$platinum]);
    }
    
    // update profile
    public function update(Request $request, Platinum $platinum)
    {
        // dd($request);
        $formFields = $request->validate([
            'platinum_date_of_birth' => 'required',
            'platinum_gender' => 'required',
            'platinum_race' => 'required',
            'platinum_citizenship' => 'required',
            'platinum_religion' => 'required',
            'platinum_marital_status' => 'required',
            'platinum_employment_status' => 'required',
            'platinum_monthly_income' => 'required',
            'platinum_address' => 'required',
            'platinum_phone_num' => 'required',
            'platinum_email' => ['required', 'email'],
            'platinum_education_level' => 'required',
            'platinum_field_of_expertise' => 'required',
            'platinum_university' => 'required',
            'platinum_supervisor' => 'required',
            'platinum_supervisor_email' => 'required',
        ]);

        //create user
        $platinum->update($formFields);

        //redirect
        return redirect('/profile')->with('message', 'updated');
    }

}
