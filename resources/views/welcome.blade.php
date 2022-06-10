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


                                                <a href="#">Giới thiệu <i
                                                        class="fa fa-angle-down d-xs-none"></i></a>


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
                                                   {{--  @foreach($danhmuc_BaiViet as $key=>$danhmuc_baiviet)
                                                    <ul>

                                                        <li><a href="{{URL::to('danh-muc-bai-viet/'.$danhmuc_baiviet->id_DanhMucBaiViet)}}">{{$danhmuc_baiviet->TenDanhMucBaiViet}}</a></li>


                                                    </ul>
                                                     @endforeach --}}
                                                </div>

                                            </li>

                                             <li class="dropdown"><a href="#">Văn bản </a>

                                            </li>




                                            <li class="dropdown"><a href="#">Pháp luật</a>
                                               {{--  <div class="dropdown-menu">
                                                    <ul>
                                                        <?php
                                                        $id_KH = Session::get('id_KH');
                                                        if($id_KH != NULL){


                                                        ?>
                                                         <li><a href="{{URL::to('/xem-danh-sach-don-hang')}}">Lịch sử mua hàng</a></li>

                                                          <li><a href="{{URL::to('/tai-khoan-cua-toi')}}">Tài khoản của bạn</a></li>

                                                         <li><a href="{{URL::to('/logout')}}">Đăng xuất</a></li>





                                                        <?php
                                                        }else{
                                                        ?>

                                                        <li><a href="{{URL::to('/login')}}">Đăng nhập</a></li>
                                                        <li><a href="{{URL::to('/dang-ky')}}">Đăng ký</a></li>

                                                        <?php
                                                        }
                                                        ?>


                                                    </ul>
                                                </div> --}}
                                            </li>

                                            <li class="dropdown"><a href="{{URL::to('Lien-he')}}">Hội viên</a>

                                            </li>

                                            <li class="dropdown"><a href="{{URL::to('Lien-he')}}">Thư viện </a>

                                            </li>

                                            <li class="dropdown"><a href="{{URL::to('lien-he')}}">Liên Hệ</a>

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-2 col-7 icon-menu-sm">
                                <div class="hearder-icon home clearfix">
                                    <div class="header-block user-block index-bars popup-over pull-right">
                                        <div {{-- data-toggle="dropdown" --}} class="popup-title">
                                            <a href="{{URL::to('/login')}}" >
                                                <span
                                                    class="open-menu d-none d-lg-block menu-desktop"> </span>
                                                    <i class="fa fa-ellipsis-v open-menu d-lg-none"
                                                    aria-hidden="true" ></i>
                                                </a>

                                        </div>
                                    </div>

                                    <div class="header-block search-block popup-over pull-right">
                                        <div data-toggle="dropdown" class="popup-title"><a href="#" title="Search">
                                            <i class="flaticon-search" style="color: #915e09"></i></a></div>
                                        <div class="popup-content">
                                            <form {{-- id="searchbox" --}} action="{{URL::to('/tim-kiem-san-pham')}}"
                                                 method="post">
                                                 {{csrf_field()}}
                                                <div class="input-group"><input class="search-query form-control"
                                                        type="text" name="tu_timkiem" placeholder="Seach" value=""
                                                        autocomplete="off">
                                                    <div class="input-group-btn">
                                                        <button type="submit" name="submit_search" class="btn button btn-default float-right">Search</button>
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

                <div class="newsletter" style="background-color: #9a8663">

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
                           {{--  <div class="col-lg-7 col-md-12">
                                <form action="#" method="post">
                                    <div class="item">
                                        <div class="input"><input type="email" name="EMAIL" placeholder="Your Email"
                                                required></div>
                                        <div class="submit"><button type="submit"
                                                class="btn-submit btn button-main">Subscribe</button></div>
                                    </div>
                                </form>
                            </div> --}}
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
                                                        aria-hidden="true"></i></span><span> Đường 3/2, Phường Xuân Khánh, Quận Ninh Kiều, TP.Cần Thơ</span>
                                            </li>
                                            <li class="d-flex bg-icon"><span><i class="fa fa-phone"
                                                        aria-hidden="true"></i></span><span>073 246 2322</span>
                                            </li>
                                            <li class="d-flex bg-icon"><span><i class="fa fa-paper-plane-o"
                                                        aria-hidden="true"></i></span><span>MarketOnline@gmail.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 mg-bottom-30">
                                <div class="item">
                                    <div class="item-content">
                                        <div class="sub-title">
                                            <h4 class="title-black">Sản phẩm</h4>
                                        </div>
                                    </div>
                                    <div class="content">

                                    {{-- @foreach($danhmuc_SP as $key=>$danhmuc)
                                        <ul>
                                              <li><a href="{{URL::to('danh-muc-san-pham/'.$danhmuc->id_DanhMuc)}}">{{$danhmuc->TenDanhMuc}}</a>
                                              </li>
                                        </ul>

                                    @endforeach --}}

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 mg-bottom-30">
                                <div class="item">
                                    <div class="item-content">
                                        <div class="sub-title">
                                            <h4 class="title-black">Danh mục</h4>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li class="m-bottom-0">
                                                <a href="{{URL::to('/trang-chu')}}" title="Terms & Conditions">Trang chủ</a>
                                            </li>
                                            <li class="m-bottom-0">
                                                <a href="{{URL::to('/cua-hang')}}" title="Return Policy">Giới thiệu</a>
                                            </li>
                                            <li class="m-bottom-0">
                                                <a href="{{URL::to('/Blog')}}" title="Refund Policy">Blog</a>
                                            </li>
                                            <li class="m-bottom-0">
                                                <a href="{{URL::to('Lien-he')}}" title="Refund Policy">Liên hệ</a>
                                            </li>
                                            <li class="m-bottom-0">
                                                <a href="#" title="Refund Policy">Tài khoản</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="about-layout">
                                    <div class="group">
                                        <div class="group-inner  text-center">
                                            <div class="about-logo"><a href="#" title=""><img class="img-fluid"
                                                        src="img/logo.png" alt></a></div>
                                            <div class="about-content">
                                                <p>Cảm ơn quý khách đã ghé cửa hàng của chúng tôi. Cửa hàng chúng tôi luôn cung cấp những sản phẩm tươi ngon, đảm bảo an toàn thực phẩm.</p>
                                            </div>
                                           {{--  <div class="widget-social">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="social-facebook"><a class="gsf-link" title="Facebook"
                                                            href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="social-twitter"><a class="gsf-link" title="Twitter"
                                                            href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li class="social-google-plus"><a class="gsf-link" title="Google+"
                                                            href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li class="social-instagram"><a class="gsf-link" title="Instagram"
                                                            href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li class="social-pinterest"><a class="gsf-link" title="Pinterest"
                                                            href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="footer-copyright text-center">
                    <div class="container">
                        <div class="content"> Copyright © 2019 <span>OARS ORGANIC.</span>All Rights <a
                                href="http://www.bootstrapmb.com/">Reserved</a>. Design by <span
                                class="tranform-none">TivaTheme</span></div>
                    </div>
                </div> --}}
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









 {{--  <script type="text/javascript">
        $(document).ready(function(){

            // show so luong gio hang
            show_cart();
            function show_cart(){
                $.ajax({
                     url:'{{url('/show-so-luong-gio-hang')}}',
                     method:"GET",

                     success:function(data){
                        $('#show-cart').html(data);
                     }

                });

            }


            // them vao gio hang
             $('.add-to-cart').click(function(){
               // Swal.fire('Any fool can use a computer')
               const Toast = Swal.mixin({
                      toast: true,

                      showConfirmButton: false,
                      timer: 30000,
                      timerProgressBar: true,
                      didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                    })

                    Toast.fire({
                      icon: 'success',
                      title: 'Đã thêm vào giỏ hàng'
                    })



        });
    });
    </script>


    <script type="text/javascript">
        function Huydonhang(id){
            var id_HD=id;
            var LyDoHuyDon = $('.lydohuydon').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:'{{url('/huy-don-hang')}}',
                method: "POST",
                data:{_token:_token,  id_HD:id_HD, LyDoHuyDon:LyDoHuyDon},
                success:function(data){
                    alert("huy don hang thanh cong");
                    location.reload();
                }


            });
        }
    </script> --}}




    {{-- <script type="text/javascript">
        $.validate({

        });
    </script> --}}



</body>

</html>