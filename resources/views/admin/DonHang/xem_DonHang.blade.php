@extends('Admin_index')
@section('ad_content')

{{--  thong tin van chuyen --}}

<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800" style="margin-left: 30rem; font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Thông tin vận chuyển</h1>

 </div>

  <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr style="color: #4e73df">

                                            <th>Tên người nhận hàng</th>
                                            <th>Số điện thoại</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>Hình thức thanh toán</th>
                                             <th>Ghi chú</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                      <!-- hamf lay du lieu  -->
                                      @foreach($xem1_DonHang as $key=>$xem)

                                        <tr>
                                            <td>{{$xem->TenDatHang}}</td>
                                            <td>{{$xem->SoDienThoai_DH}}</td>
                                            <td>{{$xem->Email_DH}}</td>
                                            <td>{{$xem->DiaChi_DH}}</td>
                                            <td>{{$xem->PhuongThucThanhToan}}</td>
                                            <td>{{$xem->GhiChu_DH}}</td>


                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


{{-- chi tiet don hang --}}
<br><br><br>


<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800" style="margin-left: 30rem; font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Chi tiết đơn hàng</h1>

 </div>

  <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr style="color: #4e73df">
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng mua</th>
                                            <th>Số lượng kho</th>
                                            <th>Giá</th>
                                            <th>Thành tiền</th>
                                            {{-- <th>Tình trạng đơn hàng</th> --}}


                                        </tr>
                                    </thead>

                                    <tbody>

                                      @php
                                        $i=0;
                                         $TongHoaDon=0;
                                      @endphp
                                      <!-- hamf lay du lieu  -->
                                       @foreach($xem_DonHang as $key=>$xem)
                                        @php
                                        $i++;
                                        $sum=$xem->TongHoaDon;
                                        $TongHoaDon=$sum;
                                      @endphp

                                        <tr class="color_qty_{{$xem->id_SanPham}}">
                                            <td>{{$i}}</td>
                                            <td>{{$xem->TenSanPham}}</td>
                                            <td>
                                               {{--  <form action="{{URL::to('/admin-capnhat-soluong-DonHang')}}" method="post"
                                                     enctype="multipart/form-data">
                                                    {{csrf_field()}} --}}
                                                <input type="hidden" name="sl" class="sl_mua_{{$xem->id_SanPham}}" value="{{$xem->SoLuongMua}}" style="width: 4rem;"> <span>{{$xem->SoLuongMua}}</span>


                                                <input type="hidden" name="sl_kho" class="sl_kho_{{$xem->id_SanPham}}" value="{{$xem->SoLuong_SP}}">

                                                 <input type="hidden" name="kiemtra_idSP" class="kiemtra_idSP" value="{{$xem->id_SanPham}}">


                                               {{--  </form> --}}

                                            </td>
                                            <td>{{$xem->SoLuong_SP}}</td>
                                            <td>{{number_format($xem->Gia)}} vnđ</td>
                                            <td >{{number_format($xem->SoLuongMua* $xem->Gia)}} vnđ</td>

                                         {{--   <td>
                                                @if($xem->TrangThaiHoaDon == 1)
                                                   <span style= "color: chocolate;font-weight: 700;">Đơn hàng mới</span>

                                                 @elseif($xem->TrangThaiHoaDon == 2)
                                                     Đã xử lý
                                                @elseif($xem->TrangThaiHoaDon == 3)
                                                    Hủy đơn hàng

                                                @endif


                                            </td> --}}

                                        </tr>

                                        @endforeach

                                          <tr >
                                            <td colspan="7" style="color: #4e73df; font-weight: 800"> Tổng hóa đơn : {{$TongHoaDon}} vnđ</td>
                                        </tr>

                                        <tr >
                                        <td colspan="7" >
                                               <label style="color: #4e73df; font-weight: 800">Trạng thái đơn hàng: </label>
                                               @foreach($xem1_DonHang as $key=>$xuly)
                                                @if($xuly->TrangThaiHoaDon == 1)
                                                   <span> Đơn hàng mới</span>
                                                @elseif($xuly->TrangThaiHoaDon == 2)
                                                    Đã giao hàng
                                                @elseif($xuly->TrangThaiHoaDon == 4)
                                                    Đã xác nhận
                                                @else
                                                    Đơn hàng đã bị hủy
                                                    <br>
                                                    <label style="color: #4e73df; font-weight: 800">
                                                        Lý do :  </label>{{$xuly->LyDoHuyDon}}
                                                @endif
                                                @endforeach

                                            </td>

                                        </tr>

                                         <tr >
                                            <td colspan="7" style="color: #4e73df; font-weight: 800" >
                                               <label >Xử lý đơn hàng: </label>

                                                @foreach($xem1_DonHang as $key=>$xuly)


                                                     <form>
                                                         {{csrf_field()}}

                                                        <select class="form-control xu-ly-don-hang" style="width: 12rem; margin-left: 11rem; margin-top: -2rem">
                                                            <option ></option>
                                                            <option id="{{$xuly->id_HD}}" value="4">Đã xác nhận</option>
                                                            <option id="{{$xuly->id_HD}}" value="2">Đã giao hàng</option>
                                                            {{-- <option id="{{$xuly->id_HD}}" selected value="3">Hủy đơn hàng</option> --}}

                                                        </select>
                                                    </form>

                                                @endforeach
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div><br><br><br>


@endsection
