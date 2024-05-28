<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('scholar-scroll.index');
});

// Route::get('/login', function(){
//     return view('login');
// });