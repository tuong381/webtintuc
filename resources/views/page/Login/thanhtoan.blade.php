
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
                    <li><span style="font-family: 'FontAwesome';">Đặt hàng thành công</span>
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

<div class="contact-us-01">
<div class="all">

 <div class="section main-contact-us">

                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 m-b-50">
                            <div class="page-title color m-bottom-2">
                                <h3 class="title-main">Market Online</h3>
                                <div class="title title-icon">
                                    <h2 class="title-h2">Chi tiết đơn hàng</h2>

                                </div>
                            </div>


                            <div class="row">
                                {{-- <?php $content= Cart::content(); ?> --}}
                                <div class="col-md-6 col-sm-12">
                                    <?php $content= Cart::content(); ?>
                                                <div class="cart-collaterals">
                                                    <div class="cart-totals table-responsive clearfix" style="width: 35rem">
                                                        <table class="shop-table" style="line-height: 3rem;">

                                                            <tbody>


                                                               @foreach($content as $thanhtoan)

                                                                 <tr class="cart-subtotal cart-items">
                                                                    <td><span  class="name-product" style="font-weight: 500; color: black">Tên sản phẩm</span><strong class="product-quantity"></strong></td>
                                                                    <td data-title="Subtotal">
                                                                        <span class="woocommerce-Price-amount amount no-bold"  style="margin-left: 8rem"><span></span> {{$thanhtoan->name}}</span>
                                                                    </td>
                                                                </tr>

                                                                <tr class="cart-subtotal cart-items">
                                                                    <td><span  class="name-product" style="font-weight: 500; color: black"> Số lượng </span><strong class="product-quantity" style="    margin-left: 3rem;">x{{$thanhtoan->qty}}</strong>
                                                                    </td>
                                                                    <td data-title="Subtotal">
                                                                        <span class="woocommerce-Price-amount amount no-bold"
                                                                        style="margin-left: 8rem"><span></span>
                                                                    <?php
                                                                        $subtotal = $thanhtoan->price * $thanhtoan->qty;
                                                                        echo number_format($subtotal).' '.'vnđ';
                                                                    ?></span>
                                                                    </td>
                                                                </tr>




                                                                @endforeach


                                                            </tbody>
                                                            <tfoot>

                                                                <tr class="cart-subtotal cart-item">
                                                                    <th>Phí vận chuyển</th>
                                                                    <td class="subtotal">

                                                                        <div class="check-box">
                                                                            <span style="margin-left: 8rem">Free Shipping</span>
                                                                        </div>

                                                                    </td>
                                                                </tr>




                                                                <tr class="order-total">
                                                                    <th>Tổng đơn hàng</th>
                                                                    <td data-title="Total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol" style="margin-left: 8rem"></span>{{Cart::subtotal(0).' '.'vnđ'}}</span>
                                                                    </td>
                                                                </tr>


                                             <?php  $content= Cart::content();
                                                Cart::destroy();

                                                ?>


                                                                <tr class="cart-actions" style=" line-height: 15rem;border-bottom: none;">
                                                                    <td colspan="3" class="back-to-shop text-left"><span><a href="{{URL::to('/cua-hang')}}" class="btn view button-main"><i class="flaticon-arrows"></i> &ensp;Trở về Cửa hàng
                                                                    </a></span>
                                                                    </td>

                                                                </tr>


                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>






                                  </div>
                            </div>


                        </div>
                        <div class="col-md-5 col-sm-12" style="background-color: rgba(0,0,0,0.02); box-shadow: 1px 1px 3px 0px rgb(0 0 0 / 20%), 0 1px 0 rgb(0 0 0 / 7%), inset 0 0 0 1px rgb(0 0 0 / 5%); height: 15rem;">
                            <div class="page-title color m-bottom-2" style="margin-top: 3rem">
                              {{--   <h3 class="title-main">Came ơn bạn . Đơn hàng của bạn được nhận</h3> --}}
                              <span style="font-size: 22px; color: #91ad41; font-family: 'Flaticon'">
                                    Cảm ơn bạn. Đơn hàng của bạn đã được nhận</span>
                                    <span style="font-size: 16px; color: #282828">Chúng tôi sẽ nhanh chóng gửi hàng cho bạn trong thời gian sớm nhất.</span>
                                    <p style="font-size: 16px;color: #282828;">Bạn có thể xem lại đơn hàng của mình tại
                                        <a href="{{URL::to('/xem-danh-sach-don-hang')}}" style="color: #91ad41"> xem lại đơn hàng</a></p>
                               {{--  <div class="title title-icon">
                                    <h2 class="title-h2">Get In Touch</h2>
                                    <p class="description">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                </div> --}}
                            </div>
                            {{-- <div id="review">
                                <form method="post" action="index.html" class="new-review-form">
                                    <fieldset class="spr-form-contact">
                                        <div class="spr-form-contact-name">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Name">
                                        </div>
                                        <div class="spr-form-contact-email">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Email">
                                        </div>
                                        <div class="spr-form-contact-phone">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Phone">
                                        </div>
                                        <div class="spr-form-contact-subject">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Subject">
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="spr-form-review-body">
                                            <div class="spr-form-input">
                                                <textarea class="spr-form-input-textarea" rows="5" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="submit">
                                        <button class="add-to-cart" type="submit"><span class="btn view button-main">Submit Now</span>
                                        </button>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>


@endsection
