<?php

use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $currentPage  = 'Home';
    return view('home', compact('currentPage'));
})->name('home');

Route::get('/about', function () {
    $currentPage  = 'About';
    return view('about', compact('currentPage'));
})->name('about');

Route::get('/experience', function () {
    $currentPage  = 'Experience';
    return view('experience', compact('currentPage'));
})->name('experience');



Route::get('/experience/{keyword}', [ExperienceController::class, 'show'])
    ->name('experience.projects');


Route::get('/skills', function () {
    $currentPage  = 'Skills';
    return view('skills', compact('currentPage'));
})->name('skills');

Route::get('/courses', function () {
    $currentPage  = 'Courses';
    return view('courses', compact('currentPage'));
})->name('courses');