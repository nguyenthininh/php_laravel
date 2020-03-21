@extends('layout');
@section('title',"Giỏ hàng")
@section('checkout')

    <div class="returning_customer">
        <div class="check_title">
            <h2>
                Returning Customer?
                <a href="#">Click here to login</a>
            </h2>
        </div>
        <p>
            If you have shopped with us before, please enter your details in the
            boxes below. If you are a new customer, please proceed to the
            Billing & Shipping section.
        </p>
        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
            <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="name" name="name" value=" " />
                <span class="placeholder" data-placeholder="Username or Email"></span>
            </div>
            <div class="col-md-6 form-group p_star">
                <input type="password" class="form-control" id="password" name="password" value="" />
                <span class="placeholder" data-placeholder="Password"></span>
            </div>
            <div class="col-md-12 form-group">
                <button type="submit" value="submit" class="btn_3">
                    log in
                </button>
                <div class="creat_account">
                    <input type="checkbox" id="f-option" name="selector" />
                    <label for="f-option">Remember me</label>
                </div>
                <a class="lost_pass" href="#">Lost your password?</a>
            </div>
        </form>
    </div>

    <div class="cupon_area">
        <div class="check_title">
            <h2>
                Have a coupon?
                <a href="#">Click here to enter your code</a>
            </h2>
        </div>
        <input type="text" placeholder="Enter coupon code" />
        <a class="tp_btn" href="#">Apply Coupon</a>
    </div>


    <div class="billing_details">
        <div class="row">
            <div class="col-lg-8">
                <h3>Thông tin khách hàng</h3>
                <form class="row contact_form" action="{{url("checkout")}}" method="POST" novalidate="novalidate">
                    <div class="col-md-8 form-group p_star">
                        <input type="text" class="form-control" id="first" name="customer_name" placeholder="Tên khách hàng *" required />
                    </div>
{{--                    <div class="col-md-6 form-group p_star">--}}
{{--                        <input type="text" class="form-control" id="last" name="name" />--}}
{{--                        <span class="placeholder" data-placeholder="Last name"></span>--}}
{{--                    </div>--}}
                    <div class="col-md-8 form-group p_star">
                        <input type="text" class="form-control" name="address" placeholder="Address *" required />
                    </div>
                    <div class="col-md-8 form-group p_star">
                        <input type="number" class="form-control" id="telephone" name="telephone" placeholder="Telephone *"
                               required />
                    </div>

                    <div class="checkbox-items">
                        <div class="payment-method"  style="margin-top:0">
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
            <div class="col-lg-4">
                <div class="order_box">
                    <h2>Your Order</h2>

                    <ul class="list">
                        <li>
                            <a href="#">Product
                                <span>Total</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Fresh Blackberry
                                <span class="middle">x 02</span>
                                <span class="last">$720.00</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Fresh Tomatoes
                                <span class="middle">x 02</span>
                                <span class="last">$720.00</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Fresh Brocoli
                                <span class="middle">x 02</span>
                                <span class="last">$720.00</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="list list_2">
                        <li>
                            <a href="#">Subtotal
                                <span>$2160.00</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Shipping
                                <span>Flat rate: $50.00</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">Total
                                <span>$2210.00</span>
                            </a>
                        </li>
                    </ul>



                    <div class="payment_item">
                        <div class="radion_btn">
                            <input type="radio" id="f-option5" name="selector" />
                            <label for="f-option5">Check payments</label>
                            <div class="check"></div>
                        </div>
                        <p>
                            Please send a check to Store Name, Store Street, Store Town,
                            Store State / County, Store Postcode.
                        </p>
                    </div>
                    <div class="payment_item active">
                        <div class="radion_btn">
                            <input type="radio" id="f-option6" name="selector" />
                            <label for="f-option6">Paypal </label>
                            <img src="img/product/single-product/card.jpg" alt="" />
                            <div class="check"></div>
                        </div>
                        <p>
                            Please send a check to Store Name, Store Street, Store Town,
                            Store State / County, Store Postcode.
                        </p>
                    </div>
                    <div class="creat_account">
                        <input type="checkbox" id="f-option4" name="selector" />
                        <label for="f-option4">I’ve read and accept the </label>
                        <a href="#">terms & conditions*</a>
                    </div>
                    <a class="btn_3" href="#">Proceed to Paypal</a>
                </div>
            </div>
        </div>
    </div>


    @endsection
