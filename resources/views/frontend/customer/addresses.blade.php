@extends('frontend.layouts.app')
<style>
    
</style>
@section('content')
@if(Auth::check())
    @php
        $user = Auth::user();
        //dump($user->id);
        $user_id = Auth::user()->id;
        //DB::enableQueryLog();
        $u2 = DB::table('last_billing_address')->where('user_id',$user_id)->orderBy('id','desc')->first();
        //$query = DB::getQueryLog();
        //$query = end($query);
        //dd($query);
        //dump($u2);
        if($u2){
            $user = $u2;
        }
         //dump($user);
    @endphp
@endif
    {{--<section style="background: #F6F7FB">
            <div class="container text-center">
              <div class="row">
                
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 address-padding text-left" data-aos="fade-up" data-aos-delay="500">
                    @if($user->address != '')
                        <div class="text-left address-title">The following addresses will be used on the checkout page by default.</div>
                    @endif
                    <div class="row">
                        @if($user->address != '')
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left" data-aos="fade-up" data-aos-delay="500">
                            <div class="flex-grow-1">
                                <div class="card card-body billing-address">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" data-aos="fade-up" data-aos-delay="500">
                                            <p class="billing-heading">Billing address</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" data-aos="fade-up" data-aos-delay="500">
                                            <a href="#">Edit<i class="fa fa-caret-right ml-1"></i></a>
                                        </div>
                                    </div>
                                    <hr class="line">
                                    <p class="address-value">{{ $user->name.' '.$user->lname}}</p>
                                    <span class="address-value">{{ $user->address }},</span>
                                    @if($user->addressL2 != Null)
                                    <span class="address-value">{{ $user->addressL2 }},</span>
                                    @endif
                                    <span class="address-value">
                                        {{ $user->city }}, 
                                    @if($user->stateProvince != Null)
                                        {{  $user->stateProvince }}, 
                                    @endif
                                    </span>
                                    <span class="address-value">{{ $user->country }},</span>
                                    <span class="address-value">{{ $user->postal_code }}</span>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="500">
                            <div class="text-left address-title">
                                No saved addresses. Place an order to store the latest billing address.
                            </div>
                        </div>
                                
                        @endif
                    </div>
                </div>
              </div>
            </div>
    </section>--}}
    
    
<section class="dashboard-page pb-4 mb-n2">
    <img src="{{ asset('frontend/dist/img/dashboard-bg.png') }}" alt="trems-bg-img" class="img-fluid bg-image">
    <div class="account-bg mt-7 my-4">
        <div class="container">
            <h2 class="account-head-mo d-block d-lg-none d-md-none">Dashboard</h2>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 account-menu-collec">
                <div class="all-btn-account d-flex justify-content-lg-around">
                    <a href="{{ route('dashboard') }}" class="account-menu   mr-3">My Account</a>
                    <a href="{{ route('purchase_history.index') }}" class="account-menu mr-3">My Orders</a>
                    <a href="{{ route('addresses') }}" class=" account-menu active mr-3">Addresses</a>
                    <a href="{{ route('account') }}" class="account-menu  mr-3">Account details</a>
                    <a href="{{ route('logout') }}" class="account-menu ">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pt-2 addresses-page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-12 m-auto">
                <div class="account-content text-center">
                    <h2 class="account-head text-left text-lg-center">My Addresses</h2>
                    <p class="para-white text-left text-lg-center">
                    From your account dashboard you can view your recent orders, manage your<br>
                    shipping and billing addresses, and edit your password and account details.
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 m-auto ">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-12 col-sm-12 card border">
                        <div class="address-box m-auto py-4">
                            <div class="my-address">
                                <div class="">
                                    <h5 class="bill-head text-left">Billing Address </h5>
                                </div>
                                @if($user->address != '')
                                    <h5 class="para-4 ">The following addresses will be used on the checkout page
                                    by default.</h5>
                                @endif
                                @if($user->address != '')
                                    <div class="">
                                        <div class="add-details">
                                            <div class="px-lg-1">
                                                <p class="para-4 text-left"> {{ $user->name.' '.$user->lname}} </p>
                                                <p class="para-4 text-left">{{ $user->address }}, <br>
                                                 @if($user->addressL2 != Null)
                                                <span class="para-4">{{ $user->addressL2 }},</span><br>
                                                @endif
                                                <span class="para-4">
                                                    {{ $user->city }}, <br>
                                                @if($user->stateProvince != Null)
                                                    {{  $user->stateProvince }}, <br>
                                                @endif
                                                </span>
                                                <span class="para-4">{{ $user->country }},</span><br>
                                                <span class="para-4">{{ $user->postal_code }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-1 col-md-1 col-12 col-sm-12"></div>
                    <div class="col-lg-5 col-md-6 col-12 col-sm-12 card border">
                         <div class="address-box m-auto py-4">
                            <div class="my-address">
                                <div class="">
                                    <h5 class="bill-head text-left">Billing Address </h5>
                                </div>
                                @if($user->address != '')
                                    <h5 class="para-4 ">The following addresses will be used on the checkout page
                                    by default.</h5>
                                @endif
                                @if($user->address != '')
                                    <div class="">
                                        <div class="add-details">
                                            <div class="px-lg-1">
                                                <p class="para-4 text-left"> {{ $user->name.' '.$user->lname}} </p>
                                                <p class="para-4 text-left">{{ $user->address }}, <br>
                                                 @if($user->addressL2 != Null)
                                                <span class="para-4">{{ $user->addressL2 }},</span><br>
                                                @endif
                                                <span class="para-4">
                                                    {{ $user->city }}, <br>
                                                @if($user->stateProvince != Null)
                                                    {{  $user->stateProvince }}, <br>
                                                @endif
                                                </span>
                                                <span class="para-4">{{ $user->country }},</span><br>
                                                <span class="para-4">{{ $user->postal_code }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

    
    
    
@endsection

@section('script')
 
@endsection