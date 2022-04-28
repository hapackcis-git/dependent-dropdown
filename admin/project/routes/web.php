<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;

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


Route::get('dropdown', [DropdownController::class, 'view'])->name('dropdownView');
Route::get('get-states', [DropdownController::class, 'getStates'])->name('getStates');
Route::get('get-cities', [DropdownController::class, 'getCities'])->name('getCities');