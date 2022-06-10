@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
            <div class="page-title-container">
                <h1 class="text-center">Market Online</h1>
            </div>
            <div class="breadcrumbs-container text-center">
                <ul class="breadcrumbs primary-font">
                    <li><a href="{{URL::to('/trang-chu')}}"><span style="font-family: 'FontAwesome';">Trang chủ</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    <li><span style="font-family: 'FontAwesome';">Đăng nhập</span>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

<?php
      $message = Session::get('message');
       if($message){
          echo '<span class="text-alert">'.$message.'</span>';
          Session::put('message',null);
        }

   ?>

<div class="container section check-out" style="background: #f5f8ed;">
                <div class="row check-out-wrap">
                    <div{{--  class="col-lg-5 col-md-6 col-sm-12 m-b-50" --}} style="margin-left: 20rem">
                        <div class="descrip-title">
                            <h3 class="title-black" style="font-size: 2rem; text-align: center;margin: 2rem">Đăng nhập</h3>
                            <p>Nếu khách hàng đã có tài khoản vui lòng đăng nhập để tiếp tục mua sản phẩm.</p>
                        </div>
                        <form name="checkout" method="post" class="form-checkout" action="{{URL::to('khach-hang-dang-nhap')}}" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="billing-fields">
                                <div class="form-input">
                                    <div class="form-row">
                                        <p>Email  <abbr class="required" title="required">*</abbr>
                                        </p><span class="input-wrapper w-100"><input type="text" class="input-text spr-form-input"  required="required" style=" font-size: 1rem; width: 100%" name="Email_KH" ></span>
                                    </div>
                                    <div class="form-row">
                                        <p>Mật khẩu <abbr class="required" title="required">*</abbr>
                                        </p><span class="input-wrapper w-100"><input type="password"  required="required" style=" font-size: 1rem; width: 100%" name="MatKhau_KH" class="input-text spr-form-input"></span>
                                    </div>
                                </div>
                            </div>
                           {{--  <div class="check-box">
                                <label class="check">
                                    <input type="checkbox"><span class="checkmark"></span>
                                </label><span class="title-black">Remember me</span><a href="user-reset-password.html" class="float-right">Forgot your password?</a>
                            </div> --}}
                            <br>
                            <div class="d-flex justify-content-star align-items-center m-bottom-20">
                                <button type="submit" class="btn-submit btn button-main" style="margin-left: 12rem">Đăng nhập</button>
                            </div>
                        </form>

                        <br>
                    <p >
                        Nếu bạn chưa đăng ký mời bạn click vào đây
                        <a href="{{URL::to('/dang-ky')}}" style="color: black">Đăng ký</a>

                    </p>
                    <br><br>

                    </div>

                    {{-- <div class="col-lg-2 d-xs-none"></div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="descrip-title">
                            <h3 class="title-black" style="font-size: 2rem;">Đăng ký</h3>
                            <p>Nếu khách hàng chưa có tài khoản vui lòng đăng ký để tiếp tục mua sản phẩm.</p>
                        </div>
                        <form name="checkout" method="post" class="form-checkout" action="{{URL::to('/khach-hang-dang-ky')}}" enctype="multipart/form-data">
                             {{csrf_field()}}
                            <div class="billing-fields">

                                <div class="form-input">
                                    <div class="form-row">
                                        <p>User name&nbsp; <abbr class="required" title="required">*</abbr>
                                        </p><span class="input-wrapper w-100"><input  type="text"
                                         required="required" style=" font-size: 1rem; width: 100%" name="HoTenKH" class="input-text spr-form-input"></span>
                                    </div>
                                    <div class="form-row">
                                        <p>Số điện thoại&nbsp; <abbr class="required" title="required">*</abbr>
                                        </p><span class="input-wrapper w-100"><input type="text"  data-validation="number"    required="required" style=" font-size: 1rem; width: 100%" name="SoDienThoai_KH" class="input-text spr-form-input"></span>
                                    </div>
                                    <div class="form-row">
                                        <p>Email &nbsp; <abbr class="required" title="required">*</abbr>
                                        </p><span class="input-wrapper w-100"><input type="text"
                                         required="required" style=" font-size: 1rem; width: 100%"  name="Email_KH" class="input-text spr-form-input"></span>
                                    </div>
                                    <div class="form-row">
                                        <p>Password&nbsp; <abbr class="required" title="required">*</abbr>
                                        </p><span class="input-wrapper w-100"><input type="password"
                                         required="required" style=" font-size: 1rem; width: 100%" name="MatKhau_KH" class="input-text spr-form-input"></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-star m-bottom-20">
                                <button type="submit" class="btn-submit btn button-main" > Đăng ký</button>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>

@endsection
