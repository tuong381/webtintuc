@extends('Admin_index')
@section('ad_content')



<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title" style="font-size: 25px;"> Danh sách loại điểm tin </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row" style="margin-left: 18rem;width: 80rem;">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <button type="submit" class="badge badge-danger">Thêm</button>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr >
                            <th style="color: white;">STT</th>
                            <th style="color: white;" >Loại điểm tin</th>
                            <th style="color: white;">Chức năng</th>
                          </tr>
                        </thead>
                        <tbody>

                          @php
                              $i=0;

                            @endphp

                            @foreach($lietke_LoaiDT as $key=>$loai)

                            @php
                              $i++;

                            @endphp

                          <tr>
                            <td>{{$i}}</td>
                            <td>{{$loai->TEN_LDT}}</td>
                           {{--  <td><label class="badge badge-danger">Pending</label></td> --}}
                           <td >

                             <a href="{{URL::to('/admin-sua-LoaiDiemTin/'.$loai->ID_LDT)}}" ><label class="badge badge-danger" style=" background-color: #00d25b">Sửa</label>  &emsp;  </a>

                              <a onclick="return confirm('Bạn có muốn xóa danh mục này không?')" href="{{URL::to('/admin-xoa-LoaiDiemTin/'.$loai->ID_LDT)}}" >
                                     <label class="badge badge-danger" >Xóa</label> </a>

                            </td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>


@endsection
