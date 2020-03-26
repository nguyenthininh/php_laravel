@extends('layout')
@section('title',"Trang chủ")
@section('content')


    <section class="banner_part">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset("img/banner_img.png")}}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth & Wood
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset("img/banner_img.png")}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset("img/banner_img.png")}}" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>

         <section class="product_list best_seller section_padding">
             <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-lg-12">
                         <div class="section_tittle text-center">
                             <h2>Sản phẩm Mới nhất <span>shop</span></h2>
                         </div>
                     </div>
                 </div>
                 <div class="row align-items-center justify-content-between">
                     <div class="col-lg-12">
                         <div class="best_product_slider owl-carousel">
                             @foreach ($product as $p)
                                 <div class="single_product_item">
                                     <img src="{{ asset($p->thumbnail) }}" alt="">
                                     <div class="single_product_text">
                                         <h4>{{ $p->product_name}}</h4>
                                         <h3>${{ $p->price}}</h3>
                                         <a href="{{url("/product/{$p->id}")}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                     </div>
                                 </div>

                             @endforeach

                         </div>
                     </div>
                 </div>
             </div>
         </section>



<section class="product_list best_seller ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Sản phẩm Giá Thấp nhất <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    @foreach ($category as $p)
                        <div class="single_product_item">
                            <img src="{{ asset($p->thumbnail) }}" alt="">
                            <div class="single_product_text">
                                <h4>{{ $p->product_name}}</h4>
                                <h3>${{ $p->price}}</h3>
                                <a href="{{url("/product/{$p->id}")}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


<section class="product_list best_seller section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Sản phẩm Giá Cao nhất <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    @foreach ($categories as $p)
                        <div class="single_product_item">
                            <img src="{{ asset($p->thumbnail) }}" alt="">
                            <div class="single_product_text">
                                <h4>{{ $p->product_name}}</h4>
                                <h3>${{ $p->price}}</h3>
                                <a href="{{url("/product/{$p->id}")}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>






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




