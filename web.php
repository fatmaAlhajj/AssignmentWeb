<?php

use App\Http\Controllers\Personal_infoController;
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
    return view('index');
});
Route::get('/personal_info',
[Personal_infoController::class,'show']);

Route::get('/qualifications', function () {
    return view('qualifications');
});
Route::get('/experiences', function () {
    return view('experiences');
});
Route::get('/contact', function () {
    return view('contact');
});
