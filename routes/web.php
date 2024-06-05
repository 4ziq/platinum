<?php

use App\Http\Controllers\PlatinumController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//route system main page
Route::get('/', [PlatinumController::class, 'index']);

// Show register platinum/create form
Route::get('/register-user', [UserController::class, 'create']);

//Create new user
Route::post('/users', [UserController::class, 'store']);




// Route::get('/publication', function () {
//     return view('scholar-scroll.publication');
// });

//show  login
// Route::get('/login', function () {
//     return view('users.login');
// });


