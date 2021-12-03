<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ReservationController;
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

Route::get('/',[HomeController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


////// User Or Admin
Route::get('/admin',[HomeController::class,'redirects']);



// Route::get('/admin/users',[AdminController::class,'index'])->name('admin.users');
Route::get('ajax/get',[AdminController::class,'getUsers'])->name('get.ajax.users');
Route::resource('users', AdminController::class);


// Route for food
Route::get('ajaxFood',[FoodController::class,'getFoods'])->name('get.ajax.foods');
Route::resource('foods',FoodController::class);


// Route for Reservation
Route::resource('reservations',ReservationController::class);