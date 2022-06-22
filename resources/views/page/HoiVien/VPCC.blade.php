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
                    <li><a href="{{URL::to('/danh-sach-vpcc')}}"><span style="font-family: 'FontAwesome'; color: #10550c">Văn phòng công chứng</span></a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
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






@endsection
