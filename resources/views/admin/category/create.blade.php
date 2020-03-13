@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Thêm danh mục sản phẩm</h2>
        </div>
    </div>
@endsection

@section('main_content')
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Thêm danh mục</h5>
                <form action="{{url("admin/category/store")}}" method="post">
                    @csrf

                    <div class="position-relative form-group">
                        <label for="cc-name" class="">Tên danh mục</label>
                        <input name="category_name" id="cc-name"  type="text" value="{{old("category_name")}}"
                               class="form-control cc-name @if($errors->has("category_name"))is-invalid @endif  ">

                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("category_name"))
                            <p style="color:red">{{$errors->first("category_name")}}</p>
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
