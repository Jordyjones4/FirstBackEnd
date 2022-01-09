<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Auth::routes();
Route::post('verifyPayment/{userid}',[TransactionController::class,'verifyPayment'])->name('verifyPayment');
Route::get('PaymentInformation/{total}', [TransactionController::class,'PaymentInformation'])->name('PaymentInformation');
Route::post('delete/{transactionid}',[TransactionController::class,'deleteTransaction'])->name('deleteTransaction');
Route::get('/home', [GameController::class, 'index'])->name('home');
Route::get('GameDetail/{game}', [GameController::class, 'show'])->name('GameDetail');
Route::get('ShoppingCart/{userid}', [TransactionController::class, 'ShoppingCart'])->name('ShoppingCart');
Route::redirect('/', 'home');

Route::get('/TransactionReceipt', function () {
    return view('/TransactionReceipt');
});

Route::post('/permission', [GameController::class, 'permission']);
Route::post('addToCart/{userid}/{gameid}',[TransactionController::class,'makeTransaction'])->name('makeTransaction');
Route::get('search',[GameController::class,'search'])->name('search');
Route::get('Profile', function (){
    return view('/auth/Profile');
})->name('Profile');







// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
