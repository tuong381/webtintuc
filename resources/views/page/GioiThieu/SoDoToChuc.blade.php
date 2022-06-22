@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
            <div class="page-title-container">
                <h1 class="text-center">Hội công chứng viên Cần Thơ</h1>
            </div>
            <div class="breadcrumbs-container text-center">
                <ul class="breadcrumbs primary-font">
                    <li><a href="{{URL::to('/trang-chu')}}"><span style="font-family: 'FontAwesome';color: white">Giới thiệu</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    <li><span style="font-family: 'FontAwesome';color: #10550c">Sơ đồ tổ chức</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="section about">
        <div class="container">
            <div class="title text-center">
                <div class="page-title color">
                   {{--  <h3 class="title-main">Market Online</h3> --}}
                    {{-- <div class="title title-icon"> --}}
                        <h2 style="background-repeat: no-repeat;
                                    background-position: center bottom;
                                    background-size: auto;
                                    padding-bottom: 30px;
                                    margin-bottom: 0;
                                    color: #b36b00;
                                    font-weight: 600;
                                    font-size: 30px;
                                    font-family: UTM-COPPERPLATE;
                                     margin-right: 51rem;">GIỚI THIỆU CHUNG </h2>

                        <br>
                    {{-- </div> --}}
                </div>
            </div>


            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

                <img src="{{asset('public/frontend/img/sodotochuc.png')}}" style="width: 70rem; height: 50rem;">

             </div>



        </div>
    </div>
</section>





@endsection
