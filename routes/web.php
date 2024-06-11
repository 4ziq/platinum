<?php

use App\Http\Controllers\PlatinumController;
<<<<<<< HEAD
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return view('welcome');
});

Route::get('/publication', [PublicationController::class, 'index'])->name('publication.index');
Route::get('/publication/create', [PublicationController::class, 'create'])->name('publication.create');
Route::post('/publication', [PublicationController::class, 'store'])->name('publication.store');
Route::get('/publication/{publication}/edit', [PublicationController::class, 'edit'])->name('publication.store');
Route::put('/publication/{publication}/update', [PublicationController::class, 'update'])->name('publication.store');
Route::put('/publication/{publication}/destroy', [PublicationController::class, 'destroy'])->name('publication.destroy');


//
//Route::get('/', [PlatinumController::class, 'index']);

//Route::get('/publication', function () {
    //return view('scholar-scroll.publication');
//});

//Route::get('/login', function () {
    //return view('users.login');
//});

//Route::get('/', [PublicationController::class, 'show']);
=======
use App\Http\Controllers\UserController;
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
>>>>>>> 732de2b5a673bc39dc7b1cbe9812126915b4c248
