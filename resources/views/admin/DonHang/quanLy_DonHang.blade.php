@extends('Admin_index')
@section('ad_content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800" style="margin-left: 30rem; font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Danh Sách Đơn Hàng</h1>

        </div>

        <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table {{-- class="table table-bordered" --}} class="table table-striped" id="dataTable" width="100%" cellspacing="0">

                                   {{-- <?php
                                      $message = Session::get('message');
                                       if($message){
                                          echo '<span style="color:red; font-style: italic;}">'.$message.'<p></p></span>';
                                          Session::put('message',null);
                                        }

                                   ?> --}}

                                    <thead>
                                        <tr style="color: #4e73df; text-align: center">
                                            <th>STT</th>
                                            <th>Tên khách hàng</th>
                                            <th>Tổng đơn hàng</th>
                                            <th>Ngày đặt hàng</th>
                                            <th>Tình trạng</th>
                                            <th>Chứa năng</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr style="color: #4e73df; text-align: center">
                                            <th>STT</th>
                                            <th>Tên khách hàng</th>
                                            <th>Tổng đơn hàng</th>
                                            <th>Ngày đặt hàng</th>
                                            <th>Tình trạng</th>
                                            <th>Chứa năng</th>
                                    </tfoot>
                                    <tbody style="text-align: center; color: black">
                                      <!-- hamf lay du lieu  -->


                                      @php
                                        $i=0;

                                      @endphp


                                      @foreach($lietke_DonHang as $key=>$donHang)
                                       @php
                                        $i++;


                                      @endphp

                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$donHang->HoTenKH}}</td>
                                            <td>{{$donHang->TongHoaDon}} vnđ</td>
                                            <td>{{$donHang->created_at}}</td>
                                            {{-- <td>{{$donHang->TrangThaiHoaDon}}</td> --}}
                                            <td>
                                                @if($donHang->TrangThaiHoaDon == 1)
                                                   <span style= "color: chocolate;font-weight: 700;">Đơn hàng mới</span>

                                                @elseif($donHang->TrangThaiHoaDon == 2)
                                                     Đã giao hàng
                                                @elseif($donHang->TrangThaiHoaDon == 3)
                                                    Đơn hàng đã bị hủy

                                                @elseif($donHang->TrangThaiHoaDon == 4)
                                                    Đã xác nhận


                                                @endif


                                            </td>


                                     <!--       <td></td>     -->
                                            <td style="text-align: center;">
                                              <a  href="{{URL::to('/admin-xem-DonHang/'.$donHang->id_HD)}}" >
                                                <i class="fa fa-eye"></i> &emsp;  </a>

                                             <a onclick="return confirm('Bạn có muốn xóa đơn hàng này không?')"

                                              <a href="{{URL::to('/admin-xoa-DonHang/'.$donHang->id_HD)}}" >
                                                  <i class="fas fa-trash" style="color: red"></i>  </a>

                                            </td>
                                        </tr>




                                      @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div style="margin-left: auto;">

                         {{ $lietke_DonHang->links("pagination::bootstrap-4") }}


                        </div>
        </div>


@endsection
