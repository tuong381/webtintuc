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

class PhapLuatController extends Controller
{
    //
      /// khach hang
    public function show_ChuyenMucPL($ID_CHUYENMUC_PL){
        $lienket= DB::table('lienketwebsite')->get();

        $chuyenmucphapluat=DB::table('chuyenmucphapluat')->orderby('ID_CHUYENMUC_PL','desc')->get();



        // $danhmuc= DB::table('phapluat')
        //             ->join('chuyenmucphapluat','chuyenmucphapluat.ID_CHUYENMUC_PL','=','phapluat.ID_CHUYENMUC_PL')
        //             ->where('chuyenmucphapluat.ID_CHUYENMUC_PL',$ID_CHUYENMUC_PL )
        //             ->get();

        $danhmuc= DB::table('phapluat')
                ->join('chuyenmucphapluat','chuyenmucphapluat.ID_CHUYENMUC_PL','=', 'phapluat.ID_CHUYENMUC_PL')
                ->where('chuyenmucphapluat.ID_CHUYENMUC_PL',$ID_CHUYENMUC_PL)->get();

        $chuyenmuc_ten= DB::table('chuyenmucphapluat')

                    ->where('chuyenmucphapluat.ID_CHUYENMUC_PL',$ID_CHUYENMUC_PL )
                    ->limit(1)->get();


        return view('page.PhapLuat.CM_PhapLuat')->with('chuyenmuc_ten',$chuyenmuc_ten)
                ->with('chuyenmucphapluat',$chuyenmucphapluat)->with('danhmuc',$danhmuc)
                ->with('lienket', $lienket);
    }

    public function show_ChiTietPL($ID_PL ){
        $lienket= DB::table('lienketwebsite')->get();

         $phapluat=DB::table('phapluat')
                    ->join('chuyenmucphapluat','chuyenmucphapluat.ID_CHUYENMUC_PL','=','phapluat.ID_CHUYENMUC_PL')
                     ->where('phapluat.ID_PL',$ID_PL)
                     ->get();
       $chuyenmuc_ten= DB::table('phapluat')
                    ->join('chuyenmucphapluat','chuyenmucphapluat.ID_CHUYENMUC_PL','=','phapluat.ID_CHUYENMUC_PL')
                     ->where('phapluat.ID_PL',$ID_PL)
                    ->limit(1)->get();
        // diem tin lien quan

         foreach($phapluat as $key => $value){
            $ID_CHUYENMUC_PL = $value->ID_CHUYENMUC_PL;
        }
        $PL_lienquan = DB:: table('phapluat')
            ->join('chuyenmucphapluat','chuyenmucphapluat.ID_CHUYENMUC_PL','=','phapluat.ID_CHUYENMUC_PL')
            ->where('chuyenmucphapluat.ID_CHUYENMUC_PL',$ID_CHUYENMUC_PL)
                          ->limit(5)->get();

         return view('page.PhapLuat.chitiet_PhapLuat') ->with('phapluat',$phapluat)
                ->with('chuyenmuc_ten',$chuyenmuc_ten)
                ->with('PL_lienquan',$PL_lienquan)->with('lienket', $lienket);
}

    public function timkiem(Request $request){
      $lienket= DB::table('lienketwebsite')->get();

        $tu_timkiem = $request->tu_timkiem;

        $timkiem_PL = DB::table('phapluat')->where('TIEUDE_PL','like','%'.$tu_timkiem.'%')->get();


        return view('page.PhapLuat.TimKiemPL')->with('timkiem_PL',$timkiem_PL)
            ->with('tu_timkiem',$tu_timkiem)->with('lienket', $lienket) ;

    }
}
