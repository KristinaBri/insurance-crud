<?php
use App\Models\Car;
use App\Models\Owner;
use App\Http\Controllers\CarController;
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


Route::resource('cars', CarController::class);
Route::get('/allCars', [CarController::class, 'showCars']) ->name('allCars');

Route::resource('owners', \App\Http\Controllers\OwnerController::class);
Route::get('allOwners', [OwnerController::class, 'showOwners'])->name('allOwners');

