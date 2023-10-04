<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [DashController::class, 'welcome'])->name('index');

Route::get('/CEO',function (){
    return view('/CEO');
}) ;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashController::class, 'index'])->name('dashboard');
    Route::resource('/contact', ContactController::class)->except('store');
    Route::resource('/team', TeamController::class);
    Route::resource('/service', ServiceController::class);
});

require __DIR__.'/auth.php';
