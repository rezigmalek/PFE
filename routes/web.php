<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\AffectationController;
use App\Http\Controllers\EncadrantController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\EcoleController;





Route::get('/home',[HomeController::class,'index']);
Route::get('/compte',[CompteController::class,'index'])->name('compte.index');

Route::get('/compte/create',[CompteController::class,'create'])->name('compte.create');
Route::post('/compte/store',[CompteController::class,'store'])->name('compte.store');

Route::get('affectation',[AffectationController::class,'index'])->name('affectation.index');

Route::get('/affectation/create',[AffectationController::class,'create'])->name('affectation.create');
Route::post('/affectation/store',[AffectationController::class,'store'])->name('affectation.store');

Route::get('encadrant',[EncadrantController::class,'index'])->name('encadrant.index');

Route::get('/encadrant/create',[EncadrantController::class,'create'])->name('encadrant.create');
Route::post('/encadrant/store',[EncadrantController::class,'store'])->name('encadrant.store');

Route::get('universite',[UniversiteController::class,'index'])->name('universite.index');

Route::get('/universite/create',[UniversiteController::class,'create'])->name('universite.create');
Route::post('/universite/store',[UniversiteController::class,'store'])->name('universite.store');

Route::get('ecole',[ecoleController::class,'index'])->name('ecole.index');

Route::get('/ecole/create',[ecoleController::class,'create'])->name('ecole.create');
Route::post('/ecole/store',[ecoleController::class,'store'])->name('ecole.store');



Route::get('/login', [LoginController::class,'show'])->name('login.show');
Route::post('/login', [LoginController::class,'login'])->name('login');



Route::get('/', function () {
    return view('welcome');
});
