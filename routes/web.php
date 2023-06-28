<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

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
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[InicioController::class,'index'])->name('home.index');

Route::get('/principal',[PrincipalController::class,'index'])->name('home.principal');
