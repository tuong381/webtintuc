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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: white">Điểm tin</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    @foreach($chuyenmuc_ten as $key=>$chuyenmuc)
                    <li><span style="font-family: 'FontAwesome'; color: white">{{$chuyenmuc->TEN_CHUYENMUC_DT}}</span>
                    </li>
                    @endforeach
                    <li class="breadcrumb-sep">/</li>
                    @foreach($diemtin as $key=>$dt)
                    <li><span style="font-family: 'FontAwesome'; color: #10550c">{{$dt->TIEUDE_DT}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="section about">
        <div class="container">
            <div style="margin-right: 18rem">
                <div class="page-title color">
                   {{--  <h3 class="title-main">Market Online</h3> --}}
                    {{-- <div class="title title-icon"> --}}
                        @foreach($diemtin as $key=>$dt)
                        <h2 style="background-repeat: no-repeat;
                                    background-position: center bottom;
                                    background-size: auto;
                                    padding-bottom: 10px;
                                    margin-bottom: 0;
                                    color: #b36b00;
                                    font-weight: 600;
                                    font-size: 30px;
                                    font-family: UTM-COPPERPLATE;">{{$dt->TIEUDE_DT}}

                                </h2>

                        <h3 style=" color: #b36b00;
                                    font-weight: 400;
                                    font-size: 25px;
                                    font-family: UTM-COPPERPLATE;">{{$dt->NGAYDANG_DT}}</h3>
                        @endforeach

                        <br>
                    {{-- </div> --}}
                </div>
            </div>


            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

                 <div class="block-content m-top">
                        <div class="row">
                            <div class="col-md-9 col-sm-12 m-b-50">
                                <div class="row" style="margin-right: 3rem">
                                    @foreach($diemtin as $key=>$dt)

                                     <p>{!!$dt->NOIDUNG_DT!!}</p>

                                     @endforeach
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="sidebar sidebar-collection">

                                    <!-- Latest Posts -->
                                    <div class="sidebar-block blogs-recent">
                                        <div class="sub-title">
                                            <h3>Tin liên quan</h4>
                                        </div>
                                        <div class="recent-article">
                                            <div class="ra-item-inner">
                                                @foreach($DT_lienquan as $key=>$lienquan)
                                                <div class="article-item clearfix ">
                                                    <div class="article-image" style="width: 18rem">
                                                        <a href="{{URL::to('chi-tiet-diem-tin/'.$lienquan->ID_DT)}}"><img class="img-fluid"
                                                            src="{{URL::to('public/upload/'.$lienquan->HINHANH_DT)}}" alt="" style="width: 18rem; height: 13rem">
                                                        </a>
                                                    </div>
                                                    <div class="articleinfo-group" style="width: 18rem">
                                                        <div class="article-title">
                                                            <h2 class="article-name"><a href="blog-detail.html">{{$lienquan->TIEUDE_DT}}</a></h2>
                                                        </div>
                                                        <ul class="article-info list-inline">
                                                            <li class="article-date">{{$lienquan->NGAYDANG_DT}}</li>
                                                        </ul>
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





@endsection
