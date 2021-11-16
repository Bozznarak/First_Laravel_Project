<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\User1Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/company', CompanyController::class);

Route::resource('/job', JobController::class);

Route::resource('/user', User1Controller::class);
