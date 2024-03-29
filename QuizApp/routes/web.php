<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aalavai;

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
    return view('index');
})->name('index');

Route::get('/welcome', function () {
    return view('welcome');
});
    
Route::get('/login1', function () {
    return view('login1');
})->name('login1');

Route::get('/signin', function () {
    return view('registration');
})->name('signin');

Route::post('/upload', [TaskController::class, 'upload']);
 
// Route::get('/tasks', [TaskController::class, 'index']); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
