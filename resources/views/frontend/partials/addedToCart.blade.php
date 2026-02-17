
<div class="modal-body py-4 added-to-cart" style="background: #2E2E2E;">
    <button class="close-icon absolute-close-btn btn btn-close" data-bs-dismiss="modal" aria-label="Close" style="min-width: 25px;">
    </button> 
    <div class="row justify-content-center">
        {{--<div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="block-image">
                <img src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset($product->thumbnail_img) }}" class="lazyload addedtocart-img" alt="Product Image" style="width:190px; max-width:190px">
            </div>
        </div>--}}
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 align-self-center">
            <div class="mb-4 mt-2 text-center">
                <h3 class="h3-white text-left" style="color: #FFFFFF !important;">{{__('Item added to your cart!')}}</h3>
            </div>
            {{--<div class=" d-flex my-2">
                <p class="h4-desktop-white">Price</p>
                <p class="h4-desktop-orange ml-3">{{ single_price(($data['price']+$data['tax'])*$data['quantity']) }}</p>
            </div>--}}
            <div class="d-flex justify-content-center">
                <button class="mr-md-2 btn-blue px-md-2" data-bs-dismiss="modal">{{__('Back to shopping')}}</button>
                <a href="{{ route('checkout.shipping_info') }}" class="btn-blue px-md-2 ms-4 d-flex align-items-center" style="text-decoration:none !important;">{{__('Proceed to Checkout')}}</a>
            </div>
            
        </div>
    </div> 
    
    {{--<div class="cart-item pos-r bg-white" style="max-width: 100%;background: #2D2D2D;">
        <!--<button class="close-icon"><img src="dist/images/close-icon-blue.svg" alt="close icon"></button> -->
        <button class="close-icon absolute-close-btn" data-dismiss="modal" aria-label="Close" style="min-width: 25px;">
            <img src="{{ asset('frontend/dist/images/close-icon-blue.svg') }}" alt="close icon">
        </button> 
        <div class="product-box-img" style="margin-bottom: 50px;float: left;margin-right: 50px;">
            <div class="product-box-container">
                <div class="product-box" style="padding: 10px;">
                    <figure class="product-image">
                        <img src="{{ asset($product->thumbnail_img) }}" alt="product image" style="width:190px; max-width:190px">
                    </figure>
                </div>
            </div>
        </div>
        <div> 
            <div class="d-f fxw-w marT20 ai-c product-d-container">
                <h2 class="c-white"> Item added to you cart!</h2> 
              
                <div class="crt-btn p-s-dec marT20 w100">
                    <a class="btn btn-lime w100" href="{{ route('checkout.shipping_info') }}"> Proceed to cart 
                        <img src="{{ asset('frontend/dist/images/cart-white.svg') }}" alt="cart icon" style="filter: brightness(50);"></a>
                </div>
                <div class="crt-btn p-s-dec marT20 w100">
                    <button type="button" class="btn btn-lime-transparent w100" data-dismiss="modal"> Continue Shopping </button>
                </div>
            </div>
        </div>
    </div>--}}
</div> 
