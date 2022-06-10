@extends('welcome')
@section('content')


<div class="checkout">
 <div class="all">
<div class="check-out-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <article class="page">
                                <div class="row login-coupon-block " style="width: 120rem">
                                    <div class="col-md-6 login-block">
                                        <div class="checkout-info text-center">Khách hàng vui lòng <a href="#" class="showlogin show-active">đăng ký </a>hoặc <a href="#" class="showlogin show-active">đăng nhập </a>để dễ dàng thanh toán và xem lại lịch sử mua hàng
                                        </div>

                                    </div>

                                </div>
                                <form name="checkout" method="post" class="form-checkout"
                                    action="{{URL::to('/dat-hang')}}" enctype="multipart/form-data" novalidate="novalidate">
                                    {{csrf_field()}}
                                    <div class="row checkout-form">

                                        <div class="col-md-6 col-sm-12">
                                            <div class="billing-fields">
                                                <h3 class="title-black">Vui lòng điền thông tin nhận hàng</h3>
                                                <div class="form-input">

                                                    <div class="form-row">
                                                        <p>Họ và tên&nbsp; <abbr class="required" title="required">*</abbr></p>
                                                        <span class="input-wrapper w-100"><input type="text" class="input-text spr-form-input" name="TenDatHang"></span>
                                                    </div>

                                                    <div class="form-row">
                                                        <p>Số điện thoại&nbsp; <abbr class="required" title="required">*</abbr></p>
                                                        <span class="input-wrapper w-100"><input type="text" class="input-text spr-form-input" name="SoDienThoai_DH"></span>
                                                    </div>

                                                    <div class="form-row">
                                                        <p>Email&nbsp; <abbr class="required" title="required">*</abbr></p>
                                                        <span class="input-wrapper w-100"><input type="text" class="input-text spr-form-input" name="Email_DH"></span>
                                                    </div>

                                                    <div class="form-row">
                                                        <p>Địa chỉ&nbsp; <abbr class="required" title="required">*</abbr></p>
                                                        <span class="input-wrapper w-100"><input type="text" class="input-text spr-form-input" name="DiaChi_DH"></span>
                                                    </div>

                                                    <div class="form-row">
                                                        <p>Lưu ý người bán :</p><span class="input-wrapper w-100"><textarea class="w-100" cols="30" rows="5" name="GhiChu_DH"
                                                            placeholder="Nhập lưu ý gửi đến người bán"></textarea></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-box">
                                        <label class="check">
                                            <input type="checkbox"><span class="checkmark"></span>
                                        </label><span>Create an account</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="order-review">
                                                <h3 class="order-heading title-black">Thông tin đơn hàng</h3>
                                                <?php $content= Cart::content(); ?>
                                                <div class="cart-collaterals">
                                                    <div class="cart-totals table-responsive clearfix">
                                                        <table class="shop-table">
                                                            <tbody>
                                                                @foreach($content as $thanhtoan)
                                                                {{-- <tr class="cart-subtotal cart-items">
                                                                    <td><a class="name-product" href="product-detail.html">Mã đơn hàng</a><strong class="product-quantity"></strong>
                                                                    </td>
                                                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount no-bold"><span>$</span>177.00</span>
                                                                    </td>
                                                                </tr> --}}

                                                                 <tr class="cart-subtotal cart-items">
                                                                    <td><a class="name-product" href="product-detail.html">Tên sản phẩm</a><strong class="product-quantity"></strong></td>
                                                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount no-bold"><span></span> {{$thanhtoan->name}}</span>
                                                                    </td>
                                                                </tr>

                                                                <tr class="cart-subtotal cart-items">
                                                                    <td><a class="name-product" href="product-detail.html">Số lượng</a><strong class="product-quantity">x
                                                                        {{$thanhtoan->qty}}</strong>
                                                                    </td>
                                                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount no-bold"><span></span>
                                                                    {{Cart::subtotal(0).' '.'vnđ'}}</span>
                                                                    </td>
                                                                </tr>

                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>

                                                                <tr class="cart-subtotal cart-item">
                                                                    <th>Phí vận chuyển</th>
                                                                    <td class="subtotal">
                                                                        {{-- <div class="check-box">
                                                                            <label class="check">
                                                                                <input type="checkbox"><span class="checkmark"></span>
                                                                            </label><a href="#"><span>Free Shipping</span></a>
                                                                        </div> --}}
                                                                        <div class="check-box">
                                                                            <label class="check">
                                                                                <input type="checkbox" checked><span class="checkmark"></span>
                                                                            </label><a href="#"><span>Free Shipping</span></a>
                                                                        </div>
                                                                        {{-- <div class="check-box">
                                                                            <label class="check">
                                                                                <input type="checkbox"><span class="checkmark"></span>
                                                                            </label><a href="#"><span>Flat Rate</span></a>
                                                                        </div> --}}
                                                                    </td>
                                                                </tr>
                                                                <tr class="order-total">
                                                                    <th>Tổng đơn hàng</th>
                                                                    <td data-title="Total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{Cart::subtotal(0).' '.'vnđ'}}</span>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="checkout-payment">
                                                    {{-- <div class="payment-methods">
                                                        <div class="col-md-12 payment-method-bacs">
                                                            <div class="col-md-12 check-box payment">
                                                                <label class="check">
                                                                    <input type="checkbox" checked><span class="checkmark"></span>
                                                                </label><a href="#"><span class="title-black">Cheque Payment</span></a>
                                                            </div>
                                                            <div class="payment-box">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 payment-method-bacs">
                                                            <div class="col-md-12 check-box payment">
                                                                <label class="check">
                                                                    <input type="checkbox"><span class="checkmark"></span>
                                                                </label><a href="#"><span class="title-black">Direct bank transfer</span></a>
                                                            </div>
                                                            <div class="payment-box">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 payment-method-bacs">
                                                            <div class="col-md-12 check-box payment">
                                                                <label class="check">
                                                                    <input type="checkbox"><span class="checkmark"></span>
                                                                </label><a href="#"><span class="title-black">Cash On Delivery</span></a>
                                                            </div>
                                                            <div class="payment-box">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 payment-method-bacs">
                                                            <div class="col-md-12 check-box payment">
                                                                <label class="check">
                                                                    <input type="checkbox"><span class="checkmark"></span>
                                                                </label><a href="#"><span class="title-black">Paypal</span></a>
                                                            </div>
                                                            <div class="payment-box">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </div>
                                                    </div> --}}
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
