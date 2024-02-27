<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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


Route::get('/about',[AdminController::class,'about'])->name('about');

Route::get('/create',[AdminController::class,'create'])->name('create');

Route::get('/change/{id}',[AdminController::class,'change'])->name('change');

Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');

Route::get('/blog', [AdminController::class, 'index']) ->name('blogs');

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/delete/{id}',[AdminController::class,'delete'])->name('delete');

Route::post('/insert',[AdminController::class,'insert'])->name('insert');


Route::middleware('auth:sanctum')->post('/logout/{user}', [UserController::class, 'destroy']);

Route::middleware('auth:sanctum')->delete('/logout/{user}', [UserController::class, 'destroy']);
