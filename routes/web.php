<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lat1', 'App\Http\Controllers\Lat1Controller@index');
Route::get('/lat1/m2', 'App\Http\Controllers\Lat1Controller@method2');

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login']);
Route::post('/auth', [AuthController::class, 'auth']);
Route::get('/registration', [AuthController::class, 'registration']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/home', [AuthController::class, 'home']);
Route::get('/logout', [AuthController::class, 'logout']);
