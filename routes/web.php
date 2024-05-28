<?php

use App\Http\Controllers\PlatinumController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PlatinumController::class, 'index']);

Route::get('/publication', function () {
    return view('scholar-scroll.publication');
});

Route::get('/login', function () {
    return view('users.login');
});
