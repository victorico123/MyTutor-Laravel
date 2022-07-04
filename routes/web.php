<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::fallback('App\Http\Controllers\HomeController@index');

Route::get('/', [App\Http\Controllers\LandingController::class, 'landing'])->name('landing');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-subject', [App\Http\Controllers\SubjectController::class, 'showAddSubject']);
Route::post('/add-subject', [App\Http\Controllers\SubjectController::class, 'addSubject']);