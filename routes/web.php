<?php

use App\Http\Controllers\ExampleController;
use App\Models\Example;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Example',           [ExampleController::class, 'index'])->name('Example.index');
Route::get('/Example/create', [ExampleController::class, 'create'])->name('Example.create');
Route::post('/Example/store', [ExampleController::class, 'store'])->name('Example.store');
Route::get('/Example/{Example}/edit', [ExampleController::class, 'edit'])->name('Example.edit');
Route::put('/Example/{Example}/update', [ExampleController::class, 'update'])->name('Example.update');
Route::delete('/Example/{Example}/delete', [ExampleController::class, 'delete'])->name('Example.delete');

   
