<?php

use App\Http\Controllers\CountriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProvincesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', [StudentsController::class,'index']);
// Route::get('delete/{id}', [StudentsController::class,'delete']);

// Eloquent ORM
Route::get('add', [StudentsController::class,'addStudent']);

Route::get("update",[StudentsController::class,"updateStudent"]);

Route::get("delete",[StudentsController::class,"deleteStudent"]);

Route::get('customers', [CustomersController::class,'index']);

Route::get("provinces",[ProvincesController::class,"index"]);

Route::get("countries",[CountriesController::class,"index"]);

Route::get("teachers",[TeachersController::class,'addTeachers']);

Route::get('showteachers',[TeachersController::class,'showTeachers']);