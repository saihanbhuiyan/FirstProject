<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{id}', [profileController::class,'inbox']);