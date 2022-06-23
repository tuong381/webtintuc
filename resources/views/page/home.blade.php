
@extends('welcome')
@section('content')



<div class="section tiva-slideshow-wrapper">
    <div id="tiva-slideshow" class="nivoSlider">
        <a href="#" title="Slideshow image"><img class="img-fluid" src="{{asset('public/frontend/img/bannerTC.jpg')}}" title="#caption1" alt="Slideshow image" >
        </a>

    </div>
     <div id="caption1" class="nivo-html-caption hidden-sm hidden-xs d-none col-lg-block">
        <div class="tiva-caption m-left">

            <div class="right-left hidden-xs normal very_large_60" style="margin-top: 500px">
                <h3 style="color: #334d4d; font-family: 'Flaticon'">Hội công chứng viên Cần Thơ</h3>

            </div>
            <div class="Praesent"></div>



            <li style="width: 1200px; height: 30px;padding-left: 400px;padding-top: 450px; line-height: 30px; color: white;font-size: 25px"><marquee behavior="" direction="left" scrollamount="3" >Chào mừng Bạn đến với Trang thông tin điện tử của Hội Công chứng viên thành phố Cần Thơ.</marquee></li>

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
                                    color: #282828;
                                    font-weight: 600;
                                    font-size: 30px;
                                    font-family: UTM-COPPERPLATE;
                                     margin-right: 57rem;">TIN NỔI BẬT </h2>

                        <br>
                    {{-- </div> --}}
                </div>
            </div>





             <div class="container-full">
                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <div class="item-img img-left">
                                    @foreach($diemtin1 as $key=>$dt)
                                    <a href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}"
                                     title=""><img class="img-fluid" style="height: 30rem"
                                            src="{{URL::to('public/upload/'.$dt->HINHANH_DT)}}" alt="img"></a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="title clearfix">

                                    <div class="group-store m-top">

                                        <div class="index-core-group flex-center clearfix d-flex align-items-center">



                                            <div class="row" style=" display: block;">
                                                @foreach($diemtin as $key=>$dt)

                                            <div class="index-core-group flex-center clearfix  align-items-center">
                                            <div class="item-img float-left" style="width: 16rem">
                                                <a href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}" title=""><img class="img-fluid" style="height: 8rem; width: 15rem;"  src="{{URL::to('public/upload/'.$dt->HINHANH_DT)}}"  ></a>
                                            </div>
                                            <div class="item-content">
                                                <div class="sub-title">
                                                   <a href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}"> <h4 class="no-ater" style="font-size: 16px">{{$dt->TIEUDE_DT}}</h4></a>

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
</section>

<section>

<div class="oars-store sm-text-center pd-top-bottom" style="background-color: #ecf8f2">

    <div class="section about">
        <div class="container">



            <div class="section wrap-product-categories" style="margin-bottom: 1px">


             </div>


             <div class="container-full">
                        <div class="row">

                            <div class="col-lg-6 col-md-6">

                                    <div class="page-title color">
                                        <div class="title-icon text-left">
                                            <h2 class="title-h2" style="font-family: UTM-COPPERPLATE;
                                                font-size: 30px;">VĂN BẢN</h2>
                                        </div>
                                    </div>

                                   <div class="title clearfix">

                                    <div class="group-store m-top">

                                        <div class="index-core-group flex-center clearfix d-flex align-items-center">



                                            <div class="row" style=" display: block;">
                                                @foreach($vanban as $key=>$vb)

                                            <div class="index-core-group flex-center clearfix  align-items-center">
                                            <div class="item-img float-left" style="width: 16rem">
                                                <a href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}" title=""><img class="img-fluid" style="height: 8rem; width: 15rem;"  src="{{URL::to('public/upload/'.$vb->HINHANH_VB)}}"  ></a>
                                            </div>
                                            <div class="item-content" style="float: inherit">
                                                <div class="sub-title">
                                                <a href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}">
                                                    <h4 class="no-ater" style="font-size: 18px; font-family: 'FontAwesome'">{{$vb->TIEUDE_VB}}</h4>
                                                </a>
                                                </div>
                                            </div>
                                        </div>

                                            @endforeach


                                            </div>
                            </div>
                        </div>
                    </div>
                             </div>

                           {{--  </div> --}}
                            <div class="col-lg-6 col-md-6">
                                <div class="title clearfix">

                                    <div class="page-title color">
                                        <div class="title-icon text-left">
                                            <h2 class="title-h2" style="font-family: UTM-COPPERPLATE;
                                                font-size: 30px;">PHÁP LUẬT</h2>
                                        </div>
                                    </div>

                                    <div class="group-store m-top">
                                        <div class="index-core-group flex-center clearfix d-flex align-items-center">
                                            <div class="row" style=" display: block;">
                                                @php
                                                    $i=0;

                                                  @endphp
                                                @foreach($phapluat as $key=>$pl)
                                                @php
                                                    $i++;

                                                  @endphp

                                            <div class="index-core-group flex-center clearfix  align-items-center">

                                            <div class="item-content">
                                                <div class="sub-title">
                                                     <a href="{{URL::to('chi-tiet-phap-luat/'.$pl->ID_PL)}}">

                                                    <h4 class="no-ater" style="font-size: 18px; font-weight: 400; font-family: 'FontAwesome'; line-height: 1.5rem;"> <label style="font-weight: 600;">{{$i}}</label>. {{$pl->TIEUDE_PL}}</h4>
                                                </a>
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
                    </div>


        </div>
    </div>
</div>
</section>


<section>
                <div class="section about">
                    <div class="container">
                        <div class="title text-center">
                            <div class="page-title color">
                                    <h2 style="background-repeat: no-repeat;
                                                background-position: center bottom;
                                                background-size: auto;
                                                padding-bottom: 30px;
                                                margin-bottom: 0;
                                                color: #282828;
                                                font-weight: 600;
                                                font-size: 30px;
                                                font-family: UTM-COPPERPLATE;
                                                 margin-right: 44rem;
                                                 margin-top: 3rem">VĂN PHÒNG CÔNG CHỨNG</h2>

                                    <br>
                                {{-- </div> --}}
                            </div>
                        </div>





<div class="section blog-news">
                <div class="container">

                    <div class="feature-products tab-content">

                        <!-- List -->
                      {{--   <div id="list" class="tab-pane active"> --}}
                            <div class="block-content m-top">
                                <div  style="display: flex; flex-wrap: wrap;">
                                @foreach($vpcc as $key=>$vp)

                                        <div class="row" style="margin-bottom: 50px; width: 32%;height: 10rem;
                                        box-shadow: 1px 1px 3px 0px rgb(0 0 0 / 20%), 0 1px 0 rgb(0 0 0 / 20%), inset 0 0 0 1px rgb(0 0 0 / 5%); margin-left: 1.5rem;cursor: pointer;" href="#">


                                            <div class="col-md-5 col-sm-12" style="max-width: 15rem">
                                                <div class="product-thumb">
                                                    <div class="product-container ">
                                                        <div class="product-image-container">
                                                            <a class="product-img-link" href="{{URL::to('chi-tiet-vpcc/'.$vp->ID_VPCC)}}" title=""><img src="{{asset('public/frontend/img/logo.jpg')}}" alt="img" style="width: 8rem; height: 8rem">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  style="width: 50% ; margin-top: 2rem">
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

                    <div style="margin-left: 30rem">

                            {{ $vpcc->links("pagination::bootstrap-4") }}


                    </div>
                </div>
            </div>


                    </div>
                </div>


            </section>






@endsection
