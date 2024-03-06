<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiLimitterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//api limit
Route::get('/myapp',[ApiLimitterController::class,'index'])->middleware('restrictuser');

Route::get('/secondsession',[ApiLimitterController::class,'secondSession']);
Route::get('/newsession',[ApiLimitterController::class,'newsession']);



