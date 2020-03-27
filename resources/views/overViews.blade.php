@extends('layout')
@section('title',"OrderDetail")
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



    <section class="table-responsive ">
        <div class="container">
            <div class="card-body">

                        <table class="table table-bordered" style="margin-top: 30px;">
                            <thead>
                            <tr>

                                <th class="p-name">Product Name</th>
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
                                <td class="p-price first-row"><p>{{$order ->payment_method}}</p></td>
                                <td class="p-price first-row"><p>{{$order ->created_at}}</p></td>
                                <td class="p-price first-row"><p>{{$order ->status}}</p></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>



        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="cupon_text" style="margin-top: 60px;">

                    <a class="btn_1" href="{{url("/")}}" class="proceed-btn">Continue Shopping</a>
                </div>
            </div>
        </div>
        </div>

    </section>

    @endsection
