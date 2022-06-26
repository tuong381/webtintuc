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
                    <li><a href="{{URL::to('/danh-sach-vpcc')}}"><span style="font-family: 'FontAwesome'; color: white">Tổ chức hành công chứng</span></a>
                    </li>

                    <li class="breadcrumb-sep">/</li>
                    @foreach($ten as $key=>$ten)
                    <li><span style="font-family: 'FontAwesome'; color: #10550c">{{$ten->TEN_VPCC}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="section about">
        <div class="container">

            <div class="section main-contact-us">
                <div class="section container">
                    <div class="row">
                        @foreach($vpcc as $key=>$vp)
                        <div class="col-md-7 col-sm-12 m-b-30">
                            <img src="{{URL::to('public/upload/'.$vp->ANH_VPCC)}}" style="width: 35rem; height: 25rem">
                        </div>
                        <div class="col-md-5 col-sm-12">

                            <div class="page-title color m-bottom-2">
                                <div class="title title-icon">
                                     <h2 style="background-repeat: no-repeat;
                                    background-position: center bottom;
                                    background-size: auto;
                                    padding-bottom: 10px;
                                    color: #b36b00;
                                    font-weight: 600;
                                    font-size: 30px;
                                    font-family: UTM-COPPERPLATE;
                                     ">{{$vp->TEN_VPCC}} </h2>
                                </div>
                            </div>

                            <div class="header-contact" style="color: black">

                                <div class="col padding-0">
                                    <div class="item d-flex">

                                        <div class="contact-content">

                                            <p style=" font-size: 20px; font-family: 'Flaticon';"> {!!$vp->THONGTIN_VPCC!!}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    @endforeach
                    </div>
                </div>

            </div>

         </div>


         <div class="title text-center">
                <div class="page-title color">
                        <h2 style="background-repeat: no-repeat;
                                    background-position: center bottom;
                                    background-size: auto;
                                    padding-bottom: 20px;
                                    color: #b36b00;
                                    font-weight: 600;
                                    font-size: 30px;
                                    font-family: UTM-COPPERPLATE;
                                     margin-right: 30rem;">TỔ CHỨC HÀNH NGHỀ CÔNG CHỨNG KHÁC</h2>

                        <br>
                    {{-- </div> --}}
                </div>
            </div>

         <div class="section blog-news">
            <div class="container">

                <div class="feature-products tab-content">


                        <div class="block-content m-top">
                            <div style="display: flex; flex-wrap: wrap;">
                                @foreach($vpcc1 as $key=>$vp)

                                <div class="row" style="margin-bottom: 50px; width: 32%;height: 10rem;
                                        box-shadow: 1px 1px 3px 0px rgb(0 0 0 / 20%), 0 1px 0 rgb(0 0 0 / 20%), inset 0 0 0 1px rgb(0 0 0 / 5%); margin-left: 1.5rem;cursor: pointer;" href="#">


                                    <div class="col-md-5 col-sm-12" style="max-width: 15rem">
                                        <div class="product-thumb">
                                            <div class="product-container ">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="{{URL::to('chi-tiet-vpcc/'.$vp->ID_VPCC)}}" title=""><img src="{{asset('public/frontend/img/logo.jpg')}}" alt="img" style="width: 5rem; height: 5rem; margin:1rem">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width: 50% ; margin-top: 2rem">
                                        <div class="content-right" style="color: black">
                                            <a href="{{URL::to('chi-tiet-vpcc/'.$vp->ID_VPCC)}}" style="font-family: emoji; color: black; font-size: 18px">Văn phòng công chứng
                                                        {{$vp->TEN_VPCC}}</a>

                                        </div>
                                    </div>


                                </div>


                                @endforeach

                            </div>


                        </div>

                    </div>


                </div>
            </div>


</div>





@endsection
