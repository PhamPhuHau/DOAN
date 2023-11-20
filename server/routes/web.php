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

Route::get('/san-pham-danh-sach', function () {
    return view('SANPHAM/danh-sach');
});
Route::get('/cap-nhat-san-pham', function () {
    return view('SANPHAM/cap-nhat');
});

/*-----------------------LOAI-------------------- */

Route::get('/loai-danh-sach', function () {
    return view('LOAI/danh-sach');
});

/*-----------------------MAU-------------------- */

Route::get('/mau-danh-sach', function () {
    return view('MAU/danh-sach');
});


/*----------------------------------------------------------------------------*/
Route::get('/danh-sach-size',[SizeController::class,'View']);
