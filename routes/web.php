<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompteController;
use App\Http\Controller\DepartementController;




Route::get('/home',[HomeController::class,'index']);
Route::get('/compte',[CompteController::class,'index'])->name('compte.index');

Route::get('/departement',[DepartementController::class,'index'])->name('departement.index');

Route::get('/compte/create',[CompteController::class,'create'])->name('create');
Route::post('/compte/store',[CompteController::class,'store'])->name('store');

Route::get('/login', [LoginController::class,'show'])->name('login.show');
Route::post('/login', [LoginController::class,'login'])->name('login');



Route::get('/', function () {
    return view('welcome');
});
