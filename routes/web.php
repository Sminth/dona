<?php

use App\Http\Controllers\CauseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QrCodeController;
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

Route::get('/', [HomeController::class ,'index']);
Route::get('/causes', [CauseController::class ,'index']);
Route::get('/causes/{cause}', [CauseController::class ,'show']);
Route::get('/cartographie', [HomeController::class ,'carto']);
// Route::get('/qr', [QrCodeController::class,'generateQRCode'])->name('qr.code.generate');

Route::post('/smspayer_meth', [CauseController::class, 'mtn'])->name("paye");

