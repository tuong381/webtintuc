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

// // trang khach hang - cua hang (frontend)
// Route::get('cua-hang','App\Http\Controllers\CuaHangController@index_CuaHang' );

// // khach hang - tim kiem san pham
// Route::post('/tim-kiem-san-pham','App\Http\Controllers\HomeController@timkiem' );


// // trang khach hang - chi tiet san pham
// Route::get('chi-tiet-san-pham/{id_SanPham}','App\Http\Controllers\SanPhamController@show_ChiTietSP' );

// // khách hang- danhmucsp(home)
// Route::get('danh-muc-san-pham/{id_DanhMuc}','App\Http\Controllers\DanhMucSanPham@show_DanhMucHome' );

// // khach hang - them gio hang
// Route::post('them-gio-hang','App\Http\Controllers\GioHangController@themgiohang' );
// // Route::post('/them-gio-hang-ajax','App\Http\Controllers\GioHangController@themgiohang_ajax' );

// Route::get('/show-GioHang','App\Http\Controllers\GioHangController@show_GioHang' );
// Route::get('/xoa-gio-hang/{rowId}','App\Http\Controllers\GioHangController@xoa_GioHang' );
// Route::get('/xoa-tat-ca-gio-hang','App\Http\Controllers\GioHangController@xoatatca_GioHang' );
// Route::post('/cap-nhat-gio-hang','App\Http\Controllers\GioHangController@capnhat_giohang' );

// // khach hang - show so luong gio hang
// Route::get('/show-so-luong-gio-hang','App\Http\Controllers\GioHangController@soluong_giohang' );

// // khach hang -kiem tra dang nhap / dang ky
// Route::get('/login','App\Http\Controllers\KiemTraController@login' );
// Route::post('/khach-hang-dang-ky','App\Http\Controllers\KiemTraController@dangky' );

// Route::get('/dang-ky','App\Http\Controllers\KiemTraController@register' );

// Route::get('/logout','App\Http\Controllers\KiemTraController@logout' );
// Route::post('/khach-hang-dang-nhap','App\Http\Controllers\KiemTraController@dangnhap' );


// //khach hang - thanh toan
// Route::get('/kiem-tra-san-pham','App\Http\Controllers\KiemTraController@kiemtraSP' );
// Route::post('dat-hang','App\Http\Controllers\KiemTraController@dathang' );

// Route::get('/thanh-toan','App\Http\Controllers\KiemTraController@thanhtoan' );

// // khach hang - show bai viet
// Route::get('/Blog','App\Http\Controllers\HomeController@blog' );
// Route::get('/show-chi-tiet-Blog/{id_BaiViet}','App\Http\Controllers\HomeController@show_Blog' );

// // khách hang- danhmuc bai viet(home)
// Route::get('danh-muc-bai-viet/{id_DanhMucBaiViet}','App\Http\Controllers\HomeController@show_DanhMucBaiViet');

// // khach hang - show lich su mua hang
// Route::get('/xem-danh-sach-don-hang','App\Http\Controllers\DatHangController@show_dsDonHang');

// // khach hang - xem chi tiet don hang
// Route::get('/xem-chi-tiet-danh-sach-don-hang/{id_HD}','App\Http\Controllers\DatHangController@show_chitietDonHang');

// // khach hang - show lich su mua hang - cho xac nhan
// Route::get('/xem-danh-sach-don-hang-1','App\Http\Controllers\DatHangController@show_dsDonHangChoXN');

// // khach hang - show lich su mua hang - dang giao
// Route::get('/xem-danh-sach-don-hang-2','App\Http\Controllers\DatHangController@show_DangGiao');

// // khach hang - show lich su mua hang - da xac nhan
// Route::get('/xem-danh-sach-don-hang-4','App\Http\Controllers\DatHangController@show_dsDonHangDaXN');

// // khach hang - show lich su mua hang - da huy
// Route::get('/xem-danh-sach-don-hang-3','App\Http\Controllers\DatHangController@show_dsDonHangDaHuy');


// //khach hang - huy don hang
// Route::post('/huy-don-hang','App\Http\Controllers\DatHangController@HuyDonHang');

// // khach hang - thong tin tai khoan
// Route::get('/tai-khoan-cua-toi','App\Http\Controllers\HomeController@show_taiKhoan' );

// // khach hang - cap nhat tai khoan
// Route::get('/cap-nhat-tai-khoan-cua-toi','App\Http\Controllers\HomeController@sua_taiKhoan' );

