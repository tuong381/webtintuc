@extends('Admin_index')
@section('ad_content')

<div class="container-fluid" style=" background: #fff;width: 55rem;  margin-top: 5rem;">

      <div class="d-sm-flex align-items-center justify-content-between mb-4">
             <h1 class="h3 mb-0 text-gray-800" style="margin: 3rem;margin-left: 18rem;font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Cập Nhật Bài Viết </h1>

         </div>

          <?php
                $message = Session::get('message');
                 if($message){
                    echo '<span style="color:red; font-style: italic;}">'.$message.'<p></p></span>';
                    Session::put('message',null);
                  }

          ?>
          @foreach($sua_BaiViet as $key=>$sua)

            <form  action="{{URL::to('/admin-capnhat-BaiViet/'.$sua->id_BaiViet)}}" method="post" class="templatemo-login-form" enctype="multipart/form-data" style="margin: 3rem;width: 55rem; margin-left: 12rem">
              {{csrf_field()}}

              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Tên Bài Viết</label>
                    <input name="TenBaiViet"value="{{$sua->TenBaiViet}}" type="text" class="form-control
                        form-control-user"  >

                  </div>
              </div>

              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Hình ảnh &emsp;&emsp;</label>
                     <input name="HinhAnh_BaiViet" type="file"  >
                    <img src="{{URL::to('public/upload/baiviet/'.$sua->HinhAnh_BaiViet)}}" style="height: 100px; width: 100px">

                  </div>
              </div>

              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label  style="color: #4e73df">Nội dung bài viết</label>
                    <textarea name="NoiDungBaiViet"  style=" resize: none; height: 100px;" type="text" class="form-control" id="ckeditor_sua_baiviet" >{{$sua->NoiDungBaiViet}}</textarea>
                </div>

              </div>


              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                     <label  style="color: #4e73df">Danh mục bài viết &emsp;&emsp;</label>
                          <select name="danhmuc_BaiViet"  style="color: #6e707e; line-height: 1.5; height: calc(1.5em + .75rem + 2px);padding: .37rem.75rem;background-color: #fff;background-clip: padding-box;border: 1px solid #d1d3e2;border-radius: .35rem;">
                            @foreach($danhmuc_BaiViet as $key=>$danhmuc)
                              @if($danhmuc->id_DanhMucBaiViet == $sua->id_DanhMucBaiViet)
                                <option selected class="form-control form-control-user" value="{{$danhmuc->id_DanhMucBaiViet}}"> {{$danhmuc->TenDanhMucBaiViet}}</option>
                              @else
                                <option class="form-control form-control-user" value="{{$danhmuc->id_DanhMucBaiViet}}">{{$danhmuc->TenDanhMucBaiViet}}</option>

                              @endif

                            @endforeach
                          </select>
                </div>

              </div>


              <button type = "submit" name="them_baiviet" class="btn btn-primary btn-user btn-block"
                  style="width: 100px;" >Cập nhật</button>

                  <br><br><br>

            </form>

          @endforeach
</div>
@endsection
