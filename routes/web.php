<?php

use App\Http\Controllers\PlatinumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicationController;
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


//Module 3 Publication
//route system main page
Route::get('/publication', [PublicationController::class, 'index'])->name('publication.index');

//Create new publication
Route::get('/publication/create', [PublicationController::class, 'create'])->name('publication.create');

//Save data in database
Route::post('/publication', [PublicationController::class, 'store'])->name('publication.store');

//Edit and get publication data
Route::get('/publication/{publication}/edit', [PublicationController::class, 'edit'])->name('publication.edit');

//Update publication data
Route::put('/publication/{publication}', [PublicationController::class, 'update'])->name('publication.update');

//Delete publication data
Route::delete('/publication/{publication}', [PublicationController::class, 'destroy'])->name('publication.destroy');



