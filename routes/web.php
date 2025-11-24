<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $currentPage  = 'Home';
    return view('home', compact('currentPage'));
});
