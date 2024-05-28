<?php

use App\Http\Controllers\PlatinumController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PlatinumController::class, 'index']);

Route::get('/publication', function () {
    return view('scholar-scroll.publication');
});

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/', [PublicationController::class, 'show']);
