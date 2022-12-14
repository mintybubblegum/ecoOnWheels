<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TripController;



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

Auth::routes();
Route::get('/', [TripController::class,'index'])->name('home');
Route::get('/home', [TripController::class,'index']);

//D del CRUD
Route::delete('/delete/{id}', [TripController::class, 'destroy'])->name('deleteTrip');

//C del CRUD
Route::get('/create', [TripController::class, 'create'])->name('createTrip');
Route::post('/', [TripController::class, 'store'])->name('storeTrip');
