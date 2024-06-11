<?php

use App\Http\Controllers\PlatinumController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//route system main page
Route::get('/', [PlatinumController::class, 'index']); //->middleware('auth')

//Show register platinum/create form
Route::get('/register-user', [PlatinumController::class, 'create']);

//Create new user
Route::post('/users', [PlatinumController::class, 'store']);

//show login form
Route::get('/login', [UserController::class, 'login']); //->middleware('guest')

// log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//shows profile page
Route::get('/profile', [PlatinumController::class, 'profile']);