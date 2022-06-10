@extends('Admin_index')
@section('ad_content')

<div class="container-fluid" style=" background: #fff;width: 55rem;  margin-top: 5rem;">

      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" style="margin: 3rem;margin-left: 19rem;font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Thêm Bài viết </h1>

         </div>

          <?php
                $message = Session::get('message');
                 if($message){
                    echo '<span style="color:red; font-style: italic;}">'.$message.'<p></p></span>';
                    Session::put('message',null);
                  }

          ?>

            <form  action="{{URL::to('/luu_BaiViet')}}" method="post" class="templatemo-login-form"
             enctype="multipart/form-data" style="margin: 3rem;width: 55rem; margin-left: 12rem" >
              {{csrf_field()}}
               <input type="hidden" name="SoLuong_SPDaBan" value="0">

              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Tên Bài viết</label>
                    <input name="TenBaiViet" type="text" required="required" style="font-size: 1rem; width: 100%" class="form-control form-control-user"  placeholder="Nhập tên bài viết">

                  </div>
              </div>


              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Hình ảnh bài viết &emsp;&emsp;</label>
                    <input type="file" name="HinhAnh_BaiViet" required="required"  style="font-size: 1rem; " type="file"  >

                  </div>
              </div>

              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label  style="color: #4e73df">Nội dung bài viết</label>
                    <textarea type="text" name="NoiDungBaiViet" data-validation="required " data-validation-error-msg="Vui lòng điền nội dung bài viết" class="form-control form-control-user" style=" font-size: 1rem; width: 100%; resize: none; height: 100px;"  class="form-control" id="ckeditor_baiviet" placeholder="Nhập nội dung"></textarea>
                </div>

              </div>

               @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    {{$error}}
                    @endforeach

                </div>

                @endif


              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                     <label  style="color: #4e73df">Danh mục bài viết &emsp;&emsp;</label>
                          <select name="danhmuc_BaiViet"  style="color: #6e707e; line-height: 1.5; height: calc(1.5em + .75rem + 2px);padding: .37rem.75rem;background-color: #fff;background-clip: padding-box;border: 1px solid #d1d3e2;border-radius: .35rem;">
                            @foreach($danhmuc_BaiViet as $key=>$danhmuc)
                                <option class="form-control form-control-user"
                                value="{{$danhmuc->id_DanhMucBaiViet}}"> {{$danhmuc->TenDanhMucBaiViet}}</option>

                            @endforeach
                          </select>
                </div>

              </div>



              <button type = "submit" name="them_baiviet" class="btn btn-primary btn-user btn-block"
                  style="width: 100px;" >Thêm</button>

                  <br><br><br>

            </form>

    </div>

@endsection
