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
            <div class="card-body">
                <form action="{{url("admin/product/update",['id'=>$products->id])}}" method="POST">
                    @csrf

{{--                    <div class="position-relative form-group">--}}
                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">product name</label>
                        <input name="product_name" id="cc-name"  type="text" value="{{$products->product_name}}"
                               class="form-control cc-name @if($errors->has("product_name"))is-invalid @endif  ">
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("product_name"))
                            <p style="color:red">{{$errors->first("product_name")}}</p>
                        @endif
                    </div>


                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">product desc</label>
                        <input id="cc-name" name="product_desc" type="text" value="{{$products->product_desc}}"
                               class="form-control cc-name @if($errors->has("product_desc"))is-invalid @endif" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("product_desc"))
                            <p style="color:red">{{$errors->first("product_desc")}}</p>
                        @endif
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">thumbnail</label>
                        <input id="cc-name" name="thumbnail" type="text" value="{{$products->thumbnail}}"
                               class="form-control cc-name @if($errors->has("thumbnail"))is-invalid @endif" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("thumbnail"))
                            <p style="color:red">{{$errors->first("thumbnail")}}</p>
                        @endif
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">gallery</label>
                        <input id="cc-name" name="gallery" type="text" value="{{$products->gallery}}"
                               class="form-control cc-name @if($errors->has("gallery"))is-invalid @endif" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("gallery"))
                            <p style="color:red">{{$errors->first("gallery")}}</p>
                        @endif
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">category_name</label>

                        <select name="category_id" class="form-control " style="margin-bottom: 20px;" required>

                            @php
                                $category = \App\Category::all();
                            @endphp
                            <option selected value="">Select</option>
                            @foreach($category as $p)
                                <option value="{{$p->id}}">{{$p->category_name}}</option>
                            @endforeach
                        </select>

{{--                        <input id="cc-name" name="category_id" type="text" value="{{$products->product_name}}"--}}
{{--                               class="form-control cc-name @if($errors->has("category_id"))is-invalid @endif" >--}}
{{--                        <span class="help-block field-validation-valid"></span>--}}
{{--                        @if($errors->has("category_id"))--}}
{{--                            <p style="color:red">{{$errors->first("category_id")}}</p>--}}
{{--                        @endif--}}
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">brand_name</label>

                        <select name="brand_id" class="form-control " style="margin-bottom: 20px;" required>
                            @php
                                $brand = \App\Brand::all();
                            @endphp
                            <option selected value="">Select</option>
                            @foreach($brand as $p)
                                <option value="{{$p->id}}">{{$p->brand_name}}</option>
                            @endforeach
                        </select>

{{--                        <input id="cc-name" name="brand_id" type="text" value="{{$brand->id}}"--}}
{{--                               class="form-control cc-name @if($errors->has("brand_name"))is-invalid @endif" >--}}
{{--                        <span class="help-block field-validation-valid"></span>--}}
{{--                        @if($errors->has("brand_name"))--}}
{{--                            <p style="color:red">{{$errors->first("brand_name")}}</p>--}}
{{--                        @endif--}}
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">price</label>
                        <input id="cc-name" name="price" type="text" value="{{$products->price}}"
                               class="form-control cc-name @if($errors->has("price"))is-invalid @endif" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("price"))
                            <p style="color:red">{{$errors->first("price")}}</p>
                        @endif
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">quantity</label>
                        <input id="cc-name" name="quantity" type="text" value="{{$products->quantity}}"
                               class="form-control cc-name @if($errors->has("quantity"))is-invalid @endif" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("quantity"))
                            <p style="color:red">{{$errors->first("quantity")}}</p>
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
