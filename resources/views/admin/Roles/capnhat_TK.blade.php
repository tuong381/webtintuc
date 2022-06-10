@extends('Admin_index')
@section('ad_content')

<div class="container-fluid" style=" background: #fff;width: 55rem;  margin-top: 5rem;">

      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" style="margin: 3rem;margin-left: 18rem">Cập Nhật Nhân Viên </h1>

         </div>

          <?php
                $message = Session::get('message');
                 if($message){
                    echo '<span style="color:red; font-style: italic;}">'.$message.'<p></p></span>';
                    Session::put('message',null);
                  }

          ?>



            <form  action="{{URL::to('/admin-cap-nhat-tai-khoan-cua-toi/'.$sua_NhanVien->id_AD)}}" method="post" class="templatemo-login-form"  enctype="multipart/form-data" style="margin: 3rem;width: 55rem; margin-left: 12rem">
              {{csrf_field()}}

          {{--      <input type="hidden" name="id_AD"> --}}

              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Tên nhân viên</label>
                    <input name="HoTenAD"value="{{$sua_NhanVien->HoTenAD}}" type="text" class="form-control
                        form-control-user"  >

                  </div>
              </div>

              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Email</label>
                    <input name="Email"value="{{$sua_NhanVien->Email}}" type="Email" class="form-control
                        form-control-user"  >

                  </div>
              </div>

              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Số điện thoại</label>
                    <input name="SoDT"value="{{$sua_NhanVien->SoDT}}" type="text" class="form-control
                        form-control-user"  >

                  </div>
              </div>

              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Địa chỉ</label>
                   <input name="DiaChi"value="{{$sua_NhanVien->DiaChi}}" type="text" class="form-control
                        form-control-user"  >

                  </div>
              </div>



              <button type = "submit" name="them_baiviet" class="btn btn-primary btn-user btn-block"
                  style="width: 100px;" >Cập nhật</button>

                   <br><br><br>

            </form>

        </div>

@endsection
