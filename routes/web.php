<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "Hello world";
});

Route::get('about', [PageController::class, 'about'])->name('about');