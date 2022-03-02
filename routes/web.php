<?php

use App\Http\Controllers\AltarController;
use App\Http\Controllers\BishopContoller;
use App\Http\Controllers\KeyboardistController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Models\User;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');
Route::get('/dashboard', [UserController::class, 'index'])->middleware('auth');
Route::get('/keyboardist/create', [UserController::class, 'create']);
Route::Post('/keyboardist/create', [UserController::class, 'store']);
Route::get('/keyboardist/list', [UserController::class, 'show']);
Route::Get('/keyboardist/edit/{id}', [UserController::class, 'edit']);
Route::Post('/keyboardist/update/{id}', [UserController::class, 'update']);
Route::Post('/keyboardist/suspend/{id}', [UserController::class, 'destroy']);
Route::Get('/keyboardist/suspend', [UserController::class, 'suspended']);
Route::Get('/keyboardist/restore/{id}', [UserController::class, 'restore']);
Route::Get('/keyboardist/deregister/{id}', [UserController::class, 'deregister']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store']);
Route::Post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/region/list', [RegionController::class, 'index']);
Route::get('/region/create', [RegionController::class, 'create']);
Route::post('/region/create', [RegionController::class, 'store']);
Route::get('/region/edit/{id}', [RegionController::class, 'edit']);
Route::post('/region/update/{id}', [RegionController::class, 'update']);

Route::get('/altar/list', [AltarController::class, 'index']);
Route::get('/altar/create', [AltarController::class, 'create']);
Route::post('/altar/create', [AltarController::class, 'store']);
Route::get('/altar/edit/{id}', [AltarController::class, 'edit']);
Route::post('/altar/update/{id}', [AltarController::class, 'update']);

Route::get('/bishop/list', [BishopContoller::class, 'index']);
Route::get('/bishop/create', [BishopContoller::class, 'create']);
Route::post('/bishop/create', [BishopContoller::class, 'store']);

Route::post('/keyboardists/suspend', [SuspendAccountsController::class, 'create']);


