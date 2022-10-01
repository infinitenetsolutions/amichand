<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// for home page all api start
Route::get('slider', [IndexController::class, 'slider'])->name('slider');
Route::get('home/products', [IndexController::class, 'products'])->name('home.products');
Route::get('home/services', [IndexController::class, 'services'])->name('services');
Route::get('testimonial', [IndexController::class, 'slider'])->name('testimonial');
Route::get('clients', [IndexController::class, 'clients'])->name('clients');
Route::get('category', [IndexController::class, 'category'])->name('category');

// home page end
// contact start
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');

// contact end
// product start
Route::get('products/{category}', [ProductsController::class, 'index'])->name('products');
Route::get('products/single/{slug}', [ProductsController::class, 'product_single'])->name('products.single');
// product end

// service start
Route::get('services/{category}', [ServiceController::class, 'index'])->name('services');
Route::get('services/single/{slug}', [ServiceController::class, 'service_single'])->name('services.single');

// service end
