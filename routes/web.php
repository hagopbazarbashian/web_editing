<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\TemplateController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin
Route::resource('admin/login', AdminLoginController::class);
Route::middleware(['admin:admin'])->group(function () {
    Route::get('dashbord', [AdminHomeController::class , 'index'])->name('dashbord');
    Route::resource('template', TemplateController::class);
});
