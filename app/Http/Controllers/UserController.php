<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //show registration form
    public function create(){
        return view('scholar-scroll.create-user');
    }
}
