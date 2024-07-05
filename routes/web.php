<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/admin');
});

Route::get('/dashboard', function () {
    return view('layouts/dashboard');
})->name("dashboard");
