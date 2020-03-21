@extends('layout');
@section('title',"Shopping cart")
@section('content')

{{--    <ul>--}}
{{--        @forelse($cart as $p)--}}
{{--            <li>{{$p->product_name}} -- {{$p->cart_qty}} </li>--}}
{{--        @empty--}}
{{--            <p>Không có sản phẩm nào trong giỏ hàng</p>--}}
{{--        @endforelse--}}

{{--            <a href="{{url("/clear-cart")}}">Remove all</a>--}}
{{--    </ul>--}}

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
                        <h5>$ {{$p->price}}</h5>
                    </td>
                    <td>
                        <div class="product_count">
                            <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                            <input class="input-number" type="text" value="1" min="0" max="10">
                            <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                        </div>
                    </td>
                    <td>
                        <div class="product_count">
                            <input class="input-number" type="text" >
                        </div>
                    </td>
                </tr>
                @empty
                    <p>Không có sản phẩm nào trong giỏ hàng</p>
                @endforelse




                <tr class="bottom_button">
                    <td>
                        <a class="btn_1" href="#">Update Cart</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="cupon_text float-right">
                            <a class="btn_1" href="#">Close Coupon</a>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <h5>Subtotal</h5>
                    </td>
                    <td>
                        <h5>$2160.00</h5>
                    </td>
                </tr>
                <tr class="shipping_area">
                    <td></td>
                    <td></td>
                    <td>
                        <h5>Shipping</h5>
                    </td>
                    <td>
                        <div class="shipping_box">
                            <ul class="list">
                                <li>
                                    <a href="#">Flat Rate: $5.00</a>
                                </li>
                                <li>
                                    <a href="#">Free Shipping</a>
                                </li>
                                <li>
                                    <a href="#">Flat Rate: $10.00</a>
                                </li>
                                <li class="active">
                                    <a href="#">Local Delivery: $2.00</a>
                                </li>
                            </ul>
                            <h6>
                                Calculate Shipping
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </h6>
                            <select class="shipping_select">
                                <option value="1">Bangladesh</option>
                                <option value="2">India</option>
                                <option value="4">Pakistan</option>
                            </select>
                            <select class="shipping_select section_bg">
                                <option value="1">Select a State</option>
                                <option value="2">Select a State</option>
                                <option value="4">Select a State</option>
                            </select>
                            <input type="text" placeholder="Postcode/Zipcode" />
                            <a class="btn_1" href="#">Update Details</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="checkout_btn_inner float-right">
                <a class="btn_1" href="{{url("/clear-cart")}}">Clear Cart</a>
                <a class="btn_1" href="#">Continue Shopping</a>
                <a class="btn_1 checkout_btn_1" href="{{url("/checkout")}}">Proceed to checkout</a>
            </div>
        </div>
    </div>



    @endsection
