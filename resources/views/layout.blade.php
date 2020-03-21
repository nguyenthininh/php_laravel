<!doctype html>
<html lang="zxx">

@includeIf('html.head')

<body>
<!--::header part start::-->
@includeIf('html.header')
<!-- Header part end-->

<!-- banner part start-->
@includeIf('html.banner')
<!-- banner part start-->

<!-- product_list part start-->
        @yield('home')
<!-- product_list part end-->


<section class="feature_part padding_top">
    <div class="container">
        @yield('product')
    </div>
</section>

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

<!--================Checkout Area =================-->
<section class="checkout_area padding_top">
    <div class="container">
        @yield('checkout')
    </div>
</section>
<!--================End Checkout Area =================-->


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
