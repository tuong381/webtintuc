
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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: #10550c">Liên hệ</span></a>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8940828131103!2d105.77233731474239!3d10.025598592833598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0882448a2ce97%3A0x8293e26834af4852!2zMWEgVHLhuqduIEtow6FuaCBExrAsIFh1w6JuIEtow6FuaCwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1655392201902!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                        <div class="col-md-5 col-sm-12">



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

                                        <div class="contact-content">

                                            <p style=" font-size: 20px; font-family: 'Flaticon';"> Địa chỉ:
                                               Số 1A Trần Khánh Dư, Xuân Khánh, Ninh Kiều, Cần Thơ .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col padding-0">
                                    <div class="item d-flex">

                                        <div class="item-right">
                                            <p style=" font-size: 20px; font-family: 'Flaticon';">
                                               Số điện thoại: 02923.832.213</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col padding-0">
                                    <div class="item d-flex last">

                                        <div class="item-right">
                                            <p style=" font-size: 20px; font-family: 'Flaticon';">
                                               Email: hoicongchungct@gmail.com</p>

                                            <p style="font-size: 20px;  font-family: 'Flaticon';">- Nguyễn Thanh Đình - Chủ tịch </p>
                                            <p  style="font-size: 20px;  font-family: 'Flaticon';">&emsp; ĐT: 0913.617.187 <br>&emsp; Email: thanhdinhcantho@gmail.com</p>
                                            <p  style="font-size: 20px;  font-family: 'Flaticon';" >  - Nguyễn Thu Hà - Thư ký   </p>
                                            <p  style="font-size: 20px;  font-family: 'Flaticon';">&emsp; ĐT: 0907 981 060 <br>&emsp; Email: ha0902017686@gmail.com</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <br>

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
                                     ">Ý KIẾN ĐÓNG GÓP </h2>
                                </div>
                            </div>


                            <div id="review" style="background-color: rgba(0,0,0,0.02);
                                                    box-shadow: 1px 1px 3px 0px rgb(0 0 0 / 20%), 0 1px 0 rgb(0 0 0 / 7%), inset 0 0 0 1px rgb(0 0 0 / 5%);    padding: 2rem;">
                                <form method="post" action="{{URL::to('y-kien-dong-gop')}}" class="new-review-form" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <fieldset class="spr-form-contact">
                                        <div class="spr-form-contact-name">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Họ tên*" name="HOTEN_YKDG">
                                        </div>
                                        <div class="spr-form-contact-email">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Email*" name="EMAIL_YKDG">
                                        </div>
                                        <div class="spr-form-contact-phone">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Số điện thoại*"name="SDT_YKDG">
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="spr-form-review-body">
                                            <div class="spr-form-input">
                                                <textarea class="spr-form-input-textarea" rows="5" placeholder="Ý kiến đóng góp*" name="NOIDUNG_YKDG"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="submit" >
                                        <button class="add-to-cart" type="submit"><span class="btn view button-main" style="background-color: #b36b00">Gửi</span>
                                        </button>
                                    </div>
                                </form>
                            </div>


                        </div>


                    </div>
                </div>

            </div>





                </div>
 </div>



@endsection
