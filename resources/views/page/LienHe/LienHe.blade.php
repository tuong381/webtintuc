
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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: #ffff00">Liên hệ</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

 <?php
      $message = Session::get('message');
       if($message){
          echo '<span class="text-alert">'.$message.'</span>';
          Session::put('message',null);
        }

   ?>

<div class="section about">
        <div class="container">

            <div class="section main-contact-us">
                <div class="section container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 m-b-30">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.858228303052!2d105.76883821474253!3d10.028555792831622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a088239f6f03f9%3A0x2862ae96b70e4905!2zxJAuIDMvMiwgWHXDom4gS2jDoW5oLCBOaW5oIEtp4buBdSwgQ-G6p24gVGjGoSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1637414215062!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-md-5 col-sm-12">

                           {{--  @if (session('success'))
                                <div class="alert alert-success">
                                      <p>{{ session('success') }}</p>
                                </div>
                            @endif --}}

                            <div class="page-title color m-bottom-2">
                                <div class="title title-icon">
                                     <h2 style="background-repeat: no-repeat;
                                    background-position: center bottom;
                                    background-size: auto;
                                    padding-bottom: 30px;
                                    margin-bottom: 0;
                                    color: #b36b00;
                                    font-weight: 600;
                                    font-size: 30px;
                                    font-family: UTM-COPPERPLATE;
                                     ">LIÊN HỆ </h2>
                                </div>
                            </div>

                            <div class="header-contact" style="color: black">

                                <div class="col padding-0">
                                    <div class="item d-flex">
                                        {{-- <div class="item-left">
                                            <div class="icon"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>
                                            </div>
                                        </div> --}}
                                        <div class="contact-content">

                                            <p style=" font-size: 20px; font-family: 'Flaticon';"> Địa chỉ:
                                               Số 1A Trần Khánh Dư, Xuân Khánh, Ninh Kiều, Cần Thơ .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col padding-0">
                                    <div class="item d-flex">
                                        {{-- <div class="item-left">
                                            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>

                                            </div>
                                        </div> --}}
                                        <div class="item-right">
                                            <p style=" font-size: 20px; font-family: 'Flaticon';">
                                               Số điện thoại: 02923.832.213</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col padding-0">
                                    <div class="item d-flex last">
                                       {{--  <div class="item-left">
                                            <div class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                                            </div>
                                        </div> --}}
                                        <div class="item-right">
                                            <p style=" font-size: 20px; font-family: 'Flaticon';">
                                               Email: hoicongchungct@gmail.com</p>

                                            <p style="font-size: 20px;  font-family: 'Flaticon';">- Nguyễn Thanh Đình - Chủ tịch </p>
                                            <p  style="font-size: 20px;  font-family: 'Flaticon';"> ĐT: 0913.617.187 - Email: thanhdinhcantho@gmail.com</p>
                                            <p  style="font-size: 20px;  font-family: 'Flaticon';" >  - Nguyễn Thu Hà - Thư ký   </p>
                                            <p  style="font-size: 20px;  font-family: 'Flaticon';">ĐT: 0907 981 060 - Email: ha0902017686@gmail.com</p>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>


                    </div>
                </div>

            </div>





                </div>
 </div>



@endsection
