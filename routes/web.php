<?php

use App\Http\Controllers\PdfController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pdf-generate', [PdfController::class, 'pdfView'])->name('pdf.generate');
Route::post('/pdf-generate', [PdfController::class, 'addImageToPdf'])->name('pdf.addImage');

/*Route::get('{any}', function () {
    return view('layouts.app');
})->where('any', '.*');*/
