<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\teachersController;
use App\Http\Controllers\DashboardController;

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





Route::group(['prefix' => 'dashboard', "as" => "dashboard"], function () {

      Route::get('/', [DashboardController::class, 'index'])->name('.index');
      Route::group(['prefix' => 'teachers', 'as' => '.teachers.'], function () {
        Route::get('/', [teachersController::class, 'index'])->name('index');
        Route::get('/create', [teachersController::class, 'create'])->name('create');
        Route::post('/store', [teachersController::class, 'store'])->name('store');
        Route::get('/show/{teacher_id}', [teachersController::class, 'show'])->name('show');
        Route::get('/edit/{teacher_id}', [teachersController::class, 'edit'])->name('edit');
        Route::put('/update/{teacher_id}', [teachersController::class, 'update'])->name('update');
        Route::delete('/delete', [teachersController::class,'destroy'])->name('delete');
    });

    Route::group(['prefix' => 'subjects', 'as' => '.subjects.'], function () {
        Route::get('/', [SubjectsController::class, 'index'])->name('index');
        Route::get('/create', [SubjectsController::class, 'create'])->name('create');
        Route::post('/store', [SubjectsController::class, 'store'])->name('store');

});
});



