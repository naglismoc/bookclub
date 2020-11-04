<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return redirect()->route('book.index');
});

Route::group(['prefix'=>'knyga'],function(){
    Route::get('/',[BookController::class,'index'])->name('book.index');
    Route::get('/create',[BookController::class,'create'])->name('book.create');
    Route::get('/edit/{Book}',[BookController::class,'edit'])->name('book.edit');
    Route::post('/store',[BookController::class,'store'])->name('book.store');
    Route::post('/update/{Book}',[BookController::class,'update'])->name('book.update');
    Route::post('/destroy/{Book}',[BookController::class,'destroy'])->name('book.destroy');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {return view('dashboard');
})->name('dashboard');
