<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlaceController;
use App\Models\Category;
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
    return view('clauster.index',['title'=>'Maps']);
});

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::resource('category',CategoryController::class);

Route::resource('location',PlaceController::class);
Route::get('add-location',[PlaceController::class,'create']);

Route::get('form',function(){
    $data['kategori'] = Category::all();
    return view('form',$data);
});
Route::get('maps',[DashboardController::class,'maps']);
Route::get('success',function(){
    return view('success');
});
