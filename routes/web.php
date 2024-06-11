<?php

use App\Http\Controllers\PlatinumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagePublicationController;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Facades\Route;

//route system main page
Route::get('/', [PlatinumController::class, 'index']); //->middleware('auth')

//Show register platinum/create form
Route::get('/register-user', [UserController::class, 'create']);

//Create new user
Route::post('/users', [UserController::class, 'store']);

//show login form
Route::get('/login', [UserController::class, 'login']); //->middleware('guest')

// log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//shows profile page
Route::get('/profile', [UserController::class, 'profile']);


//Module 3 Publication
//route system main page
Route::get('/publication', [ManagePublicationController::class, 'index'])->name('publication.index');

//Create new publication
Route::get('/publication/create', [ManagePublicationController::class, 'create'])->name('publication.create');

//Save data in database
Route::post('/publication', [ManagePublicationController::class, 'store'])->name('publication.store');

//Edit and get publication data
Route::get('/publication/{publication}/edit', [ManagePublicationController::class, 'edit'])->name('publication.edit');

//Update publication data
Route::put('/publication/{publication}', [ManagePublicationController::class, 'update'])->name('publication.update');

//Delete publication data
Route::delete('/publication/{publication}', [ManagePublicationController::class, 'destroy'])->name('publication.destroy');

//Search 
Route::get('/publication/search', [ManagePublicationController::class, 'search'])->name('publication.search');


//
//Route::get('/', [PlatinumController::class, 'index']);

//Route::get('/publication', function () {
    //return view('scholar-scroll.publication');
//});

//Route::get('/login', function () {
    //return view('users.login');
//});

//Route::get('/', [PublicationController::class, 'show']);
