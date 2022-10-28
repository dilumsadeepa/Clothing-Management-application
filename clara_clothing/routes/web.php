<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;

use App\Http\Controllers\CatagaoryController;
use App\Http\Controllers\CustomersController;

use App\Http\Controllers\CatagaoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaffController;


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

//----------------------------------Home Page-------------------------------------------------

Route::get('/',[CustomersController::class, 'index'])->name('home');


Route::get('/customer/cus_dashboard', [CustomersController::class, 'manage'])->name('cus_dashboard');

Route::get('/customer/index2', function () {
    return view('customer.index2');
});

Route::get('/customer/contactus', function () {
    return view('customer.contactus');
});

Route::get('/customer/cusTheme', function () {
    return view('customer.cusTheme');
})->name('cusTheme');

// Route::get('/customer/cus_dashboard', function () {
//     return view('customer.cus_dashboard');
// });

Route::get('/customer/cart', function () {
    return view('customer.cart');
});



Route::get('/customer/checkout', function () {
    return view('customer.checkout');
});

Route::get('/customer/show', function () {
    return view('customer.show');
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
Route::resource('catagory', CatagaoryController::class);
Route::resource('catagory', CatagaoryController::class);
Route::resource('product', ProductController::class);

Route::resource('staff', StaffController::class);
