
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
                    <li><span style="font-family: 'FontAwesome';">Tài khoản của tôi</span>
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

<div class="section about">
        <div class="container">

            <div class="section main-contact-us">
                <div class="section container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 m-b-30"><img src="{{asset('public/frontend/img/contact.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-5 col-sm-12">

                           {{--  @if (session('success'))
                                <div class="alert alert-success">
                                      <p>{{ session('success') }}</p>
                                </div>
                            @endif --}}

                            <div class="page-title color m-bottom-2">
                                <h3 class="title-main">Market Online</h3>
                                <div class="title title-icon">
                                    <h2 class="title-h2">Hồ sơ của bạn</h2>

                                </div>
                            </div>

                            <div class="header-contact">
                             @foreach($taikhoan as $key=>$show)

                                <div class="col padding-0">
                                    <div class="item d-flex">
                                        <div class="item-left">
                                            <div class="icon"><i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="contact-content">
                                            <div class="title title-black">Tên tài khoản:</div>
                                            <p>{{$show->HoTenKH}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col padding-0">
                                    <div class="item d-flex">
                                        <div class="item-left">
                                            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="item-right">
                                            <div class="title title-black">Số điện thoại:</div>
                                            <p class="contact-content">{{$show->SoDienThoai_KH}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col padding-0">
                                    <div class="item d-flex last">
                                        <div class="item-left">
                                            <div class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="item-right">
                                            <div class="title title-black">Email:</div>
                                            <div class="contact-content">
                                                <p>{{$show->Email_KH}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            </div>
                            <hr>
                            <br>
                            <div class="d-flex justify-content-star align-items-center m-bottom-20">
                               {{--  <button type="submit" class="btn-submit btn button-main">Send reset link</button> --}}

                               <span><a href="{{URL::to('/cap-nhat-tai-khoan-cua-toi')}}" class="btn view button-main">Cập nhật tài khoản</a></span>
                            </div>

                        </div>


                    </div>
                </div>

            </div>





                </div>
            </div>



@endsection
