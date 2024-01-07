<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;


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
Route::get('/',function(){
    return view('login');
});
Route::post('/login', [LoginController::class, 'login']);

Route::get('/signup',[SignupController::class,'signup']);
Route::post('/signup', [SignupController::class, 'insertdata']);

Route::get('/book', [ShowController::class, 'show']);
Route::get('/history', [HistoryController::class, 'show']);

Route::get('/rental', [RentalController::class, 'rental']);
Route::post('/rental', [RentalController::class, 'insert']);
Route::put('/rental', [RentalController::class, 'update']);

Route::get('/user', [UserController::class, 'master']);
Route::get('/delete/user/{id}', [UserController::class,'deleteUser'])->name('delete.user');
