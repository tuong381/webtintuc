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

         $vpcc=DB::table('vanphongcongchung')
                     ->where('vanphongcongchung.ID_VPCC',$ID_VPCC)
                     ->get();
       $ten= DB::table('vanphongcongchung')
                     ->where('vanphongcongchung.ID_VPCC',$ID_VPCC)
                    ->limit(1)->get();


         return view('page.HoiVien.chitiet_VPCC') ->with('vpcc',$vpcc)
                ->with('ten',$ten);
}
}
