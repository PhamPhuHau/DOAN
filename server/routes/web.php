<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SizeController;
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
    return view('ADMIN/trang-chu');
});

/*-----------------------SANPHAM-------------------- */

Route::name('San_Pham_')->group(function(){
    Route::get('/san-pham-danh-sach', function () {
        return view('SANPHAM/danh-sach');
    })->name('Danh_Sach');
    Route::get('/cap-nhat-san-pham', function () {
        return view('SANPHAM/cap-nhat');
    })->name('Cap_Nhat');
});

/*-----------------------LOAI-------------------- */

Route::name('Loai_')->group(function(){
    Route::get('/loai-danh-sach', function () {
        return view('LOAI/danh-sach');
    })->name('Danh_Sach');
});

/*-----------------------MAU-------------------- */

Route::name('Mau_')->group(function(){
    Route::get('/mau-danh-sach', function () {
        return view('MAU/danh-sach');
    })->name('Danh_Sach');    
});

/*----------------------------------------------------------------------------*/
Route::name('Size_')->group(function(){
    Route::get('/danh-sach-size',[SizeController::class,'View'])->name('Danh_Sach');
});
