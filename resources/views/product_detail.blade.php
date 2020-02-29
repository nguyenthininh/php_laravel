@extends('layout')

@section('title',"chi tiết sản phẩm")
@section('detail')
    <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
            <div class="product_slider_img">
                <div id="vertical">
                    <div data-thumb="img/product/single-product/product_1.png">
                        <img src="img/product/single-product/product_1.png" />
                    </div>
                    <div data-thumb="img/product/single-product/product_1.png">
                        <img src="img/product/single-product/product_1.png" />
                    </div>
                    <div data-thumb="img/product/single-product/product_1.png">
                        <img src="img/product/single-product/product_1.png" />
                    </div>
                    <div data-thumb="img/product/single-product/product_1.png">
                        <img src="img/product/single-product/product_1.png" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-xl-4">
            <div class="s_product_text">
                <h5>previous <span>|</span> next</h5>
                <h3>Faded SkyBlu Denim Jeans</h3>
                <h2>$149.99</h2>
                <ul class="list">
                    <li>
                        <a class="active" href="#">
                            <span>Category</span> : Household</a>
                    </li>
                    <li>
                        <a href="#"> <span>Availibility</span> : In Stock</a>
                    </li>
                </ul>
                <p>
                    First replenish living. Creepeth image image. Creeping can't, won't called.
                    Two fruitful let days signs sea together all land fly subdue
                </p>
                <div class="card_area d-flex justify-content-between align-items-center">
                    <div class="product_count">
                        <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="input-number" type="text" value="1" min="0" max="10">
                        <span class="number-increment"> <i class="ti-plus"></i></span>
                    </div>
                    <a href="#" class="btn_3">add to cart</a>
                    <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
                </div>
            </div>
        </div>
    </div>
@endsection