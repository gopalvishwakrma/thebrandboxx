@extends('frontend.layouts.app')

<style>
@media screen and (min-width: 1440px) and (max-width: 1900px) {

	.adjust_captcha {
		transform: scale(0.74);
    	margin-left: -31px;
	}
	.mastercard {
		transform: scale(0.74);
    	margin-left: -25px;
	}
}
  @media screen and (min-width: 1280px) and (max-width: 1439px) {

	.adjust_captcha {
		transform: scale(0.60);
   		margin-left: -46px;
	}
	.mastercard {
		transform: scale(0.70);
    	margin-left: -47px;
	}
}
</style>

@section('content')
    {{--
<section class="checkout-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-12 m-auto">
                    <div class="check-head text-center">
                        <h2 class="h2-black">Secure check Out</h2>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 col-sm-12 p-mo-0">
                            <form class=""  id="shippingAddress" data-toggle="validator" action="{{ route('checkout.store_shipping_infostore') }}" role="form" method="POST" onsubmit="return check_agree(this);">
                            @csrf
                            @if (Auth::check())
                                @php
                                    $user = Auth::user();
                                @endphp
                            <input type="hidden" class="form-control" name="user_id" value="{{ $user->id }}" required/>
                            <input type="hidden" class="form-control" name="email" value="{{ $user->email }}" required/>
                            <input type="hidden" name="checkout_type" value="logged">
                            <div class="check-out-details">
                                <div class="input-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-12 mb-4">
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control-lg" placeholder="Full Name" required>
                                        </div>
                                        <div class="col-lg-12 col-12 mb-4">
                                            <input type="text" name="lname" value="{{ $user->lname }}" class="form-control-lg" placeholder="Last Name" required />
                                        </div>
                                        <div class="col-lg-12 col-12 mb-4">
                                            <input type="date" class="form-control-lg" value="{{ $user->dob }}" id="dob" name="dob" placeholder="Date of birth"  max="@php echo date('Y-m-d',strtotime('18 years ago')); @endphp" required>
                                        </div>
                                        <div class="col-lg-12 col-12 mb-4">
                                            <input type="number" value="{{ $user->phone }}" name="phone" class="form-control-lg" placeholder="Phone Number" required>
                                        </div>
                                        <div class="col-lg-12 col-12 mb-4">
                                            <input type="text" name="address" value="{{ $user->address }}" class="form-control-lg" placeholder="Address Line 1" required>
                                        </div>
                                        <div class="col-lg-12 col-12 mb-4">
                                            <input type="text" name="addressL2" value="{{ $user->addressL2 }}" class="form-control-lg" placeholder="Address Line 2">
                                        </div>
                                        <div class="col-lg-12 col-12 mb-4">
                                            <input type="text" value="{{ $user->phone }}" name="city" class="form-control-lg" placeholder="City" required>
                                        </div>
                                        <div class="col-lg-12 col-12 mb-4">
                                            <input type="number" class="form-control-lg" value="{{ $user->postal_code }}" name="postal_code" placeholder="Zip / Post Code" required>
                                        </div>
                                        <div class="col-lg-12 col-12 mb-4">
                                            <select class="form-control-lg" data-live-search="true" id="country" name="country" placeholder="Country"  onchange="countrySelected(this);" required>
                                                @foreach (\App\Country::all() as $key => $country)
                                                    <option value="{{ $country->code }}" 
                                                        @if ($country->code == $user->country || $country->code == $user->country) selected @endif>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-12 mb-4" id="stateProvinceRow">
                                            <input type="text" minlength="2" maxlength="2" class="form-control-lg" value="{{ $user->stateProvince }}" placeholder="State Province" id="stateProvince" name="stateProvince">
                                        </div>
                                        <div class="col-lg-11 col-12 m-auto">
                                            <div class="c-checkbox register-check">
                                                <label class="d-flex ml-3">
                                                    <input type="checkbox" id="terms" name="terms" class="mt-lg-4 mt-1">
                                                    <label for="terms"></label>
                                                    <span class="check-text"> By ticking this box, you agree to the <a href="{{ route('termsandconditions') }}"> Terms & Conditions </a> &<a href="{{ route('privacypolicy') }}" class=""> Privacy Policy </a></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-12 m-auto mt-4">
                                            <div class="g-recaptcha" data-recaptcha data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-12 p-mo-0">
                             <div class="order-summary">
                                 <h5 class="text-center">Order Summary </h5>
                                <div class="order-summary-details">
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
                                    <div class="order-div">
                                        <p class="product-name">{{ $product->name }}</p>
                                        <small class="duration">{{ $product->subscription }}</small>
                                        <small class="duration ms-3">x{{ $cartItem['quantity'] }}</small>
                                        <p class="pro-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</p>
                                    </div>
                                    @endforeach
                                    </form>
                                    <div class="total-price-div">
                                        @php
                                            $total = $subtotal+$tax+$shipping;
                                            if(Session::has('coupon_discount')){
                                                $total -= Session::get('coupon_discount');
                                            }
                                        @endphp
                                        @if (Session::has('coupon_discount'))
                                        <p><span class="total-p">Discount: </span> <span class="total-price">-{{ single_price((Session::get('coupon_discount'))) }}</span></p>
                                        @endif
                                        <h5><span class="total-p">Total: </span><span class="total-price">{{ single_price($total) }}</span></h5>
                                    </div>
                                    <div class="coupon-box text-center">
                                        <!--<div class=" input-group">
                                            <input type="text" name="" id="" class="form-control-lg" placeholder="Add Coupon / Discount Code">
                                        </div>-->
                                        @if (Auth::check() && \App\BusinessSetting::where('type', 'coupon_system')->first()->value == 1)
                                                @if (Session::has('coupon_discount'))
                                                <form class="mb-0" action="{{ route('checkout.remove_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="input-container ">
                                                        <input type="hidden" id="text" name="text" placeholder=" " value="{{ \App\Coupon::find(Session::get('coupon_id'))->code }}" readonly>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                                        <button type="submit" class="btn btn-tertiary-border w-100 ">{{__('Change/Remove Coupon')}}</button>
                                                    </div>
                                                </form>
                                            @else
                                                <form class="mb-0" action="{{ route('checkout.apply_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 input-div">
                                                        <input type="text" name="code" class="form-control-lg" placeholder="Add Coupon / Discount Code" required />
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                                            <button type="submit" class="btn btn-tertiary-border w-100">Apply</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endif
                                             @endif
                                        <div class="">
                                            <button type="submit" form="shippingAddress" class="btn btn-tertiary w-100">Complete Checkout</button>
                                        </div>
                                        <img src="{{ asset('frontend/ocean/img/Mastercard.svg') }}" alt="img" class="img-fluid mt-4">
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
--}}

    {{-- NEW CODE STARTS HERE --}}

    {{-- <section class="bg-grid pt-5 pt-md-0">
    <div class="container p-md-5 custommm">
   <div class="px-md-0">
         <h1 class="head-1-black text-center pb-2 pt-md-5 mt-md-0 d-none d-md-block">Secure Checkout</h1>
            <h1 class="head-1-black text-center pb-2 pt-md-5 mt-md-0 d-block d-md-none">Secure<br>Checkout</h1>
        <div class="row d-md-flex flex-md-row justify-content-md-around bg-white py-md-4">
            <div class="col-12 col-md-6 px-md-5">
                <div class="mt-5 mt-md-0">
                    <div class="head-3-black pb-4 pt-md-4 d-md-block d-none">Your details</div>
                     <div class="head-3-black pb-4 pt-md-4 d-md-none d-block" style="font-family: Helvetica Now Display;font-style: normal;font-weight: bold;font-size: 32px;">Your details</div>
                    <form id="shippingAddress" data-toggle="validator" action="{{ route('checkout.store_shipping_infostore') }}" role="form" method="POST" onsubmit="return check_agree(this);">
                        @csrf
                        @if (Auth::check())
                            @php
                                $user = Auth::user();
                            @endphp
                        <input type="hidden" class="form-control" name="user_id" value="{{ $user->id }}" required/>
                        <input type="hidden" class="form-control" name="email" value="{{ $user->email }}" required/>
                        <input type="hidden" name="checkout_type" value="logged">

                        <div class="">
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control custom-form" placeholder="Full Name" required>
                        </div>
                        <div class="py-4">
                            <input type="text" name="lname" value="{{ $user->lname }}" class="form-control custom-form" placeholder="Last Name" required />
                        </div>
                        <div class="">
                            <input type="text" name="address" value="{{ $user->address }}" class="form-control custom-form" placeholder="Address Line 1" required>
                        </div>
                        <div class="py-4">
                            <input type="text" name="addressL2" value="{{ $user->addressL2 }}" class="form-control custom-form" placeholder="Address Line 2">
                        </div>
                        <div class="">
                            <input type="text" value="{{ $user->phone }}" name="city" class="form-control custom-form" placeholder="City" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="py-4">
                                    <input type="text" class="form-control custom-form" value="{{ $user->postal_code }}" name="postal_code" placeholder="Zip / Post Code" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="pb-4 py-md-4">
                                    <select class="form-control custom-form" data-live-search="true" id="country" name="country" placeholder="Country"  onchange="countrySelected(this);" required>
                                        @foreach (\App\Country::all() as $key => $country)
                                            <option value="{{ $country->code }}" 
                                                @if ($country->code == $user->country || $country->code == $user->country) selected @endif>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="">
                                    <input type="text" minlength="2" maxlength="2" class="form-control custom-form" value="{{ $user->stateProvince }}" placeholder="State Province" id="stateProvince" name="stateProvince">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="">
                                    <input type="number" value="{{ $user->phone }}" name="phone" class="form-control custom-form" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="py-4">
                                    <input type="date" class="form-control custom-form" value="{{ $user->dob }}" id="dob" name="dob" placeholder="Date of birth"  max="@php echo date('Y-m-d',strtotime('18 years ago')); @endphp" required>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row form-check pb-4">
                            <input type="checkbox" class="form-check-input me-2" id="terms" name="terms">
                            <label class="form-check-label" for="privacypolicy">By ticking this checkbox, you agree <br> to the <a href="{{ route('termsandconditions') }}">Terms & Conditions</a> & <a href="{{ route('privacypolicy') }}"> Privacy Policy</a></label>
                        </div>
                        @endif
                      <div class="g-recaptcha" data-recaptcha data-sitekey="{{ env('GOOGLE_CAPTCHA_SITE_KEY') }}"></div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-12 px-md-5 pt-md-4 pt-5">
                <div class="head-3-black pb-2 pb-md-4 d-md-block d-none">Order Summary</div>
                <div class="head-3-black pb-4 pt-md-4 d-md-none d-block" style="font-family: Helvetica Now Display;font-style: normal;font-weight: bold;font-size: 32px;">Order Summary</div>
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
                <div class="row pb-3 pt-4 pt-md-3" style="border-bottom: 2px solid #3865BC;">
                    <div class="col-md-6 col-6">
                        <div class="heading3">
                            {{ $product->name }}
                        </div>

                        <div class="heading4">{{ $product->subscription }}</div>
                        <div class="heading3">
                            {{ single_price($cartItem['price']*$cartItem['quantity']) }}
                        </div>
                    </div>
                    <div class="col-md-6 text-end col-6">
                        <a href="{{ route('checkout.shipping_info') }}">
                        <button type="button" onclick="removeFromCart1({{ $key }})">X</button>
                        </a>
                    </div>
                </div>

                @endforeach
                @php
                $total = $subtotal+$tax+$shipping;
                if(Session::has('coupon_discount')){
                    $total -= Session::get('coupon_discount');
                }
                @endphp
                <div class="row pt-3">
                    <div class="col-md-12">
                        <div class="total">
                            Total<span class="p-2">{{ single_price($total) }}
                        </div>
                    </div>
                </div>

                {{-- Coupon--
                @if (Auth::check() && \App\BusinessSetting::where('type', 'coupon_system')->first()->value == 1)
                @if (Session::has('coupon_discount'))
                <form action="{{ route('checkout.remove_coupon_code') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control custom-form text-danger" id="text" name="text" placeholder=" " value="{{ \App\Coupon::find(Session::get('coupon_id'))->code }}" readonly>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 col-12"><button type="submit" class="loginbutton btn-blue w-100" style="opacity: 0.6;">Remove Coupon</button></div>
                </div>
                </form>
                @else
                <form action="{{ route('checkout.apply_coupon_code') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-3">
                        <input type="text" name="code" class="form-control custom-form text-danger" placeholder="Add Coupon / Discount Code" required />
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 col-12"><button type="submit" class="loginbutton btn-blue w-100" style="opacity: 0.6;">Apply</button></div>
                    </div>
                    </form>
                @endif
                @endif
                {{-- Coupon--
                <div class="row mb-3">
                    <div class="col-md-12 col-12"><button type="submit" form="shippingAddress" class="loginbutton btn-blue w-100">Complete Checkout</button></div>

                </div>
                <div class="row">
                    <div class="col-md-12 col-12 d-flex flex-row align-items-center justify-content-center">
                        <img src="{{ asset('frontend/bluelitebranding/assets/img/Mastercard.png') }}') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
   </div>
    </div>
</section> --}}

    {{-- NEW CODE ENDS HERE --}}


    {{-- The Brand Box Code --}}

    <div class="checkout-page">
        <div class="container-fluid px-0">
            <div class="row checkout-row">
                <div class="col-sm-12 col-md-12 col-lg-3 d-none d-sm-none d-md-none d-lg-block">
                    <div class="go-back-section ">
                        <div class="go-part">
                            <a href="{{ route('home') }}" class="a-links">Go Back</a>
                        </div>
                        <div class="go-bottom">
                            <a href="#" class="d-none d-sm-none d-lg-none d-md-none">display</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 forminfo">
                    <div class="detials-content forminfo">
                        <h3>Your Details</h3>
                        <form id="shippingAddress" data-toggle="validator"
                            action="{{ route('checkout.store_shipping_infostore') }}" role="form" method="POST"
                            onsubmit="return check_agree(this);">
                            @csrf
                            @if (Auth::check())
                                @php
                                    $user = Auth::user();
                                @endphp
                                <input type="hidden" class="form-control" name="user_id" value="{{ $user->id }}"
                                    required />
                                <input type="hidden" class="form-control" name="email" value="{{ $user->email }}"
                                    required />
                                <input type="hidden" name="checkout_type" value="logged">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                                                placeholder="First Name" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="lname"
                                                value="{{ $user->lname }}" placeholder="Last Name" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label>Address Line 1</label>
                                            <input type="text" class="form-control" name="address"
                                                value="{{ $user->address }}" placeholder="Address Line 1" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label>Address Line 2</label>
                                            <input type="text" class="form-control" name="addressL2"
                                                value="{{ $user->addressL2 }}" placeholder="Address Line 2" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label>City</label>
                                            <input type="text" class="form-control" value="{{ $user->city }}"
                                                name="city" placeholder="City" required />
                                        </div>
                                    </div>
                                   <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label>Phone</label>
                                            <input type="number" class="form-control" value="{{ $user->phone }}" name="phone"  placeholder="Phone Number" required />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" value="{{ $user->postal_code }}"
                                                name="postal_code" placeholder="Zip / Post Code" required />
                                        </div>
                                    </div>
                                  
                                  
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-4">
                                            <label>Country</label>
                                            <select class="form-control down-arrow" data-live-search="true" id="country"
                                                name="country" placeholder="Country" onchange="countrySelected(this);"
                                                required>
                                                @foreach (\App\Country::all() as $key => $country)
                                                    <option value="{{ $country->code }}"
                                                        @if ($country->code == $user->country || $country->code == $user->country) selected @endif>
                                                        {{ $country->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-4">
                                            <label> State / Province</label>
                                            <input type="text" class="form-control" minlength="2" maxlength="50"
                                                value="{{ $user->stateProvince }}" placeholder="State Province"
                                                id="stateProvince" name="stateProvince" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label> Date Of Birth</label>
                                            <input type="date" class="form-control" value="{{ $user->dob }}"
                                                id="dob" name="dob" placeholder="Date of birth"
                                                max="@php echo date('Y-m-d',strtotime('18 years ago')); @endphp" required />
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="terms">
                                            <label for="terms">
                                                By ticking this box, you agree to the <a
                                                    href="{{ route('termsandconditions') }}" class="a-links">Terms &
                                                    Conditions</a>
                                                & <a href="{{ route('privacypolicy') }}" class="a-links">Privacy
                                                    Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="form-btn-inline  d-sm-block d-md-block d-lg-flex">
                                        <div class="form-group row">
                                            <div class="g-recaptcha col-12" data-recaptcha
                                                data-sitekey="{{ env('GOOGLE_CAPTCHA_SITE_KEY') }}">
                                            </div>
                                            <div class="mastercard text-center col-12">
                                                <a href="#"><img src="{{ asset('frontend/brandbox/images/Mastercard.png') }}"
                                                        class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="common-btn checkout-btn mt-3 d-sm-block d-md-block d-lg-block col-12 w-100">
                                        <button form="shippingAddress" type="submit" class="loginlinks btn bg-transparent" style="background: transparent;border: none;">Continue To Pay</a>
                                    </div> -->

                                </div>
                                {{-- <div class="form-btn-inline d-sm-block d-lg-none d-md-none pt-3">
                                    <div class="form-group ">
                                        <div class="g-recaptcha" data-recaptcha data-sitekey="{{ env('GOOGLE_CAPTCHA_SITE_KEY') }}">
                                        </div>
                                    </div>
                                    <div class="mastercard text-center pt-2">
                                        <a href="#"><img src="{{ asset('frontend/brandbox/images/Mastercard.png') }}"
                                                class="img-fluid"></a>
                                    </div>
            
                                </div>
                                <div class="common-btn checkout-btn mt-2 d-sm-block d-lg-none d-md-none">
                                    <button form="shippingAddress" type="submit" class="loginlinks btn bg-transparent" style="background: transparent;border: none;">Continue To Pay</a>
            
                                </div> --}}
                            @endif
                        </form>
                    </div>
                    
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 order-sec-align">
                    <div class="order-summary">
                        <h3>Order Summary</h3>
                        <div class="order-details forminfo">
                            <ul>
                                @php
                                    $subtotal = 0;
                                    $tax = 0;
                                    $shipping = 0;
                                @endphp
                                @foreach (Session::get('cart') as $key => $cartItem)
                                    @php
                                        $product = \App\Product::find($cartItem['id']);
                                        $category_name = \App\Category::find($product->category_id)->name;
                                        
                                        $subtotal += $cartItem['price'] * $cartItem['quantity'];
                                        $tax += $cartItem['tax'] * $cartItem['quantity'];
                                        $shipping += $cartItem['shipping'] * $cartItem['quantity'];
                                        $product_name_with_choice = $product->name;
                                        if ($cartItem['variant'] != null) {
                                            $product_name_with_choice = $product->name . ' - ' . $cartItem['variant'];
                                        }
                                    @endphp
                                    <li onclick="removeFromCart1({{ $key }})" style="background:none;">
                                        <div class="product-price">
                                            <h6>{{ $product->name }}</h6>
                                            <a >{{ single_price($cartItem['price'] * $cartItem['quantity']) }}&nbsp;<span style="float: right;"
                                                    ><img src="https://thebrandboxx.com/public/frontend/brandbox/images/close-small.svg" style="height: 18px;cursor:pointer;"></span></a>
                                        </div>
                                        <span>{{ $product->subscription }}</span>

                                    </li>
                                @endforeach

                            </ul>
                            @php
                                $total = $subtotal + $tax + $shipping;
                                if (Session::has('coupon_discount')) {
                                    $total -= Session::get('coupon_discount');
                                }
                            @endphp
                            <div class="total-amt">
                                <p class="grand-total">total:<span> {{ single_price($total) }} </span> </p>
                            </div>

                            @if (Auth::check() && \App\BusinessSetting::where('type', 'coupon_system')->first()->value == 1)
                                @if (Session::has('coupon_discount'))
                                    <form action="{{ route('checkout.remove_coupon_code') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3 form-btn-inline">
                                            <div class="code-text">
                                                <label>Discount Code </label>
                                                <input type="text" class="form-control" id="text" name="text" value="{{ \App\Coupon::find(Session::get('coupon_id'))->code }}" readonly />
                                            </div>
                                            <div class="apply-btn">
                                                <a href="#" class="a-links">
                                                    <button type="submit" class="loginlinks btn bg-transparent">Remove COupon</button>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                <form action="{{ route('checkout.apply_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3 form-btn-inline">
                                        <div class="code-text">
                                            <label>Discount Code </label>
                                            <input type="text" class="form-control" name="code" placeholder="Add Coupon / Discount Code" required />
                                        </div>
                                        <div class="apply-btn">
                                            <a href="#" class="a-links">
                                                <button type="submit" class="loginlinks btn bg-transparent">Apply Coupon</button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                @endif
                            @endif
                          
                         
                          
                            <!-- <div class="form-btn-inline d-none d-sm-none d-md-block d-lg-flex" style="border: none;">
                                <div class="form-group ">
                                    <div class="g-recaptcha" data-recaptcha
                                        data-sitekey="{{ env('GOOGLE_CAPTCHA_SITE_KEY') }}"></div>
                                </div>
                                <div class="mastercard text-center">
                                    <a href="#"><img src="{{ asset('frontend/brandbox/images/Mastercard.png') }}"
                                            class="img-fluid"></a>
                                </div>

                            </div> -->
                          
                          <!-- <div class="form-btn-inline d-none d-sm-none d-md-block d-lg-flex" style="border: none;">
                                <div class="form-group ">
                                    <div class="g-recaptcha" data-recaptcha
                                        data-sitekey="{{ env('GOOGLE_CAPTCHA_SITE_KEY') }}"></div>
                                </div>

                            </div>
                          <div class="" style="border: none;">
                                
                                <div class="mastercard">
                                    <img src="{{ asset('frontend/brandbox/images/MastercardNew.png') }}"
                                            class="d-flex me-auto">
                                </div>

                            </div> -->
                          <div class="row">
                            <div class="col-md-6">
                              <div class="g-recaptcha adjust_captcha" data-recaptcha
                                        data-sitekey="{{ env('GOOGLE_CAPTCHA_SITE_KEY') }}"></div>
                            </div>
                            <div class="col-md-6">
                              <div class="mastercard">
                                    <img src="{{ asset('frontend/brandbox/images/MastercardNew.png') }}"
                                            class="d-flex mx-auto mt-2">
                                </div>
                            </div>
                          </div>
                          
                            <div class="common-btn checkout-btn mt-3 d-none d-sm-none d-md-block d-lg-block">
                                <button form="shippingAddress" type="submit" class="loginlinks btn bg-transparent" style="background: transparent;border: none;">Continue To Pay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="collapse" id="mobilemenu">
        <ul>
            <li><a href="#" data-bs-toggle="dropdown" data-bs-target="#subservicemenu">services</a>
                <ul class="dropdown-menu servicesMenu">
                    <li>
                        <a href="{{ route("home") }}" data-bs-toggle="dropdown" data-bs-target="#mobilemenu">Go Back</a>
                    </li>

                    <li><a href="{{ route("seo") }}">search engine optimisation</a></li>
                    <li><a href="{{ route("ppc") }}">pay per click services</a></li>
                    <li><a href="{{ route("orm") }}">online reputation management</a></li>
                    <li><a href="{{ route("wdd") }}">web design & development</a></li>
                    <li><a href="{{ route("social") }}">social media services</a></li>
                    <li><a href="{{ route("em") }}">email marketing services</a></li>
                </ul>
            </li>
            <li><a href="{{ route("aboutus") }}">about us</a></li>
            <li><a href="{{ route("contactus") }}">contact us</a></li>
            <li><a href="{{ route("faqs") }}">faqs</a></li>
            <li><a href="#">view cart</a></li>
            @auth
            <li><a href="{{ route("dashboard") }}">My Account</a></li>
            @else
            <li><a href="{{ route("user.login") }}">login</a></li>
            @endauth
        </ul>
    </div>

    {{-- The Brand Box Code --}}
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type="text/javascript">
    function reloadCheckout(){
       window.loaction.replace("https://learn.supporthives.com/TheBrandBoxx/checkout")
     }
      
     function removeFromCart1(key){
        $.post('{{ route('cart.removeFromCart1') }}', {_token:'{{ csrf_token() }}', key:key}, function(data){
            updateNavCart();
            $('#cart-summary').html(data);
            //showFrontendAlert('success', 'Item has been removed from cart');
	
            $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
          @if(count($cart = Session::get('cart')) > 1)
          	location.reload(true)
          @else
            window.history.back();
          @endif
        });
    }
        function removeFromCartView(e, key) {
            e.preventDefault();
            removeFromCart(key);
        }

        function updateQuantity(key, element) {
            $.post('{{ route('cart.updateQuantity') }}', {
                _token: '{{ csrf_token() }}',
                key: key,
                quantity: element.value
            }, function(data) {
                updateNavCart();
                $('#cart-summary').html(data);
            });
        }

        function showCheckoutModal() {
            $('#GuestCheckout').modal();
        }

        function countrySelected(that) {
            if (that.value == "US") {

                document.getElementById("stateProvinceRow").style.display = "block";
                document.getElementById("stateProvince").required = true;
                //document.getElementById("dobRow").style.display = "block";
                //document.getElementById("dob").required = true;
            } else {

                document.getElementById("stateProvinceRow").style.display = "none";
                document.getElementById("stateProvince").required = false;
                //document.getElementById("dobRow").style.display = "none";
                //document.getElementById("dob").required = false;
            }
        }
        countrySelected(document.getElementById("country"));
    </script>

    <script>
        function check_agree(form) {
            var response = grecaptcha.getResponse();
            if (form.terms.checked && response) {
                return true;
            } else if (!form.terms.checked) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'You must agree to the Terms and Conditions and Privacy Policy before continuing.'
                })
            } else if (response.length == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please select Captcha'
                })
                return false;
            }
            return false;
        }
        $(document).ready(function() {
            //$("header.fixed-top").addClass("mt-lg-3");
            //$("header .desktop").addClass("bg-white");
            //$("header .desktop div").removeClass("py-3");
            $(".headlogo").attr('src',
                "https://dev.supporthives.com/oceanbluemarketing/public/frontend/ocean/img/black-logo.svg");
        });
    </script>
@endsection
