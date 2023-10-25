<?php

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
    return view('welcome');
});


Route::get('/action', [App\Http\Controllers\UsersController::class, 'action'])->name('action');
Route::post('/logout', [App\Http\Controllers\UsersController::class, 'logout'])->name('logout');


Route::get('/', [App\Http\Controllers\UsersController::class, 'home'])->name('home');
Route::get('/login', [\App\Http\Controllers\UsersController::class, 'login'])->name('login');
Route::get('/registration', [\App\Http\Controllers\UsersController::class, 'registration'])->name('registration');
Route::post('/store', [\App\Http\Controllers\UsersController::class, 'store'])->name('storeData');



Route::post('/login_dashboard', [App\Http\Controllers\UsersController::class, 'login_dashboard'])->name('login_dashboard');
Route::get('/user', [\App\Http\Controllers\UsersController::class, 'user'])->name('user_dashboard')->middleware('auth');
Route::get('/admin', [\App\Http\Controllers\UsersController::class, 'admin'])->name('admin_dashboard')->middleware('auth');


Route::put('/update/{id}', [App\Http\Controllers\UsersController:: class, 'update_user'])->name('update_user');
Route::get('/edit_user', [App\Http\Controllers\UsersController::class, 'edit_user'])->name('edit_user');
Route::delete('/delete/{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('delete_user');



