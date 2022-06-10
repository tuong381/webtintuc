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
           <h1 class="h3 mb-0 text-gray-800" style="margin-left: 25rem;font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Danh Sách Danh Mục Bài Viết </h1>

        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h3 class="h3 mb-0 text-gray-800">

           <p><a href="{{URL::to('/admin-them-DanhMucBaiViet')}}" class="btn view button-main" style="width: 80px;background: #4e73df;color: white; font-weight: 600;">Thêm</a></p>
            </h3>

        </div>


        <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table {{-- class="table table-bordered" --}} id="dataTable" width="100%" cellspacing="0" class="table table-striped">

                                    <thead>
                                        <tr style="color: #4e73df; text-align: center;">
                                            <th>STT</th>
                                            <th>Tên danh mục</th>

                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr style="color: #4e73df; text-align: center;">
                                            <th>STT</th>
                                            <th>Tên danh mục</th>

                                            <th>Chức năng</th>
                                    </tfoot>
                                    <tbody style="color: black">
                                      <!-- hamf lay du lieu  -->
                                      @php
                                        $i=0;

                                      @endphp

                                      @foreach($lietke_danhmucBaiViet as $key=>$danhmuc)

                                      @php
                                        $i++;

                                      @endphp

                                        <tr style="text-align: center;">
                                            <td >{{$i}}</td>
                                            <td>{{$danhmuc->TenDanhMucBaiViet}}</td>


                                     <!--       <td></td>     -->
                                            <td style="text-align: center;">

                                                 <a href="{{URL::to('/admin-sua-DanhMucBaiViet/'.$danhmuc->id_DanhMucBaiViet)}}" ><i class="fas fa-edit" ></i>  &emsp;  </a>

                                              <a onclick="return confirm('Bạn có muốn xóa danh mục này không?')" href="{{URL::to('/admin-xoa-DanhMucBaiViet/'.$danhmuc->id_DanhMucBaiViet)}}" >
                                                <i class="fas fa-trash" style="color: red" ></i> </a>



                                            </td>
                                        </tr>


                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div style="margin-left: auto;">

                         {{ $lietke_danhmucBaiViet->links("pagination::bootstrap-4") }}


                        </div>
         </div>


@endsection
