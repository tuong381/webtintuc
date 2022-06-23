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

          // $vpcc=DB::table('vanphongcongchung')
                     // ->orderby('ID_VPCC','asc')
                     // ->get();

          $vpcc=DB::table('vanphongcongchung')
                     ->orderby('NGAYTHANHLAP_VPCC','asc')
                     ->paginate(12);

          $lienket= DB::table('lienketwebsite')->get();


        return view('page.home')->with('diemtin',$diemtin)->with('diemtin1',$diemtin1)
                ->with('phapluat',$phapluat)->with('vanban',$vanban)
                ->with('vpcc',$vpcc)->with('lienket', $lienket);

    }

    public function gioithieuchung(){
      $lienket= DB::table('lienketwebsite')->get();
        return view('page.GioiThieu.GioiThieuChung')->with('lienket', $lienket);
    }

     public function sodo(){
      $lienket= DB::table('lienketwebsite')->get();
        return view('page.GioiThieu.SoDoToChuc')->with('lienket', $lienket);
    }

    public function quyetdinh(){
      $lienket= DB::table('lienketwebsite')->get();
        return view('page.GioiThieu.QuyetDinhThanhLap')->with('lienket', $lienket);
    }

    public function dieule( ){
      $lienket= DB::table('lienketwebsite')->get();

        return view('page.GioiThieu.DieuLe')->with('lienket', $lienket);
    }

    public function lienhe(){
      $lienket= DB::table('lienketwebsite')->get();
        return view('page.LienHe.LienHe')->with('lienket', $lienket);
    }

    public function diemtin(){
      $lienket= DB::table('lienketwebsite')->get();
        $chuyenmucdiemtin=DB::table('chuyenmucdiemtin')->orderby('ID_CHUYENMUC_DT','desc')->get();

         $diemtin=DB::table('diemtin')->orderby('ID_DT','desc')->paginate(5);
        return view('page.DiemTin.DiemTin')->with('chuyenmucdiemtin',$chuyenmucdiemtin)
                ->with('diemtin',$diemtin)->with('lienket', $lienket);
    }

    public function vanban(){
      $lienket= DB::table('lienketwebsite')->get();
        $chuyenmucvanban=DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB','desc')->get();

         $vanban=DB::table('vanban')->orderby('ID_VB','desc')->paginate(5);
        return view('page.VanBan.VanBan')->with('chuyenmucvanban',$chuyenmucvanban)
                ->with('vanban',$vanban)->with('lienket', $lienket);
    }

    public function phapluat(){
      $lienket= DB::table('lienketwebsite')->get();
        $chuyenmucphapluat=DB::table('chuyenmucphapluat')->orderby('ID_CHUYENMUC_PL','desc')->get();

         $phapluat=DB::table('phapluat')->orderby('ID_PL','desc')->paginate(5);
        return view('page.PhapLuat.PhapLuat')->with('chuyenmucphapluat',$chuyenmucphapluat)->with('phapluat',$phapluat)->with('lienket', $lienket);
    }

    public function vpcc(){
        $lienket= DB::table('lienketwebsite')->get();

         $vpcc=DB::table('vanphongcongchung')->orderby('NGAYTHANHLAP_VPCC','asc')->paginate(12);
        return view('page.HoiVien.VPCC')->with('vpcc',$vpcc)->with('lienket', $lienket);
    }

    public function hoivien(){
      $lienket= DB::table('lienketwebsite')->get();


         $hoivien=DB::table('hoivien')->orderby('ID_HV','desc')->get();
        return view('page.HoiVien.HoiVien')->with('hoivien',$hoivien)->with('lienket', $lienket);
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
      $lienket= DB::table('lienketwebsite')->get();

        $tu_timkiem = $request->tu_timkiem;

        $timkiem_DT = DB::table('diemtin')->where('TIEUDE_DT','like','%'.$tu_timkiem.'%')->get();


        return view('page.TimKiem')->with('timkiem_DT',$timkiem_DT)
            ->with('tu_timkiem',$tu_timkiem)->with('lienket', $lienket) ;

    }


    // thu vien
    public function thuvien(){
      $lienket= DB::table('lienketwebsite')->get();

        $chuyenmucthuvien =DB::table('chuyenmucthuvien')->orderby('ID_CHUYENMUC_TV','asc')->get();
          $thuvien=DB::table('thuvien')
                  ->join('chuyenmucthuvien', 'chuyenmucthuvien.ID_CHUYENMUC_TV','=','thuvien.ID_CHUYENMUC_TV')
                  ->where('chuyenmucthuvien.ID_CHUYENMUC_TV',1)
                  ->orderby('ID_TV','desc')->paginate(12);
        return view('page.ThuVien.ThuVien')->with('chuyenmucthuvien', $chuyenmucthuvien)
                ->with('thuvien',$thuvien)->with('lienket', $lienket);
    }

    public function video($ID_CHUYENMUC_TV){
      $lienket= DB::table('lienketwebsite')->get();

        $chuyenmucthuvien =DB::table('chuyenmucthuvien')->orderby('ID_CHUYENMUC_TV','asc')->get();
          $thuvien=DB::table('thuvien')
                  ->join('chuyenmucthuvien', 'chuyenmucthuvien.ID_CHUYENMUC_TV','=','thuvien.ID_CHUYENMUC_TV')
                  ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', $ID_CHUYENMUC_TV)
                  ->orderby('ID_TV','desc')->paginate(12);
        $chuyenmuc_ten= DB::table('chuyenmucthuvien')
                      ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', $ID_CHUYENMUC_TV)
                      ->limit(1)->get();
        $chuyenmuc_ten= DB::table('chuyenmucthuvien')
                      ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', $ID_CHUYENMUC_TV)
                      ->limit(1)->get();

        return view('page.ThuVien.Video')->with('chuyenmucthuvien', $chuyenmucthuvien)
                ->with('thuvien',$thuvien)->with('lienket', $lienket)
                ->with('chuyenmuc_ten', $chuyenmuc_ten);
    }


    public function bieumau(){
      $lienket= DB::table('lienketwebsite')->get();
      $bieumau= DB::table('bieumauccv')->orderby('ID_BMCCV','desc')->paginate(5);

        return view('page.HoiVien.BieuMau')->with('lienket', $lienket)->with('bieumau', $bieumau);
    }

}
