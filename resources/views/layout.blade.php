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
<section class="product-section spad">
        @yield('content')
</section>
<!-- product_list part end-->


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
<script type="text/javascript">
    (function() {

        window.inputNumber = function(el) {

            var min = el.attr('min') || false;
            var max = el.attr('max') || false;

            var els = {};

            els.dec = el.prev();
            els.inc = el.next();

            el.each(function() {
                init($(this));
            });

            function init(el) {

                els.dec.on('click', decrement);
                els.inc.on('click', increment);

                function decrement() {
                    var value = el[0].value;
                    value--;
                    if(!min || value >= min) {
                        el[0].value = value;
                    }
                }

                function increment() {
                    var value = el[0].value;
                    value++;
                    if(!max || value <= max) {
                        el[0].value = value++;
                    }
                }
            }
        }
    })();

    inputNumber($('.input-number'));
</script>
</body>

</html>
