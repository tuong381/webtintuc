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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: #10550c">Văn bản</span></a>
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

            <div class="title-default d-flex justify-content-between w-100 flex-wrap" style="margin-left: 57rem">


                <div class="content-right d-flex align-items-center justify-content-end">
                    <div class="popup-content">
                        <form action="{{URL::to('/tim-kiem-van-ban')}}" method="post">
                            {{csrf_field()}}
                            <div class="input-group">
                                <input class="search-query form-control" type="text" name="tu_timkiem" placeholder="Nhập từ tìm kiếm" value="" autocomplete="off">
                                <div class="input-group-btn">
                                    <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e"><i class="fa fa-search"></i>
                                    </button>
                                </div>



                            </div>
                        </form>
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
                                    @foreach($vanban as $key=>$vb)
                                    <div class="row" style="margin-bottom: 50px"  >

                                        <div class="col-md-5 col-sm-12">
                                            <div class="product-thumb">
                                                <div class="product-container item-img">
                                                    <div class="product-image-container">
                                                        <a class="product-img-link" href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}" title=""><img class="w-100" src="{{URL::to('public/upload/'.$vb->HINHANH_VB)}}" alt="img" style="height: 20rem; border-radius: 0.5rem">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <div class="content-right" style="color: black">
                                                <a href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}" style="font-family: emoji; color: black; font-size: 25px">
                                                    {{$vb->TIEUDE_VB}}</a>

                                                <div class="price font-600 color-default" href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}">
                                                    <span style="color: #9f6605" >{{$vb->NGAYDANG_VB}}</span>
                                                </div>
                                                <div class="button d-flex align-items-center" style="margin-top: 3rem">
                                                    <a class="btn view button-main" href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}"
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

                            {{ $vanban->links("pagination::bootstrap-4") }}


                    </div>
                </div>
            </div>




@endsection
