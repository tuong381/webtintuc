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




    // trang chu
    public function index(){
        $diemtin1=DB::table('diemtin')->orderby('ID_DT','desc')->limit(1)->get();
         $diemtin=DB::table('diemtin')->orderby('ID_DT','desc')->limit(3)->get();

         $vanban=DB::table('vanban')->orderby('ID_VB','desc')->limit(3)->get();
          $phapluat=DB::table('phapluat')->orderby('ID_PL','desc')->limit(3)->get();

          $vpcc=DB::table('vanphongcongchung')
                     ->orderby('ID_VPCC','desc')
                     ->get();

          $vp=DB::table('vanphongcongchung')
                     ->orderby('ID_VPCC','desc')
                     ->paginate(12);

          // $data = array();
          // $data['luotxem'] = $request->luotxem+1;
          // $xem1 =DB::table('thongkeslx')->update($data);
          // $xem =DB::table('thongkeslx')->get();

        return view('page.home')->with('diemtin',$diemtin)->with('diemtin1',$diemtin1)
                ->with('phapluat',$phapluat)->with('vanban',$vanban)->with('vpcc',$vpcc)
                ->with('vp',$vp);

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

    public function dieule( ){

        return view('page.GioiThieu.DieuLe');
    }

    public function lienhe(){
        return view('page.LienHe.LienHe');
    }

    public function diemtin(){
        $chuyenmucdiemtin=DB::table('chuyenmucdiemtin')->orderby('ID_CHUYENMUC_DT','desc')->get();

         $diemtin=DB::table('diemtin')->orderby('ID_DT','desc')->paginate(5);
        return view('page.DiemTin.DiemTin')->with('chuyenmucdiemtin',$chuyenmucdiemtin)
                ->with('diemtin',$diemtin);
    }

    public function vanban(){
        $chuyenmucvanban=DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB','desc')->get();

         $vanban=DB::table('vanban')->orderby('ID_VB','desc')->paginate(5);
        return view('page.VanBan.VanBan')->with('chuyenmucvanban',$chuyenmucvanban)
                ->with('vanban',$vanban);
    }

    public function phapluat(){
        $chuyenmucphapluat=DB::table('chuyenmucphapluat')->orderby('ID_CHUYENMUC_PL','desc')->get();

         $phapluat=DB::table('phapluat')->orderby('ID_PL','desc')->paginate(5);
        return view('page.PhapLuat.PhapLuat')->with('chuyenmucphapluat',$chuyenmucphapluat)->with('phapluat',$phapluat);
    }

    public function vpcc(){


         $vpcc=DB::table('vanphongcongchung')->orderby('ID_VPCC','desc')->paginate(12);
        return view('page.HoiVien.VPCC')->with('vpcc',$vpcc);
    }

    public function hoivien(){


         $hoivien=DB::table('hoivien')->orderby('ID_HV','desc')->paginate(12);
        return view('page.HoiVien.HoiVien')->with('hoivien',$hoivien);
    }

    public function donggop(Request $request){

        $data = array();
        $data['HOTEN_YKDG'] = $request->HOTEN_YKDG;
        $data['EMAIL_YKDG'] = $request->EMAIL_YKDG;
        $data['SDT_YKDG'] = $request->SDT_YKDG;
        $data['NOIDUNG_YKDG'] = $request->NOIDUNG_YKDG;


         $donggop=DB::table('ykiendonggop')->InsertGetId($data);
         Toastr::success('Bạn đã gửi ý kiến đóng góp thành công', 'Success',);
        return Redirect::to('lien-he');
    }

    public function dkNhanTin(Request $request){

        $data = array();
        $data['EMAIL_KHACH'] = $request->EMAIL_KHACH;


         $donggop=DB::table('khach')->InsertGetId($data);
         Toastr::success('Bạn đã đăng ký nhận tin thành công', 'Success',);
        return Redirect::to('trang-chu');
    }



     // tim kiem
    public function timkiem(Request $request){

        $tu_timkiem = $request->tu_timkiem;

        $timkiem_DT = DB::table('diemtin')->where('TIEUDE_DT','like','%'.$tu_timkiem.'%')->get();


        return view('page.TimKiem')->with('timkiem_DT',$timkiem_DT)
            ->with('tu_timkiem',$tu_timkiem) ;

    }


    // blog




}
