<?php
use App\Http\Controllers\AnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::middleware('auth:sanctum')->group(function(){
# get all resource students
# method get
Route::get('/students', [StudentController::class, 'index']);

# menambahkan resource student
# method post
Route::post('/students', [StudentController::class, 'store']);

# mempebaruhi resource student
# method put
Route::put('/students/{id}', [StudentController::class, 'update']);

# menghapus resource student
# method delete
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
});
