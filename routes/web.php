<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\studentController;


Route::get('/', [studentController::class, 'index'])->name('Home');
Route::post('/student_add', [studentController::class, 'addStudent']);
