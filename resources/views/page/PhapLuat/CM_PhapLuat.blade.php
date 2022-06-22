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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color:white">Thư viện</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>

                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: white">Pháp luật</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>

                    @foreach($chuyenmuc_ten as $key=>$pl)
                    <li><span style="font-family: 'FontAwesome'; color: #1e551e">{{$pl->TEN_CHUYENMUC_PL}}</span>
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
                            <div class="row" >
                                @foreach($chuyenmucphapluat as $key=>$chuyenmuc)
                                <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50" style="margin-bottom: 2rem;     ">
                                    {{-- <div class="item" style="background-color: #ff9933">

                                        <div class="item-content">
                                            <div class="btn button ">
                                                <h4>{{$chuyenmuc->TEN_CHUYENMUC_PL}} </h4>

                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="right-left hidden-xs slow disciver-now" class="dd" style="background-color: white; width: 19rem" >
                                        <a class="btn button button-main" href="{{URL::to('chuyen-muc-phap-luat/'.$chuyenmuc->ID_CHUYENMUC_PL)}}"
                                            style="width: 18rem;  background-color: #c4851a; border: 1px solid #c4851a; border-radius: 1px;">{{$chuyenmuc->TEN_CHUYENMUC_PL}}</a>
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



                                        <div >
                                            <div class="content-right" style="color: black">
                                                <a href="{{URL::to('chi-tiet-phap-luat/'.$chuyenmuc->ID_PL)}}"><h3 style="font-family: emoji; color: black">
                                                    {{$chuyenmuc->TIEUDE_PL}}</h3></a>

                                                <div class="price font-600 color-default">
                                                    <span style="color: #9f6605" >{{$chuyenmuc->NGAYDANG_PL}}</span>
                                                </div>
                                                <div class="button d-flex align-items-center" style="margin-top: 3rem">
                                                    <a class="btn view button-main" href="{{URL::to('chi-tiet-phap-luat/'.$chuyenmuc->ID_PL)}}"
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

                           {{--  {{ $chuyenmuc->links("pagination::bootstrap-4") }} --}}


                    </div>
                </div>
            </div>




@endsection
