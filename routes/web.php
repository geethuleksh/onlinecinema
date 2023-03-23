<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieController;
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

Route::get('/',[movieController::class,'movie']);
Route::get('/register',[movieController::class,'register']);
Route::post('/registeraction',[movieController::class,'registeraction']);
Route::get('/login',[movieController::class,'login']);
Route::post('/loginaction',[movieController::class,'loginaction']);
Route::get('/userhome',[movieController::class,'userhome']);
Route::get('/booking',[movieController::class,'booking']);
Route::post('/bookingaction',[movieController::class,'bookingaction']);
Route::get('/viewbooking',[movieController::class,'viewbooking']);
Route::get('/edit/{id}',[movieController::class,'edit']);
Route::get('/delete/{id}',[movieController::class,'delete']);
Route::post('/updateaction/{id}',[movieController::class,'updateaction']);
Route::get('/viewprofile',[movieController::class,'viewprofile']);
Route::get('/edits/{id}',[movieController::class,'edits']);
Route::post('/updatesaction/{id}',[movieController::class,'updatesaction']);
Route::get('/adminhome',[movieController::class,'adminhome']);
Route::get('/adminview',[movieController::class,'adminview']);
Route::get('/adminviewbooking',[movieController::class,'adminviewbooking']);
Route::get('/confirm/{id}',[movieController::class,'confirm']);
Route::get('/decline/{id}',[movieController::class,'decline']);
Route::get('/adminlogout',[movieController::class,'adminlogout']);
Route::get('/logout',[movieController::class,'logout']);