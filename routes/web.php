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



Route::prefix('/suppiler')->group(function (){
    Route::get('/',[\App\Http\Controllers\SuppilerController::class,'index'])->name('suppiler.list');
    Route::get('/create',[\App\Http\Controllers\SuppilerController::class,'create'])->name('suppiler.add');
    Route::post('/create',[\App\Http\Controllers\SuppilerController::class,'store'])->name('suppiler.store');
    Route::get('/update/{id}',[\App\Http\Controllers\SuppilerController::class,'edit'])->name('suppiler.edit');
    Route::post('/update/{id}',[\App\Http\Controllers\SuppilerController::class,'update'])->name('suppiler.update');
    Route::get('/delete/{id}',[\App\Http\Controllers\SuppilerController::class,'destroy'])->name('suppiler.delete');
    Route::get('/detail/{id}',[\App\Http\Controllers\SuppilerController::class,'show'])->name('suppiler.detail');
});
