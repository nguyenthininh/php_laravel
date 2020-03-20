@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Thêm danh user</h2>
        </div>
    </div>
@endsection

@section('main_content')
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Thêm danh mục</h5>
                <form action="{{url("admin/user/store")}}" method="post">
                    @csrf

                    <div class="position-relative form-group">
                        <label for="cc-name" class="">Tên danh mục</label>
                        <input name="name" id="cc-name"  type="text" value="{{old("name")}}"
                               class="form-control cc-name @if($errors->has("name"))is-invalid @endif  ">

                        <input style="margin-bottom: 20px;" name="email" type="email" id=" email" placeholder="email"
                               value="{{old("email")}}" class="form-control @if($errors->has("email"))is-invalid @endif ">

                        <input style="margin-bottom: 20px;" name="password" type="password" id=" password" placeholder="password"
                               value="{{old("password")}}" class="form-control @if($errors->has("password"))is-invalid @endif ">


                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("name"))
                            <p style="color:red">{{$errors->first("name")}}</p>
                        @endif

                        @if($errors->has("email"))
                            <p style="color:red">{{$errors->first("email")}}</p>
                        @endif

                        @if($errors->has("password"))
                            <p style="color:red">{{$errors->first("password")}}</p>
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
