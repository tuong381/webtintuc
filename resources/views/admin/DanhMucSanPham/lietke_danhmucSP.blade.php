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
           <h1 class="h3 mb-0 text-gray-800" style="margin-left: 25rem; font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Danh Sách Danh Mục Sản Phẩm </h1>

        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h3 class="h3 mb-0 text-gray-800">

           <p><a href="{{URL::to('/admin-them-DanhMucSP')}}" class="btn view button-main" style="width: 80px;background: #4e73df;color: white; font-weight: 600;">Thêm</a></p>
            </h3>

        </div>


        <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table {{-- class="table table-bordered" --}} id="dataTable" width="100%" cellspacing="0" class="table table-striped">

                                   <?php
                                      $message = Session::get('message');
                                       if($message){
                                          echo '<span style="color:red; font-style: italic;}">'.$message.'<p></p></span>';
                                          Session::put('message',null);
                                        }

                                   ?>

                                    <thead>
                                        <tr style="color: #4e73df; text-align: center;">
                                            <th>STT</th>
                                            <th>Tên danh mục</th>
                                            <th>Hình ảnh</th>
                                            <th>Mô tả</th>
                                       <!--     <th>Trạng thái</th>  -->
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr style="color: #4e73df; text-align: center;">
                                            <th>STT</th>
                                            <th>Tên danh mục</th>
                                            <th>Hình ảnh</th>
                                            <th>Mô tả</th>
                                        <!--    <th>Trạng thái</th>  -->
                                            <th>Chức năng</th>
                                    </tfoot>
                                    <tbody style="color: black">
                                      <!-- hamf lay du lieu  -->
                                      @php
                                        $i=0;

                                      @endphp

                                      @foreach($lietke_danhmucSP as $key=>$danhmuc)

                                      @php
                                        $i++;

                                      @endphp

                                        <tr>
                                            <td style="text-align: center;">{{$i}}</td>
                                            <td>{{$danhmuc->TenDanhMuc}}</td>
                                            <td><img src="public/upload/danhmucsanpham/{{$danhmuc->HinhAnh_DanhMuc}}" style="height: 100px;width: 100px"
                                                ></td>
                                            <td>{{$danhmuc->MoTa}}</td>

                                     <!--       <td></td>     -->
                                            <td style="text-align: center;">

                                                 <a href="{{URL::to('/admin-sua-DanhMucSP/'.$danhmuc->id_DanhMuc)}}" ><i class="fas fa-edit" ></i>  &emsp;  </a>

                                              <a onclick="return confirm('Bạn có muốn xóa danh mục này không?')" href="{{URL::to('/admin-xoa-DanhMucSP/'.$danhmuc->id_DanhMuc)}}" >
                                                    <i class="fas fa-trash" style="color: red" ></i> </a>



                                            </td>
                                        </tr>


                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div style="margin-left: auto;">

                         {{ $lietke_danhmucSP->links("pagination::bootstrap-4") }}


                        </div>
         </div>


@endsection
