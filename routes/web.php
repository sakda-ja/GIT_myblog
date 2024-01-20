<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

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

// Route::get('/', function () {
//     return view('welcome');
//     // return csrf_token();
// });


//Route render text
// Route::get('about', function () {
//     return 'about';
// });

//Route รับ Paramiter  :Exam: localhost/user/sakda
Route::get('user/{id?}', function ($id="") {
    return 'User:' . $id;
});

Route::post('product', function () {
    return 'Post is my product';
});

Route::put('product', function () {
    return 'Update product';
});


Route::delete('product', function () {
    return 'Delete product';
});

//Route แบบระบุเฉพาะเจาะจง A-Za-z
Route::get('category/{name}', function($name){
    return $name;
})->where('name' , '[A-Za-z]+');


//ทดสอบส่ง Route เข้า Controller
Route::get('/' , [HomeController::class, 'home'] );
Route::get('about' , [HomeController::class, 'about'] );
Route::get('service' , [HomeController::class, 'service'] );
Route::get('contact' , [HomeController::class, 'contact'] );
Route::get('login' , [HomeController::class, 'login'] );
Route::get('employees' , [HomeController::class, 'employees'] );
Route::get('employeelist' , [HomeController::class, 'employeelist'] );




