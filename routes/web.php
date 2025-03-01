<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MetricsController;





Route::get('/', function () {
    return view('home-page');
});

Route::get('/login', function () {
    return view('login-page');
});

Route::get('/register', function () {
    return view('register-page');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/employee', function () {
    return view('employee');
});

Route::get('/training', [TrainingController::class, 'index']);
Route::get('/salary', [SalaryController::class, 'index']);
Route::get('/information', [InformationController::class, 'index']);
Route::get('/metrics', [MetricsController::class, 'index']);


