<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login.login');
    });
Route ::get('/login1', function () {
    return view('login.login1');
    });
Route ::get('/login2', function () {
    return view('login.login2');
    });
Route ::get('/login3', function () {
    return view('login.login3');
    });
Route ::get('/signin', function () {
    return view('signin');
    });
Route ::get('/main', function () {
    return view('main');
    });
Route ::get('/forget', function () {
    return view('forget');
    });

    Route::get('/signin', function () {
    return view('signin');
});
Route::post('/registerstep1', [RegisterController::class, 'registerStep1']);
Route::post('/login', [LoginController::class, 'signin'])->name('signin');