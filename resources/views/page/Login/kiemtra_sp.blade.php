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
                    <li><span style="font-family: 'FontAwesome';">Thanh Toán</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="checkout">
 <div class="all">
<div class="check-out-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <article class="page">
                        <div class="row login-coupon-block " style="width: 120rem">
                            <div class="col-md-6 login-block">
                                <div class="checkout-info text-center">Khách hàng vui lòng <a href="{{URL::to('/login')}}"  style="color: #91ad41">đăng ký </a>hoặc <a href="{{URL::to('/login')}}"
                                    style="color: #91ad41">đăng nhập </a>để dễ dàng thanh toán và xem lại lịch sử mua hàng
                                </div>

                            </div>

                        </div>
                        <form name="checkout" method="post" class="form-checkout"
                            action="{{URL::to('/dat-hang')}}" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="row checkout-form" style="float: left; width: 40rem;" >

                                <div {{-- class="col-md-6 col-sm-12" --}} class="col-md-7 col-sm-12 m-b-50">

                                    <div class="page-title color m-bottom-2">
                                        <h3 class="title-main">About Us</h3>
                                        <div class="title title-icon" >
                                            <h2 class="title-h2" style="background-position: left bottom; width: 25rem;">Thông tin thanh toán</h2>

                                        </div>
                                    </div>

                                    <div class="billing-fields">
                                        <h3 class="title-black">Vui lòng điền thông tin nhận hàng</h3>
                                        <div class="form-input" style=" width: 30rem;">

                                            {{--   <input type="hidden" name="create_at"> --}}

                                            <div class="form-row">
                                                <p>Họ và tên&nbsp; <abbr class="required" title="required">*</abbr></p>
                                                <span class="input-wrapper w-100"><input type="text"
                                                    required="required" style=" font-size: 1rem; width: 100%" class="input-text spr-form-input" name="TenDatHang">
                                                </span>
                                            </div>

                                            <div class="form-row">
                                               <p>Số điện thoại&nbsp; <abbr class="required" title="required">*</abbr></p>
                                               <span class="input-wrapper w-100">
                                                <input type="number"  required="required" style=" font-size: 1rem; width: 100%" class="input-text spr-form-input" name="SoDienThoai_DH">
                                                </span>
                                            </div>

                                            <div class="form-row">
                                                <p>Email&nbsp; <abbr class="required" title="required">*</abbr></p>
                                                <span class="input-wrapper w-100"><input type="email" required="required" style=" font-size: 1rem; width: 100%" class="input-text spr-form-input" name="Email_DH"></span>
                                            </div>

                                            <div class="form-row">
                                                <p>Địa chỉ&nbsp; <abbr class="required" title="required">*</abbr></p>
                                                <span class="input-wrapper w-100"><input type="text" required="required" style=" font-size: 1rem; width: 100%" class="input-text spr-form-input" name="DiaChi_DH"></span>
                                            </div>

                                            <div class="form-row">
                                                <p>Lưu ý người bán :</p><span class="input-wrapper w-100"><textarea class="w-100" cols="30" rows="5" name="GhiChu_DH"
                                                    placeholder="Nhập lưu ý gửi đến người bán"></textarea></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="check-box">
                                <label class="check">
                                    <input type="checkbox"><span class="checkmark"></span>
                                </label><span>Create an account</span>
                            </div> --}}
                            <div class="row">
                                <div class="col-sm-12" >
                                    <div {{-- class="order-review" --}}  class="col-md-5 col-sm-12">

                                        <div class="page-title color m-bottom-2" style="margin-top: 3rem;">
                                            <h3 class="title-main">Contact Form</h3>
                                            <div class="title title-icon">
                                                <h2 class="title-h2" style="background-position: left bottom;
                                                     width: 25rem;"><span style="width: 25rem">Đơn hàng của bạn</span></h2>

                                            </div>
                                        </div>


                                        <h3 class="order-heading title-black">Thông tin đơn hàng</h3>
                                        <?php $content= Cart::content(); ?>
                                        <div class="cart-collaterals">
                                            <div class="cart-totals table-responsive clearfix" style="width: 25rem">
                                                <table class="shop-table" style="line-height: 2rem;">
                                                    <tbody>
                                                        @foreach($content as $thanhtoan)


                                                         <tr class="cart-subtotal cart-items">
                                                            <td><span  class="name-product" style="font-weight: 500; color: black">Tên sản phẩm</span><strong class="product-quantity"></strong></td>
                                                            <td data-title="Subtotal">
                                                                <span class="woocommerce-Price-amount amount no-bold"
                                                                style="margin-left: 1rem"><span></span>
                                                                {{$thanhtoan->name}}</span>
                                                            </td>
                                                        </tr>

                                                        <tr class="cart-subtotal cart-items">

                                                            <td><span  class="name-product" style="font-weight: 500; color: black"> Số lượng </span><strong class="product-quantity" >x{{$thanhtoan->qty}}</strong>
                                                            </td>
                                                            <td data-title="Subtotal"><span class="woocommerce-Price-amount amount no-bold" style="margin-left: 1rem"><span></span>
                                                            {{-- {{Cart::subtotal(0).' '.'vnđ'}} --}}

                                                           <?php
                                                                $subtotal = $thanhtoan->price * $thanhtoan->qty;
                                                                echo number_format($subtotal).' '.'vnđ';
                                                            ?>
                                                        </span>
                                                            </td>
                                                        </tr>

                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>

                                                        <tr class="cart-subtotal cart-item">
                                                            <th>Phí vận chuyển</th>
                                                            <td class="subtotal">

                                                                <div class="check-box">
                                                                    <div class="check-box">
                                                                    <span style="margin-left: 1rem">Free Shipping</span>
                                                                </div>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Tổng đơn hàng</th>
                                                            <td data-title="Total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol" style="margin-left: 1rem"></span>{{Cart::subtotal(0).' '.'vnđ'}}</span>
                                                            </td>
                                                        </tr>


                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="checkout-payment" style="width: 28rem">
                                             <span
                                             style="font-weight: 600;color: #27272f;text-transform: uppercase;">Phương thức thanh toán</span>

                                            <div class="payment-methods" style="width: 25rem; margin: 20px 0" data-validation="required"   data-validation-error-msg="Vui lòng nhập email" style=" font-size: 1rem; width: 100%">

                                           {{--  <form method="post" action="{{URL::to('phuong-thuc-thanh toan')}}"
                                                enctype="multipart/form-data">
                                                {{csrf_field()}} --}}



                                                 <div class="col-md-12 payment-method-bacs">
                                                    <div class="col-md-12 check-box payment">
                                                        <label class="check">
                                                            <input type="checkbox" checked name="PhuongThucThanhToan"
                                                            value="Thanh toán khi nhận hàng" ><span class="checkmark"></span>
                                                        </label><a href="#"><span class="title-black">Thanh toán khi nhận hàng</span></a>
                                                    </div>
                                                    <div class="payment-box">
                                                        <p>Thanh toán khi giao hàng</p>
                                                    </div>
                                                </div>
                                                 <div class="col-md-12 payment-method-bacs">
                                                    <div class="col-md-12 check-box payment">
                                                        <label class="check">
                                                            <input type="checkbox"  name="PhuongThucThanhToan"
                                                             value="Chuyển khoản ngân hàng"><span class="checkmark"></span>
                                                        </label><a href="#"><span class="title-black">Chuyển khoản ngân hàng</span></a>

                                                    </div>
                                                    <div class="payment-box">
                                                        <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Đơn hàng sẽ đươc giao sau khi tiền đã chuyển</p>
                                                    </div>
                                                </div>

                                            {{-- </form> --}}

                                             </div>


                                            <div class="form-row place-order">
                                                <button type="submit" class="button alt w-100" name="dathang">Đặt hàng</button>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection
