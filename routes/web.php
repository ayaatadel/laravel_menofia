<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // echo "hello";
    return view('welcome');
});

// Route::get('/hello',function()
// {
//     $name="ayaat";
//     return view('hello',['user_name'=>$name]);
// });


Route::get('/product',[ProductController::class,'getProducts']);