<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;


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
    return view('welcome');
})->name('welcome');

Route::get('/form', function () {
    Session::put('step1_completed', true);
    return view('form1');
})->name('form1');


Route::post('/formstore', [BookingController::class, 'store'])->name('form.store');


Route::get('/myfatorah', function (Request $request) {
    $name = $request->query('name'); 
    return view('myfatorah', compact('name')); 
})->name('myfatorah')->middleware('check.step');;

Route::get('/checkout', function (Request $request) {
    $name = $request->query('name');
    return view('bcheckout', compact('name')); 
})->name('bcheckout')->middleware('check.step');;



Route::post('/fcheckout', [PaymentController::class, 'processPayment'])->name('final');




Route::get('/last', function () {
    return view('last');
})->name('last')->middleware('check.step');;



Route::post('/payment/store', [PaymentController::class, 'store']);
