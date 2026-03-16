<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserControler;
use App\Http\Controllers\SessionsController;

Route::get('/', fn() => view('welcome'));

Route::get('/register', [RegisteredUserControler::class, 'create'])->middleware('guest');
Route::post('/register', [RegisteredUserControler::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::delete('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
