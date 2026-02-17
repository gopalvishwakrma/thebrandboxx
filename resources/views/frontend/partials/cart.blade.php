{{--  cart --}}
<a href="#" class="nav-link navtext" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Cart
                                    </a>
<ul class="dropdown-menu dropdown-menu-right px-3 py-2">
                                        <li>
                                            <div class="dropdown-cart px-0" id="dropdown-cart">
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
                                                                                 <button class="btn" onclick="removeFromCart({{ $key }})" style="min-width: 16px;min-height: 16px;line-height: 0px;">
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
                                                                 <h5 class="text-center pb-3"><span class="total-p text-center">Total: </span><span class="total-price">{{ single_price($total) }}</span></h5>
                                                             </div>
                                                             <div class="total-price-div d-block d-lg-none d-md-none">
                                                                 <h5 class="text-center"><span class="total-p">Amount Paid:  </span><span class="total-price">{{ single_price($total) }}</span></h5>
                                                             </div>
                                                             <div class="cart-btn d-flex justify-content-around mb-2">
                                                                 
                                                                 <a href="{{ route('checkout.shipping_info') }}" class="home-explorebtn" style="text-decoration:none !important;
                                                                                                                        background: #FFFFFF;
                                                                                                                        border: 1px solid #1A596F;
                                                                                                                        box-shadow: 8px 8px 0px #ba12f7;
                                                                                                                        border-radius: 4px;
                                                                                                                        font-style: normal;
                                                                                                                        font-weight: 500;
                                                                                                                        font-size: 16px;
                                                                                                                        line-height: 215%;
                                                                                                                        text-align: center;
                                                                                                                        text-transform: capitalize;
                                                                                                                        color: #1A596F;
                                                                                                                        width: 200px;
                                                                                                                        text-decoration: none;
                                                                                                                        padding: 10px 30px;">Checkout</a>
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
{{--  cart --}}

{{-- <a href="" class="nav-box-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="la la-shopping-cart d-inline-block nav-box-icon"></i>
    <span class="nav-box-text d-none d-xl-inline-block">{{__('Cart')}}</span>
    @if(Session::has('cart'))
        <span class="nav-box-number">{{ count(Session::get('cart'))}}</span>
    @else
        <span class="nav-box-number">0</span>
    @endif
</a>
<ul class="dropdown-menu dropdown-menu-right px-0">
    <li>
        <div class="dropdown-cart px-0">
            @if(Session::has('cart'))
                @if(count($cart = Session::get('cart')) > 0)
                    <div class="dc-header">
                        <h3 class="heading heading-6 strong-700">{{__('Cart Items')}}</h3>
                    </div>
                    <div class="dropdown-cart-items c-scrollbar">
                        @php
                            $total = 0;
                        @endphp
                        @foreach($cart as $key => $cartItem)
                            @php
                                $product = \App\Product::find($cartItem['id']);
                                $total = $total + $cartItem['price']*$cartItem['quantity'];
                            @endphp
                            <div class="dc-item">
                                <div class="d-flex align-items-center">
                                    <div class="dc-image">
                                        <a href="{{ route('product', $product->slug) }}">
                                            <img loading="lazy"  src="{{ asset($product->thumbnail_img) }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="dc-content">
                                        <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                            <a href="{{ route('product', $product->slug) }}">
                                                {{ __($product->name) }}
                                            </a>
                                        </span>

                                        <span class="dc-quantity">x{{ $cartItem['quantity'] }}</span>
                                        <span class="dc-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</span>
                                    </div>
                                    <div class="dc-actions">
                                        <button onclick="removeFromCart({{ $key }})">
                                            <i class="la la-close"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="dc-item py-3">
                        <span class="subtotal-text">{{__('Subtotal')}}</span>
                        <span class="subtotal-amount">{{ single_price($total) }}</span>
                    </div>
                    <div class="py-2 text-center dc-btn">
                        <ul class="inline-links inline-links--style-3">
                            <li class="pr-3">
                                <a href="{{ route('cart') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1">
                                    <i class="la la-shopping-cart"></i> {{__('View cart')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('checkout.shipping_info') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 light-text">
                                    <i class="la la-mail-forward"></i> {{__('Checkout')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="dc-header">
                        <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                    </div>
                @endif
            @else
                <div class="dc-header">
                    <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                </div>
            @endif
        </div>
    </li>
</ul> --}}
