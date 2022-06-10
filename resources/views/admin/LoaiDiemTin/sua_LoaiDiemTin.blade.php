@extends('Admin_index')
@section('ad_content')


 <div class="page-header">
              <h2 class="page-title" style="font-size: 25px;"> Cập Nhật Loại Điểm tin </h2>

            </div>
            <div class="row" style="margin-left: 18rem;width: 70rem;">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    @foreach($sua_LoaiDT as $key=>$sua)
                    <form class="forms-sample"  action="{{URL::to('/admin-capnhat-LoaiDT/'.$sua->ID_LDT)}}" method="post"  enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Tên loại điểm tin</label>
                        <input type="text" name="TEN_LDT"  value="{{ $sua->TEN_LDT}}" class="form-control" id="exampleInputUsername1" placeholder="Loại điểm tin">
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                    </form>
                    @endforeach
                  </div>
                </div>
              </div>



            </div>



@endsection
