<?php

use App\Http\Controllers\ExampleController;
use App\Models\Example;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect (route('Example.index'));
    // return view('Examples.index');
//     $data = Example::all();
// return view('Examples.index', ['Example' => $data]);
});

Route::get('/Example/index',           [ExampleController::class, 'index'])->name('Example.index');
Route::get('/Example/create', [ExampleController::class, 'create'])->name('Example.create');
Route::post('/Example/store', [ExampleController::class, 'store'])->name('Example.store');
Route::get('/Example/{Example}/edit', [ExampleController::class, 'edit'])->name('Example.edit');
Route::put('/Example/{Example}/update', [ExampleController::class, 'update'])->name('Example.update');
Route::delete('/Example/{Example}/delete', [ExampleController::class, 'delete'])->name('Example.delete');
// Route::get('/Example/{Example}/delete', [ExampleController::class, 'delete'])->name('Example.delete');

   
