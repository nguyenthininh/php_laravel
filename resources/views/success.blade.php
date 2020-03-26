@extends('layout');
@section('title',"check-success")
@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Success</h2>
                            <p>Home <span>-</span>Success</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title">
                        <h4>Checkout Success</h4>
                        <p>
                            Congratulations on your successful purchase pressing <a href="{{asset("/")}}">continue</a> to return to the homepage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



{{--    <h3 style="color: red;">Bạn đã mua hàng thành công</h3>--}}

{{--    <div class="cupon_text float-right">--}}

{{--        <a class="btn_1" href="{{url("/checkout-success")}}">Back</a>--}}
{{--    </div>--}}


    @endsection
