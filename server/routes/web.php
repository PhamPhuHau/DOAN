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
Route::get('/danh-sach-san-pham', function () {
    return view('SANPHAM/danh-sach');
});
Route::get('/danh-sach-loai', function () {
    return view('LOAI/danh-sach');
});
Route::get('/danh-sach-mau', function () {
    return view('MAU/danh-sach');
});
Route::get('/danh-sach-size',[SizeController::class,'View']);
