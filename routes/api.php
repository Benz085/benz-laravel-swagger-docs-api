<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Admin\UsersApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'prefix' => 'v1',
    'as' => 'api.',
    'namespace' => 'Api\V1\Admin',
    // 'middleware' => ['auth:api']
  ], function () {
      Route::get('/users', [UsersApiController::class, 'index']);
      Route::post('/users', [UsersApiController::class, 'store']);
      Route::get('/users/{id}', [UsersApiController::class, 'show']);
      Route::put('/users/{id}', [UsersApiController::class, 'update']);
      Route::delete('/users/{id}', [UsersApiController::class, 'destroy']);
  });
