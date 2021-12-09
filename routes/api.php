<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;

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

Route::prefix('/user')->group(function(Router $router) {
//    $router->post('store', [UserController::class, 'store']);
});

Route::prefix('categories')->group(function (Router $router) {
    $router->get('getCategories', [CategoryController::class, 'getCategories']);
});

Route::prefix('book')->group(function (Router $router) {
    $router->get('getNewBooks', [BookController::class, 'getBooks']);
});
