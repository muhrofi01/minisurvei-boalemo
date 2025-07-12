<?php

use App\Http\Controllers\IsianKuesionerController;
use App\Http\Controllers\UserController;
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
Route::post('/user', [UserController::class, 'user_store'])->name('user.store');
Route::get('/user/{no_hp}', [UserController::class, 'get_guest_by_phone_number']);

Route::get('/kepuasan', function () {
    return view('kepuasan');
});
Route::post('/kepuasan', [IsianKuesionerController::class, 'kepuasan_store'])->name('kepuasan.store');

Route::get('/perasaan', function () {
    return view('perasaan');
});
Route::post('/perasaan', [IsianKuesionerController::class, 'perasaan_store'])->name('perasaan.store');

Route::get('/makna', function () {
    return view('makna');
});
Route::post('/makna', [IsianKuesionerController::class, 'makna_store'])->name('makna.store');

Route::get('/kebahagiaan', function () {
    return view('kebahagiaan');
});
Route::post('/kebahagiaan', [IsianKuesionerController::class, 'kebahagiaan_store'])->name('kebahagiaan.store');