
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
                    <li><span style="font-family: 'FontAwesome';">Tìm kiếm sản phẩm</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 sidebar">
                <!-- Search -->
                <div class="sidebar-block blog-search">
                    <div class="sub-title">
                        <h4 class="title-black">Search</h4>
                    </div>
                    <div class="block-content">


                        <form action="{{URL::to('/tim-kiem-san-pham')}}" method="post">
                            {{csrf_field()}}
                            <div class="input-group">
                                <input type="text" class="search-query-blog" name="tu_timkiem" placeholder="Search" value="" autocomplete="off">
                                <div class="input-group-btn">
                                    <button type="submit" name="submit_search" class="btn button"><i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Categories -->
                <div class="sidebar-block categories-blog-menu">
                    <div class="sub-title">
                        <h4 class="title-black">Danh mục sản phẩm</h4>
                    </div>
                    <div class="block-content">
                        @foreach($danhmuc_SP as $key=>$danhmuc)
                        <ul class="list-block">
                        <li style="font-size: 14px;font-family: Poppins,Helvetica,Arial,sans-serif;"><a href="{{URL::to('danh-muc-san-pham/'.$danhmuc->id_DanhMuc)}}">{{$danhmuc->TenDanhMuc}}</a>
                            </li>


                        </ul>
                        @endforeach
                    </div>
                </div>
                <!-- Best Seller -->
                <div id="recent-posts" class="sidebar-block recent-posts">
                    <div class="sub-title">
                        <h4 class="title-black">Sản phẩm mới nhất</h4>
                    </div>

                    <div class="block-content">

                        @foreach($sanpham as $key=>$sp)

                            <input type="hidden" name="idSP_hidden" value="{{$sp->id_SanPham}}">
                            <input type="hidden" name="soluong" value="1">


                            <ul class="posts-list">
                                <li>
                                    <div class="media d-flex align-items-center">
                                        <div class="post-image pull-left">
                                            <a href="{{URL::to('chi-tiet-san-pham/'.$sp->id_SanPham)}}"><img class="img-fluid" src="{{URL::to('public/upload/sanpham/'.$sp->HinhAnh)}}" alt="" width="90" height="54"></a>
                                        </div>
                                        <div class="post-info media-body">
                                            <p class="m-bottom-0"><a href="product-detail.html">{{$sp->TenSanPham}}</a>
                                            </p>
                                            <div class="post-meta"><span class="price d-inline-block">{{number_format($sp->Gia)}}  vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                            {{-- </form> --}} @endforeach
                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-md-12 product-default-item">
                <div class="title-default custom-counter d-flex justify-content-between w-100 flex-wrap">

                    <div class="content-left d-flex justify-content-start align-items-center">

                        <div class="product-counter" style="margin-bottom: 2rem; color: black">Kết quả tìm kiếm cho : <span style="color: #91ac41"> " <?php echo "$tu_timkiem"; ?> "</span>
                        </div>


                    </div>
                    <div class="content-right d-flex align-items-center justify-content-end">
                        <div class="list-grid mg-lf-0">
                            <div class="product-counter" style="margin-bottom: 2rem">Tìm thấy <span class="color-default">{{count($timkiem_SP)}}</span> sản phẩm</div>
                        </div>
                    </div>
                </div>
                <div class="feature-products tab-content">
                    <!-- Grid -->


                    <div id="grid" class="tab-pane active">
                        <div class="product">
                            <div class="row">
                                @foreach($timkiem_SP as $key=>$hienthi)
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <form action="{{URL::to('/them-gio-hang')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="idSP_hidden" value="{{$hienthi->id_SanPham}}">
                                            <input type="hidden" name="soluong" value="1">
                                            <div class="product-thumb">
                                                <div class="product-container item-img">
                                                    <div class="product-image-container"><a class="product-img-link" href="{{URL::to('chi-tiet-san-pham/'.$hienthi->id_SanPham)}}" title=""><img class="img-fluid" src="{{URL::to('public/upload/sanpham/'.$hienthi->HinhAnh)}}" alt="img" style="height: 200px"><img class="img-fluid img-hover" src="{{URL::to('public/upload/sanpham/'.$hienthi->HinhAnh)}}" alt="img" style="height: 200px">
                                                                </a>
                                                    </div>
                                                </div>
                                                <div class="product-cart-icon d-flex justify-content-around">
                                                    <button type="Submit" class="btn btn-default add-to-cart" style="background-color: #91ad41; color: white; border: none; padding: .25rem .60rem;" name="them-gio-hang">Thêm vào giỏ</button>
                                                </div>
                                            </div>

                                            <div class="product-info text-center" style="height: 6rem">
                                                <h4 class="product-name"><a href="{{URL::to('chi-tiet-san-pham/'.$hienthi->id_SanPham)}}">{{$hienthi->TenSanPham}}</a></h4>
                                                <div class="price"><span>{{number_format($hienthi->Gia)}}</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>

@endsection
