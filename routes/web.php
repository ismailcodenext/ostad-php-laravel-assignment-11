<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\adminDashbordController;
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
    return view('auth.login');
});



//Route::get('/dashboard', function () {
//    return view('backend.pages.sales_transaction_dashbord');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [SalesController::class, 'sales_dashboard'])->name('dashbord.sales_dashboard');
    return view('backend.pages.sales_transaction_dashbord');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware('auth')->group(function () {

    ///product route
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product/add_product', 'add_product')->name('product.add_product');
        Route::get('/product/all_product', 'all_product')->name('product.all_product');
        Route::post('/product/store_product', 'store_product')->name('product.store_product');
        Route::get('/product/edit_product/{id}', 'edit_product')->name('product.edit_product');
        Route::post('/product/update_product', 'update_product')->name('product.update_product');
        Route::get('/product/delete_product/{id}', 'delete_product')->name('product.delete_product');
    }); ///end product route
});

///Sales route
Route::middleware('auth')->group(function () {


    Route::controller(SalesController::class)->group(function () {
        Route::get('/sales/add_sales', 'add_sales')->name('sales.add_sales');
        Route::post('/sales/store_sales', 'store_sales')->name('sales.store_sales');
        Route::get('/sales/all_sales_transaction', 'all_sales_transaction')->name('sales.all_sales_transaction');
        Route::get('/sales/delete_transaction/{id}', 'delete_transaction')->name('dashbord.delete_transaction');
        Route::get('/dashboard/sales_dashboard', 'sales_dashboard')->name('dashbord.sales_dashboard');


    }); ///end Salesroute
});
Route::middleware('auth')->group(function () {


    Route::controller(adminDashbordController::class)->group(function () {
        Route::get('/admin/logout', 'adminLogout')->name('admin.logout');
        Route::get('/logout', 'adminLogoutPage')->name('admin.logout.page');
    }); ///end Salesroute
});




require __DIR__.'/auth.php';
