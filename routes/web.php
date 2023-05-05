<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('login.login');
});

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/dashboard',[AdminController::class,'dashboard']);

Route::get('/add-patient',[AdminController::class,'addPatient']);
Route::post('/add-patient',[AdminController::class,'store']);
Route::get('/edit-patient/{id}',[AdminController::class,'editPatient']);
Route::post('/edit-patient/{id}',[AdminController::class,'updatePatient']);

Route::get('/delete-patient/{id}',[AdminController::class,'deletePatient']);



    