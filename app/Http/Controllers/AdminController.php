<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;  //Redirect :tra ve
session_start();

use Auth;
use App\Models\admin;
use App\Models\roles;

use App\Models\hoadon;

class AdminController extends Controller
{

    //kiem tra dang nhap admin
    public function kiemtra_AD(){
        // $id_AD = session::get('id_AD');
        $id_AD = Auth::id();
        if($id_AD){
             Redirect::to('Dashboard');
        }else{
            return Redirect::to('Admin')->send();
        }
    }


    // trang Admin
    public function index(){
        return view('Admin_login');
    }

    // trang Dashboard
    public function showDashboard(){
      return view('admin.dashboard');

    }

    // trang Login -> Dashboard
    public function login_AD(Request $request){

        $EMAIL_ADMIN = $request->EMAIL_ADMIN;
        $MATKHAU_ADMIN = md5($request->MATKHAU_ADMIN);
 //return Redirect::to('/Dashboard');


        // if(Auth::attempt([
        //     'Email'=>$Email ,
        //     'MatKhau'=>$MatKhau])){

        //     // echo Auth::attempt([
        //     // 'Email'=>$Email ,
        //     // 'MatKhau'=>$MatKhau]);
        //     return Redirect::to('/Dashboard');

        //  }else{

        //     Session::put('message','Mật khẩu hoặc Email chưa đúng, vui lòng kiểm tra lại !');
        //      return Redirect::to('Admin');

        //   //  return Redirect::to('/admin-login-QTV')->with('message','loi dang nhap');
        //  }
        // $Email = $request->Email;
        // $MatKhau = md5($request->MatKhau);

        $result = DB::table('admin')->where('EMAIL_ADMIN',$EMAIL_ADMIN)->where('MATKHAU_ADMIN',$MATKHAU_ADMIN)
                    ->first();    // first(): chi lay 1


        if($result){
            // Session::put('HoTenAD',$result->HoTenAD);   // lay ten cua admin
            // Session::put('id_AD',$result->id_AD);    //lay id admin
            return Redirect::to('/Dashboard');
        }
        else{
            Session::put('message','Mật khẩu hoặc Email chưa đúng, vui lòng kiểm tra lại !');
            return Redirect::to('Admin');

        }



    }

     // trang Logout
    public function logout_AD(){
        $this->kiemtra_AD();     // kiem tra co dang nhap k
         Session::put('HoTenAD',null);   // lay ten cua admin
        Session::put('id_AD',null);    //lay id admin
         return Redirect::to('Admin');
    }

     public function show_taiKhoan(){
          $this->kiemtra_AD();

         return view('admin.Roles.thongtin_TK');
    }

     public function sua_taikhoan($id_AD){

        $this->kiemtra_AD();     // kiem tra co dang nhap k
     //    $admin = admin::where('Email',$data['Email'])->first();
         $roles=roles::orderby('id_Roles','asc')->get();

        $sua_NhanVien = Auth::user();
        $quanli = view('admin.Roles.capnhat_TK')->with('sua_NhanVien',$sua_NhanVien)->with('roles',$roles);
        return view('Admin_index')->with('admin.Roles.capnhat_TK',$quanli);
    }


    // cap nhat nhan vien
    public function capnhat_taikhoan(Request $request, $id_AD){

        $this->validation($request);
      //  $data = $request->all();

        $admin = Auth::user();
        $admin->HoTenAD = $request['HoTenAD'];
        $admin->Email = $request['Email'];
        $admin->DiaChi = $request['DiaChi'];
        $admin->SoDT = $request['SoDT'];
       // $admin->MatKhau = md5($data['MatKhau']);

        //
        // $admin['id_AD'] = $request->id_AD;
         $admin->save();
     //    $admin = admin::where('Email',$data['Email'])->first();
      //  $admin ->roles()->detach();
      //  $admin['id_Roles'] = $request->PhanQuyen;
     //   $admin ->roles()->attach($admin);

        Toastr::success('Cập nhật nhân viên '.$request->HoTenAD.' thành công', 'Success',);

        return Redirect('/admin-tai-khoan-cua-toi');

    }


    // ham kiem tra nhap vao
    public function validation($request){

        return $this->validate($request,['HoTenAD' => 'required|max:255',
                                        'Email' => 'required|email|min:1',
                                        'SoDT' => 'required|min:1',
                                        'DiaChi' => 'required|min:1',
                                        'MatKhau' => 'required|min:1',

                             ]);
    }


}
