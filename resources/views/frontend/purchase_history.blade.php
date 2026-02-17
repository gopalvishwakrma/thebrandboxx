@extends('frontend.layouts.app')
<style>
    @media screen and (max-width:800px) {
    
    .btn-blue{
           height: 6rem!important;
        }
    }
</style>
@section('content')
        <style>
            .table-secondary {
    --bs-table-bg: #E0DFD9 !important;
            }
        </style>


    {{-- --------------------------------NEW CODE STARTS HERE--------------------- --}}

    {{-- <section class="p-3 p-md-0">
        <div class="container bg-white">
            <div class="row">
               <div class="col-md-12 p-md-3 d-flex flex-row col-12">
                    <p class="acc-inactive pe-3" style="border-right: 1px solid #E0DFD9;cursor: pointer;"><a style="color: #2E2E2E !important;text-decoration:none !important;" href="{{ route('dashboard') }}">My Account</a></p>
                    <p class="acc-active pe-3 ps-3" style="border-right: 1px solid #E0DFD9;cursor: pointer;"><a style="color: #3865BC !important;text-decoration:none !important;" href="{{ route('purchase_history.index') }}">Order History</a></p>
                    <p class="acc-inactive ps-3" style="cursor: pointer;"><a style="color: #2E2E2E !important;text-decoration:none !important;" href="{{ route('logout') }}">Logout</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-grid">
        <div class="container p-md-5">
            <div class="row d-md-flex flex-md-row justify-content-md-around py-md-4">
                <div class="col-md-12 col-12 bg-white p-md-5 py-md-5">
                    <div class="head-3-black">Order History</div>
                    <p class="p-standard text-center py-3">From your account dashboard you can view your recent orders, manage <br> your shipping and billing addresses, and edit your password and account details.</p>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <tr class="table table-dark">
                                <td class="table-dark dark-text p-md-3">Order</td>
                                <td class="table-dark dark-text p-md-3">Date</td>
                                <td class="table-dark dark-text p-md-3">Total</td>
                                <td class="table-dark dark-text p-md-3"></td>
                            </tr>
                            @foreach ($orders as $key => $order)
                            <tr class="table table-secondary">
                                <td class="table-secondary tablefont blue-text p-md-3"><a href="#{{ $order->code }}" onclick="show_purchase_history_details({{ $order->id }})">#{{ $order->code }}</a></td>
                                <td class="table-secondary tablefont blue-text p-md-3">{{ date('d-m-Y', $order->date) }}</td>
                                <td class="table-secondary tablefont blue-text p-md-3">{{ single_price($order->grand_total) }}</td>
                                <td class="table-secondary tablefont"><button type="button" class="btn-blue w-100 mb-5 mb-md-0" onclick="show_purchase_history_details({{ $order->id }})" style="font-size:16px!important;">View More Details</button></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <div class="order-history-page account-detail-page">
        <div class="first-section">
            <div class="right-bigbtn-section order-lefttopbtn-sec d-none d-sm-none d-lg-none d-xl-block d-xxl-block">
                <div class="check-order-btn">
                    <a href="{{ route('dashboard') }}">Check Your <br/> Details </a>
                </div>
            </div>
            <div class="account-detail-section order-history-section">
                <div class="check-order-link d-sm-block d-lg-block d-xl-none d-xxl-none d-md-block">
                    <a href="account-detail.html" class="a-links">Check Your Details</a>
                </div>

                <div class="acc-title order-title">
                    <h2>Order History</h2>
                    <h6>welcome back {{ Auth::user()->name }}! (not {{ Auth::user()->name }}? <a href="{{ route('logout') }}" class="a-links">Logout Here.)</a></h6>
                    <p>From your account dashboard you can vier your recent orders, manage your billing addressed and edit your password and account details.</p>
                </div>
            </div>
        </div>
        <div class="second-section">
            <div class="right-bigbtn-section order-leftbtn-sec d-none d-sm-none d-lg-none d-xl-block d-xxl-block">
                <div class="right-plain-box">
                    <img src="{{ asset('frontend/brandbox/images/account-right-plain-img.png') }}" class="img-fluid">
                </div>
            </div>
            <div class="account-listing-section order-history-secondsection">
                <div class="table-responsive order-history-table">
                    <table class="table order-history my_account_orders">
                        <thead>
                            <tr>
                                <th class="order-number col-span-3">Order Number</th>
                                <th class="order-date ">Date</th>
                                {{-- <th class="order-status ">Duration</th> --}}
                                <th class="order-total ">Total</th>
                                <th class="order-pdf-dwnld "></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($orders as $key => $order)
                            <tr class="order">
                                <td class="order-number" data-title="Order">
                                    <a href="#{{ $order->code }}" onclick="show_purchase_history_details({{ $order->id }})">#{{ $order->code }}</a>
                                </td>

                                <td class="order-date" data-title="Date">
                                    <time datetime="2014-06-12" title="1402562157">{{ date('d-m-Y', $order->date) }}</time>
                                </td>

                                {{-- <td class="order-status" data-title="Status">
                                    3 Months
                                </td> --}}

                                <td class="order-total" data-title="Total">
                                    {{--<span class="amount">{{ single_price($order->grand_total) }}</span>--}}
                                  	<span class="amount">{{ single_price($order->orderDetails->sum('price')) }}</span>
                                  	{{--<span class="amount">{{ ($order->grand_total) }}</span>--}}
                                </td>

                                <td class="order-actions" data-title="Action">
                                    <a onclick="show_purchase_history_details({{ $order->id }})" class="button view" style="cursor: pointer;">View More Details</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    
    
    
    <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <div id="order-details-modal-body" style="background: #F6F7FB;">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="payment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="modal-header">
                    <h5 class="modal-title strong-600 heading-5">{{__('Make Payment')}}</h5>
                    <button type="button" class="close btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="payment_modal_body"></div>
            </div>
        </div>
    </div>

    {{-- --------------------------------NEW CODE ENDS HERE--------------------- --}}

@endsection
@section('script')
    <script type="text/javascript">
        $('#order_details').on('hidden.bs.modal', function () {
            location.reload();
        })
    </script>
     <script>
        $(document).ready(function() {
            //$("header.fixed-top").addClass("mt-lg-3");
            //$("header .desktop").addClass("bg-white");
            //$("header .desktop div").removeClass("py-3");
            $(".headlogo").attr('src',"https://dev.supporthives.com/oceanbluemarketing/public/frontend/ocean/img/black-logo.svg");
        });
</script>
@endsection
