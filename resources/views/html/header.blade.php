<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{url('/')}}"> <img src="{{asset("img/logo.png")}}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url("/")}}">Home</a>
                            </li>
{{--                             @foreach(\App\Category::all() as $c)--}}
{{--                                <li><a href="{{url("/list/{$c->id}")}}">{{$c->category_name}}</a></li>--}}
{{--                               @endforeach--}}


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                            @foreach(\App\Category::all() as $c)
                                <a class="dropdown-item" href="{{url("/list/{$c->id}")}}">{{$c->category_name}}</a>
                            @endforeach

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="{{url("/cart")}}">shopping cart</a>
                                    <a class="dropdown-item" href="{{url("/checkout")}}">product checkout</a>
                                    <a class="dropdown-item" href="{{url('/order-history/{id}')}}">History Purchase</a>

                                </div>
                            </li>
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"--}}
{{--                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    blog--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">--}}
{{--                                    <a class="dropdown-item" href="blog.html"> blog</a>--}}
{{--                                    <a class="dropdown-item" href="single-blog.html">Single blog</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_3"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   My Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="{{url("/login")}}">Login/Register</a>
                                    <a class="dropdown-item" href="{{url("/logout")}}">Logout</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="hearer_icon d-flex">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href=""><i class="ti-heart"></i></a>
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cart-plus"></i>
                            </a>
                            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="single_product">

                                </div>
                            </div> -->

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
