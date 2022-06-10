@extends('welcome')
@section('content')


<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
            <div class="page-title-container">
                <h1 class="text-center">Market Online</h1>
            </div>
            <div class="breadcrumbs-container text-center">
                <ul class="breadcrumbs primary-font">
                    <li><a href="{{URL::to('/trang-chu')}}"><span style="font-family: 'FontAwesome';">Trang chủ</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    <li><span style="font-family: 'FontAwesome';">Tài khoản của tôi</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="reset-password">
    <div class="all user-page">
        <div class="container section check-out">
            <div class="row check-out-wrap">
                <div class="col">
                    <div class="descrip-title">
                        <h3 class="title-black" style="font-family: 'Flaticon'; font-size: 35px">
                                Cập Nhật Tài khoản</h3>
                    </div>

                      @foreach($taikhoan as $key=>$sua)

                        <form name="checkout" method="post" class="form-checkout" action="{{URL::to('/capnhat-taikhoan/'.$sua->id_KH)}}" enctype="multipart/form-data" novalidate="novalidate">
                            {{csrf_field()}}
                            <div class="billing-fields">
                                <div class="form-input">
                                    <div class="form-row">
                                        <p>Username <abbr class="required" title="required"></abbr></p>
                                        <span class="input-wrapper w-100">
                                            <input type="text" class="input-text spr-form-input" name="HoTenKH" value="{{$sua->HoTenKH}}">
                                        </span>
                                    </div>

                                    <div class="form-row">
                                        <p>Email <abbr class="required" title="required"></abbr></p>
                                        <span class="input-wrapper w-100">
                                            <input type="text" class="input-text spr-form-input"
                                                name="Email_KH" value="{{$sua->Email_KH}}">
                                        </span>
                                    </div>

                                    <div class="form-row">
                                        <p>Số điện thoại <abbr class="required" title="required"></abbr></p>
                                        <span class="input-wrapper w-100">
                                            <input type="text" class="input-text spr-form-input"
                                                name="SoDienThoai_KH" value="{{$sua->SoDienThoai_KH}}">
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="d-flex justify-content-star align-items-center m-bottom-20">
                                <button type="submit" class="btn-submit btn button-main">Cập nhật</button>
                            </div>
                        </form>

                        @endforeach

                    </div>
                </div>
            </div>

    </div>
</div>


@endsection
