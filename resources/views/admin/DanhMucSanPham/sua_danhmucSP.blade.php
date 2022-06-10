@extends('Admin_index')
@section('ad_content')

<div class="container-fluid" style=" background: #fff;width: 55rem;  margin-top: 5rem;">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" style="margin: 3rem;margin-left: 14rem; font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Cập Nhật Danh Mục Sản Phẩm </h1>

</div>

          <?php
                $message = Session::get('message');
                 if($message){
                    echo '<span style="color:red; font-style: italic;}">'.$message.'<p></p></span>';
                    Session::put('message',null);
                  }

          ?>

          @foreach($sua_danhmucSP as $key=>$sua)

            <form  action="{{URL::to('/admin-capnhat-danhmucSP/'.$sua->id_DanhMuc)}}"
                method="post" class="templatemo-login-form"  enctype="multipart/form-data" style="margin: 3rem;width: 55rem; margin-left: 12rem">

              {{csrf_field()}}
              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Tên danh mục</label>
                    <input name="TenDanhMuc" value="{{ $sua->TenDanhMuc}}" type="text" class="form-control form-control-user"   placeholder="Nhập tên danh muc">

                  </div>
              </div>

              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label style="color: #4e73df">Hình ảnh &emsp;&emsp;</label>
                     <input name="HinhAnh_DanhMuc" type="file"  >
                    <img src="{{URL::to('public/upload/danhmucsanpham/'.$sua->HinhAnh_DanhMuc)}}" style="height: 100px; width: 100px">

                  </div>
              </div>

              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label  style="color: #4e73df">Mô tả danh mục</label>
                    <input name="MoTa" value="{{ $sua->MoTa}}" style=" resize: none; height: 100px" type="text" class="form-control" id="inputUsername" placeholder="Nhập mô tả">
                </div>

              </div>



              <button type = "submit" name="sua_danhmucsp" class="btn btn-primary btn-user btn-block"
                  style="width: 100px" >Cập nhật</button>

            <br><br><br>

            </form>

          @endforeach

</div>

@endsection
