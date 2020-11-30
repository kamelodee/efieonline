<?php

use Illuminate\Support\Facades\Route;

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


// admin
Route::get('/admin_dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin-sale', [App\Http\Controllers\AdminController::class, 'sale'])->name('admin.sale');
Route::get('/admin-rent', [App\Http\Controllers\AdminController::class, 'rent'])->name('admin.rent');
Route::get('/admin-apointment', [App\Http\Controllers\AdminController::class, 'apointment'])->name('admin.apointment');
Route::get('/admin-profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');



Route::get('/agent_dashboard', [App\Http\Controllers\AgentController::class, 'index'])->name('agent.index');



Route::get('/agent', [App\Http\Controllers\AgentController::class, 'create'])->name('agent.create');
Route::post('/save-agent', [App\Http\Controllers\AgentController::class, 'store'])->name('agent.store');
Route::post('/agent-media', [App\Http\Controllers\AgentController::class, 'storeMedia'])->name('agent.storeMedia');


Route::get('/property-sale', [App\Http\Controllers\PropertySaleController::class, 'index'])->name('sale.index');
Route::get('/create-for-sale', [App\Http\Controllers\PropertySaleController::class, 'create'])->name('sale.create');
Route::post('/save-property-sale', [App\Http\Controllers\PropertySaleController::class, 'store'])->name('sale.store');

Route::post('/property-sale-media', [App\Http\Controllers\PropertySaleController::class, 'storeMedia'])->name('sale.storeMedia');


Route::get('/property-rent', [App\Http\Controllers\PropertyRentController::class, 'index'])->name('rent.index');
Route::get('/create-for-rent', [App\Http\Controllers\PropertyRentController::class, 'create'])->name('rent.create');
Route::post('/save-property-rent', [App\Http\Controllers\PropertyRentController::class, 'store'])->name('rent.store');

Route::post('/property-rent-media', [App\Http\Controllers\PropertyRentController::class, 'storeMedia'])->name('rent.storeMedia');

// propertie


Route::get('/rents', [App\Http\Controllers\HomeController::class, 'rent'])->name('rents');
Route::get('/sales', [App\Http\Controllers\HomeController::class, 'sale'])->name('sales');
Route::get('/show-property-rent/{propertyrent}', [App\Http\Controllers\HomeController::class, 'show_rent'])->name('rent.show');
Route::get('/show-property-sale/{propertysale}', [App\Http\Controllers\HomeController::class, 'show_sale'])->name('sale.show');
// apointment
Route::get('/pointment-rent/{propertyrent}', [App\Http\Controllers\BookApointmentController::class, 'rent'])->name('rent.apointment');
Route::get('/pointment-sale/{propertysale}', [App\Http\Controllers\BookApointmentController::class, 'sale'])->name('sale.apointment');
Route::post('/store-apointment', [App\Http\Controllers\BookApointmentController::class, 'store'])->name('apointment.store');

Route::post('/store', [App\Http\Controllers\PropertyRentController::class, 'store']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('home.search');
Route::get('/home', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create-listing', [App\Http\Controllers\PropertyRentController::class, 'index']);

Auth::routes();

