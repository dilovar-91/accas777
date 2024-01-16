<?php

use App\Livewire\LoginPage;
use App\Livewire\UserPage;
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

Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', LoginPage::class)->name('login.page');
Route::get('/login', LoginPage::class)->name('login.page');
Route::get('/user', UserPage::class)->middleware('auth')->name('user.page');
