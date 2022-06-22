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
                    <li><span style="font-family: 'FontAwesome';color:white">Thư viện</span>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    @foreach($chuyenmuc_ten as $key=>$chuyenmuc)
                    <li><span style="font-family: 'FontAwesome';color: #10550c">{{$chuyenmuc->TEN_CHUYENMUC_TV}}</span>
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
                                @foreach($chuyenmucthuvien as $key=>$chuyenmuc)
                                <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50" >

                                    <div class="right-left hidden-xs slow disciver-now" class="dd" >
                                        <a class="btn button button-main" style="background-color: #1e551e" href="{{URL::to('chuyen-muc-thu-vien/'.$chuyenmuc->ID_CHUYENMUC_TV)}}">{{$chuyenmuc->TEN_CHUYENMUC_TV}}</a>
                                     </div>
                                </div>
                                @endforeach

                                <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50" >

                                    <div class="right-left hidden-xs slow disciver-now" class="dd" >
                                        <a class="btn button button-main" style="background-color: #1e551e" href="{{URL::to('/phap-luat')}}">PHÁP LUẬT</a>
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

                        <!-- List -->
                      {{--   <div id="list" class="tab-pane active"> --}}
                            <div class="block-content m-top">
                                <div  style="display: flex; flex-wrap: wrap;">
                                @foreach($thuvien as $key=>$tv)

                                        <div class="row" style="margin-bottom: 50px; width: 32%;height: 20rem;
                                        margin-left: 1.5rem;cursor: pointer;" href="#">

                                            @if($tv->ID_CHUYENMUC_TV==1)
                                                <img src="{{URL::to('public/upload/'.$tv->FILE_TV)}}" style="width: 22.5rem">
                                            @elseif($tv->ID_CHUYENMUC_TV==2)
                                                <video style="width: 22.5rem" controls>
                                                <source src="{{URL::to('public/upload/'.$tv->FILE_TV)}}" type="video/mp4">
                                                 </video>

                                            @endif




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
