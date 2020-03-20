@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Sửa danh mục sản phẩm</h2>
        </div>
    </div>
@endsection

@section('main_content')
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Thêm danh mục</h5>
                <form action="{{url("admin/brand/update",['id'=>$brand->id])}}" method="post">
                    @csrf

                    <div class="position-relative form-group">
                        <label for="bb-name" class="">Tên danh mục</label>
                        <input name="brand_name" id="bb-name"  type="text" value="{{$brand->brand_name}}"
                               class="form-control bb-name @if($errors->has("brand_name"))is-invalid @endif  ">

                        {{--                        <input name="brand_name" id="cc-name"  type="text" value="{{old("brand_name")}}"--}}
                        {{--                               class="form-control cc-name @if($errors->has("brand_name"))is-invalid @endif  ">--}}

                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("brand_name"))
                            <p style="color:red">{{$errors->first("brand_name")}}</p>
                        @endif


                    </div>

                    <div>
                        <button id="payment-button" type="submit" class="btn btn-success btn-lg btn-block" ;>
                            <i class="fa-solid-900.eot" ></i>&nbsp;
                            <span id="payment-button-amount" >Gửi đi</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>


@endsection
