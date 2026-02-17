<!DOCTYPE html>
<html lang="en">

<head>

    @php
        $seosetting = \App\SeoSetting::first();
    @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', $seosetting->description)" />
    <meta name="keywords" content="@yield('meta_keywords', $seosetting->keyword)">
    <meta name="author" content="{{ $seosetting->author }}">
    <meta name="sitemap_link" content="{{ $seosetting->sitemap_link }}">

    @yield('meta')

    <!-- Favicon -->


    {{-- <title>@yield('meta_title', config('app.name', 'Laravel'))</title> --}}

    <!-- Site Title -->
    <title>The Brand Boxx</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   
    <link type="image/x-icon" href="{{ asset(\App\GeneralSetting::first()->favicon) }}" rel="shortcut icon" />
    
    <script type="text/javascript">
        window.addEventListener("load", function() {
            document.querySelector('body').classList.add('loaded');
        });
    </script>
    {{-- <link href="{{ asset('frontend/leap-assets/assets/css/theme.css') }}" rel="stylesheet" type="text/css" media="all" /> --}}
    {{-- <link href="{{ asset('frontend/dist/css/develop-style.css') }}" rel="stylesheet" type="text/css" media="all" /> --}}
    <link href="{{ asset('frontend/dist/css/custom-g.css') }}" rel="stylesheet" type="text/css" media="all" />

    {{-- active theme --}}

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" media="none"
        onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="{{ asset('frontend/css/line-awesome.min.css') }}" type="text/css" media="none"
        onload="if(media!='all')media='all'">

    <link type="text/css" href="{{ asset('frontend/css/bootstrap-tagsinput.css') }}" rel="stylesheet" media="none"
        onload="if(media!='all')media='all'">
    <link type="text/css" href="{{ asset('frontend/css/jodit.min.css') }}" rel="stylesheet" media="none"
        onload="if(media!='all')media='all'">
    <link type="text/css" href="{{ asset('frontend/css/sweetalert2.min.css') }}" rel="stylesheet" media="none"
        onload="if(media!='all')media='all'">
    <link type="text/css" href="{{ asset('frontend/css/slick.css') }}" rel="stylesheet" media="all">
    <link type="text/css" href="{{ asset('frontend/css/jquery.share.css') }}" rel="stylesheet" media="none"
        onload="if(media!='all')media='all'">
    <link type="text/css" href="{{ asset('frontend/css/intlTelInput.min.css') }}" rel="stylesheet" media="none"
        onload="if(media!='all')media='all'">
    <link type="text/css" href="{{ asset('css/spectrum.css') }}" rel="stylesheet" media="none"
        onload="if(media!='all')media='all'">

    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/brandbox/css/bootstrap.min.css') }}"
        media="all">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/brandbox/css/owl.carousel.min.css') }}"
        media="all">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/brandbox/css/style.css') }}" media="all">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/brandbox/css/responsive.min.css') }}"
        media="all">
    {{-- <link type="text/css" rel="preconnect" href="https://fonts.googleapis.com">
<link type="text/css" rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link type="text/css" href="https://fonts.googleapis.com/css2?family=Inter&family=Jost:wght@400;600&family=Rambla:wght@400;700&display=swap" rel="stylesheet"> --}}



    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WDFKG4R27K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WDFKG4R27K');
</script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6178008486aee40a57386f11/1fiuc41ll';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    
</head>

