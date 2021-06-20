<?php

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/coba', function () {
    return view('coba/index');
});

Route::get('/beritaubah', function () {
    return view('admin/edit');
});
// Route::get('/admin', function () {
//     return view('admin/index');
// });

// Route::get('/news', function () {
//     return view('admin/news');
// });
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LandingController;
// Route::get('/author',[AuthorController::class, 'index']);
Route::get('/admin',[AuthorController::class, 'index']);
Route::get('/news',[NewsController::class, 'index']);
Route::post('/admin/create',[AuthorController::class, 'store']);
Route::post('/admin/news',[NewsController::class, 'store']);   
Route::get('/',[LandingController::class, 'index']); 
Route::get('/edit/{id}',[NewsController::class, 'ubah']);
Route::get('/editan/{id}',[NewsController::class, 'ubah2']);
Route::get('/editberita/{id}',[NewsController::class, 'edit']);
Route::get('/hapusberita/{id}',[NewsController::class, 'delete']);
Route::post('/update',[NewsController::class, 'update']);
// Route::post('/edit/publis',[NewsController::class, 'update']);