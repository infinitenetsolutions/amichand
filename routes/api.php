<?php

use App\Http\Controllers\IndexController;
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

Route::get('slider', [IndexController::class, 'slider'])->name('slider');
Route::get('projects', [IndexController::class, 'projects'])->name('projects');
Route::get('services', [IndexController::class, 'services'])->name('services');
Route::get('testimonial', [IndexController::class, 'slider'])->name('testimonial');
Route::get('clients', [IndexController::class, 'clients'])->name('clients');
