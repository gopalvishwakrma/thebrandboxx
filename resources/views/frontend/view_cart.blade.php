@extends('frontend.layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<style>
#loader {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  position: fixed;
  display: block;
  opacity: 0.7;
  background-color: #e2e0e0
  z-index: 99;
  text-align: center;
}

#loading-image {
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 3em;
    z-index: 100;
    color: black;
}
</style>
@section('content')
    <div class="main fl-fix">
        <section class="fl-fix pos-r ov-h banner home-banner bg-m bg-cover" >
            <div class="d-f fxw-w to-load">
                <div class="w100">
                    <div class="container">
                      
                        <div class="banner-data text-container">
                            <h2 class="c-lime h1 ta-c marB30">Cart</h2>
                    </div>
                </div>
             
            </div>
        </section> <!-- banner end -->
        <section class="fl-fix pos-r devlop-features">
            <div class="container">
                <div class="d-f jc-sb fxw-w">
                    <div class="w65 snd-msg checkout-field">
                        
                    </div>
                </div>
            </div>
            </div>
        </section>
    </div> <!-- Main Section -->


    <section class="py-4 " id="cart-summary">
        <div class="container">
            @if(Session::has('cart'))
                <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-xl-8">
                    <!-- <form class="form-default bg-white p-4" data-toggle="validator" role="form"> -->
                    <div class="form-default p-4" style="border: 1px solid;">
                        <div class="">
                            <div class="">
                                <table class="table-cart border-bottom w-100">
                                    <thead>
                                        <tr>
                                            <th class="product-image"></th>
                                            <th class="product-name c-white">{{__('Product')}}</th>
                                            <th class="product-price c-white d-none d-lg-table-cell">{{__('Price')}}</th>
                                            <th class="product-quanity c-white d-none d-md-table-cell" style="width: 170px;">{{__('Quantity')}}</th>
                                            <th class="product-total ta-c c-white">{{__('Total')}}</th>
                                            <th class="product-remove"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $total = 0;
                                        @endphp
                                        @foreach (Session::get('cart') as $key => $cartItem)
                                            @php
                                            $product = \App\Product::find($cartItem['id']);
                                            $total = $total + $cartItem['price']*$cartItem['quantity'];
                                            $product_name_with_choice = $product->name;
                                            if ($cartItem['variant'] != null) {
                                                $product_name_with_choice = $product->name.' - '.$cartItem['variant'];
                                            }
                                            // if(isset($cartItem['color'])){
                                            //     $product_name_with_choice .= ' - '.\App\Color::where('code', $cartItem['color'])->first()->name;
                                            // }
                                            // foreach (json_decode($product->choice_options) as $choice){
                                            //     $str = $choice->name; // example $str =  choice_0
                                            //     $product_name_with_choice .= ' - '.$cartItem[$str];
                                            // }
                                            @endphp
                                            <tr class="cart-item">
                                                <td class="product-image ta-c">
                                                    <a href="#" class="mr-3">
                                                        <img loading="lazy"  src="{{ asset($product->thumbnail_img) }}">
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <span class="pr-4 d-block c-white">{{ $product_name_with_choice }}</span>
                                                </td>

                                                <td class="product-price d-none d-lg-table-cell">
                                                    <span class="pr-3 d-block c-white">{{ single_price($cartItem['price']) }}</span>
                                                </td>

                                                <td class="product-quantity d-none d-md-table-cell">
                                                    <div class="input-group input-group--style-2 pr-2" style="width: 200px;">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-number" style="height: 191px;min-height: 55px;padding: 20px;width: 65px;min-width: 65px;" type="button" data-type="minus" data-field="quantity[{{ $key }}]">
                                                                <i class="la la-minus"></i>
                                                            </button>
                                                        </span>
                                                        <input type="number" name="quantity[{{ $key }}]" id="quantity" class="form-control ta-c input-number" placeholder="1" value="{{ $cartItem['quantity'] }}" min="1" max="10" onchange="updateQuantity({{ $key }}, this)">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-number" style="height: 191px;min-height: 55px;padding: 20px;width: 65px;min-width: 65px;" type="button" data-type="plus" data-field="quantity[{{ $key }}]">
                                                                <i class="la la-plus"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="product-total ta-c">
                                                    <span class="c-white">{{ single_price(($cartItem['price']+$cartItem['tax'])*$cartItem['quantity']) }}</span>
                                                </td>
                                                <td class="product-remove ta-c">
                                                    <a href="#" onclick="removeFromCartView(event, {{ $key }})" class="text-right pl-4">
                                                        <i class="la la-trash" style="font-size: 2em;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row align-items-center pt-4">
                            <div class="col-md-6">
                                <a href="{{ route('home') }}" class="link link--style-3">
                                    <i class="la la-mail-reply"></i>
                                    {{__('Return to shop')}}
                                </a>
                            </div>
                            <div class="col-md-6 text-right">
                                @if(Auth::check())
                                    <a href="{{ route('checkout.shipping_info') }}" class="btn btn-lime btn-base-1">{{__('Continue to Shipping')}}</a>
                                @else
                                    <button class="btn btn-lime btn-base-1" onclick="showCheckoutModal()">{{__('Continue to Shipping')}}</button>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>

                {{--<div class="col-xl-4 ml-lg-auto">
                    @include('frontend.partials.cart_summary')
                </div>--}}
            <!-- ./ cart summary -->   
                <div class="col-xl-4 col-md-6">
                {{--<h1 class="text-blue">Overview</h1>--}}
                    <div class="">
                        <div class="card-body card-box-shadow" style="border: 1px solid;">
                            <div class="row p-3" style="border-bottom: 1px solid lightgrey;">
                                <div class="col-6"><p class="text-small c-white">PRODUCTS</p></div>
                                <div class="col-2"><p class="text-small c-white">Qty</p></div>
                                <div class="col-4"><p class="text-small c-white text-center">Price</p></div>
                            </div>
                            @php
                                $subtotal = 0;
                                $tax = 0;
                                $shipping = 0;
                            @endphp
                            @foreach (Session::get('cart') as $key => $cartItem)
                                @php
                                    $product = \App\Product::find($cartItem['id']);
                                    $category_name = \App\Category::find($product->category_id)->name;
                                   
                                    $subtotal += $cartItem['price']*$cartItem['quantity'];
                                    $tax += $cartItem['tax']*$cartItem['quantity'];
                                    $shipping += $cartItem['shipping']*$cartItem['quantity'];
                                    $product_name_with_choice = $product->name;
                                    if ($cartItem['variant'] != null) {
                                        $product_name_with_choice = $product->name.' - '.$cartItem['variant'];
                                    }
                                @endphp
                    
                                <div class="row p-3" style="border-bottom: 1px solid lightgrey;">
                                    <div class="col-12"><p class="text-small c-white">E-book</p></div>
                                    <div class="col-6"><p class="c-white">{{ $product_name_with_choice }}</p></div>
                                    {{--<div class="col-2"><strong class="product-quantity text-grey">× {{ $cartItem['quantity'] }}</strong></div>--}}
                                    <div class="col-2 px-0">
                                        <input type="number" name="quantity[{{ $key }}]" id="quantity" class="form-control input-number" placeholder="1" value="{{ $cartItem['quantity'] }}" min="1" max="10" onchange="updateQuantity({{ $key }}, this)">
                                    </div>
                                    <div class="col-4 text-right"><p class="c-white">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</p></div>
                                </div>
                            @endforeach
                    
                            @if (Session::has('coupon_discount'))
                                <div class=" row cart-shipping">
                                    <div class="col-8">{{__('Coupon Discount')}}</div>
                                    <div class="col-4 text-right">
                                        <span class="text-italic text-blue "> - {{ single_price(Session::get('coupon_discount')) }}</span>
                                    </div>
                                </div>
                            @endif
    
                            @php
                                $total = $subtotal+$tax+$shipping;
                                if(Session::has('coupon_discount')){
                                    $total -= Session::get('coupon_discount');
                                }
                            @endphp
                    
                            <div class="row p-3 border-top-black mt-2">
                                <div class="col-8 mt-1"><p class="text-blue c-white font-weight-bold">Amount to pay</p></div>
                                <div class="col-4 mt-1"><p class="text-blue c-white text-right">{{ single_price($total) }}</p></div>
                            </div>
                    
                            {{--<div class="row pt-2">
                                <button type="submit" class="btn btn-sm btn-banner-white btn-blue-vm w-100">Complete checkout</button>
                            </div>--}}
                        </div>
                    </div>
                <div class="row my-4">
                  <div class="col">
                    @if (Auth::check() && \App\BusinessSetting::where('type', 'coupon_system')->first()->value == 1)
                        @if (Session::has('coupon_discount'))
                            <div class="mt-3">
                                <form action="{{ route('checkout.remove_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="c-white" for="coupon">Change Coupon/Discount Code</label>
                                        <div class="form-control bg-gray w-100" style="border-radius: 20px;">{{ \App\Coupon::find(Session::get('coupon_id'))->code }}</div>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-lime w-100">{{__('Change Coupon')}}</button>
                                </form>
                            </div>
                        @else
                            <div class="mt-3">
                                <form action="{{ route('checkout.apply_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="c-white" for="coupon">Add Coupon/Discount Code</label>
                                        <input type="text" class="form-control w-100" name="code" placeholder="{{__('Have coupon code? Enter here')}}" required>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-lime w-100">{{__('Apply Coupon Code')}}</button>
                                </form>
                            </div>
                        @endif
                    @endif   
                  </div>
                </div>
          </div>
          <!-- ./ cart summary -->      
            </div>
            @else
                <div class="dc-header">
                    <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                </div>
            @endif
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="GuestCheckout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">{{__('Login')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-3">
                        <form class="form-default" role="form" action="{{ route('cart.login.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="input-group input-group--style-1">
                                    <input type="email" name="email" class="form-control" placeholder="{{__('Email')}}">
                                    <span class="input-group-addon">
                                        <i class="text-md la la-user"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group input-group--style-1">
                                    <input type="password" name="password" class="form-control" placeholder="{{__('Password')}}">
                                    <span class="input-group-addon">
                                        <i class="text-md la la-lock"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <a href="{{ route('password.request') }}" class="link link-xs link--style-3">{{__('Forgot password?')}}</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-styled btn-base-1 px-4">{{__('Sign in')}}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                     @if(\App\BusinessSetting::where('type', 'google_login')->first()->value == 1 || \App\BusinessSetting::where('type', 'facebook_login')->first()->value == 1 || \App\BusinessSetting::where('type', 'twitter_login')->first()->value == 1)
                        <div class="or or--1 mt-3 text-center">
                            <span>or</span>
                        </div>
                        <div class="p-3 pb-0">
                            @if (\App\BusinessSetting::where('type', 'facebook_login')->first()->value == 1)
                                <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="btn btn-styled btn-block btn-facebook btn-icon--2 btn-icon-left px-4 mb-3">
                                    <i class="icon fa fa-facebook"></i> {{__('Login with Facebook')}}
                                </a>
                            @endif
                            @if(\App\BusinessSetting::where('type', 'google_login')->first()->value == 1)
                                <a href="{{ route('social.login', ['provider' => 'google']) }}" class="btn btn-styled btn-block btn-google btn-icon--2 btn-icon-left px-4 mb-3">
                                    <i class="icon fa fa-google"></i> {{__('Login with Google')}}
                                </a>
                            @endif
                            @if (\App\BusinessSetting::where('type', 'twitter_login')->first()->value == 1)
                            <a href="{{ route('social.login', ['provider' => 'twitter']) }}" class="btn btn-styled btn-block btn-twitter btn-icon--2 btn-icon-left px-4 mb-3">
                                <i class="icon fa fa-twitter"></i> {{__('Login with Twitter')}}
                            </a>
                            @endif
                        </div>
                    @endif
                    @if (\App\BusinessSetting::where('type', 'guest_checkout_active')->first()->value == 1)
                        <div class="or or--1 mt-0 text-center">
                            <span>or</span>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('checkout.shipping_info') }}" class="btn btn-styled btn-base-1">{{__('Guest Checkout')}}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div id="loader" class="c-preloader" style="display: none;">
        <i id="loading-image" class="fa fa-spinner fa-spin" ></i>
    </div>

@endsection

@section('script')
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript">
    function removeFromCartView(e, key){
        $('#loader').show();
        e.preventDefault();
        removeFromCart(key);
        setTimeout(function(){
            $('#loader').hide();
          location.reload();
          },3000);
    }

    function updateQuantity(key, element){
        $('#loader').show();
        $.post('{{ route('cart.updateQuantity') }}', { _token:'{{ csrf_token() }}', key:key, quantity: element.value}, function(data){
            updateNavCart();
            $('#loader').hide();
            //$('#cart-summary').html(data);
            location.reload();
        });
    }

    function showCheckoutModal(){
        $('#GuestCheckout').modal();
    }
    </script>
@endsection
