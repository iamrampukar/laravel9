<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;

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

Route::get('/flight/list',[FlightController::class,'index'])->name('flight.list');
Route::get('/flight/landing',[FlightController::class,'flightLanding'])->name('flight.landing');
Route::get('/flight/arriable',[FlightController::class,'arriable'])->name('flight.arriable');
Route::get('/flight/data-table-btn',[FlightController::class,'dataTableBTN'])->name('flight.data_table_btn');
