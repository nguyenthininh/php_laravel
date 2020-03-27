@extends('layout')
@section('title',"Shopping cart")
@section('content')


    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Cart Products</h2>
                            <p>Home <span>-</span>Cart Products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


<section class="cart_area section_padding">
    <div class="container">
    <div class="cart_inner">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>

                @forelse($cart as $p)
                <tr>
                    <td>
                        <div class="media">
                            <div class="d-flex">
                                <img src="{{asset("$p->thumbnail")}}" style="width: 50%;" alt="" />
                            </div>
                            <div class="media-body">
                                <p>{{$p->product_name}}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h5>${{$p->price}}</h5>
                    </td>
                    <td>
                        <div class="product_count">
                            <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                            <input class="input-number" type="text" value="1" min="0" max="10">
                            <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                        </div>
                    </td>
                    <td>
                        <h5>${{$p->price}}</h5>
{{--                        <div class="product_count">--}}
{{--                            <input class="input-number" type="text" >--}}
{{--                        </div>--}}
                    </td>
                </tr>
                @empty
                    <p>Không có sản phẩm nào trong giỏ hàng</p>
                @endforelse


                <tr class="bottom_button">
                    <td>
                        <a class="btn_1" href="{{url("/")}}">Continue Shopping</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="cupon_text float-right">
                            <a class="btn_1" href="{{url("/clear-cart")}}">Clear Cart</a>
                            <a class="btn_1" href="{{url("/checkout")}}">Update Cart</a>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
{{--            <div class="checkout_btn_inner float-right">--}}
{{--                <a class="btn_1" href="{{url("/clear-cart")}}">Clear Cart</a>--}}
{{--                <a class="btn_1" href="#">Continue Shopping</a>--}}
{{--                <a class="btn_1 checkout_btn_1" href="{{url("/checkout")}}">Proceed to checkout</a>--}}
{{--            </div>--}}
        </div>
    </div>

    </div>
</section>

    @endsection