<body id="overlaymenu" class="home-page">
    <div class="loader">
        <div class="loading-animation"></div>
    </div>

    {{-- --------------------new header------------------- --}}
    {{-- <section class="navbg p-0">
        <div class="px-0">
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg navbar-inverse p-0">
                    <a class="navbar-brand d-none d-lg-block p-3 px-5" href="{{ route('home') }}"><img src="{{ asset('frontend/bluelitebranding/assets/img/Logo.png') }}"></a>
                    <a class="navbar-brand d-block d-lg-none pb-3" href="{{ route('home') }}"><img class="p-4" src="{{ asset('frontend/bluelitebranding/assets/img/Logo-mob.png') }}"></a>
    
                    <button class="navbar-toggler px-4" style="box-shadow: none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <img id="nav-togg" onclick="changeImg()"
                                src="{{ asset('frontend/bluelitebranding/assets/img/nav-toggle.png') }}" alt="">
                        </span>
                    </button>
                    <div class="mob-collap collapse navbar-collapse text-center justify-content-md-end" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-right ml-auto px-4">
                            <li class="nav-item dropdown d-flex align-items-center py-3 px-md-2">
                                <a class="nav-link navtext d-none d-md-block" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Services</a>
                                <a class="nav-link navtext d-block d-md-none" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services<img class="img-fluid ps-1 ps-md-2 pt-1" src="{{ asset('frontend/bluelitebranding/assets/img/ser-dropdown.png') }}"></a>
                                <ul class="dropdown-menu dropdown-menu-cus p-2" style="margin-top: 0!important;" aria-labelledby="navbarDropdown">
                                    <li><a href="{{ route('seo') }}">SEO</a></li>
                                    <li><a href="{{ route('ppc') }}">PPC</a></li>
                                    <li><a href="{{ route('orm') }}">ORM</a></li>
                                    <li><a href="{{ route('wdd') }}">Web Design & Development</a></li>
                                    <li><a href="{{ route('social') }}">Social Media</a></li>
                                    <li><a href="{{ route('em') }}">Email Marketing</a></li>

                                </ul>
                            </li>
                            <li class="nav-item d-flex align-items-center py-3 px-md-2">
                                <a class="nav-link navtext" href="{{ route('aboutus') }}">About Us</a>
                            </li>
                            <li class="nav-item d-flex align-items-center py-3 px-md-2">
                                <a class="nav-link navtext d-none d-md-block" href="{{ route('contactus') }}">Support</a>
                                <a class="nav-link navtext d-block d-md-none" href="{{ route('contactus') }}">Contact Us</a>
                            </li>
                            <li class="nav-item d-flex align-items-center py-3 px-md-2">
                                <a class="nav-link navtext" href="{{ route('faqs') }}">FAQs</a>
                            </li>
                            @auth
                            <li class="nav-item d-flex align-items-center py-3 px-md-2 d-block d-md-none">
                                <a class="nav-link navtext" href="{{ route('dashboard') }}">My Account</a>
                            </li>
                            <li class="nav-item d-flex align-items-center py-3 px-md-2 d-block d-md-none">
                                <a class="nav-link navtext" href="{{ route('logout') }}">Logout</a>
                            </li>
                            @else
                            <li class="nav-item d-flex align-items-center py-3 px-md-2 d-block d-md-none">
                                <a class="nav-link navtext" href="{{ route('user.login') }}">Login</a>
                            </li>
                            <li class="nav-item d-flex align-items-center py-3 px-md-2 d-block d-md-none">
                                <a class="nav-link navtext" href="{{ route('user.login') }}">Signup</a>
                            </li>
                            @endauth
                          
                          
                          
                          
                          
                          <li class="nav-item px-md-3 d-flex header-text nav-cart dropdown">
                                  @php
                                      if(Session::has('currency_code')){
                                          $currency_code = Session::get('currency_code');
                                      }
                                      else{
                                          $currency_code = \App\Currency::findOrFail(\App\BusinessSetting::where('type', 'system_default_currency')->first()->value)->code;
                                      }
                                  @endphp
                                  <a href="#" class="nav-link  cta" href="#" role="button" data-toggle="dropdown" style="color:#ffffff;" aria-haspopup="false" aria-expanded="false">
                                                  {{-- {{ \App\Currency::where('code', $currency_code)->first()->name }} --}
                    {{ $currency_code }}
                    {{ \App\Currency::where('code', $currency_code)->first()->symbol }}
                    <i class="la la-angle-down" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown" id="currency-change"
                        style="color:#ffffff;">
                        @foreach (\App\Currency::where('status', 1)->get() as $key => $currency)
                            <a href="#" class="dropdown-item fade-page cta"
                                data-currency="{{ $currency->code }}">{{ $currency->code }} ({{ $currency->symbol }})
                            </a>
                        @endforeach
                    </div>
                    </li>






                    <li class="nav-item d-flex align-items-center py-3 px-md-2" id="cart_items">
                        {{-- Desktop Cart Starts --}
                        <a href="#" class="nav-link navtext" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="d-md-none">My </span>Cart
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right px-3 py-2">
                            <li>
                                <div class="dropdown-cart px-0" id="dropdown-cart">
                                    @if (Session::has('cart'))
                                        @if (count($cart = Session::get('cart')) > 0)
                                            <div class="dc-header">
                                                <h3 class="heading heading-6 strong-700 cart-head-title">{{ __('Added to cart') }}
                                                </h3>
                                            </div>

                                            <div class="order-summary-cart cart-details">
                                                <div class="order-summary-details">
                                                    <div class="dropdown-cart-items c-scrollbar">
                                                        @php
                                                            $total = 0;
                                                        @endphp
                                                        @foreach ($cart as $key => $cartItem)
                                                            @php
                                                                $product = \App\Product::find($cartItem['id']);
                                                                $total = $total + $cartItem['price'] * $cartItem['quantity'];
                                                            @endphp
                                                            <div class="order-div">
                                                                <p class="product-name">{{ __($product->name) }}<span
                                                                        style="float:right;">
                                                                        <button class="btn"
                                                                            onclick="removeFromCart({{ $key }})"
                                                                            style="min-width: 16px;min-height: 16px;line-height: 0px;">
                                                                            <i class="la la-close"></i>
                                                                        </button>
                                                                    </span></p>
                                                                <small class="duration">{{ $product->subscription }}</small>
                                                                <small class="duration ms-3">x{{ $cartItem['quantity'] }}</small>
                                                                <p class="pro-price">
                                                                    {{ single_price($cartItem['price'] * $cartItem['quantity']) }}</p>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dc-item py-3">
                                                <div class="total-price-div d-none d-lg-block d-md-block">
                                                    <h5 class="text-center pb-3"><span class="total-p">Total: </span><span
                                                            class="total-price">{{ single_price($total) }}</span></h5>
                                                </div>
                                                <div class="total-price-div d-block d-lg-none d-md-none">
                                                    <h5 class="text-center"><span class="total-p">Amount Paid: </span><span
                                                            class="total-price">{{ single_price($total) }}</span></h5>
                                                </div>
                                                <div class="cart-btn d-flex justify-content-around mb-2">
                                                    <a href="{{ route('home') }}" class="btn-blue d-flex align-items-center px-2"
                                                        style="text-decoration:none !important;">Continue Shopping</a>
                                                    <a href="{{ route('checkout.shipping_info') }}"
                                                        class="btn-blue d-flex align-items-center px-2"
                                                        style="text-decoration:none !important;">Checkout</a>
                                                </div>
                                            </div>
                                        @else
                                            <div class="dc-header">
                                                <h3 class="heading cart-head-title heading-6 strong-700">
                                                    {{ __('Your Cart is empty') }}</h3>
                                            </div>
                                        @endif
                                    @else
                                        <div class="dc-header">
                                            <h3 class="heading cart-head-title heading-6 strong-700">{{ __('Your Cart is empty') }}
                                            </h3>
                                        </div>
                                    @endif
                                </div>
                            </li>
                        </ul>
                        {{-- Desktop Cart Ends --}
                        <!--<a class="nav-link navtext d-block d-md-none" href="#">My Cart</a>-->
                    </li>

                    @auth
                        <li class="nav-item d-flex align-items-center py-3 px-md-2 d-none d-md-block">
                            <a class="nav-link navtext" href="{{ route('dashboard') }}">My Account</a>
                        </li>
                    @else
                        <li class="nav-item d-flex align-items-center py-3 px-md-2 d-none d-md-block">
                            <a class="nav-link navtext" href="{{ route('user.login') }}">Login/Signup</a>
                        </li>
                    @endauth
                    </ul>
                    </div>
                    </nav>
                    </div>
                    </div>
    </section> --}}

    {{-- ------------------------new header----------------------- --}}
    
    {{-- BrandBox Header --}}

    <div class="topheader">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('frontend/brandbox/images/logo.svg') }}" class="img-fluid" alt="">
                        </a>
                    </div>

                    <div class="col-lg-7 col-md-8 col-sm-6 col-6">
                        <div class="view-mobilemenu d-block d-sm-block d-md-block d-lg-none">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#mobilemenu" class="mobilemenu">Menu</a>
                        </div>

                        <div class="navigation-menu d-none d-sm-none d-md-none d-lg-block">
                          
                            <ul>
                              
                                <li>
                                    <a href="{{ route('aboutus') }}">About Us</a>
                                </li>

                                <li>
                                    <a href="{{ route('contactus') }}">Contact Us</a>
                                </li>
                              

                                <li>
                                    <a href="{{ route('faqs') }}">FAQs</a>
                                </li>
                               

                                <li class="nav-item  dropdown btn-purple" id="cart_items">
                                            <a href="#" class="nav-link " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                           
                                            My cart
                                                                                                                                               
                                                
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right px-0">
                                                <li>
                                                    <div class="dropdown-cart px-3" id="dropdown-cart">
                                                        @if(Session::has('cart'))
                                                            @if(count($cart = Session::get('cart')) > 0)
                                                                <div class="dc-header">
                                                                    <h3 class="heading heading-6 strong-700 cart-head-title">{{__('Added to cart')}}</h3>
                                                                </div>
                                                                
                                                            <div class="order-summary-cart cart-details">
                                                              <div class="order-summary-details">
                                                                <div class="dropdown-cart-items c-scrollbar">
                                                                    @php
                                                                        $total = 0;
                                                                    @endphp
                                                                    @foreach($cart as $key => $cartItem)
                                                                        @php
                                                                            $product = \App\Product::find($cartItem['id']);
                                                                            $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                                        @endphp
                                                                                 <div class="order-div">
                                                                                     <p class="product-name">{{ __($product->name) }}<span style="float:right;">
                                                                                         <button class="btn" onclick="removeFromCart({{ $key }})" style="min-width: 16px;min-height: 16px;line-height: 0px; color:#FE450A;">
                                                                                            <i class="la la-close"></i>
                                                                                        </button>
                                                                                        </span></p>
                                                                                     <small class="duration">{{ $product->subscription }}</small>
                                                                                     <small class="duration ms-3">x{{ $cartItem['quantity'] }}</small>
                                                                                     <p class="pro-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</p>
                                                                                 </div>
                                                                                 @endforeach
                                                                            
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dc-item py-3">
                                                                    <div class="total-price-div d-none d-lg-block d-md-block">
                                                                         <h5><span class="total-p">Total: </span><span class="total-price">{{ single_price($total) }}</span></h5>
                                                                     </div>
                                                                     <div class="total-price-div d-block d-lg-none d-md-none">
                                                                         <h5><span class="total-p">Amount Paid:  </span><span class="total-price">{{ single_price($total) }}</span></h5>
                                                                     </div>
                                                                     <div class="cart-btn d-flex justify-content-around mb-4">
                                                                         <a href="{{ route('home') }}" class="btn btn-tertiary ">Continue Shopping</a>
                                                                         <a href="{{ route('checkout.shipping_info') }}" class="btn btn-tertiary-border ">Checkout</a>
                                                                     </div>
                                                                </div>
                                                            @else
                                                                <div class="dc-header">
                                                                    <h3 class="heading cart-head-title heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                                                </div>
                                                            @endif
                                                        @else
                                                            <div class="dc-header">
                                                                <h3 class="heading cart-head-title heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </li>
                                               
                                            </ul>
                                  
                                        </li>
                              
                             

                                @auth
                                <li>
                                    <a href="{{ route('dashboard') }}">My Account</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('user.login') }}">Login</a>
                                </li>
                                @endauth
                              <li class="nav-item">
                                    @php
                                        if(Session::has('currency_code')){
                                            $currency_code = Session::get('currency_code');
                                        }
                                        else{
                                            $currency_code = \App\Currency::findOrFail(\App\BusinessSetting::where('type', 'system_default_currency')->first()->value)->code;
                                        }
                                    @endphp 
                                    <select onchange="getval(this);">
                                        @foreach (\App\Currency::where('status', 1)->get() as $key => $currency)
                                            <option data-currency="{{ $currency->code }}" value="{{ $currency->code }}" {{ $currency->code == $currency_code ? 'selected' : '' }}>{{ $currency->code }}({{ $currency->symbol }})</option>
                                        @endforeach
                                    </select>
                                </li>
                              
                            </ul>
                          
                         
                        </div>
                    </div>

                         
                    <div class="col-lg-3 col-md-2 col-sm-6">
                        <div class="submenu-services d-none d-sm-none d-md-none d-lg-block">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#servicesmenu" class="select-servicemenu">Select a service</a>
                            <div class="collapse" id="servicesmenu">
                                <ul>
                                    <li><a href="{{ route('seo') }}">search engine optimisation</a></li>
                                    <li><a href="{{ route('ppc') }}">pay per click services</a></li>
                                    <li><a href="{{ route('orm') }}">online reputation management</a></li>
                                    <li><a href="{{ route('wdd') }}">web design & development</a></li>
                                    <li><a href="{{ route('social') }}">social media services</a></li>
                                    <li><a href="{{ route('em') }}">email marketing services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    
    
    
    <div class="collapse" id="mobilemenu" style="z-index:1;">
        <ul>
            <li><a href="#" data-bs-toggle="collapse" data-bs-target="#subservicemenu">services</a>
                <ul class="dropdown-menu servicesMenu collapse" id="subservicemenu">
                    <li>
                        <a href="#" data-bs-toggle="dropdown" data-bs-target="#mobilemenu" class="close_submenu">Go Back</a>
                    </li>
    
                    <li><a href="{{ route('seo') }}">search engine optimisation</a></li>
                    <li><a href="{{ route('ppc') }}">pay per click services</a></li>
                    <li><a href="{{ route('orm') }}">online reputation management</a></li>
                    <li><a href="{{ route('wdd') }}">web design & development</a></li>
                    <li><a href="{{ route('social') }}">social media services</a></li>
                    <li><a href="{{ route('em') }}">email marketing services</a></li>
                </ul>
            </li>
            <li><a href="{{ route('aboutus') }}">about us</a></li>
            <li><a href="{{ route('contactus') }}">contact us</a></li>
            <li><a href="{{ route('faqs') }}">faqs</a></li>
            <li class="nav-item  dropdown btn-purple" id="cart_items">
                <a href="#" class="nav-link " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
               
                View cart
                                                                                                                   
                    
                </a>
                <ul class="dropdown-menu dropdown-menu-right px-0">
                    <li>
                        <div class="dropdown-cart px-3" id="dropdown-cart">
                            @if(Session::has('cart'))
                                @if(count($cart = Session::get('cart')) > 0)
                                    <div class="dc-header">
                                        <h3 class="heading heading-6 strong-700 cart-head-title">{{__('Added to cart')}}</h3>
                                    </div>
                                    
                                <div class="order-summary-cart cart-details">
                                  <div class="order-summary-details">
                                    <div class="dropdown-cart-items c-scrollbar">
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach($cart as $key => $cartItem)
                                            @php
                                                $product = \App\Product::find($cartItem['id']);
                                                $total = $total + $cartItem['price']*$cartItem['quantity'];
                                            @endphp
                                                     <div class="order-div">
                                                         <p class="product-name">{{ __($product->name) }}<span style="float:right;">
                                                             <button class="btn" onclick="removeFromCart({{ $key }})" style="min-width: 16px;min-height: 16px;line-height: 0px; color:#FE450A;">
                                                                <i class="la la-close"></i>
                                                            </button>
                                                            </span></p>
                                                         <small class="duration">{{ $product->subscription }}</small>
                                                         <small class="duration ms-3">x{{ $cartItem['quantity'] }}</small>
                                                         <p class="pro-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</p>
                                                     </div>
                                                     @endforeach
                                                
                                                </div>
                                        </div>
                                    </div>
                                    <div class="dc-item py-3">
                                        <div class="total-price-div d-none d-lg-block d-md-block">
                                             <h5><span class="total-p">Total: </span><span class="total-price">{{ single_price($total) }}</span></h5>
                                         </div>
                                         <div class="total-price-div d-block d-lg-none d-md-none">
                                             <h5><span class="total-p">Amount Paid:  </span><span class="total-price">{{ single_price($total) }}</span></h5>
                                         </div>
                                         <div class="cart-btn d-flex justify-content-around mb-4">
                                             <a href="{{ route('home') }}" class="btn btn-tertiary ">Continue Shopping</a>
                                             <a href="{{ route('checkout.shipping_info') }}" class="btn btn-tertiary-border ">Checkout</a>
                                         </div>
                                    </div>
                                @else
                                    <div class="dc-header">
                                        <h3 class="heading cart-head-title heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                    </div>
                                @endif
                            @else
                                <div class="dc-header">
                                    <h3 class="heading cart-head-title heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                </div>
                            @endif
                        </div>
                    </li>
                </ul>
            </li>
        
            @auth
            <li><a href="{{ route('dashboard') }}">My Account</a></li>
            @else
            <li><a href="{{ route('user.login') }}">login</a></li>
            @endauth
          <li class="nav-item">
                                    @php
                                        if(Session::has('currency_code')){
                                            $currency_code = Session::get('currency_code');
                                        }
                                        else{
                                            $currency_code = \App\Currency::findOrFail(\App\BusinessSetting::where('type', 'system_default_currency')->first()->value)->code;
                                        }
                                    @endphp 
                                    <select onchange="getval(this);">
                                        @foreach (\App\Currency::where('status', 1)->get() as $key => $currency)
                                            <option data-currency="{{ $currency->code }}" value="{{ $currency->code }}" {{ $currency->code == $currency_code ? 'selected' : '' }}>{{ $currency->code }}({{ $currency->symbol }})</option>
                                        @endforeach
                                    </select>
                                </li>
        </ul>
    </div>

    {{-- BrandBox Header --}}

    @yield('content')
    </div>

    @include('frontend.inc.footer')

    @include('frontend.partials.modal')

    @if (\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1)
        <div id="fb-root"></div>
        <!-- Your customer chat code -->
        <div class="fb-customerchat" attribution=setup_tool page_id="{{ env('FACEBOOK_PAGE_ID') }}">
        </div>
    @endif

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size"
            role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <!--<button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">-->
                <!--    <span aria-hidden="true">&times;</span>-->
                <!--</button>-->
                <div id="addToCart-modal-body" style="background: #2D2D2D;">

                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------- leap scripts after </footer> ----------------------------------------------------------->

    {{-- <a href="#" class="btn back-to-top btn-primary btn-round" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <img class="icon" src="{{ asset('frontend/leap-assets/assets/img/icons/theme/navigation/arrow-up.svg')}}" alt="arrow-up icon" data-inject-svg />
    </a> --}}
    <script src="{{ asset('frontend/brandbox/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/ocean/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/brandbox/js/app.js') }}"></script>
    <script src="{{ asset('frontend/brandbox/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/ocean/dist/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/ocean/dist/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/ocean/dist/js/flickity.pkgd.min.js') }}"></script>
    {{-- <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/bootstrap.js')}}"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/aos.js')}}"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/clipboard.js')}}"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/jquery.fancybox.min.js')}}"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/flatpickr.min.js')}}"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/flickity.pkgd.min.js')}}"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/ion.rangeSlider.min.js')}}"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/jarallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/jarallax-video.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/jarallax-element.min.js')}}"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/jquery.countdown.min.js')}}"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/jquery.smartWizard.min.js')}}"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/plyr.polyfilled.min.js')}}"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/prism.js')}}"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/scrollMonitor.js')}}"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/smooth-scroll.polyfills.min.js')}}"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/svg-injector.umd.production.js')}}"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/twitterFetcher_min.js')}}"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/typed.min.js')}}"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/theme.js')}}"></script>
    <!-- jquery.shorten.js -->
    <script type="text/javascript" src="{{ asset('frontend/leap-assets/assets/js/jquery.shorten.js')}}"></script> --}}

    <script type="text/javascript">
        // This script appears only in the demo - it disables forms with no action attribute to prevent 
        // navigating away from the page.
        jQuery("form:not([action])").on('submit', function() {
            return false;
        });
    </script>
    <!--------------------------------------------- ./leap scripts----------------------------------------------------------->
    <!------------------ active theme scripts ------------------------------>

    <!-- SCRIPTS -->
    <!--<a href="#" class="back-to-top btn-back-to-top"></a>-->

    <!-- Core -->
    <!--<script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>-->
    <!--<script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>-->

    <!-- Plugins: Sorted A-Z -->
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/nouislider.min.js') }}"></script>


    <script src="{{ asset('frontend/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>

    <script src="{{ asset('frontend/js/jquery.share.js') }}"></script>
    {{-- <script src="{{ asset('frontend/brandbox/js/jquery.min.js') }}"></script> --}}


