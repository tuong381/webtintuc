<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;  //Redirect :tra ve
use Toastr;
session_start();
use Mail;


class HomeController extends Controller
{

    public function mail(){

        return view('admin.Mail.vd');



    }



    // trang chu
    public function index(){
        $diemtin1=DB::table('diemtin')->orderby('ID_DT','desc')->limit(1)->get();
         $diemtin=DB::table('diemtin')->orderby('ID_DT','desc')->limit(3)->get();

         $vanban=DB::table('vanban')->orderby('ID_VB','desc')->limit(3)->get();
          $phapluat=DB::table('phapluat')->orderby('ID_PL','desc')->limit(3)->get();
        return view('page.home')->with('diemtin',$diemtin)->with('diemtin1',$diemtin1)
                ->with('phapluat',$phapluat)->with('vanban',$vanban);

    }

    public function gioithieuchung(){
        return view('page.GioiThieu.GioiThieuChung');
    }

     public function sodo(){
        return view('page.GioiThieu.SoDoToChuc');
    }

    public function quyetdinh(){
        return view('page.GioiThieu.QuyetDinhThanhLap');
    }

    public function dieule(){
        return view('page.GioiThieu.DieuLe');
    }

    public function lienhe(){
        return view('page.LienHe.LienHe');
    }

    public function diemtin(){
        $chuyenmucdiemtin=DB::table('chuyenmucdiemtin')->orderby('ID_CHUYENMUC_DT','desc')->get();
        return view('page.DiemTin.DiemTin')->with('chuyenmucdiemtin',$chuyenmucdiemtin);
    }


     // tim kiem
    public function timkiem(Request $request){

        $tu_timkiem = $request->tu_timkiem;

        $danhmuc_SP=DB::table('danhmucsanpham')->orderby('id_DanhMuc','asc')->get();

         $danhmuc_BaiViet=DB::table('danhmucbaiviet')->orderby('id_DanhMucBaiViet','asc')->get();

        $timkiem_SP = DB::table('sanpham')->where('TenSanPham','like','%'.$tu_timkiem.'%')->get();
            // ->orwhere('unit_price',$tu_timkiem)-

         $sanpham = DB::table('sanpham')->orderby('id_SanPham','desc')->limit(5)->get();

    //   $cfr = count($timkiem_SP);

        return view('page.SanPham.timkiem')->with('danhmuc_SP',$danhmuc_SP)->with('timkiem_SP',$timkiem_SP)
            ->with('tu_timkiem',$tu_timkiem) ->with('sanpham',$sanpham)->with('danhmuc_BaiViet',$danhmuc_BaiViet);

    }


    // blog
    public function blog(){

        $danhmuc_SP=DB::table('danhmucsanpham')->orderby('id_DanhMuc','asc')->get();

         $danhmuc_BaiViet=DB::table('danhmucbaiviet')->orderby('id_DanhMucBaiViet','asc')->get();

        $blogs = DB::table('baiviet')->orderby('id_BaiViet','desc')->paginate(9);

         $blog = DB::table('baiviet')->orderby('id_BaiViet','desc')->limit(5)->get();

        return view('page.Blog.show_Blog')->with('danhmuc_SP',$danhmuc_SP)->with('blogs',$blogs)
            ->with('danhmuc_BaiViet',$danhmuc_BaiViet)->with('blog',$blog);

    }


    public function show_Blog($id_BaiViet){

        $danhmuc_SP=DB::table('danhmucsanpham')->orderby('id_DanhMuc','asc')->get();

         $danhmuc_BaiViet=DB::table('danhmucbaiviet')->orderby('id_DanhMucBaiViet','asc')->get();

        $chitiet_blog = DB:: table('baiviet')->where('id_BaiViet',$id_BaiViet)->get();

         $blog = DB::table('baiviet')->orderby('id_BaiViet','desc')->limit(5)->get();

        return view('page.Blog.show_chitietBlog')->with('danhmuc_SP',$danhmuc_SP)->with('chitiet_blog',$chitiet_blog)->with('blog',$blog)->with('danhmuc_BaiViet',$danhmuc_BaiViet);

    }

    public function show_DanhMucBaiViet($id_DanhMucBaiViet){
        $danhmuc_SP=DB::table('danhmucsanpham')->orderby('id_DanhMuc','asc')->get();

        $danhmuc_BaiViet=DB::table('danhmucbaiviet')->orderby('id_DanhMucBaiViet','asc')->get();

        $blogs = DB::table('baiviet')->orderby('id_BaiViet','desc')->paginate(9);

        $blog = DB::table('baiviet')->orderby('id_BaiViet','desc')->limit(5)->get();

        $danhmuc_id = DB::table('baiviet')->join('danhmucbaiviet','danhmucbaiviet.id_DanhMucBaiViet','=',
            'baiviet.id_DanhMucBaiViet')->where('danhmucbaiviet.id_DanhMucBaiViet',$id_DanhMucBaiViet)->paginate(9);

         $danhmuc_ten = DB::table('baiviet')->join('danhmucbaiviet','danhmucbaiviet.id_DanhMucBaiViet','=',
            'baiviet.id_DanhMucBaiViet')->where('danhmucbaiviet.id_DanhMucBaiViet',$id_DanhMucBaiViet)
            ->limit(1)->get();


        return view('page.Blog.show_danhmucBlog')->with('danhmuc_SP',$danhmuc_SP)->with('blogs',$blogs)
            ->with('danhmuc_BaiViet',$danhmuc_BaiViet)->with('blog',$blog)->with('danhmuc_id',$danhmuc_id)
            ->with('danhmuc_ten',$danhmuc_ten);
    }


    public function show_taiKhoan(){
           $danhmuc_SP=DB::table('danhmucsanpham')->orderby('id_DanhMuc','asc')->get();
        // danh muc bai viet
         $danhmuc_BaiViet=DB::table('danhmucbaiviet')->orderby('id_DanhMucBaiViet','asc')->get();

        $taikhoan = DB::table('khachhang')->where('id_KH',Session::get('id_KH'))->get();

         return view('page.Login.show_taiKhoan')->with('danhmuc_SP',$danhmuc_SP)
         ->with('danhmuc_BaiViet',$danhmuc_BaiViet)->with(compact('taikhoan'));
    }


    public function sua_taiKhoan(){
        $danhmuc_SP=DB::table('danhmucsanpham')->orderby('id_DanhMuc','asc')->get();
        // danh muc bai viet
         $danhmuc_BaiViet=DB::table('danhmucbaiviet')->orderby('id_DanhMucBaiViet','asc')->get();

        $taikhoan = DB::table('khachhang')->where('id_KH',Session::get('id_KH'))->get();

        return view('page.Login.capnhat_taiKhoan')->with('danhmuc_SP',$danhmuc_SP)
         ->with('danhmuc_BaiViet',$danhmuc_BaiViet)->with(compact('taikhoan'));
    }


    public function capnhat_taiKhoan(Request $request, $id_KH){

        $data = array();
        $data['HoTenKH'] = $request->HoTenKH;
        $data['Email_KH'] = $request->Email_KH;
         $data['SoDienThoai_KH'] = $request->SoDienThoai_KH;

        DB:: table ('khachhang')->where('id_KH',$id_KH)->update($data);
      //  Session::put('message','Cập nhật sản phẩm '.$request->TenSanPham.' thành công');
        //tra ve
        Toastr::success('Cập nhật tài khoản thành công', 'Success',);
        return Redirect::to('/tai-khoan-cua-toi');;
    }





}
