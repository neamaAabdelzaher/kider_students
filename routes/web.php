<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teachersController;

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



Route::prefix('dashboard')->group(function () {
    Route::prefix('/teachers')->group(function () {
    Route::get('/index',[teachersController::class,'index'])->name('teachers.index');
    Route::get('/create',[teachersController::class,'create']);
    Route::post('/store',[teachersController::class,'store'])->name('teachers.store');
    Route::get('/show/{teacher_id}',[teachersController::class,'show'])->name('teachers.show');
    });
});

