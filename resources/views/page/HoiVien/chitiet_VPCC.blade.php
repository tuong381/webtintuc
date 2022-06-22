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
                    <li><span style="font-family: 'FontAwesome'; color: white">Hội viên</span>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    <li><a href="{{URL::to('/danh-sach-vpcc')}}"><span style="font-family: 'FontAwesome'; color: white">Văn phòng công chứng</span></a>
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

                            <div class="product-image-container">
                                <img src="{{asset('public/frontend/img/logo.jpg')}}" alt="img" style="width: 8rem; height: 8rem">

                            </div>
                            <br>

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
                                        {{-- <div class="item-left">
                                            <div class="icon"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>
                                            </div>
                                        </div> --}}
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
 </div>



@endsection
