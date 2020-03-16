@extends('layout');
@section('title',"Trang chủ")
@section('home')


         <div class="col-lg-12" style="margin-bottom: 60px;">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section_tittle text-center">
                                <h3>Sản Phẩm mới nhất <span>shop</span></h3>
                            </div>
                        </div>
                    </div>
{{--            <div class="section_tittle text-center">--}}
{{--                <h4>Sản phẩm mới nhất <span>shop</span></h4>--}}
{{--            </div>--}}
            <div class="row align-items-center latest_product_inner">
                @foreach ($product as $p)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="{{ asset($p->thumbnail) }}" alt="">

                            <div class="single_product_text">
                                <h4>{{ $p->product_name}}</h4>
                                <h3>{{ $p->price}}</h3>
                                <a href="{{url("/product/{$p->id}")}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
         </div>

        <div class="col-lg-12" style="margin-bottom: 60px;">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h3>Sản Phẩm Thấp Nhất <span>shop</span></h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center latest_product_inner">
                @foreach ($category as $p)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="{{ asset($p->thumbnail) }}" alt="">

                            <div class="single_product_text">
                                <h4>{{ $p->product_name}}</h4>
                                <h3>{{ $p->price}}</h3>
                                <a href="{{url("product/{$p->id}")}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

        <div class="col-lg-12" >
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h3>Sản Phẩm Cao Nhất <span>shop</span></h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center latest_product_inner">
                @foreach ($categorys as $p)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="{{ asset($p->thumbnail) }}" alt="">

                            <div class="single_product_text">
                                <h4>{{ $p->product_name}}</h4>
                                <h3>{{ $p->price}}</h3>
                                <a href="{{url("product/{$p->id}")}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>






{{--    <section class="product_list section_padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}

{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section_tittle text-center">--}}
{{--                    <h2>Sản phẩm mới nhất <span>shop</span></h2>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="product_list_slider owl-carousel">--}}
{{--                        <div class="single_product_list_slider">--}}
{{--                            <div class="row align-items-center justify-content-between">--}}
{{--                                @foreach ($products as $p)--}}
{{--                                <div class="col-lg-3 col-sm-6">--}}
{{--                                    <div class="single_product_item">--}}
{{--                                        <img src="{{ $p->thumbnail }}" alt="">--}}
{{--                                        <img src="img/product/product_1.png" alt="">--}}
{{--                                        <div class="single_product_text">--}}
{{--                                            <h4>{{ $p->product_name}}</h4>--}}
{{--                                            <h3>{{ $p->price}}</h3>--}}
{{--                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @endforeach--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    @endsection




