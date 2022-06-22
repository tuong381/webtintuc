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
                    <li><a href="{{URL::to('/danh-sach-hoi-vien')}}"><span style="font-family: 'FontAwesome'; color: #10550c">Hội viên</span></a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="section about">
                <div class="container">
                    <div class="title text-center">
                        <div class="page-title color">
                            <div class="title title-icon">
                                <h2 class="title-h2">HỘI VIÊN</h2>

                            </div>
                        </div>
                    </div>
                    <div class="content-about text-center m-top">
                        <div class="row">
                            @foreach($hoivien as $key=>$hv)
                            <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50">
                                <div class="item">
                                    <div class="item-img">
                                        <a href="#" title=""><img class="img-fluid" src="{{URL::to('public/upload'.$hv->ANH_HV)}}" alt="img" style="width: 10rem; height: 13rem">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <div class="sub-title">
                                            <h3 style="    font-size: 19px; font-family: math; color: black;">{{$hv->TEN_HV}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>




@endsection
