<?php

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

use App\Http\Controllers\MainController;


use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

Route::namespace('App\Http\Controllers')->group(function () {
    // Your routes here without full namespaces
    Route::get('/', 'MainController@home');
    Route::get('/products', 'MainController@products');
    Route::get('/products/studio_monitors', 'MainController@studio_monitors');
    Route::get('/products/headphones', 'MainController@headphones');
    Route::get('/products/midi_keyboards', 'MainController@midi_keyboards');
    Route::get('/products/guitars', 'MainController@guitars');
    Route::get('/contact', 'MainController@contact');
    Route::get('/lk', 'MainController@lk');
    Route::get('/lk_orders', 'MainController@lk_orders');
    Route::get('/pay/success', 'MainController@success');
    Route::get('/cart' , function (){
        $products = DB::select("SELECT * FROM products ");
        $carts = DB::select("SELECT * FROM carts");
        $cart_product = DB::select("SELECT * FROM cart_products");
        $orders_product = DB::select("SELECT * FROM orders_products");
        $status = DB::select("SELECT * FROM statuses");
        $orders = DB::select("SELECT * FROM orders");

        return view('pages.cart')->with('products',$products)->with('carts', $carts)->with('cart_products', $cart_product)->with('orders_products', $orders_product)->with('statuses', $status)->with('orders', $orders);
    } );
    Route::post('/cart/addCart/{id}', 'MainController@addCart');
    Route::post('/cart/deleteCart/{id}', 'MainController@deleteCart');
    Route::get('/product/{id}', 'MainController@product_page' );
    Route::get('/user', 'MainController@getUser');
    Route::post('/user/auth' , [MainController::class, 'loginUser']);
    Route::post('/user/reg' , [MainController::class, 'registrationUser'] );
    Route::post('/user/exit' , [MainController::class, 'exitUser']);
    Route::get('/pay', 'MainController@pay');
    Route::fallback(function (){return view('pages.home');});

    Route::get('/search', [ProductController::class, 'search'])->name('product.search');


    Route::group([], function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        Route::post('/admin/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
        Route::delete('/admin/products/{id}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');
        Route::delete('/admin/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
        Route::post('/admin/products/{id}/update', [AdminController::class, 'updateProduct'])->name('admin.products.update');
    });
});


