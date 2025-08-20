<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "Hello world";
});

Route::get('about', function (): string {
    return view('about');
});