<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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
Route::get('/registration', [CustomAuthController::class,'registration'])->name('registration');
Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');



Route::post('/select/arrprovinces', [CustomAuthController::class, 'getDropDownProvinces'])->name('getDropDownProvinces');
Route::post('/select/arrmunicipalities', [CustomAuthController::class, 'getDropDownMunicipalities'])->name('getDropDownMunicipalities');
Route::post('/select/arrbarangays', [CustomAuthController::class, 'getDropDownBarangays'])->name('getDropDownBarangays');
