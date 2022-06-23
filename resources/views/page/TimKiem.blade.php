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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: #10550c">Kết quả tìm kiếm</span></a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="section product-default-item">
                <div class="container">
                    <h4 style="font-family: MYRIADPRO-LIGHT; color: #9f6605; margin-bottom: 2rem;">
                        Có {{count($timkiem_DT)}} kết quả chứa từ khóa "{{$tu_timkiem}}"
                    </h4>

                    <div class="feature-products tab-content">

                        <!-- List -->
                        <div id="list" class="tab-pane active">
                            <div class="product">
                                <div class="item">
                                    @foreach($timkiem_DT as $key=>$dt)
                                    <div class="row" style="margin-bottom: 50px"  >

                                        <div class="col-md-5 col-sm-12">
                                            <div class="product-thumb">
                                                <div class="product-container item-img">
                                                    <div class="product-image-container">
                                                        <a class="product-img-link" href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}" title=""><img class="w-100" src="{{URL::to('public/upload/'.$dt->HINHANH_DT)}}" alt="img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <div class="content-right" style="color: black">
                                                <a href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}" style="font-family: emoji; color: black; font-size: 25px">
                                                    {{$dt->TIEUDE_DT}}</a>

                                                <div class="price font-600 color-default" href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}">
                                                    <span style="color: #9f6605" >{{$dt->NGAYDANG_DT}}</span>
                                                </div>
                                                <div class="button d-flex align-items-center" style="margin-top: 3rem">
                                                    <a class="btn view button-main" href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}"
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


                </div>
            </div>


@endsection
