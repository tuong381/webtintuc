<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png"><!-- Goggle Fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/libs/boostrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/flaticon/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/nivo-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/nivo-slider/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/nivo-slider/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/slider-range/css/jslider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/font-cs/cs.css')}}"><!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/responsive.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/sweetalert.css')}}">

     <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">



      {{--  <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}"> --}}
      <!-- fevicon -->
   {{--    <link rel="icon" href="images/fevicon.png" type="image/gif" /> --}}
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      <link rel="icon" href="{{asset('public/frontend/img/logo.jpg')}}" type="image/gif" />
       <title> Hội công chứng viên Cần Thơ</title>


</head>


<body class="home-1">
    <div class="all">
        <header style=" width: 100%; z-index: 100000; position: fixed; background-color: white; box-shadow: 0px 2px 2px rgb(0 0 0 / 26%);">
            <div id="top-header">
                <div class="main-header">
                    <div class="mg-left-right">
                        <div class="row">
                            <div class="col-lg-2 col-5">
                                <div class="index-logo"><a href="index.html" title="Oars"><img src="{{asset('public/frontend/img/logo.jpg')}}" alt="img" style="height: 5rem;"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 d-none d-lg-block">
                                <div class="index-menu">
                                    <nav class="main-nav">
                                        <ul class="megamenu">
                                            <li class="dropdown"><a href="{{URL::to('/trang-chu')}}">Trang chủ</li>

                                            <li class="dropdown ">


                                                <a href="#">Giới thiệu
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>


                                                    <div class="dropdown-menu">
                                                     {{--    @foreach($danhmuc_SP as $key=>$danhmuc) --}}
                                                    <ul>

                                                        <li><a href="{{URL::to('/gioi-thieu-chung')}}">Giới thiệu chung</a></li>
                                                        <li><a href="{{URL::to('/so-do-to-chuc')}}">Tổ chức bộ máy</a></li>
                                                        <li><a href="{{URL::to('quyet-dinh-thanh-lap')}}">Quyết định thành lập</a></li>
                                                        <li><a href="{{URL::to('dieu-le')}}">Điều lệ</a></li>


                                                    </ul>
                                                    {{--  @endforeach --}}
                                                </div>


                                            </li>
                                            <li class="dropdown blog-fullwidth"><a href="{{URL::to('diem-tin')}}">Điểm tin</a>
                                                <div class="dropdown-menu level2 header blog">

                                                </div>

                                            </li>

                                             <li class="dropdown"><a href="{{URL::to('van-ban')}}">Văn bản </a>

                                            </li>

                                            {{-- <li class="dropdown"><a href="{{URL::to('phap-luat')}}">Pháp luật</a>
                                            </li> --}}

                                            <li class="dropdown ">


                                                <a href="#">Hội viên
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>


                                                    <div class="dropdown-menu">
                                                     {{--    @foreach($danhmuc_SP as $key=>$danhmuc) --}}
                                                    <ul>

                                                        <li><a href="{{URL::to('/danh-sach-hoi-vien')}}">Danh sách hội viên</a></li>
                                                        <li><a href="{{URL::to('/danh-sach-vpcc')}}">Danh sách VPCC</a></li>
                                                        <li><a href="{{URL::to('bieu-mau-ccv')}}">Biểu mẫu CCV</a></li>


                                                    </ul>
                                                    {{--  @endforeach --}}
                                                </div>


                                            </li>

                                            <li class="dropdown"><a href="{{URL::to('/thu-vien')}}">Thư viện </a>

                                            </li>

                                            <li class="dropdown"><a href="{{URL::to('lien-he')}}">Liên Hệ</a>

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-2 col-7 icon-menu-sm">

                                    <div class="header-block search-block popup-over pull-right">
                                        <div data-toggle="dropdown" class="popup-title"><a href="#" title="Search">
                                            <i class="flaticon-search" style="color: #1e551e"></i></a></div>
                                        <div class="popup-content">
                                            <form {{-- id="searchbox" --}} action="{{URL::to('/tim-kiem')}}"
                                                 method="post">
                                                 {{csrf_field()}}
                                                <div class="input-group"><input class="search-query form-control"
                                                        type="text" name="tu_timkiem" placeholder="Nhập từ tìm kiếm" value=""
                                                        autocomplete="off">
                                                    <div class="input-group-btn">
                                                        <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e">Search</button>
                                                    </div>



                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header-block menu-block d-lg-none popup-over pull-right">
                                        <div data-toggle="dropdown" class="popup-title"><a href="#" title="user">
                                            <i class="fa fa-bars btn-menu"></i>
                                        </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <main>


        @yield('content')

        </main>
        <footer>
            <div class="footer">

                <div class="newsletter" style="background-color: #1e551e">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <div class="title clearfix">
                                    <div class=" page-title color">
                                        <div class="title-icon text-left">
                                            <h2 class="title-h2"
                                            style="width: 35rem;
                                                font-family: auto;
                                                color: white;"
                                            >Hội công chứng viên Cần Thơ</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer-bottom pd-top-bottom">
                    <div class="container full-mobile">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 mg-bottom-30">
                                <div class="item contact-us">
                                    <div class="item-content">
                                        <div class="sub-title">
                                            <h4 class="title-black">Liên hệ</h4>
                                        </div>
                                    </div>
                                    <div class="content">

                                        <ul>
                                            <li class="d-flex bg-icon"><span><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i></span><span> Số 1A Trần Khánh Dư, Xuân Khánh, Ninh Kiều, Cần Thơ .</span>
                                            </li>
                                            <li class="d-flex bg-icon"><span><i class="fa fa-phone"
                                                        aria-hidden="true"></i></span><span>02923.832.213</span>
                                            </li>
                                            <li class="d-flex bg-icon"><span><i class="fa fa-paper-plane-o"
                                                        aria-hidden="true"></i></span><span>hoicongchungct@gmail.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 mg-bottom-30" style="margin-left: 4rem">
                                <div class="item contact-us">
                                    <div class="item-content">
                                        <div class="sub-title">
                                            <h4 class="title-black">Đăng ký nhận tin</h4>

                                        </div>
                                    <form method="post" action="{{URL::to('/dang-ky-nhan-tin')}}" class="new-review-form" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                        <div class="input-group">
                                            <input class="search-query form-control"
                                                        type="text" name="EMAIL_KHACH" placeholder="Email" autocomplete="off">
                                                <div class="input-group-btn">
                                                    <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e">Đăng ký</button>
                                                </div>

                                        </div>
                                    </form>
                                    </div>

                                </div>
                            </div>`

                            <div class="col-lg-3 col-md-6 col-sm-6 mg-bottom-30" style="margin-left: 4rem">
                                <div class="item contact-us">
                                    <div class="item-content">
                                        <div class="sub-title">
                                            <h4 class="title-black">Liên kết hữu ích</h4>

                                        </div>
                                    <form method="post" action="{{URL::to('/dang-ky-nhan-tin')}}" class="new-review-form" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                        <div class="input-group">
                                                 <select class="form-control " id="lien-ket" style="color: #8b8b99" >
                                                        <option value="" style="color: #8b8b99"  >-- Liên kết hữu ích --</option>
                                                        @foreach($lienket as $key=>$lk)

                                                        <option value="{{$lk->LINK_LKWEB}}">

                                                            {{$lk->TEN_LKWEB}}

                                                        </option>

                                                        @endforeach


                                                 </select>


                                        </div>
                                    </form>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </div><!-- Back-To-Top Button -->
    <div class="back-to-top"><a href="#"><i class="fa fa-long-arrow-up"></i></a></div><!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div><!-- Libs JS -->
    <script src="{{asset('public/frontend/libs/jquery/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/owl.carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('public/frontend/libs/boostrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/boostrap/js/popper.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
    <script src="{{asset('public/frontend/libs/jquery.elevatezoom/jquery.elevatezoom.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/tmpl.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/jquery.dependClass-0.1.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/draggable-0.1.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/jquery.slider.js')}}"></script>
    <script src="{{asset('public/frontend/libs/masonry/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/jquery.countdown/jquery.countdown.js')}}"></script>
    <script src='{{asset('public/frontend/libs/imagesloaded/imagesloaded.pkgd.js')}}'></script><!-- Template JS -->
    <script src="{{asset('public/frontend/js/custom.js')}}"></script>

      <script src="{{asset('public/backend/js/jquery.form-validator.min.js')}}"></script>

   {{--  <script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
      <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
      <script src="{{asset('public/frontend/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('public/frontend/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('public/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('public/frontend/js/custom.js')}}"></script> --}}

    <!-- sweetalert   -->
   {{--  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>

    {{-- toastr  --}}
     <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
     {!! Toastr::message() !!}


 @include('sweetalert::alert')

 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <script>
    $(function(){
      // bind change event to select
      $('#lien-ket').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
</script>




</body>

</html>
