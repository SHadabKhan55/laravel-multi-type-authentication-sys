<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [UserController::class,"loginPage"] ); 
Route::get("/registerPage", [UserController::class,"registerPage"] ); 
Route::get("/logout", [UserController::class,"logout"] ); 
Route::get("/home", [UserController::class,"home"] ); 
Route::get("/dashboard", [UserController::class,"dashboard"] ); 
Route::post("/login", [UserController::class,"login"] ); 
Route::post("/register", [UserController::class,"register"] ); 