<script>
    $('.submenu-services').on('click', 'a', function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }

            /* if ($(this).attr('class', 'active')) {
                $(this).removeClass('active');

            } */
        });



    $('.mobilemenu').on('click', function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }

        /* if ($(this).attr('class', 'active')) {
            $(this).removeClass('active');

        } */
    });


    $(document).ready(function() {
        $('.homemobslider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })

    })


    const scrollElements = document.querySelectorAll(".js-scroll");

    const elementInView = (el, dividend = 1) => {
        const elementTop = el.getBoundingClientRect().top;

        return (
            elementTop <=
            (window.innerHeight || document.documentElement.clientHeight) / dividend
        );
    };

    const elementOutofView = (el) => {
        const elementTop = el.getBoundingClientRect().top;

        return (
            elementTop > (window.innerHeight || document.documentElement.clientHeight)
        );
    };

    const displayScrollElement = (element) => {
        element.classList.add("scrolled");
    };

    const hideScrollElement = (element) => {
        element.classList.remove("scrolled");
    };

    const handleScrollAnimation = () => {
        scrollElements.forEach((el) => {
            if (elementInView(el, 1.25)) {
                displayScrollElement(el);
            } else if (elementOutofView(el)) {
                hideScrollElement(el)
            }
        })
    }

    window.addEventListener("scroll", () => {
        handleScrollAnimation();
    });
</script>



    <script>
        $(document).ready(function() {
            $(".inactive").click(function() {
                $(".mobile-slide-menu").fadeIn("slow");
            });
            $(".menuactive").click(function() {
                $(".mobile-slide-menu").fadeOut("slow");
            });
        });
    </script>





    <script>
        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function() {
                    if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                        $.post('{{ route('category.elements') }}', {
                            _token: AIZ.data.csrf,
                            id: $(el).data('id')
                        }, function(data) {
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}', {
                            _token: AIZ.data.csrf,
                            locale: locale
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('{{ route('currency.change') }}', {
                            _token: AIZ.data.csrf,
                            currency_code: currency_code
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function() {
                    if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                        $.post('{{ route('category.elements') }}', {
                            _token: '{{ csrf_token() }}',
                            id: $(el).data('id')
                        }, function(data) {
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-item a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}', {
                            _token: '{{ csrf_token() }}',
                            locale: locale
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                //$('#currency-change dropdown-item a').each(function() { 
                $('#currency-change a.dropdown-item').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        console.log(currency_code);
                        $.post('{{ route('currency.change') }}', {
                            _token: '{{ csrf_token() }}',
                            currency_code: currency_code
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function() {
            search();
        });

        $('#search').on('focus', function() {
            search();
        });

        function search() {
            var search = $('#search').val();
            if (search.length > 0) {
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('{{ route('search.ajax') }}', {
                    _token: '{{ @csrf_token() }}',
                    search: search
                }, function(data) {
                    if (data == '0') {
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html(
                            'Sorry, nothing found for <strong>"' + search + '"</strong>');
                        $('.search-preloader').addClass('d-none');

                    } else {
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            } else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        function updateNavCart() {
            $.post('{{ route('cart.nav_cart') }}', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                // console.log(data);
                $('#cart_items').html(data);
            });
        }

        function removeFromCart(key) {
            $.post('{{ route('cart.removeFromCart') }}', {
                _token: '{{ csrf_token() }}',
                key: key
            }, function(data) {
                updateNavCart();
                $('#cart-summary').html(data);
                showFrontendAlert('success', 'Item has been removed from cart');
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
            });
        }

        function addToCompare(id) {
            $.post('{{ route('compare.addToCompare') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('#compare').html(data);
                showFrontendAlert('success', 'Item has been added to compare list');
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
            });
        }

        function addToWishList(id) {
            @if (Auth::check() && (Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller'))
                $.post('{{ route('wishlists.store') }}', {
                    _token: '{{ csrf_token() }}',
                    id: id
                }, function(data) {
                    if (data != 0) {
                        $('#wishlist').html(data);
                        showFrontendAlert('success', 'Item has been added to wishlist');
                    } else {
                        showFrontendAlert('warning', 'Please login first');
                    }
                });
            @else
                showFrontendAlert('warning', 'Please login first');
            @endif
        }

        function showAddToCartModal(id) {
            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal("show");
            $('.c-preloader').show();
            $.post('{{ route('cart.showCartModal') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                /*$('.xzoom, .xzoom-gallery').xzoom({
                    Xoffset: 20,
                    bg: true,
                    tint: '#000',
                    defaultScale: -1
                });*/
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function() {
            getVariantPrice();
        });

        function getVariantPrice() {
            if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
                $.ajax({
                    type: "POST",
                    url: '{{ route('products.variant_price') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('#available-quantity').html(data.quantity);
                        $('.input-number').prop('max', data.quantity);
                        //console.log(data.quantity);
                        if (parseInt(data.quantity) < 1) {
                            $('.buy-now').hide();
                            $('.add-to-cart').hide();
                        } else {
                            $('.buy-now').show();
                            $('.add-to-cart').show();
                        }
                    }
                });
            }
        }

        function checkAddToCartValidity() {
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                count++;
            });

            if ($('#option-choice-form input:radio:checked').length == count) {
                return true;
            }

            return false;
        }

        function addToCart() {
            if (checkAddToCartValidity()) {
                $('#addToCart').modal("show");
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        //$('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data);
                        updateNavCart();
                        $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) + 1);
                    }
                });
            } else {
                showFrontendAlert('warning', 'Please choose all the options');
            }
        }

        function buyNow() {
            if (checkAddToCartValidity()) {
                $('#addToCart').modal("show");
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        //$('#addToCart-modal-body').html(null);
                        //$('.c-preloader').hide();
                        //$('#modal-size').removeClass('modal-lg');
                        //$('#addToCart-modal-body').html(data);
                        updateNavCart();
                        $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) + 1);
                        window.location.replace("{{ route('checkout.shipping_info') }}");
                    }
                });
            } else {
                showFrontendAlert('warning', 'Please choose all the options');
            }
        }

        function show_purchase_history_details(order_id) {
            $('#order-details-modal-body').html(null);

            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('purchase_history.details') }}', {
                _token: '{{ @csrf_token() }}',
                order_id: order_id
            }, function(data) {
                $('#order-details-modal-body').html(data);
                $('#order_details').modal("show");
                $('.c-preloader').hide();
            });
        }

        function show_order_details(order_id) {
            $('#order-details-modal-body').html(null);

            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('orders.details') }}', {
                _token: '{{ @csrf_token() }}',
                order_id: order_id
            }, function(data) {
                $('#order-details-modal-body').html(data);
                $('#order_details').modal("show");
                $('.c-preloader').hide();
            });
        }

        function cartQuantityInitialize() {
            $('.btn-number').click(function(e) {
                e.preventDefault();

                fieldName = $(this).attr('data-field');
                type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());

                if (!isNaN(currentVal)) {
                    if (type == 'minus') {

                        if (currentVal > input.attr('min')) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('min')) {
                            $(this).attr('disabled', true);
                        }

                    } else if (type == 'plus') {

                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                    }
                } else {
                    input.val(0);
                }
            });

            $('.input-number').focusin(function() {
                $(this).data('oldValue', $(this).val());
            });

            $('.input-number').change(function() {

                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());

                name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }


            });
            $(".input-number").keydown(function(e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        }

        function imageInputInitialize() {
            $('.custom-input-file').each(function() {
                var $input = $(this),
                    $label = $input.next('label'),
                    labelVal = $label.html();

                $input.on('change', function(e) {
                    var fileName = '';

                    if (this.files && this.files.length > 1)
                        fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}',
                            this.files.length);
                    else if (e.target.value)
                        fileName = e.target.value.split('\\').pop();

                    if (fileName)
                        $label.find('span').html(fileName);
                    else
                        $label.html(labelVal);
                });

                // Firefox bug fix
                $input
                    .on('focus', function() {
                        $input.addClass('has-focus');
                    })
                    .on('blur', function() {
                        $input.removeClass('has-focus');
                    });
            });
        }
    </script>







    <script>
        function showFrontendAlert(type, message) {
            if (type == 'payfail') {

                swal({
                    position: 'center',
                    //type: 'error',
                    //title: message,
                    //showConfirmButton: true
                    width: 'auto',
                    icon: 'error',
                    title: '<h1 class="text-blue">Payment was unsuccessful</h1>',
                    html: '<p class="body-large text-grey">Please try again</p>',
                    showConfirmButton: true,
                    confirmButtonText: 'Ok'

                });
            } else if (type == 'regSuccess') {

                swal({
                    position: 'center',
                    //type: 'error',
                    //title: message,
                    //showConfirmButton: true
                    width: 'auto',
                    icon: 'error',
                    title: '<h1 class="text-blue">Thank you for registering</h1>',
                    html: '<p class="body-large text-grey">Verify your email and log in</p>',
                    showConfirmButton: true,
                    confirmButtonText: 'Access your account here'

                });
            } else {
                if (type == 'danger') {
                    type = 'error';
                }
                swal({
                    position: 'center',
                    type: type,
                    title: message,
                    showConfirmButton: false,
                    timer: 3000
                });
            }
        }
    </script>

    @foreach (session('flash_notification', collect())->toArray() as $message)
        <script>
            showFrontendAlert('{{ $message['level'] }}', '{{ $message['message'] }}');
        </script>
    @endforeach

    <script src="{{ asset('frontend/js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jodit.min.js') }}"></script>
    <script src="{{ asset('frontend/js/xzoom.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fb-script.js') }}"></script>
    <script src="{{ asset('frontend/js/lazysizes.min.js') }}"></script>
    <script src="{{ asset('frontend/js/intlTelInput.min.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('frontend/js/active-shop.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    
