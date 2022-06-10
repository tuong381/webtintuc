@extends('Admin_index')
@section('ad_content')

<?php
      $message = Session::get('message');
       if($message){
          echo '<span class="text-alert">'.$message.'</span>';
          Session::put('message',null);
        }

    ?>


<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800" style="margin-left: 30rem; font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Danh Sách Nhân viên</h1>

</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h3 class="h3 mb-0 text-gray-800">

   <p><a href="{{URL::to('/admin-them-NhanVien')}}" class="btn view button-main" style="width: 80px;background: #4e73df;color: white; font-weight: 600;">Thêm</a></p>
    </h3>

</div>


        <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table {{-- class="table table-bordered" --}} class="table table-striped" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr style="color: #4e73df; text-align: center">
                                            <th>STT</th>
                                            <th>Tên nhân viên</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ</th>
                                         {{--    <th>Mật khẩu</th> --}}
                                            {{-- <th>Quản trị viên</th>
                                            <th>Admin</th> --}}
                                            <th>Chức vụ</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr style="color: #4e73df; text-align: center">
                                            <th>STT</th>
                                            <th>Tên nhân viên</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ</th>
                                         {{--    <th>Mật khẩu</th> --}}
                                            {{-- <th>Quản trị viên</th>
                                            <th>Admin</th> --}}
                                            <th>Chức vụ</th>
                                            <th>Chức năng</th>
                                    </tfoot>
                                    <tbody style="text-align: center; color: black">
                                      <!-- hamf lay du lieu  -->


                                      @php
                                        $i=0;

                                      @endphp


                                      @foreach($admin as $key=>$ad)

                                      <form action="{{url('/phan-quyen-user')}}" method="post">
                                        @csrf
                                       @php
                                        $i++;


                                      @endphp

                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$ad->HoTenAD}}</td>
                                            <td>
                                              {{$ad->Email}}
                                              <input type="hidden" name="Email" value="{{$ad->Email}}">

                                            </td>

                                            <td>{{$ad->SoDT}}</td>
                                            <td>{{$ad->DiaChi}}</td>
                                           {{--  <td>{{$ad->MatKhau}}</td> --}}

                                         {{--    <td>
                                              <input type="checkbox" name="author_role"
                                                {{$ad->hasRole('QTV') ? 'checked' : ''}}  >

                                            </td>

                                            <td>
                                              <input type="checkbox" name="author_role"
                                                {{$ad->hasRole('admin') ? 'checked' : ''}}  >

                                            </td> --}}

                                            <td>
                                               @if($ad->hasRole('Quản trị viên'))

                                                    Quản trị viên
                                                @else
                                                    Nhân viên

                                                @endif
                                            </td>

                                              <td style="text-align: center;">

                                                <a href="{{url('/admin-sua-NhanVien/'.$ad->id_AD)}}" >
                                                    <i class="fas fa-edit"></i> &emsp; </a>

                                              <a onclick="return confirm('Bạn có muốn xóa nhân viên này không?')" href="{{url('/admin-xoa-NhanVien/'.$ad->id_AD)}}" >
                                                    <i class="fas fa-trash" style="color: red" ></i>   </a>



                                            </td>

                                        </tr>



                                        </form>
                                      @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div style="margin-left: auto;">

                         {{-- {{ $lietke_DonHang->links("pagination::bootstrap-4") }} --}}


                        </div>
        </div>


@endsection
