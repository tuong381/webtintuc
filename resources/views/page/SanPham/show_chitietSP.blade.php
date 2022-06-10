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
                     @foreach($danhmuc_ten as $key=>$ten)

                    <li><span style="font-family: 'FontAwesome';">{{$ten->TenDanhMuc}}</span>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@foreach($chitiet_SP as $key=>$chitiet)
<div class="product-detail">
    <div class="product-detail-wrap">
        <div class="container">
            <div class="row d-flex flex-wrap product-detail-info">
                <div class="col-md-7 col-sm-12 layout-left">
                    <div class="product-image vertical">
                        <div class="main-image"><img class="w-100" src="{{URL::to('public/upload/sanpham/'.$chitiet->HinhAnh)}}" alt="Product Image">
                        </div>

                        @foreach($hinhanh as $key=>$anh)

                        <div class="thumb-images">
                            <img class="w-100" src="{{URL::to('public/upload/thuvienanh/'.$anh->FileHinhAnh)}}" alt="Product Image">
                            {{-- <img class="w-100" src="img/products/product-33.jpg" alt="Product Image">
                            <img class="w-100" src="img/products/product-34.jpg" alt="Product Image">
                            <img class="w-100" src="img/products/product-35.jpg" alt="Product Image"> --}}
                        </div>

                        @endforeach


                    </div>
                </div>
                <div class="col-md-5 col-sm-12 product-information">
                    <h1 class="title">{{$chitiet->TenSanPham}}</h1>
                    <div class="product-price">
                        <h2 class="price"><span class="money">{{number_format($chitiet->Gia)}} vnđ</span></h2>
                    </div>


                    <div class="product-stock management-content d-flex flex-wrap">
                        <div class="product-price" style="color: black">
                            <p><i class="fa fa-check-square-o">  </i>Gọi mua hàng 073 246 2322</p>
                            <p><i class="fa fa-check-square-o">  </i>Đảm bảo tươi ngon</p>
                            <p><i class="fa fa-check-square-o" style="font-size: 14.4px;">  </i><span style="font-size: 14.4px;">Giao hàng trực tiếp từ vườn</span>
                            </p>
                            <p><i class="fa fa-check-square-o">  </i>Đổi trả trong vòng 24h</p>
                        </div>
                    </div>

                    <form action="{{URL::to('/them-gio-hang')}}" method="POST">
                        {{csrf_field()}}
                    <div class="purchase-section multiple d-flex flex-wrap align-items-center">
                        <div class="quantity-wrapper clearfix" style="min-width: 60px;">
                            <div class="wrapper d-flex">
                                <input  type="number" min="1" max="20" name="soluong" value="1" size="4" style="width: 61px; background-color: #f9f9f9;
                                    text-align: center;color: #666; border: 1px solid #ddd;">

                                <input  type="hidden" name="idSP_hidden" value="{{$chitiet->id_SanPham}}">

                            </div>
                        </div>
                        <div class="purchase">
                            <button {{-- class="add-to-cart" --}} style="border: none;" type="submit"><span class="btn view button-main" style="background-color: #d26e4b; border-color: #d26e4b; border: 1px solid #d26e4b;">
                                    Thêm vào giỏ</span>
                            </button>
                        </div>

                    </div>

                    </form>

                    <div class="product-share">
                        <div class="share-item d-table">
                            <div class="share-title">Mã ID:</div>
                            <div class="share-info d-table-cell">{{$chitiet->id_SanPham}}</div>
                        </div>
                        <div class="share-item d-table">
                            <div class="share-title">Danh mục :</div>
                            <div class="share-info d-table-cell"><a href="product-category-grid.html">{{$chitiet->TenDanhMuc}}</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="review-product">
                    <ul class="nav nav-tabs d-flex justify-content-center">
                        <li class="active"><a data-toggle="tab" href="#description" class="active show" >
                                Mô tả</a>
                        </li>

                        <li><a data-toggle="tab" href="#review" class="">Đánh giá</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade in active show" style="color: black" >
                            <p>{!!$chitiet->MoTaSanPham!!}</p>
                        </div>
                       {{--  <div id="review" class="tab-pane fade">
                            <div class="spr-form d-block">
                                <div class="user-comment">
                                    <div class="user-comment-item d-flex">
                                        <div><img src="img/user1.png" alt="">
                                        </div>
                                        <div class="spr-review w-100">
                                            <div class="spr-review-header d-flex justify-content-between"><span class="spr-review-header-byline"><strong>Peter Capidal</strong><span>Apr 14, 2018</span></span>
                                                <div class="rating">
                                                    <div class="star-content">
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nulla vitae elit libero, a pharetra augue. Cras justo odio, dapibus ac . Donec sed odio dui. Donec sed odio dui.</p>
                                                <p class="font-italic"><a href="#">Reply Comment</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-comment-item d-flex">
                                        <div><img src="img/user2.png" alt="">
                                        </div>
                                        <div class="spr-review preview2 w-100">
                                            <div class="spr-review-header d-flex justify-content-between"><span class="spr-review-header-byline"><strong>David James</strong><span>Apr 13, 2018</span></span>
                                                <div class="rating">
                                                    <div class="star-content">
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nulla vitae elit libero, a pharetra augue. Cras justo odio, dapibus ac . Donec sed odio dui. Donec sed odio dui.</p>
                                                <p class="font-italic"><a href="#">Reply Comment</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="index.html" class="new-review-form">
                                <input type="hidden" name="review[rating]" value="3">
                                <input type="hidden" name="product_id">
                                <h3 class="spr-form-title title-black">Write a review</h3>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                                <fieldset>
                                    <div class="spr-form-review-rating d-flex">
                                        <label class="spr-form-label">Your Rating:</label>
                                        <fieldset class="ratings">
                                            <input type="radio" id="star5" name="rating" value="5">
                                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                            <input type="radio" id="star4half" name="rating" value="4 and a half">
                                            <input type="radio" id="star4" name="rating" value="4">
                                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                            <input type="radio" id="star3half" name="rating" value="3 and a half">
                                            <input type="radio" id="star3" name="rating" value="3">
                                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                                            <input type="radio" id="star2half" name="rating" value="2 and a half">
                                            <input type="radio" id="star2" name="rating" value="2">
                                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                            <input type="radio" id="star1half" name="rating" value="1 and a half">
                                            <input type="radio" id="star1" name="rating" value="1">
                                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                            <input type="radio" id="starhalf" name="rating" value="half">
                                        </fieldset>
                                    </div>
                                </fieldset>
                                <fieldset class="spr-form-contact">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12 spr-form-contact-name">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Enter your name">
                                        </div>
                                        <div class="col-lg-6 col-sm-12 spr-form-contact-email">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="spr-form-review-body">
                                        <div class="spr-form-input">
                                            <textarea class="spr-form-input-textarea" rows="10" placeholder="Write your comments here"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="submit">
                                    <button class="add-to-cart" type="submit"><span class="btn view button-main">Submit</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div id="tag" class="tab-pane fade in">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet.</p>
                            <ul>
                                <li>Cum sociis natoque penatibus et magnis.</li>
                                <li>Sed posuere consectetur est at lobortis.</li>
                                <li>Vestibulum id ligula porta felis euismod semper.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach


<div class="section feature-products">
                <div class="container">
                    <div class="title text-center m-bottom-2">
                        <div class="page-title color">
                            <h3 class="title-main">Market Online</h3>
                            <div class="title title-icon">
                                <h2 class="title-h2">Sản phẩm tương tự</h2>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-content m-top">
                            <div class="tab-pane active">
                                <div class="product">
                                    <div class="row">

                                        @foreach($SP_lienquan as $key=>$lienquan)
                                        <a href="{{URL::to('chi-tiet-san-pham/'.$lienquan->id_SanPham)}}">

                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="item item-hover-view-cart">
                                                <div class="product-thumb">
                                                    <div class="product-container item-img">
                                                        <div class="product-image-container">
                                                            <div class="product-img-link"  title=""><img class="img-fluid" src="{{URL::to('public/upload/sanpham/'.$lienquan->HinhAnh)}}" alt="img"
                                                                style="height: 200px">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-cart-icon d-flex justify-content-around" style="width: 140px; background-color: #91ad41;">


                                                        <div class="product-actions" style="background-color: #91ad41;"><a href="#" style="color: white;"> Thêm vào giỏ</a>
                                                        </div>


                                                    </div>


                                                </div>


                                            <div class="product-info text-center" style="height: 6rem" >

                                                    <h4 class="product-name">{{$lienquan->TenSanPham}}</h4>
                                                    <div class="price"><span>{{$lienquan->Gia}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
