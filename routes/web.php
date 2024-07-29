<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [SignupController::class, 'test']);

Route::post('/signup', [SignupController::class, 'signup']);