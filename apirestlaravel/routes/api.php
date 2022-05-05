<?php
use App\Http\Controllers\MusicaController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/canciones', [MusicaController::class, 'index']);
Route::post('/canciones', [MusicaController::class, 'store']);
Route::put('/canciones/{id}', [MusicaController::class, 'update']);
Route::delete('/canciones/{id}', [MusicaController::class, 'destroy']);
