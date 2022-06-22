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

class HoiVienController extends Controller
{
    //
    public function show_ChiTietVPCC($ID_VPCC ){
        $lienket= DB::table('lienketwebsite')->get();

         $vpcc=DB::table('vanphongcongchung')
                     ->where('vanphongcongchung.ID_VPCC',$ID_VPCC)
                     ->get();
       $ten= DB::table('vanphongcongchung')
                     ->where('vanphongcongchung.ID_VPCC',$ID_VPCC)
                    ->limit(1)->get();


         return view('page.HoiVien.chitiet_VPCC') ->with('vpcc',$vpcc)
                ->with('ten',$ten)->with('lienket', $lienket);
}

    public function timkiem(Request $request){
      $lienket= DB::table('lienketwebsite')->get();

        $tu_timkiem = $request->tu_timkiem;

        $timkiem_BM = DB::table('bieumauccv')->where('TEN_BMCCV','like','%'.$tu_timkiem.'%')->get();


        return view('page.HoiVien.TimKiemBM')->with('timkiem_BM',$timkiem_BM)
            ->with('tu_timkiem',$tu_timkiem)->with('lienket', $lienket) ;

    }

}
