<?php


use App\Http\Controllers\TodoAppController;
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

Route::get('/', [TodoAppController::class, 'index']);

Route::post('/createTodo', [TodoAppController::class, 'createTodo']);

Route::patch('/completeTodo{id}', [TodoAppController::class, 'update']);