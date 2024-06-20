<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

//Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// About Me Route
Route::get('/about_me', [AboutMeController::class, 'show']);

// Skills Route
Route::get('/skills', [SkillsController::class, 'show']);

// Hobbies Route
Route::get('/hobbies', [HobbiesController::class, 'show']);
