<?php

use App\Http\Controllers\CountriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProvincesController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', [StudentsController::class,'index']);

Route::get('customers', [CustomersController::class,'index']);

Route::get("provinces",[ProvincesController::class,"index"]);

Route::get("countries",[CountriesController::class,"index"]);