<?php

use App\Http\Controllers\PlatinumController;
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
