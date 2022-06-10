@extends('Admin_index')
@section('ad_content')


 <div class="page-header">
              <h2 class="page-title" style="font-size: 25px;"> Thêm Loại Điểm tin </h2>

            </div>
            <div class="row" style="margin-left: 18rem;width: 70rem;">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{URL::to('/luu_LoaiDT')}}" method="post"  enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Tên loại điểm tin</label>
                        <input type="text" name="TEN_LDT" class="form-control" id="exampleInputUsername1" placeholder="Loại điểm tin">
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">Thêm</button>
                    </form>
                  </div>
                </div>
              </div>



            </div>



@endsection
