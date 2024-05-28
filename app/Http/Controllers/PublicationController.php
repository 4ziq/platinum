<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    //index
    public function show(){
        return view('scholar-scroll.publication');
    }

    //create
    public function create(){
        return view('scholar-scroll.addPublication');
    }

    //store
    public function store(Request $request){
        $variable = $request->validation([
            //validate data
            'title' => 'required',
            'company' => ['required', Rule::unique('listing', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $formFields['user_id']

        //store data in db
        Publication::create($variable);
    }
}
