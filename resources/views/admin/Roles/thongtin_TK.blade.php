@extends('Admin_index')
@section('ad_content')



          <?php
                $message = Session::get('message');
                 if($message){
                    echo '<span style="color:red; font-style: italic;}">'.$message.'<p></p></span>';
                    Session::put('message',null);
                  }

          ?>

            <div class="card shadow mb-4" style=" margin: 4rem;width: 55rem; margin-left: 12rem">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800" style="margin: 3rem;margin-left: 20rem">Hồ Sơ Của Bạn </h1>

                </div>

                <div class="card-body">


                    <label style="color: #4e73df; margin-left: 20rem;">Mã nhân viên: &emsp;&emsp;</label>
                        {{Auth::user()->id_AD}} <br>
                     <label style="color: #4e73df; margin-left: 20rem;">Tên nhân viên: &emsp;&emsp;</label>
                        {{Auth::user()->HoTenAD}}<br>
                    <label style="color: #4e73df; margin-left: 20rem;">Email: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>{{Auth::user()->Email}}<br>
                    <label style="color: #4e73df;  margin-left: 20rem;">Số điện thoại : &emsp;&emsp;</label>
                        {{Auth::user()->SoDT}}<br>
                    <label style="color: #4e73df; margin-left: 20rem;">Địa chỉ: &emsp;&emsp;&emsp;&emsp;&emsp;</label>
                        {{Auth::user()->DiaChi}}<br>

                    <label style="color: #4e73df; margin-left: 20rem;">Chức vụ: &emsp;&emsp;&emsp;&emsp;&emsp;</label>
                        @if(Auth::user()->hasRole('Quản trị viên'))

                            Quản trị viên
                        @else
                            Nhân viên

                        @endif

                </div>

                {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                   <h3 class="h3 mb-0 text-gray-800">

                   <p><a href="{{url('/admin-sua-taikhoan/'.Auth::user()->id_AD)}}" class="btn view button-main" style="background: #4e73df;color: white; font-weight: 600;margin-left: 20rem">Cập nhật thông tin</a></p>
                    </h3>

                </div> --}}


        </div>


@endsection
