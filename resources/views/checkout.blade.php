@extends('layout');
@section('title',"Thanh toán")
@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Product Checkout</h2>
                            <p>Home <span>-</span> Shop Single</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <section class="checkout_area padding_top">
        <div class="container">
    <div class="billing_details">
        <div class="row">
            <div class="col-lg-7">
                <h3>Thông tin khách hàng</h3>
                <form id="checkout-form" class="row contact_form" action="{{url("/checkout")}}" method="POST" novalidate="novalidate">
                    @csrf
                    <div class="col-md-10">
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="first" name="customer_name" placeholder="Tên khách hàng *" required />
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" name="address" placeholder="Address *" required />
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="number" class="form-control" id="telephone" name="telephone" placeholder="Telephone *"
                                   required />
                        </div>
                    </div>


                    <div class=" row col-md-12" style="margin-top: 40px;">
                        <div class="col-md-6">
                            <p><tt>*Billing Information</tt></p>
                        </div>
                        <div class="col-md-5"  style="margin-top:0">
                            <div class="pm-item">
                                <input type="radio" value="paypal" name="payment_method" id="one">
                                <label for="one">Paypal</label>
                            </div>
                            <div class="pm-item">
                                <input type="radio" value="cod" name="payment_method" id="two">
                                <label for="two">Cash on delievery</label>
                            </div>
                            <div class="pm-item">
                                <input type="radio" value="credit_card" name="payment_method" id="three">
                                <label for="three">Credit card</label>
                            </div>
                            <div class="pm-item">
                                <input type="radio" value="bank_transfer" name="payment_method" id="four" checked>
                                <label for="four">Direct bank transfer</label>
                            </div>
                        </div>
                    </div>

                </form>
            </div>


            <div class="col-lg-5">
                <div class="order_box">
                    <h2>Your Order</h2>

                    <ul class="list">
                        <li>
                            <span >Product</span>
                                <span style="padding: 0 25% 0 40% ">Qty</span>
                                <span >Total</span>

                        </li>

                        @php $total = 0; @endphp
                        @foreach(session('cart') as $p)
                        <li>
                            <a href="#">{{$p->product_name}}
                                <span class="middle">{{$p->cart_qty}}</span>
                                <span class="last">${{$p->price}}</span>
                            </a>
                        </li>
                            @php $total += ($p->cart_qty * $p->price) @endphp
                        @endforeach
                    </ul>


                    <ul class="list list_2">
                        <li>
                            <a href="#">Subtotal
                                <span>${{number_format($total,2)}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Shipping
                                <span>Free</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">Total
                                <span>${{number_format($total,2)}}</span>
                            </a>
                        </li>
                    </ul>

                    <a class="btn_3" onclick="document.getElementById('checkout-form').submit()">Proceed to Paypal</a>
                </div>
            </div>


        </div>
    </div>
        </div>
    </section>

    @endsection