// Route::post('/capnhat-taikhoan/{id_KH}','App\Http\Controllers\HomeController@capnhat_taikhoan' );

// // khach hang - lien he
// Route::get('/Lien-he','App\Http\Controllers\HomeController@LienHe' );








// trang admin (backend)
Route::get('Admin','App\Http\Controllers\AdminController@index' );

// admin - dashboard
Route::get('/Dashboard','App\Http\Controllers\AdminController@showDashboard' );

//admin - login
Route::post('/admin-Dashboard','App\Http\Controllers\AdminController@login_AD' );

// //admin - logout
// Route::get('/admin-Logout','App\Http\Controllers\AdminController@logout_AD' );



// ADMIN - DANH MUC DIEM TIN

// admin_them Danh muc diem tin
Route::get('/admin-them-LoaiDT','App\Http\Controllers\DiemTinController@them_LoaiDT' );
Route::post('/luu_LoaiDT','App\Http\Controllers\DiemTinController@luu_LoaiDT' );

// admin_ liet ke danh muc diem tin
Route::get('/admin-lietke-LoaiDT','App\Http\Controllers\DiemTinController@lietke_LoaiDT' );

// admin - sua danh muc diem tin
Route::get('/admin-sua-LoaiDiemTin/{ID_LDT}','App\Http\Controllers\DiemTinController@sua_LoaiDT' );

// admin - xoa danh muc diem tin
Route::get('/admin-xoa-LoaiDiemTin/{ID_LDT}','App\Http\Controllers\DiemTinController@xoa_LoaiDT' );

// admin - cap nhat danh muc diem tin
Route::post('/admin-capnhat-LoaiDT/{ID_LDT}','App\Http\Controllers\DiemTinController@capnhat_LoaiDT' );

// // ADMIN SAN PHAM

// // admin_them  san pham
// Route::get('/admin-them-SanPham','App\Http\Controllers\SanPhamController@them_SanPham' );

// // kiem tra dl nhap
// Route::post('/luu_SanPham','App\Http\Controllers\SanPhamController@kiemtra_dulieuSanPham' );



// Route::post('/luu_SanPham','App\Http\Controllers\SanPhamController@luu_SanPham' );

// // admin - sua  san pham
// Route::get('/admin-sua-SanPham/{id_SanPham}','App\Http\Controllers\SanPhamController@sua_SanPham' );

// // admin - xoa  san pham
// Route::get('/admin-xoa-SanPham/{id_DanhMuc}','App\Http\Controllers\SanPhamController@xoa_SanPham' );

// // admin_ liet ke  san pham
// Route::get('/admin-lietke-SanPham','App\Http\Controllers\SanPhamController@lietke_SanPham' );


// // admin - cap nhat san pham
// Route::post('/admin-capnhat-SanPham/{id_DanhMuc}','App\Http\Controllers\SanPhamController@capnhat_SanPham' );



// // ADMIN ĐON HANG

// // Admin -liet ke don hang
// Route::get('admin-lietke-DonHang','App\Http\Controllers\DatHangController@donHang' );

// // admin - xem don hang
// Route::get('admin-xem-DonHang/{id_HD}','App\Http\Controllers\DatHangController@xem_donHang' );

// // admin - xoa  bai viet
// Route::get('/admin-xoa-DonHang/{id_HD}','App\Http\Controllers\DatHangController@xoa_donHang' );

// // admin - cap nhat so luong dat hang
// Route::post('/admin-capnhat-soluong-DonHang','App\Http\Controllers\DatHangController@capnhatSL_donhang' );


// // ADMIN - DANH MUC BAI VIET

// // admin_them Danh muc san pham
// Route::get('/admin-them-DanhMucBaiViet','App\Http\Controllers\BaiVietController@them_DanhMucBaiViet' );
// Route::post('/luu_danhmucBaiViet','App\Http\Controllers\BaiVietController@luu_danhmucBaiViet' );

// // admin_ liet ke danh muc san pham
// Route::get('/admin-lietke-DanhMucBaiViet','App\Http\Controllers\BaiVietController@lietke_DanhMucBaiViet' );

// // admin - sua danh muc san pham
// Route::get('/admin-sua-DanhMucBaiViet/{id_DanhMucBaiViet}','App\Http\Controllers\BaiVietController@sua_danhmucBaiViet' );

// // admin - xoa danh muc san pham
// Route::get('/admin-xoa-DanhMucBaiViet/{id_DanhMucBaiViet}','App\Http\Controllers\BaiVietController@xoa_danhmucBaiViet' );

