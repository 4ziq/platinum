<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('scholar-scroll.index');
});

Route::get('/publication', function(){
    return view('scholar-scroll.publication');
});