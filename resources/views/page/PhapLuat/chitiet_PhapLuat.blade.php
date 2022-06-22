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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: white">Thư viện</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>

                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: white">Pháp luật</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    @foreach($chuyenmuc_ten as $key=>$chuyenmuc)
                    <li><span style="font-family: 'FontAwesome'; color: white">{{$chuyenmuc->TEN_CHUYENMUC_PL}}</span>
                    </li>
                    @endforeach
                    <li class="breadcrumb-sep">/</li>
                    @foreach($phapluat as $key=>$pl)
                    <li><span style="font-family: 'FontAwesome'; color: #1e551e">{{$pl->TIEUDE_PL}}</span>
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
                        @foreach($phapluat as $key=>$pl)
                        <h2 style="background-repeat: no-repeat;
                                    background-position: center bottom;
                                    background-size: auto;
                                    padding-bottom: 10px;
                                    margin-bottom: 0;
                                    color: #b36b00;
                                    font-weight: 600;
                                    font-size: 30px;
                                    font-family: UTM-COPPERPLATE;">{{$pl->TIEUDE_PL}}

                                </h2>

                        <h3 style=" color: #b36b00;
                                    font-weight: 400;
                                    font-size: 25px;
                                    font-family: UTM-COPPERPLATE;">{{$pl->NGAYDANG_PL}}</h3>
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
                                    @foreach($phapluat as $key=>$pl)

                                     <p>{!!$pl->NOIDUNG_PL!!}</p>

                                     <p style="color: #b36b00; font-size: 16px">Download: <a href="{{asset('public/upload'.$pl->FILE_PL)}}" style="color: #0059b3"> tài liệu</a></p>

                                     @endforeach
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="sidebar sidebar-collection">

                                    <!-- Latest Posts -->
                                    <div class="sidebar-block blogs-recent">
                                        <div class="sub-title" style="width: 18rem">
                                            <h3>Pháp luật liên quan</h4>
                                        </div>
                                        <div class="recent-article">
                                            <div class="ra-item-inner">
                                                @foreach($PL_lienquan as $key=>$lienquan)
                                                <div class="article-item clearfix ">

                                                    <div class="articleinfo-group" style="width: 18rem">
                                                        <div class="article-title">
                                                            <h2 class="article-name"><a href="blog-detail.html">{{$lienquan->TIEUDE_PL}}</a></h2>
                                                        </div>
                                                        <ul class="article-info list-inline">
                                                            <li class="article-date">{{$lienquan->NGAYDANG_PL}}</li>
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
