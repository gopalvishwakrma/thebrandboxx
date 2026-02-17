@extends('frontend.layouts.app')
@section('content')
    {{--
<section class="your-order-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-12 m-auto">
                    <div class="payment-succseful text-center">
                        <h2 class="h2-black">Payment was successful</h2>
                        <p class="text-center">  
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dapibus
                             sem ullamcorper et<br> quis pellentesque sed ipsum. Sed maecenas 
                             iaculis sit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12 col-sm-12 m-auto p-mo-0">
                     <div class="order-summary">
                         <h5 class="text-center">Order Summary </h5>
                        <div class="order-summary-details">
                            @foreach ($order as $key => $orderDetail)
                            @php
                                $product = \App\Product::find($orderDetail->product_id);
                                $order = \App\Order::find($orderDetail->order_id);
                                //dd($product);
                                //$category_name = \App\Category::find($product->category_id)->name;
                            @endphp
                            <div class="order-div">
                                <p class="product-name">{{ $product->name }}</p>
                                <small class="duration">{{ $product->subscription }}</small>
                                <small class="duration ms-3">x{{ $orderDetail->quantity }}</small>
                                <p class="pro-price">{{ single_price($orderDetail->price) }}</p>
                            </div>
                            @endforeach
                            <div class="total-price-div d-none d-lg-block d-md-block">
                                <h5><span class="total-p">Total: </span><span class="total-price">{{ single_price($order->grand_total) }}</span></h5>
                            </div>
                            <div class="total-price-div d-block d-lg-none d-md-none">
                                <h5><span class="total-p">Amount Paid:  </span><span class="total-price">{{ single_price($order->grand_total) }}</span></h5>
                            </div>
                            <div class="order-btn">
                                <a href="{{ route('home') }}" class="btn btn-tertiary w-100">Back to Home</a>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
   --}}

    {{-- --------------------------------NEW CODE STARTS HERE--------------------- --}}

    {{-- <section class="bg-grid pt-5">
        <div class="container p-md-5">
            <div class="row d-md-flex flex-md-row justify-content-md-around py-md-4">
                <div class="col-md-6 col-12 bg-white p-md-5 py-5" style="border: 1px solid #5889EA;">
                    <div class="head-3-black">Order Summary</div>
                    <div class="paymentsuccessful py-4">
                        Your Payment has been successful.
                    </div>
                    @foreach ($order as $key => $orderDetail)
                        @php
                            $product = \App\Product::find($orderDetail->product_id);
                            $order = \App\Order::find($orderDetail->order_id);
                            //dd($product);
                            //$category_name = \App\Category::find($product->category_id)->name;
                        @endphp
                        <div class="row pb-3" style="border-bottom: 2px solid #DCE4F4;">
                            <div class="col-md-6 col-6">
                                <div class="heading3">
                                    {{ $product->name }}
                                </div>

                                <div class="heading4">{{ $product->subscription }}</div>
                                <div class="heading3">
                                    {{ single_price($orderDetail->price) }}
                                </div>
                            </div>
                            <div class="col-md-6 text-end col-6"><img
                                    src="{{ asset('frontend/bluelitebranding/assets/img/cross-n.png') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                    <div class="row py-4">
                        <div class="col-md-12">
                            <div class="total">
                                Total<span class="p-2">{{ single_price($order->grand_total) }}
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-12 col-12"><button type="button" class="loginbutton btn-blue w-100"
                                onclick="window.location.href='{{ route('home') }}'">Go To Home</button></div>

                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    {{-- --------------------------------NEW CODE ENDS HERE--------------------- --}}

    {{-- Brand Boxx Code --}}


    <div class="checkout-page payment-succes-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 pyment-section">
                    <div class="order-summary">
                        <h3>PAYMENT SUCCESSFUL</h3>
                        <p class="pt-2 pb-2"> Thank you for your custom, below is the full summary of your order.</p>
                        <div class="order-details forminfo">
                            <ul>
                                @foreach ($order as $key => $orderDetail)
                                    @php
                                        $product = \App\Product::find($orderDetail->product_id);
                                        $order = \App\Order::find($orderDetail->order_id);
                                        //dd($product);
                                        //$category_name = \App\Category::find($product->category_id)->name;
                                    @endphp
                                    <li>
                                        <div class="product-price">
                                            <h6>{{ $product->name }}</h6>
                                            <p>{{ single_price($orderDetail->price) }}</p>
                                        </div>
                                        <span>{{ $product->subscription }}</span>

                                    </li>
                                @endforeach
                            </ul>
                            <div class="total-amt">
                                <p class="grand-total">total:<span>{{ currency_symbol().''.number_format($order->grand_total,2) }}</span> </p>
                            </div>
                            <div class=" form-btn-inline  view-home-btn">
                                <div class="view-order-btn common-btn">
                                    <a href="{{ route('purchase_history.index') }}" class="loginlinks">View My Order</a>
                                </div>
                                <div class="go-home-btn common-btn">
                                    <a href="{{ route('home') }}" class="loginlinks">Continue To Home</a>
                                </div>
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
                        <a href="{{ route('home') }}" data-bs-toggle="dropdown" data-bs-target="#mobilemenu">Go Back</a>
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
            <li><a href="#">view cart</a></li>
            @auth
                <li><a href="{{ route('dashboard') }}">My Account</a></li>
            @else
                <li><a href="{{ route('user.login') }}">login</a></li>
            @endauth
        </ul>
    </div>


    {{-- Brand Boxx Code --}}
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            //$("header.fixed-top").addClass("mt-lg-3");
            //$("header .desktop").addClass("bg-white");
            $("#fixed-top").removeClass("fixed-top");
            $(".headlogo").attr('src',
                "https://thebrandboxx.com/public/frontend/ocean/img/black-logo.svg");
        });
    </script>
@endsection
