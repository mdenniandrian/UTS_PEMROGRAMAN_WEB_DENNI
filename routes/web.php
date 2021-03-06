<?php

use App\Http\Controllers\DataDosenController;
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
//     return view('welcome');
// });

Route::get('/', [DataDosenController::class, 'index']);
Route::get('/create', [DataDosenController::class, 'create']);
Route::post('/store', [DataDosenController::class, 'store']);
Route::get('/show/{id}', [DataDosenController::class, 'show']);
Route::post('/update/{id}', [DataDosenController::class, 'update']);
Route::get('/destroy/{id}', [DataDosenController::class, 'destroy']);