// // admin - cap nhat danh muc san pham
// Route::post('/admin-capnhat-danhmucBaiViet/{id_DanhMucBaiViet}','App\Http\Controllers\BaiVietController@capnhat_danhmucBaiViet' );




// // ADMIN BAI VIET

// // admin - them bai viet
// Route::get('/admin-them-BaiViet','App\Http\Controllers\BaiVietController@them_BaiViet' );
// Route::post('/luu_BaiViet','App\Http\Controllers\BaiVietController@luu_BaiViet' );

// // admin_ liet ke bai viet
// Route::get('/admin-lietke-BaiViet','App\Http\Controllers\BaiVietController@lietke_BaiViet' );

// // admin - sua  bai viet
// Route::get('/admin-sua-BaiViet/{id_BaiViet}','App\Http\Controllers\BaiVietController@sua_BaiViet' );

// // admin - xoa  bai viet
// Route::get('/admin-xoa-BaiViet/{id_BaiViet}','App\Http\Controllers\BaiVietController@xoa_BaiViet' );

// // admin - cap nhat bai viet
// Route::post('/admin-capnhat-BaiViet/{id_BaiViet}','App\Http\Controllers\BaiVietController@capnhat_BaiViet' );


// // ADMIN - HINH ANH SAN PHAM

// // admin - them hinh anh san pham
// Route::get('/admin-them-thuvienAnh/{id_SanPham}','App\Http\Controllers\HinhAnhSanPhamController@them_HinhAnh' );

// // admin - liet ke thu vien anh
// Route::post('/admin-lietke-ThuVienAnh','App\Http\Controllers\HinhAnhSanPhamController@lietke_HinhAnh' );

// // admin - insert hinh anh
// Route::post('/admin-them-anh/{id_SP}','App\Http\Controllers\HinhAnhSanPhamController@insert_HinhAnh' );

// // admin - xóa hinh anh
// Route::post('/admin-xoa-Anh','App\Http\Controllers\HinhAnhSanPhamController@xoa_HinhAnh' );





// //PHAN QUYEN ADMIN (ROLES) - QUAN TRI VIEN

// // admin -dang ky tai khoan
// // Route::get('/admin-dang-ky-tai-khoan','App\Http\Controllers\PhanQuyenController@dangkyTK' );
// // Route::post('admin-dang-ky','App\Http\Controllers\PhanQuyenController@dangky' );

// // // admin - login QTV
// // Route::get('/admin-login-QTV','App\Http\Controllers\PhanQuyenController@login_QTV' );
// // Route::post('/QTV-Dashboard','App\Http\Controllers\PhanQuyenController@login' );

// // Route::get('/admin-logout-QTV','App\Http\Controllers\PhanQuyenController@logout_QTV' );


// //QTV - liêt ke nhan vien
// Route::get('/lietke-user','App\Http\Controllers\UsersController@index' )->middleware('auth.roles');

// // QTV - them nhan vien

// Route::get('/admin-them-NhanVien','App\Http\Controllers\UsersController@them_NhanVien' )
//                                                                     ->middleware('auth.roles');

// Route::post('/luu_NhanVien','App\Http\Controllers\UsersController@luu_NhanVien' )->middleware('auth.roles');

// // QTV - XOA NHAN VIEN
//  Route::get('/admin-xoa-NhanVien/{id_AD}','App\Http\Controllers\UsersController@xoa_NhanVien')
//                                                                      ->middleware('auth.roles');
// // QTV - SUA NHAN VIEN
// Route::get('/admin-sua-NhanVien/{id_AD}','App\Http\Controllers\UsersController@sua_NhanVien' );
// Route::post('/admin-capnhat-NhanVien/{id_AD}','App\Http\Controllers\UsersController@capnhat_NhanVien' )
//                                                                              ->middleware('auth.roles');
// // THONG TIN TAI KHOAN
// Route::get('/admin-tai-khoan-cua-toi','App\Http\Controllers\AdminController@show_taiKhoan' );

// // CAP NHAT THONG TIN TAI KHOAN
// Route::get('/admin-sua-taikhoan/{id_AD}','App\Http\Controllers\AdminController@sua_taikhoan' );
// Route::post('/admin-cap-nhat-tai-khoan-cua-toi/{id_AD}','App\Http\Controllers\AdminController@capnhat_taiKhoan' );


// // admin - thong bao don hang
// Route::get('/show-so-luong-don-hang','App\Http\Controllers\DatHangController@soluong_DH' );
