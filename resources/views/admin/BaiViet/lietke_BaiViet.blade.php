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
           <h1 class="h3 mb-0 text-gray-800" style="margin-left: 30rem;font-weight: 700;
            font-family: 'Font Awesome 5 Free'; font-size: 35px;">Danh Sách Bài Viết </h1>

        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h3 class="h3 mb-0 text-gray-800">

           <p><a href="{{URL::to('/admin-them-BaiViet')}}" class="btn view button-main" style="width: 80px;background: #4e73df;color: white; font-weight: 600;">Thêm</a></p>
            </h3>

        </div>

        <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr style="color: #4e73df; text-align: center">
                                            <th>STT</th>
                                            <th>Tên bài viết</th>
                                            <th>Hình ảnh</th>
                                            <th>Ngày thêm bài viết</th>
                                            <th>Danh mục bài viết</th>
                                            <th>Chứa năng</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr style="color: #4e73df; text-align: center">
                                            <th>STT</th>
                                            <th>Tên bài viết</th>
                                            <th>Hình ảnh</th>
                                            <th>Ngày thêm bài viết</th>
                                            <th>Danh mục bài viết</th>
                                            <th>Chứa năng</th>
                                    </tfoot>
                                    <tbody>
                                      <!-- hamf lay du lieu  -->
                                      @php
                                        $i=0;

                                      @endphp

                                      @foreach($lietke_BaiViet as $key=>$baiviet)
                                      @php
                                        $i++;

                                      @endphp

                                        <tr>
                                            <td style="text-align: center;">{{$i}}</td>
                                            <td>{{$baiviet->TenBaiViet}}</td>
                                            <td style="text-align: center;"> <img src="public/upload/baiviet/{{$baiviet->HinhAnh_BaiViet}}" style="height: 100px;width: 100px"
                                            ></td>
                                            <td style="text-align: center;">{{$baiviet->created_at}}</td>
                                            <td style="text-align: center;">{{$baiviet->TenDanhMucBaiViet}}</td>

                                     <!--       <td></td>     -->
                                            <td style="text-align: center;">

                                                <a href="{{URL::to('/admin-sua-BaiViet/'.$baiviet->id_BaiViet)}}" ><i class="fas fa-edit"></i> &emsp; </a>

                                              <a onclick="return confirm('Bạn có muốn xóa bài viết này không?')" href="{{URL::to('/admin-xoa-BaiViet/'.$baiviet->id_BaiViet)}}" >
                                                    <i class="fas fa-trash" style="color: red" ></i>   </a>



                                            </td>
                                        </tr>


                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div style="margin-left: auto;">

                         {{ $lietke_BaiViet->links("pagination::bootstrap-4") }}


                        </div>
         </div>


@endsection
