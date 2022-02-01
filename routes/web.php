<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
//Admin
use App\Http\Controllers\admin\SiteIconController;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//post controller
Route::get('/',[PostController::class,'index']);
Route::resource('posts', PostController::class)->except('index');


//Admin section

Route::get('/setting/icons',[SiteIconController::class,'index'])->name('icons');
Route::get('/setting/icons/create',[SiteIconController::class,'create'])->name('icons.create');
Route::post('/setting/icons/store',[SiteIconController::class,'store'])->name('icons.store');
Route::get('/setting/icons/edit/{icon}',[SiteIconController::class,'edit'])->name('icons.edit');
Route::put('/setting/icons/update/{icon}',[SiteIconController::class,'update'])->name('icons.update');
Route::delete('/setting/icons/delete/{icon}',[SiteIconController::class,'delete'])->name('icons.delete');