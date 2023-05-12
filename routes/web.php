<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TaskController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/add-task', [TaskController::class, 'create'])->name('add.task');

Route::post('/add-task', [TaskController::class, 'store']);

Route::get('/update-task/{id}', [TaskController::class, 'edit'])->name('update.task');

Route::post('/update-task/{id}', [TaskController::class, 'save']);

Route::post('/delete-task/{id}', [TaskController::class, 'delete'])->name('delete.task');

