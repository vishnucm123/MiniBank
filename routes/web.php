<?php

use App\Http\Controllers\BankingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();


// This return /homepage
Route::get('/', [HomeController::class, 'redirect']);
// Route for main homepage
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');


Route::get('/bank-home', [HomeController::class, 'bankHome']);
Route::get('/deposit-index', [BankingController::class, 'depositIndex']);

Route::post('bank-deposit',[BankingController::class, 'depositStore'])->name('bank-deposit');

Route::get('withdraw-index', [BankingController::class, 'withdrawIndex']);

Route::post('bank-withdraw',[BankingController::class, 'withdrawStore'])->name('bank-withdraw');


Route::get('transfer-index', [BankingController::class, 'transferIndex']);

Route::post('transfer-store',[BankingController::class, 'transferStore'])->name('transfer-store');

Route::get('statement-index', [BankingController::class, 'statementIndex'])->name('statement-index');




