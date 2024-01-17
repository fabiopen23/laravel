<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('index');
Route::get('/instructions', [App\Http\Controllers\UserController::class, 'instructions'])->name('instructions');
Route::get('/courses', [App\Http\Controllers\UserController::class, 'courses'])->name('courses');
Route::get('/academics', [App\Http\Controllers\UserController::class, 'academics'])->name('academics');
