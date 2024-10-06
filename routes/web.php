<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WordController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // OVERVIEW
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    // ADD CATEGORY
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    // EDIT CATEGORY
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
    // DELETE CATEGORy
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');




    // WORDS

    // OVERVIEW
    Route::get('/words', [WordController::class, 'index'])->name('words.index');
    // ADD CATEGORY
    Route::get('/words/create', [WordController::class, 'create'])->name('words.create');
    Route::post('/words', [WordController::class, 'store'])->name('words.store');
    // EDIT CATEGORY
    Route::get('/words/{word}/edit', [WordController::class, 'edit'])->name('words.edit');
    Route::put('/words/{word}/update', [WordController::class, 'update'])->name('words.update');
    // DELETE CATEGORy
    Route::delete('/words/{word}', [WordController::class, 'destroy'])->name('words.destroy');
});
