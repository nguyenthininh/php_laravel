@extends('layout');
@section('title',"check-success")
@section('content')

    <h3 style="color: red;">Bạn đã mua hàng thành công</h3>

    <div class="cupon_text float-right">

        <a class="btn_1" href="{{url("/checkout-success")}}">Back</a>
    </div>


    @endsection
