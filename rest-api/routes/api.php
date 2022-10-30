<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalControler;

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

#method get
Route::get('/animals', [AnimalControler::class, 'index']);

#method post
Route::post('/animals', [AnimalControler::class, 'store']);

#method put
Route::put('/animals/{id}', [AnimalContrtoler::class, 'update']);

#method delete
Route::delete('/animals/{id}', [AnimalControler::class, 'destory']); 


