@extends('Admin_index')
@section('ad_content')


      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="margin-left: 30rem; font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Thêm Thư Viện Ảnh </h1>

         </div>


          <div class="d-sm-flex align-items-center justify-content-between mb-4" >
            <div class="h3 mb-0 text-gray-800" style="margin-left: 25rem;">

                <form action="{{url('/admin-them-anh/'.$id_SP)}}" method="post" class="templatemo-login-form" enctype="multipart/form-data">
                    @csrf


                    <div class="col-md-6" style="width: 50rem">
                        <input type="file" class="form-control" name="FileHinhAnh[]" id="file" accept="image/*" multiple style="height: 3rem;">

                        <input type="submit" name="upload" value="Tải ảnh" class="btn btn-success"
                         style="margin-left: 27rem; margin-top: -5.5rem; height: 3rem;background: #4e73df;">

                        <span id="error_image"></span>

                    </div>
{{--
                    <div class="col-md-3" >

                    <input type="submit" name="upload" value="Tải ảnh" class="btn btn-success"
                         style="margin-left: 27rem; margin-top: -5.5rem; height: 3rem;background: #4e73df;">

                    </div> --}}

                </form>
                <br>
            </div>

        </div>


          <?php
                $message = Session::get('message');
                 if($message){
                    echo '<span style="color:red; font-style: italic;}">'.$message.'<p></p></span>';
                    Session::put('message',null);
                  }

          ?>


         {{--  <div class="card shadow mb-4"> --}}
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                          <input  type="hidden" value="{{$id_SP}}" name="id_SP"  class="id_SP">

                          <form>
                            @csrf

                          <div id="image_load">




                          </div>

                          </form>
                    </div>

                </div>
            </div>
                  {{--   </div> --}}


            {{-- <form  action="{{URL::to('/luu_hinhanhSP')}}" method="post" class="templatemo-login-form"  enctype="multipart/form-data">
              {{csrf_field()}}


              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Hình ảnh &emsp;&emsp;</label>
                    <input type="file" name="file[]" accept="image/*"  data-validation="required"  data-validation-error-msg="Vui lòng chon hình ảnh sản phẩm"  style="font-size: 1rem; width: 100%"  multiple >

                   <div style="float: right; margin-top: -2rem; margin-right: 7rem;">
                        <input type="submit" name="upload" name="taianh" value="Tải ảnh"
                         style="background: #4e73df; border: 0px; color: white; font-weight: 400;height: 30px;" >
                  </div>

                  </div>
              </div>

              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label  style="color: #4e73df">Mô tả danh mục</label>
                    <input name="MoTa" data-validation="required"   data-validation-error-msg="Vui lòng điền tên sản phẩm"  style=" font-size: 1rem; width: 100%;resize: none; height: 100px;" type="text" class="form-control" id="inputUsername" placeholder="Nhập mô tả">
                </div>

              </div>


              <button type = "submit" name="them_danhmucsp" class="btn btn-primary btn-user btn-block"
                  style="width: 100px;" >Thêm</button>


            </form> --}}

@endsection


