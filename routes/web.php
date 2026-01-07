<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailProjectController;
use App\Http\Controllers\DevController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/logindev', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/dashboard-dev', [DevController::class, 'index'])->name('dashboard');

Route::get('/portfolio-detail/{id}', [DetailProjectController::class, 'portfolioDetails'])->name('portfolio.details');