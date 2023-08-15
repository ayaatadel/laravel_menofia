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


Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/show/{id}',[ProductController::class,'show'])->name('product.show');
Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
Route::get('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::put('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
