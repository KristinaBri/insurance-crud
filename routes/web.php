<?php

use App\Http\Controllers\OwnerController;
use App\Models\Car;
use App\Models\Owner;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Auth;
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
//NEVEIKIA MIDDLEWARE:
Route::middleware('auth')->group(function () {
    Route::resources([
        'cars'=>CarController::class,
        'owners'=>OwnerController::class
    ]);
});


Route::get('/', function () {
    return view('welcome');
});




Route::resource('cars', CarController::class);
Route::get('/allCars', [CarController::class, 'showCars']) ->name('allCars');

Route::resource('owners', OwnerController::class);
Route::get('/allOwners', [OwnerController::class, 'showOwners'])->name('allOwners');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