<script>

/*var country = {!! json_encode($currency_code) !!};
console.log(country);
if(country !== ''){
    document.getElementById("select-currency").value = country;
    //document.querySelector('option[value=' + country +']').selected = true
    //alert();
}*/
function getval(sel)
{
    var value = sel.value;
    var currency_code = value;
    console.log(currency_code);
    $.post('{{ route('currency.change') }}',{_token:'{{ csrf_token() }}', currency_code:currency_code}, function(data){
        //console.log(data);
        location.reload();
    });
}

    $(document).ready(function() {
        $('.category-nav-element').each(function(i, el) {
            $(el).on('mouseover', function(){
                if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                    $.post('{{ route('category.elements') }}', {_token: '{{ csrf_token()}}', id:$(el).data('id')}, function(data){
                        $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                    });
                }
            });
        });
        if ($('#lang-change').length > 0) {
            $('#lang-change .dropdown-item a').each(function() {
                $(this).on('click', function(e){
                    e.preventDefault();
                    var $this = $(this);
                    var locale = $this.data('flag');
                    $.post('{{ route('language.change') }}',{_token:'{{ csrf_token() }}', locale:locale}, function(data){
                        location.reload();
                    });

                });
            });
        }

        if ($('#currency-change').length > 0) {
            //$('#currency-change dropdown-item a').each(function() { 
            $('#currency-change a.dropdown-item').each(function() {
                $(this).on('click', function(e){
                    e.preventDefault();
                    var $this = $(this);
                    var currency_code = $this.data('currency');
                    console.log(currency_code);
                    $.post('{{ route('currency.change') }}',{_token:'{{ csrf_token() }}', currency_code:currency_code}, function(data){
                        location.reload();
                    });

                });
            });
        }
    });

    $('#search').on('keyup', function(){
        search();
    });

    $('#search').on('focus', function(){
        search();
    });

    function search(){
        var search = $('#search').val();
        if(search.length > 0){
            $('body').addClass("typed-search-box-shown");

            $('.typed-search-box').removeClass('d-none');
            $('.search-preloader').removeClass('d-none');
            $.post('{{ route('search.ajax') }}', { _token: '{{ @csrf_token() }}', search:search}, function(data){
                if(data == '0'){
                    // $('.typed-search-box').addClass('d-none');
                    $('#search-content').html(null);
                    $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+search+'"</strong>');
                    $('.search-preloader').addClass('d-none');

                }
                else{
                    $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                    $('#search-content').html(data);
                    $('.search-preloader').addClass('d-none');
                }
            });
        }
        else {
            $('.typed-search-box').addClass('d-none');
            $('body').removeClass("typed-search-box-shown");
        }
    }

    function updateNavCart(){
        $.post('{{ route('cart.nav_cart') }}', {_token:'{{ csrf_token() }}'}, function(data){
            // console.log(data);
            $('#cart_items').html(data);
        });
    }

    function removeFromCart(key){
        $.post('{{ route('cart.removeFromCart') }}', {_token:'{{ csrf_token() }}', key:key}, function(data){
            updateNavCart();
            $('#cart-summary').html(data);
            showFrontendAlert('success', 'Item has been removed from cart');
            $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
          	@if(Session::has('cart'))
            	@if(count($cart = Session::get('cart')) > 0)
                	@if(count($cart = Session::get('cart')) === 1)
                      @if (request()->routeIs('checkout.shipping_info'))
                          window.location.replace("{{ route('home') }}");
                      @else
                          location.reload();
                      @endif
                    @elseif((count($cart = Session::get('cart')) > 1))
                      @if (request()->routeIs('checkout.shipping_info'))
                          window.location.replace("{{ route('checkout.shipping_info') }}");
                      @else
                          location.reload();
                      @endif
                    @endif
          		@else
                  	location.reload();
                @endif
            @endif
          	//location.reload();
        });
    }

    function addToCompare(id){
        $.post('{{ route('compare.addToCompare') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
            $('#compare').html(data);
            showFrontendAlert('success', 'Item has been added to compare list');
            $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
        });
    }

    function addToWishList(id){
        @if (Auth::check() && (Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller'))
            $.post('{{ route('wishlists.store') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                if(data != 0){
                    $('#wishlist').html(data);
                    showFrontendAlert('success', 'Item has been added to wishlist');
                }
                else{
                    showFrontendAlert('warning', 'Please login first');
                }
            });
        @else
            showFrontendAlert('warning', 'Please login first');
        @endif
    }

    function showAddToCartModal(id){
        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }
        $('#addToCart-modal-body').html(null);
        $('#addToCart').modal("show");
        $('.c-preloader').show();
        $.post('{{ route('cart.showCartModal') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
            $('.c-preloader').hide();
            $('#addToCart-modal-body').html(data);
            /*$('.xzoom, .xzoom-gallery').xzoom({
                Xoffset: 20,
                bg: true,
                tint: '#000',
                defaultScale: -1
            });*/
            getVariantPrice();
        });
    }

    $('#option-choice-form input').on('change', function(){
        getVariantPrice();
    });

    function getVariantPrice(){
        if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
            $.ajax({
               type:"POST",
               url: '{{ route('products.variant_price') }}',
               data: $('#option-choice-form').serializeArray(),
               success: function(data){
                   $('#option-choice-form #chosen_price_div').removeClass('d-none');
                   $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                   $('#available-quantity').html(data.quantity);
                   $('.input-number').prop('max', data.quantity);
                   //console.log(data.quantity);
                   if(parseInt(data.quantity) < 1){
                       $('.buy-now').hide();
                       $('.add-to-cart').hide();
                   }
                   else{
                       $('.buy-now').show();
                       $('.add-to-cart').show();
                   }
               }
           });
        }
    }

    function checkAddToCartValidity(){
        var names = {};
        $('#option-choice-form input:radio').each(function() { // find unique names
              names[$(this).attr('name')] = true;
        });
        var count = 0;
        $.each(names, function() { // then count them
              count++;
        });

        if($('#option-choice-form input:radio:checked').length == count){
            return true;
        }

        return false;
    }

    function addToCart(){
        if(checkAddToCartValidity()) {
            $('#addToCart').modal("show");
            $('.c-preloader').show();
            $.ajax({
               type:"POST",
               url: '{{ route('cart.addToCart') }}',
               data: $('#option-choice-form').serializeArray(),
               success: function(data){
                   $('#addToCart-modal-body').html(null);
                   $('.c-preloader').hide();
                   //$('#modal-size').removeClass('modal-lg');
                   $('#addToCart-modal-body').html(data);
                   updateNavCart();
                   $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
               }
           });
        }
        else{
            showFrontendAlert('warning', 'Please choose all the options');
        }
    }

    function buyNow(){
        if(checkAddToCartValidity()) {
            $('#addToCart').modal("show");
            $('.c-preloader').show();
            $.ajax({
               type:"POST",
               url: '{{ route('cart.addToCart') }}',
               data: $('#option-choice-form').serializeArray(),
               success: function(data){
                   //$('#addToCart-modal-body').html(null);
                   //$('.c-preloader').hide();
                   //$('#modal-size').removeClass('modal-lg');
                   //$('#addToCart-modal-body').html(data);
                   updateNavCart();
                   $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
                   window.location.replace("{{ route('checkout.shipping_info') }}");
               }
           });
        }
        else{
            showFrontendAlert('warning', 'Please choose all the options');
        }
    }

    function show_purchase_history_details(order_id)
    {
        $('#order-details-modal-body').html(null);

        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }

        $.post('{{ route('purchase_history.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
            $('#order-details-modal-body').html(data);
            $('#order_details').modal("show");
            $('.c-preloader').hide();
        });
    }

    function show_order_details(order_id)
    {
        $('#order-details-modal-body').html(null);

        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }

        $.post('{{ route('orders.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
            $('#order-details-modal-body').html(data);
            $('#order_details').modal("show");
            $('.c-preloader').hide();
        });
    }

    function cartQuantityInitialize(){
        $('.btn-number').click(function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());

            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });

        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });

        $('.input-number').change(function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    }

     function imageInputInitialize(){
         $('.custom-input-file').each(function() {
             var $input = $(this),
                 $label = $input.next('label'),
                 labelVal = $label.html();

             $input.on('change', function(e) {
                 var fileName = '';

                 if (this.files && this.files.length > 1)
                     fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                 else if (e.target.value)
                     fileName = e.target.value.split('\\').pop();

                 if (fileName)
                     $label.find('span').html(fileName);
                 else
                     $label.html(labelVal);
             });

             // Firefox bug fix
             $input
                 .on('focus', function() {
                     $input.addClass('has-focus');
                 })
                 .on('blur', function() {
                     $input.removeClass('has-focus');
                 });
         });
     }

