<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlaceController;
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
Route::get('/',function(){
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::resource('category',CategoryController::class);

Route::resource('location',PlaceController::class);
Route::get('add-location',[PlaceController::class,'create']);
