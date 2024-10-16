<?php

use App\Http\Controllers\BookingController;
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

Route::get('/hello', function () {
    $val = 50;
    $name = 'Victoria';
    $users = ['ahmed', 'kaled', 'wadeea', 'hani'];
    return view('hello', ['value' => $val, 'name' => $name ,'students' => $users]);
});

Route::get('/',  function ()  {
    return view('welcome');
});
Route::get('/myBookings', BookingController::class . '@myBookings');
