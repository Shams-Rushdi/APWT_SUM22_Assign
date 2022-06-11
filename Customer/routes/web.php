<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 


Route::post("user",[Auth::class,'userLogin']);
//Route::view("login","login");
Route::view("dashboard","dashboard");

 /*  
Route::get('/dashboard', function () {
    if(session()->has('user'))
    {
        return redirect('dashboard');
    }
    return view('logout');
});

*/
Route::get('/login', function () {
    if(session()->has('user'))
    {
        return redirect('dashboard');
    }
    return view('login');
});


Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return view('login');
});

