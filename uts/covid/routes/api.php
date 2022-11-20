<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AuthController;

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
Route::middleware(['auth:sanctum'])->group(function () {
    # get all resource patients
    # method get
    Route::get('/patients', [PatientController::class, 'index']);

    # menambahkan resource Patient
    # method post
    Route::post('/patients', [PatientController::class, 'store']);

    # mendapatkan detail resource Patient
    # method get
    Route::get('/patients/{id}', [PatientController::class, 'show']);

    # mempebaruhi resource Patient
    # method put
    Route::put('/patients/{id}', [PatientController::class, 'update']);

    # menghapus resource Patient
    # method delete
    Route::delete('/patients/{id}', [PatientController::class, 'destroy']);

    # method get search
    Route::get('/patients/search/{name}', [PatientController::class, 'search']);

    Route::get('/patients/status/positive', [PatientController::class, 'positive']);
    Route::get('/patients/status/recovered', [PatientController::class, 'recovered']);
    Route::get('/patients/status/dead', [PatientController::class, 'dead']);
});

# membuat route untuk register dan login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

