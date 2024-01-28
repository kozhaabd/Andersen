<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
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


Route::get('/', [AuthManager::class, 'registration'])->name('registration');
Route::post('/', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/messages', [AuthManager::class, 'messages'])->name('messages');