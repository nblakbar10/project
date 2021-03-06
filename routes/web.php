<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\InfokotaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\DownloadController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [FrontendController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/download', [DownloadController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/halamanutama', [UtamaController::class, 'index']);
Route::get('/destinasi', [DestinasiController::class, 'index']);
Route::get('/infokota', [InfokotaController::class, 'index']);
Route::get('/info', [InfoController::class, 'index']);
