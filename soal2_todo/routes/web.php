<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

//Menampilkan dashboard todo
Route::get('/', [App\Http\Controllers\TodoController::class, 'index']);

// create
Route::get('/todos/create', [App\Http\Controllers\TodoController::class, 'create']);
// post create
Route::post('/app/todos', [App\Http\Controllers\TodoController::class, 'store'])->name('todos.store');
// edit
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');
// post edit
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');
//delete
Route::delete('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'delete'])->name('todos.delete');