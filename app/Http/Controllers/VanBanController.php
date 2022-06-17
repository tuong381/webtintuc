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

class VanBanController extends Controller
{
     /// khach hang
    public function show_ChuyenMucVB($ID_CHUYENMUC_VB){

        $chuyenmucvanban=DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB','desc')->get();



        $danhmuc= DB::table('vanban')
                    ->join('chuyenmucvanban','chuyenmucvanban.ID_CHUYENMUC_VB','=','vanban.ID_CHUYENMUC_VB')
                    ->where('chuyenmucvanban.ID_CHUYENMUC_VB',$ID_CHUYENMUC_VB )
                    ->get();


        $chuyenmuc_ten= DB::table('chuyenmucvanban')

                    ->where('chuyenmucvanban.ID_CHUYENMUC_VB',$ID_CHUYENMUC_VB )
                    ->limit(1)->get();


        return view('page.vanban.CM_vanban')->with('chuyenmuc_ten',$chuyenmuc_ten)
                ->with('chuyenmucvanban',$chuyenmucvanban)->with('danhmuc',$danhmuc);
    }

    public function show_ChiTietVB($ID_VB ){

         $vanban=DB::table('vanban')
                    ->join('chuyenmucvanban','chuyenmucvanban.ID_CHUYENMUC_VB','=','vanban.ID_CHUYENMUC_VB')
                     ->where('vanban.ID_VB',$ID_VB)
                     ->get();
       $chuyenmuc_ten= DB::table('vanban')
                    ->join('chuyenmucvanban','chuyenmucvanban.ID_CHUYENMUC_VB','=','vanban.ID_CHUYENMUC_VB')
                     ->where('vanban.ID_VB',$ID_VB)
                    ->limit(1)->get();
        // diem tin lien quan

         foreach($vanban as $key => $value){
            $ID_CHUYENMUC_VB = $value->ID_CHUYENMUC_VB;
        }
        $VB_lienquan = DB:: table('vanban')
            ->join('chuyenmucvanban','chuyenmucvanban.ID_CHUYENMUC_VB','=','vanban.ID_CHUYENMUC_VB')
            ->where('chuyenmucvanban.ID_CHUYENMUC_VB',$ID_CHUYENMUC_VB)
                          ->limit(5)->get();

         return view('page.VanBan.chitiet_VanBan') ->with('vanban',$vanban)
                ->with('chuyenmuc_ten',$chuyenmuc_ten)
                ->with('VB_lienquan',$VB_lienquan);
}
}
