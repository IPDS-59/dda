<?php

use App\Http\Controllers\LoginController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

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
    return Inertia::render('landing', [
        'title' => 'DASI - IPDS 59'
    ],);
})->name('landing');

Route::controller(LoginController::class)->middleware('guest')->group(
    function () {
        Route::get('/login', 'index')->name('login');
    },
);
