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
Route::delete('/delete/{id}', [TripController::class, 'destroy'])->name('deleteTrip')->middleware('isadmin', 'auth');

//C del CRUD
Route::get('/create', [TripController::class, 'create'])->name('createTrip')->middleware('isadmin', 'auth');
Route::post('/', [TripController::class, 'store'])->name('storeTrip')->middleware('isadmin', 'auth');

//U del CRUD
Route::get('/edit/{id}', [TripController::class, 'edit'])->name('editTrip')->middleware('isadmin', 'auth');
Route::patch('/trip/{id}', [TripController::class, 'update'])->name('updateTrip')->middleware('isadmin', 'auth');

Route::get('/show/{id}', [TripController::class, 'show'])->name('showTrip');

Route::get('/booking/{id}', [TripController::class, 'booking'])->name('booking')->middleware('auth');
Route::get('/unbooking/{id}', [TripController::class, 'unbooking'])->name('unbooking')->middleware('auth');