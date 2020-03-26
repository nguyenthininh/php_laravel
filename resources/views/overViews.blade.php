@extends('layout')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Purchase Details</h2>
                            <p>Home <span>-</span>Purchase Details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->



    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="float: left" class="cart-table col-lg-12">

                        <table>
                            <thead>
                            <tr>

                                <th class="">Product Name</th>
                                <th>Price</th>
                                <th>Telephone</th>
                                <th>Address</th>
                                <th>Payment_Method</th>
                                <th>DATE PURCHASE</th>
                                <th>Status</th>

                            </tr>
                            </thead>

                            <tbody>

                            <tr>

                                <td class="p-price first-row"><p>{{$order->customer_name}}</p></td>
                                <td class="p-price first-row"><p>{{$order ->grand_total}}</p></td>
                                <td class="p-price first-row"><p>{{$order ->telephone}}</p></td>
                                <td class="p-price first-row"><p>{{$order ->shipping_address}}</p></td>
                                <td class="p-price first-row"><p>{{$order ->payment_total}}</p></td>
                                <td class="p-price first-row"><p>{{$order ->created_at}}</p></td>
                                <td class="p-price first-row"><p>{{$order ->status}}</p></td>
                            </tr>

                            </tbody>

                        </table>

                    </div>



                </div>

            </div>
            <div class="row">

                <div class="col-lg-10 offset-lg-1">
                    <div class="proceed-checkout">
                        <a href="{{url("/checkout")}}" class="proceed-btn">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
