<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;



Route::get('/',[StudentController::class, 'index']);
Route::get('/insert',[StudentController::class, 'store']);

Route::resource('teacher', TeacherController::class);

