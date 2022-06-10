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
                    <li><a href="{{URL::to('/trang-chu')}}"><span style="font-family: 'FontAwesome'; color: #ffff00">Điểm tin</span></a>
                    </li>
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
                                @foreach($chuyenmucdiemtin as $key=>$chuyenmuc)
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
                                        <a class="btn button button-main" style="background-color: #c4851a" href="blog-list-right-sidebar.html" title="{{$chuyenmuc->TEN_CHUYENMUC_DT}}">{{$chuyenmuc->TEN_CHUYENMUC_DT}}</a>
                                     </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


             </div>



        </div>
    </div>
</section>





@endsection
