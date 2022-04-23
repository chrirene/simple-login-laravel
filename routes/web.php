<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('main', [MainController::class, 'index']);
Route::get('/main/checklogin', [MainController::class, 'checklogin']);
Route::get('/main/successlogin', [MainController::class, 'successlogin']);
Route::get('/main/userview', [MainController::class, 'userview']);
Route::get('/main/profileview', [MainController::class, 'profileview']);
Route::get('/main/employeeview', [MainController::class, 'employeeview']);
Route::get('/main/projectList', [MainController::class, 'projectListView']);
Route::get('/main/logout', [MainController::class, 'logout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