</script>
  <script>
        function addToCart1Step(id) {
            if (checkAddToCartValidity()) {
                $('#addToCart').modal("show");
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        quantity: 1
                    },
                    success: function(data) {
                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        //$('#modal-size').removeClass('modal');
                        $('#addToCart-modal-body').html(data);
                        updateNavCart();
                        $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) + 1);
                    }
                });
            }
        }
    </script>
    <script>
        $.fn.hasId = function(id) {
            return this.attr('id') == id;
        };
        const $dropdown = $(".dropdown");
        const $dropdownToggle = $(".dropdown-toggle");
        const $dropdownMenu = $(".dropdown-menu");
        const showClass = "show";

        $(window).on("load resize", function() {
            if (this.matchMedia("(min-width: 768px)").matches) {
                $dropdown.hover(
                    function() {
                        if ($dropdown.hasId('cart_items')) {
                            $('#cart_items').addClass(showClass);
                            $('#cart_items .dropdown-toggle').attr("aria-expanded", "true");
                            $('#cart_items .dropdown-menu').addClass(showClass);
                            $('#cart_items .dropdown-cart').addClass(showClass);
                        } else {
                            const $this = $(this);
                            $this.addClass(showClass);
                            $this.find($dropdownToggle).attr("aria-expanded", "true");
                            $this.find($dropdownMenu).addClass(showClass);
                        }
                    },
                    function() {
                        if ($dropdown.hasId('cart_items')) {
                            $('#cart_items').removeClass(showClass);
                            $('#cart_items .dropdown-toggle').attr("aria-expanded", "false");
                            $('#cart_items .dropdown-menu').removeClass(showClass);
                            $('#cart_items .dropdown-cart').removeClass(showClass);
                        } else {
                            const $this = $(this);
                            $this.removeClass(showClass);
                            $this.find($dropdownToggle).attr("aria-expanded", "false");
                            $this.find($dropdownMenu).removeClass(showClass);
                        }
                    }
                );
            } else {
                $dropdown.off("mouseenter mouseleave");
            }
        });


        const $dropdown_cart = $("#cart_items");
        const $dropdownToggle_cart = $(".dropdown-toggle");
        const $dropdownMenu_cart = $(".dropdown-menu");
        const showClass_cart = "show";

        $(window).on("load resize", function() {
            if (this.matchMedia("(min-width: 768px)").matches) {
                $dropdown_cart.hover(
                    function() {
                        if ($dropdown_cart.hasId('cart_items')) {
                            $('#cart_items').addClass(showClass_cart);
                            $('#cart_items .dropdown-toggle').attr("aria-expanded", "true");
                            $('#cart_items .dropdown-menu').addClass(showClass_cart);
                            $('#cart_items .dropdown-cart').addClass(showClass_cart);
                        } else {
                            const $this = $(this);
                            $this.addClass(showClass_cart);
                            $this.find($dropdownToggle_cart).attr("aria-expanded", "true");
                            $this.find($dropdownMenu_cart).addClass(showClass_cart);
                        }
                    },
                    function() {
                        if ($dropdown_cart.hasId('cart_items')) {
                            $('#cart_items').removeClass(showClass_cart);
                            $('#cart_items .dropdown-toggle').attr("aria-expanded", "false");
                            $('#cart_items .dropdown-menu').removeClass(showClass_cart);
                            $('#cart_items .dropdown-cart').removeClass(showClass_cart);
                        } else {
                            const $this = $(this);
                            $this.removeClass(showClass_cart);
                            $this.find($dropdownToggle_cart).attr("aria-expanded", "false");
                            $this.find($dropdownMenu_cart).removeClass(showClass_cart);
                        }
                    }
                );
            } else {
                $dropdown_cart.off("mouseenter mouseleave");
            }
        });

        /*document.getElementById("ldd").onclick = function () {
            location.href = "{{ route('products') }}";
        };*/
    </script>

    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>

    <script>
        $(document).on("click", ".btn-menu", function() {
            $(".navbar").addClass("bg-color");
        });
    </script>
    <script>
        /*$('.btn-close').click(function(){
            var $this = $(this);
            $this.toggleClass('btn-close');
            if($this.hasClass('btn-close')){
                $this.text('Menu');         
            } else {
                $this.text('Close');
            }
        });*/
    </script>
    <script>
        $('.close_submenu').click(function(){
            $("#subservicemenu").removeClass("show");
        });
    </script>
    <script>
        var ima = "open";

        function changeImg() {
            var image = document.getElementById('nav-togg');
            if (ima == "open") {
                image.src = "{{ asset('frontend/bluelitebranding/assets/img/nav-close.png') }}";
                ima = "close";
            } else {
                image.src = "{{ asset('frontend/bluelitebranding/assets/img/nav-toggle.png') }}";
                ima = "open";
            }
        }
    </script>



    @yield('script')



</body>

</html>
