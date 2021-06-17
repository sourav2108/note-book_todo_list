<?php

use App\Http\Controllers\datacontroller;
use App\Http\Controllers\Notebookcontroller;
use App\Http\Controllers\todocontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::resource('todo',datacontroller::class);
    Route::get('todo/done/{id}',[Todocontroller::class,'complet']);
});

Route::middleware('auth')->group(function(){
    Route::resource('notebook',Notebookcontroller::class);
});