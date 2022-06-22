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

                    @foreach($chuyenmuc_ten as $key=>$vb)
                    <li><span style="font-family: 'FontAwesome'; color: #10550c">{{$vb->TEN_CHUYENMUC_VB}}</span>
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



            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

                <div class="content-about text-center m-top">
                            <div class="row" style="justify-content: center">
                                @foreach($chuyenmucvanban as $key=>$chuyenmuc)
                                <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50" >
                                   {{--  <div class="item" style="background-color: #ff9933">

                                        <div class="item-content">
                                            <div class="sub-title">
                                                <h4>{{$chuyenmuc->TEN_CHUYENMUC_DT}} </h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="right-left hidden-xs slow disciver-now" class="dd" >
                                        <a class="btn button button-main" style="background-color:#1e551e" href="{{URL::to('chuyen-muc-van-ban/'.$chuyenmuc->ID_CHUYENMUC_VB)}}">{{$chuyenmuc->TEN_CHUYENMUC_VB}}</a>
                                     </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


             </div>



        </div>
    </div>
</section>



<div class="section product-default-item">
                <div class="container">


                    <div class="feature-products tab-content">

                        <!-- List -->
                        <div id="list" class="tab-pane active">
                            <div class="product">
                                <div class="item">
                                    @foreach($danhmuc as $key=>$chuyenmuc)

                                    <div class="row" style="margin-bottom: 50px">

                                        <div class="col-md-5 col-sm-12">
                                            <div class="product-thumb">
                                                <div class="product-container item-img">
                                                    <div class="product-image-container">
                                                        <a class="product-img-link" href="{{URL::to('chi-tiet-van-ban/'.$chuyenmuc->ID_VB)}}" title=""><img class="w-100" src="{{URL::to('public/upload/'.$chuyenmuc->HINHANH_VB)}}" alt="img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-7 col-sm-12">
                                            <div class="content-right" style="color: black">
                                                <a href="{{URL::to('chi-tiet-van-ban/'.$chuyenmuc->ID_VB)}}"><h3 style="font-family: emoji; color: black">
                                                    {{$chuyenmuc->TIEUDE_VB}}</h3></a>

                                                <div class="price font-600 color-default">
                                                    <span style="color: #9f6605" >{{$chuyenmuc->NGAYDANG_VB}}</span>
                                                </div>
                                                <div class="button d-flex align-items-center" style="margin-top: 3rem">
                                                    <a class="btn view button-main" href="{{URL::to('chi-tiet-van-ban/'.$chuyenmuc->ID_VB)}}"
                                                    style="background-color: rgba(0,0,0,0.02);
                                                        box-shadow: 1px 1px 3px 0px rgb(0 0 0 / 20%), 0 1px 0 rgb(0 0 0 / 7%), inset 0 0 0 1px rgb(0 0 0 / 5%); color: #9f6605;
                                                            border-color: rgba(0,0,0,0.02)" >
                                                        Xem thêm
                                                        <i class="fa fa-chevron-double-left"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    @endforeach
                                </div>


                            </div>
                        </div>
                    </div>

                    <div style="margin-left: 30rem">

                            {{ $danhmuc->links("pagination::bootstrap-4") }}


                    </div>
                </div>
            </div>




@endsection
