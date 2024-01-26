<?php

use App\Http\Controllers\CompanyCRUDController;
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

Route::get('/', [CompanyCRUDController::class, 'index']);
Route::get('/create', [CompanyCRUDController::class, 'create']);
Route::post('/create', [CompanyCRUDController::class, 'create'])->name('companies.create');
