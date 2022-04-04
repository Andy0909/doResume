<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use PDF;
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
    return view('resume');
});

Route::get('/export', [ExportController::class , 'export'])->name('export');
Route::post('/user_data', [ExportController::class , 'user_data'])->name('user_data');

