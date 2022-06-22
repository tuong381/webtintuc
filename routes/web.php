<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|*/


// KHACH HANG
Route::get('/','App\Http\Controllers\HomeController@index');

// trang khach hang - trang chu (frontend)
Route::get('/trang-chu','App\Http\Controllers\HomeController@index' );

// gioi thieu chung
Route::get('/gioi-thieu-chung','App\Http\Controllers\HomeController@gioithieuchung' );

// so do to chuc
Route::get('so-do-to-chuc','App\Http\Controllers\HomeController@sodo' );

// quyet dinh thanh lap
Route::get('quyet-dinh-thanh-lap','App\Http\Controllers\HomeController@quyetdinh' );

// quyet dinh thanh lap
Route::get('dieu-le','App\Http\Controllers\HomeController@dieule' );

// lien he
Route::get('lien-he','App\Http\Controllers\HomeController@lienhe' );

// lien diem tin
Route::get('diem-tin','App\Http\Controllers\HomeController@diemtin' );

//
Route::get('chuyen-muc-diem-tin/{ID_CHUYENMUC_DT}','App\Http\Controllers\DiemTinController@show_ChuyenMucDT' );

//
Route::get('chi-tiet-diem-tin/{ID_DT}','App\Http\Controllers\DiemTinController@show_ChiTietDT' );

// van ban
Route::get('van-ban','App\Http\Controllers\HomeController@vanban' );

Route::get('chuyen-muc-van-ban/{ID_CHUYENMUC_VB}','App\Http\Controllers\VanBanController@show_ChuyenMucVB' );

Route::get('chi-tiet-van-ban/{ID_VB}','App\Http\Controllers\VanBanController@show_ChiTietVB' );

// phap luat
Route::get('phap-luat','App\Http\Controllers\HomeController@phapluat' );

Route::get('chuyen-muc-phap-luat/{ID_CHUYENMUC_PL}','App\Http\Controllers\PhapLuatController@show_ChuyenMucPL' );

Route::get('chi-tiet-phap-luat/{ID_PL}','App\Http\Controllers\PhapLuatController@show_ChiTietPL' );


// hoi vien
Route::get('danh-sach-vpcc','App\Http\Controllers\HomeController@vpcc' );

Route::get('chi-tiet-vpcc/{ID_VPCC}','App\Http\Controllers\HoiVienController@show_ChiTietVPCC' );

Route::get('danh-sach-hoi-vien','App\Http\Controllers\HomeController@hoivien' );

// y kien dong gop
Route::post('/y-kien-dong-gop','App\Http\Controllers\HomeController@donggop' );

// tim kiem
Route::post('/tim-kiem','App\Http\Controllers\HomeController@timkiem' );

// dang ky nhan tin
Route::post('dang-ky-nhan-tin','App\Http\Controllers\HomeController@dkNhanTin' );


// thu vien
Route::get('thu-vien','App\Http\Controllers\HomeController@thuvien' );

//  bieu mau
Route::get('bieu-mau-ccv','App\Http\Controllers\HomeController@bieumau' );

Route::get('chuyen-muc-thu-vien/{ID_CHUYENMUC_PL}','App\Http\Controllers\HomeController@video' );

// tim iem
Route::post('/tim-kiem-van-ban','App\Http\Controllers\VanBanController@timkiem' );


Route::post('/tim-kiem-phap-luat','App\Http\Controllers\PhapLuatController@timkiem' );


Route::post('/tim-kiem-bieu-mau','App\Http\Controllers\HoiVienController@timkiem' );
