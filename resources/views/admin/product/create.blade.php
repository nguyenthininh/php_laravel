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
                <form action="{{url("admin/product/store")}}" method="post">
                    @csrf

                    <div class="position-relative form-group" >
                        <input style="margin-bottom: 20px;" name="product_name" type="text" id=" product_name " placeholder="product_name"
                        value="{{old("product_name")}}" class="form-control @if($errors->has("product_name"))is-invalid @endif ">

                        <input style="margin-bottom: 20px;" name="product_desc" type="text" placeholder="product_description"
                            id="product_desc" class="form-control  @if($errors->has("product_desc"))is-invalid @endif ">


                        <select name="category_id" class="form-control " style="margin-bottom: 20px;" required>

                            @php
                            $category = \App\Category::all();
                            @endphp
                            <option selected value="">Select Category</option>
                            @foreach($category as $p)
                               <option value="{{$p->id}}">{{$p->category_name}}</option>
                            @endforeach
                        </select>

                        <select name="brand_id" class="form-control " style="margin-bottom: 20px;" required>
                            @php
                                $brand = \App\Brand::all();
                            @endphp
                            <option selected value="">Select Brand</option>
                            @foreach($brand as $p)
                            <option value="{{$p->id}}">{{$p->brand_name}}</option>
                                @endforeach
                        </select>

{{--                        <input style="margin-bottom: 20px;" name="category_name" id="cc-name" type="text" value="{{old("category_name")}}"--}}
{{--                               class="form-control pp-name @if($errors->has("category_name"))is-invalid @endif  " placeholder="Category_name">--}}

{{--                        <input style="margin-bottom: 20px;" name="brand_name" id="bb-name"  type="text" value="{{old("brand_name")}}"--}}
{{--                               class="form-control bb-name @if($errors->has("brand_name"))is-invalid @endif " placeholder="Brand_name" >--}}

                        <input style="margin-bottom: 20px;" name="thumbnail" type="text" placeholder="Thumbnail"
                            id="thumbnail"   class="form-control @if($errors->has("thumbnail"))is-invalid @endif " >

                        <input style="margin-bottom: 20px;" name="gallery" type="text" placeholder="gallery"
                               id="gallery"   class="form-control @if($errors->has("gallery"))is-invalid @endif " >

                        <input style="margin-bottom: 20px;" name="price" type="number" placeholder="Price" id="price"
                               class="form-control @if($errors->has("price"))is-invalid @endif ">

                        <input style="margin-bottom: 20px;" name="quantity" type="number" placeholder="Quantity" id="quantity"
                               class="form-control @if($errors->has("quantity"))is-invalid @endif ">


                        <span class="help-block field-validation-valid"></span>

                        @if($errors->has("product_name"))
                            <p style="color:red">{{$errors->first("product_name")}}</p>
                        @endif

                        @if($errors->has("product_desc"))
                            <p style="color:red">{{$errors->first("product_desc")}}</p>
                        @endif

                        @if($errors->has("thumbnail"))
                            <p style="color:red">{{$errors->first("thumbnail")}}</p>
                        @endif

                        @if($errors->has("gallery"))
                            <p style="color:red">{{$errors->first("gallery")}}</p>
                        @endif

                        @if($errors->has("price"))
                            <p style="color:red">{{$errors->first("price")}}</p>
                        @endif

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
