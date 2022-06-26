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
                    <li><span style="font-family: 'FontAwesome';color: #10550c">Thư viện</span>
                    </li>
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
                        @foreach($chuyenmucthuvien as $key=>$chuyenmuc)
                        <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50">

                            <div class="right-left hidden-xs slow disciver-now" class="dd">
                                <a class="btn button button-main" style="background-color: #1e551e" href="{{URL::to('chuyen-muc-thu-vien/'.$chuyenmuc->ID_CHUYENMUC_TV)}}">{{$chuyenmuc->TEN_CHUYENMUC_TV}}</a>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50">

                            <div class="right-left hidden-xs slow disciver-now" class="dd">
                                <a class="btn button button-main" style="background-color: #1e551e" href="{{URL::to('/phap-luat')}}">VĂN BẢN PHÁP LUẬT</a>
                            </div>
                        </div>


                    </div>
                </div>


            </div>



        </div>
    </div>
</section>


<div class="section blog-news">
    <div class="container">

        <div class="feature-products tab-content">


                <div class="block-content m-top">
                    <div style="display: flex; flex-wrap: wrap;">
                        @foreach($thuvien as $key=>$tv)

                        <div class="row" style="margin-bottom: 50px; width: 32%;height: 20rem;
                                        box-shadow: 1px 1px 3px 0px rgb(0 0 0 / 20%), 0 1px 0 rgb(0 0 0 / 20%), inset 0 0 0 1px rgb(0 0 0 / 5%); margin-left: 1.5rem;cursor: pointer;" href="#">

                            <img src="{{URL::to('public/upload/'.$tv->FILE_TV)}}" style="width: 22.5rem">


                        </div>


                        @endforeach

                    </div>


                </div>

            </div>


            <div style="margin-left: 30rem">

                {{ $thuvien->links("pagination::bootstrap-4") }}


            </div>
        </div>
    </div>


@endsection
