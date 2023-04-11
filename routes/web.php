<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgePasswordController;



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






Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
Route::get('/', function(){
   return view ('index');
});

Route::get('/home',[HomeController::class,'show']);
Route::post('/home/data',[HomeController::class,'store'])->name('add');

Route::get('/forget/password',[ForgePasswordController::class,'display'])->name('password');
Route::post('/forget',[ForgePasswordController::class,'submitForgetPasswordForm'])->name('forget-password');


