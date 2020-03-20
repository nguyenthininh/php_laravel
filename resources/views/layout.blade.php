
<!doctype html>
<html lang="zxx">

@include('html.head')

<body>
<!--::header part start::-->
@includeIf('html.header')
<!-- Header part end-->

<!-- banner part start-->
@includeIf('html.banner')
<!-- banner part start-->

<!-- product_list part start-->
<section class="product_list best_seller section_padding">
    <div class="container">
        @yield('home')
    </div>
</section>
<!-- product_list part end-->

<!-- awesome_shop start-->

<!-- awesome_shop part start-->

<!-- feature_part start-->
<section class="feature_part" style="margin-top: -130px;">
    <div class="container">
        @yield('product')
    </div>
</section>
<!-- upcoming_event part start-->

<!-- product_list start-->
<section class="product_list section_padding">
    <div class="container">
        @yield('detail')
    </div>
</section>
<!-- product_list part start-->


<!--================Cart Area =================-->
<section class="cart_area section_padding">
    <div class="container">
        @yield('cart')
    </div>
</section>
<!--================End Cart Area =================-->



{{--<section class="feature_part padding_top">--}}
{{--    <div class="container">--}}
{{--        @yield('product')--}}
{{--    </div>--}}
{{--</section>--}}

<!-- subscribe_area part start-->
<section class="subscribe_area section_padding" style="margin-top: -120px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="subscribe_area_text text-center">
                    <h5>Join Our Newsletter</h5>
                    <h2>Subscribe to get Updated
                        with new offers</h2>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="enter email address"
                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::subscribe_area part end::-->

<!-- subscribe_area part start-->
<section class="client_logo padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="single_client_logo">
                    <img src=" {{asset("img/client_logo/client_logo_1.png")}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset("img/client_logo/client_logo_2.png")}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset("img/client_logo/client_logo_3.png")}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset("img/client_logo/client_logo_4.png")}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset("img/client_logo/client_logo_5.png")}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset("img/client_logo/client_logo_3.png")}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset("img/client_logo/client_logo_1.png")}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset("img/client_logo/client_logo_2.png")}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset("img/client_logo/client_logo_3.png")}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset("img/client_logo/client_logo_4.png")}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--::subscribe_area part end::-->

<!--::footer_part start::-->
@includeFirst(['html.footer','footer'])
<!--::footer_part end::-->

<!-- jquery plugins here-->

<script src="{{asset("js/jquery-1.12.1.min.js")}}"></script>
<!-- popper js -->
<script src="{{asset("js/popper.min.js")}}"></script>
<!-- bootstrap js -->
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<!-- easing js -->
<script src="{{asset("js/jquery.magnific-popup.js")}}"></script>
<!-- swiper js -->
<script src="{{asset("js/swiper.min.js")}}"></script>
<!-- swiper js -->
<script src="{{asset("js/masonry.pkgd.js")}}"></script>
<!-- particles js -->
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/jquery.nice-select.min.js")}}"></script>
<!-- slick js -->
<script src="{{asset("js/slick.min.js")}}"></script>
<script src="{{asset("js/jquery.counterup.min.js")}}p"></script>
<script src="{{asset("js/waypoints.min.js")}}"></script>
<script src="{{asset("js/contact.js")}}"></script>
<script src="{{asset("js/jquery.ajaxchimp.min.js")}}"></script>
<script src="{{asset("js/jquery.form.js")}}"></script>
<script src="{{asset("js/jquery.validate.min.js")}}"></script>
<script src="{{asset("js/mail-script.js")}}"></script>
<script src="{{asset("js/stellar.js")}}"></script>
<script src="{{asset("js/price_rangs.js")}}"></script>
<!-- custom js -->
<script src="{{asset("js/custom.js")}}"></script>
</body>

</html>
