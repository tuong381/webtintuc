<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;  //Redirect :tra ve
session_start();
use Auth;
use Toastr;

class DiemTinController extends Controller
{
    //
    public function them_LoaiDT(){

        return view('admin.LoaiDiemTin.them_LoaiDT');
    }


    public function luu_LoaiDT(Request $request){
        $data = array();
        $data['TEN_LDT'] = $request->TEN_LDT;
        // insert vao csdl
        DB:: table ('loaidiemtin')->insert($data);
       Toastr::success('Thêm loại điểm tin  '.$request->Ten_LDT.' thành công', 'Success',);
        //tra ve
        return Redirect::to('admin-lietke-LoaiDT');

    }


    public function lietke_LoaiDT(){
        $lietke_LoaiDT = DB:: table('loaidiemtin')->orderby('ID_LDT','desc')->paginate(10);
        $quanli_LoaiDT = view('admin.LoaiDiemTin.lietke_LoaiDiemTin')->with('lietke_LoaiDT',$lietke_LoaiDT);
        return view('Admin_index')->with('admin.LoaiDiemTin.lietke_LoaiDiemTin',$quanli_LoaiDT);
    }

    public function sua_LoaiDT($ID_LDT){
        $sua_LoaiDT= DB:: table('loaidiemtin')->where('ID_LDT',$ID_LDT)->get();
        $quanli_LoaiDT = view('admin.LoaiDiemTin.sua_LoaiDiemTin')->with('sua_LoaiDT',$sua_LoaiDT);
        return view('Admin_index')->with('admin.LoaiDiemTin.sua_LoaiDiemTin',$quanli_LoaiDT);
    }

    public function capnhat_LoaiDT(Request $request, $ID_LDT){

        $data = array();
        $data['TEN_LDT'] = $request->TEN_LDT;

        // insert vao csdl
        DB:: table ('loaidiemtin')->where('ID_LDT',$ID_LDT)->update($data);
        Toastr::success('Cập nhật loại điểm tin'.$request->TEN_LDT.' thành công', 'Success',);
        //tra ve
        return Redirect::to('admin-lietke-LoaiDT');
    }

    public function xoa_LoaiDT( $ID_LDT){

        // insert vao csdl
        DB:: table ('loaidiemtin')->where('ID_LDT',$ID_LDT)->delete();
        Toastr::success('Xóa loại điểm tin thành công', 'Success',);
        //tra ve
        return Redirect::to('admin-lietke-LoaiDT');
    }




    /// khach hang
    public function diemtin(')
    {
        $diemtin=DB::table('diemtin')->orderby('ID_DT','asc')->get();
    }
}
