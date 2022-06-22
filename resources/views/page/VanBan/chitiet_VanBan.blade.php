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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: white">Văn bản</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    @foreach($chuyenmuc_ten as $key=>$chuyenmuc)
                    <li><span style="font-family: 'FontAwesome'; color: white">{{$chuyenmuc->TEN_CHUYENMUC_VB}}</span>
                    </li>
                    @endforeach
                    <li class="breadcrumb-sep">/</li>
                    @foreach($vanban as $key=>$vb)
                    <li><span style="font-family: 'FontAwesome'; color: #10550c">{{$vb->TIEUDE_VB}}</span>
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
                        @foreach($vanban as $key=>$vb)
                        <h2 style="background-repeat: no-repeat;
                                    background-position: center bottom;
                                    background-size: auto;
                                    padding-bottom: 10px;
                                    margin-bottom: 0;
                                    color: #b36b00;
                                    font-weight: 600;
                                    font-size: 30px;
                                    font-family: UTM-COPPERPLATE;">{{$vb->TIEUDE_VB}} </h2>
                        <h3 style=" color: #b36b00;
                                    font-weight: 400;
                                    font-size: 25px;
                                    font-family: UTM-COPPERPLATE;">{{$vb->NGAYDANG_VB}}</h3>
                        @endforeach

                        <br>
                    {{-- </div> --}}
                </div>
            </div>


            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

                 <div class="block-content m-top">
                        <div class="row">
                            <div class="col-md-9 col-sm-12 m-b-50">
                                 @foreach($vanban as $key=>$vb)
                                <div class="row" style="margin-right: 3rem">
                                     <p>{!!$vb->NOIDUNG_VB!!}</p>

                                </div>
                                <h3 style="color: #b36b00; font-size: 16px">Download: <a href="{{asset('public/upload'.$vb->FILE_VB)}}" style="color: #0059b3"> tài liệu</a></h3>
                                 @endforeach
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="sidebar sidebar-collection">

                                    <!-- Latest Posts -->
                                    <div class="sidebar-block blogs-recent">
                                        <div class="sub-title">
                                            <h3 style="width: 18rem">Văn bản liên quan</h4>
                                        </div>
                                        <div class="recent-article">
                                            <div class="ra-item-inner">
                                                @foreach($VB_lienquan as $key=>$lienquan)
                                                <div class="article-item clearfix ">
                                                    <div class="article-image" style="width: 18rem">
                                                        <a href="{{URL::to('chi-tiet-van-ban/'.$lienquan->ID_VB)}}"><img class="img-fluid"
                                                            src="{{URL::to('public/upload/'.$lienquan->HINHANH_VB)}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="articleinfo-group" style="width: 18rem">
                                                        <div class="article-title">
                                                            <h2 class="article-name"><a href="blog-detail.html">{{$lienquan->TIEUDE_VB}}</a></h2>
                                                        </div>
                                                        <ul class="article-info list-inline">
                                                            <li class="article-date">{{$lienquan->NGAYDANG_VB}}</li>
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
