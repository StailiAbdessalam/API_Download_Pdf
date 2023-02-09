<?php

use App\Http\Controllers\DownloadPDFController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/download_Pdf/{id}', [DownloadPDFController::class, 'download'])->name('download_Pdf');
Route::post('/saveImage/{id}', [DownloadPDFController::class, 'saveImage']);
Route::get('/{id}', [DownloadPDFController::class, 'show']);
Route::get('/', [DownloadPDFController::class, 'getDataVille']);

