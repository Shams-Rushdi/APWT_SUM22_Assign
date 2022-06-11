<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;


Route::get('/',[PagesController::class,'home'])->name('home');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/customer/create',[Auth::class,'create'])->name('customer.create');
Route::post('/customer/create',[Auth::class,'createSubmit'])->name('customer.create.submit');
Route::get('/customer/all',[Auth::class,'list'])->name('customer.list');
Route::get('/customer/details/{id}/info',[StuAuthdentController::class,'details'])->name('customer.details');

