<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

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


//Rout API แบบเก่า
// Route::get('/' , [PhotoController::class , 'index']);
// Route::get('/photos' , [PhotoController::class , 'create']);
// Route::post('/photos' , [PhotoController::class , 'store']);


//Route API แบบใหม่
Route::resource('photos' , PhotoController::class);

//Route API แบบใหม่ที่สร้างขึ้นเอง
Route::get('photos/search/{keyword}' , [PhotoController::class , 'search']);





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
