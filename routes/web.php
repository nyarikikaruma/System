<?php

use App\Http\Controllers\AltarController;
use App\Http\Controllers\BishopContoller;
use App\Http\Controllers\KeyboardistController;
use App\Http\Controllers\Notifications;
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
    return view('login.login');
})->middleware('guest');
Route::get('/dashboard', [UserController::class, 'index'])->middleware('auth');
Route::get('/keyboardist/create', [UserController::class, 'create'])->middleware('auth');
Route::Post('/keyboardist/create', [UserController::class, 'store'])->middleware('auth');
Route::get('/keyboardist/list', [UserController::class, 'show'])->middleware('auth');
Route::Get('/keyboardist/edit/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::Post('/keyboardist/update/{id}', [UserController::class, 'update'])->middleware('auth');
Route::Post('/keyboardist/suspend/{id}', [UserController::class, 'destroy'])->middleware('auth');
// Route::post('/keyboardists/suspend', [SuspendAccountsController::class, 'create'])->middleware('auth');
Route::Get('/keyboardist/suspend', [UserController::class, 'suspended'])->middleware('auth');
Route::Get('/keyboardist/restore/{id}', [UserController::class, 'restore'])->middleware('auth');
Route::Get('/keyboardist/deregister/{id}', [UserController::class, 'deregister'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/region/list', [RegionController::class, 'index'])->middleware('auth');
Route::get('/region/create', [RegionController::class, 'create'])->middleware('auth');
Route::post('/region/create', [RegionController::class, 'store'])->middleware('auth');
Route::get('/region/edit/{id}', [RegionController::class, 'edit'])->middleware('auth');
Route::post('/region/update/{id}', [RegionController::class, 'update'])->middleware('auth');

Route::get('/altar/list', [AltarController::class, 'index'])->middleware('auth');
Route::get('/altar/create', [AltarController::class, 'create'])->middleware('auth');
Route::post('/altar/create', [AltarController::class, 'store'])->middleware('auth');
Route::get('/altar/edit/{id}', [AltarController::class, 'edit'])->middleware('auth');
Route::post('/altar/update/{id}', [AltarController::class, 'update'])->middleware('auth');

Route::get('/bishop/list', [BishopContoller::class, 'index'])->middleware('auth');
Route::get('/bishop/create', [BishopContoller::class, 'create'])->middleware('auth');
Route::post('/bishop/create', [BishopContoller::class, 'store'])->middleware('auth');


Route::get('/notifications', [Notifications::class, 'index'])->middleware('auth');


