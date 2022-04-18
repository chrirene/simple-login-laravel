<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Use App\Http\Controllers\MainController;

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

// Route::get('/uploadfile', 'UploadfileController@index');
// Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('main', [MainController::class, 'index']);
Route::get('/main/checklogin', [MainController::class, 'checklogin']);
Route::get('/main/successlogin', [MainController::class, 'successlogin']);
// Route::get('/main/successlogin', [MainController::class, 'getRoleName']);
Route::get('/main/logout', [MainController::class, 'logout']);

