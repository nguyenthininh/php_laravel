@extends('layout')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>History Order</h2>
                            <p>Home <span>-</span>History Order</p>
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
                    <div class="cart-table col-lg-12">

                        <table>
                            <thead>
                            <tr>
                                <th class="p-name">Customer Name</th>
                                <th>Shipping Address</th>
                                <th>Telephone</th>
                                <th>Grand Total</th>
                                <th>Payment Method</th>
                                <th>Date Purchase</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @forelse($newests as $p)
                                <tbody>

                                <tr>
                                    <td class="p-price first-row"><p>{{$p->customer_name}}</p></td>
                                    <td class="p-price first-row"><p>{{$p->shipping_address}}</p></td>
                                    <td class="p-price first-row"><p>{{$p->telephone}}</p></td>
                                    <td class="p-price first-row"><p>{{$p->grand_total}}</p></td>
                                    <td class="p-price first-row"><p>{{$p->payment_method}}</p></td>
                                    <td class="p-price first-row"><p>{{$p->created_at}}</p></td>
                                    <td class="p-price first-row">

                                        <form action="{{url("/viewOrder/{$p->id}")}}">
                                            <button type="submit" class="btn btn-primary btn-md btn-block">See details</button>
                                        </form>
                                        <form action="{{url("/add-order/{$p->id}")}}"  novalidate="novalidate">
                                            <button type="submit" class="btn btn-warning btn-md btn-block">Repurchase</button>
                                        </form>
                                        <form action="{{url("/deleteOrder/{$p->id}")}}" method="get">
                                            <button type="submit" class="btn btn-light btn-md btn-block">Not buy</button>
                                        </form>
                                    </td>


                                </tr>

                                </tbody>
                            @empty
                                <P>Không có sản phẩm nào </P>
                            @endforelse
                        </table>

                    </div>
                    <div class="row">

                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">

                                <a href="{{url("/")}}" class="proceed-btn">Continue Shopping</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @endsection
