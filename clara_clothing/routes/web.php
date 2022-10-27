<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SupplierController;

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

Route::get('/pages/index', function () {
    return view('pages.index');
});

Route::get('/pages/index2', function () {
    return view('pages.index2');
});

Route::get('/pages/cusTheme', function () {
    return view('pages.cusTheme');
})->name('cusTheme');

Route::get('/pages/cus_dashboard', function () {
    return view('pages.cus_dashboard');
});

Route::get('/pages/cart', function () {
    return view('pages.cart');
});

Route::get('/pages/checkout', function () {
    return view('pages.checkout');
});

Route::get('/pages/show', function () {
    return view('pages.show');
});

Route::get('/components/layout', function () {
    return view('components.layout');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->roll == 1){
            return view('admin.admin');
        }elseif(Auth::user()->roll == 2){
            return view('admin.admin');
        }elseif (Auth::user()->roll == 3){
            return view('admin.admin');
        }

    })->name('dashboard');
});

Route::resource('suppliers', SupplierController::class);

