@extends('frontend.layouts.app')
<style>
    .address-title {
        font-size: 16px !important;
    }
</style>
@if (Auth::check())
    @php
        $user = Auth::user();
        //dump($user->id);
        $user_id = Auth::user()->id;
        //DB::enableQueryLog();
        $u2 = DB::table('last_billing_address')
            ->where('user_id', $user_id)
            ->orderBy('id', 'desc')
            ->first();
        //$query = DB::getQueryLog();
        //$query = end($query);
        //dd($query);
        //dump($u2);
        if ($u2) {
            $user = $u2;
        }
        //dump($user);
    @endphp
@endif
@section('content')


    {{-- <section class="p-3 p-md-0">
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12 p-md-3 d-flex flex-row col-12">
                    <p class="acc-active pe-3" style="border-right: 1px solid #E0DFD9;cursor: pointer;"><a
                            style="color: #3865BC !important;text-decoration:none !important;"
                            href="{{ route('dashboard') }}">My Account</a></p>
                    <p class="acc-inactive pe-3 ps-3" style="border-right: 1px solid #E0DFD9;cursor: pointer;"><a
                            style="color: #2E2E2E !important;text-decoration:none !important;"
                            href="{{ route('purchase_history.index') }}">Order History</a></p>
                    <p class="acc-inactive ps-3" style="cursor: pointer;"><a
                            style="color: #2E2E2E !important;text-decoration:none !important;"
                            href="{{ route('logout') }}">Logout</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-grid">
        <div class="container p-md-5">

            <div class="row d-md-flex flex-md-row justify-content-md-around py-md-4">
                <div class="col-md-9 col-12 bg-white px-md-5 py-md-5">
                    <div clss="px-md-4 py-md-5">
                        <div class="head-3-black text-start">Dashboard</div>
                        <p class="para-dash-t">
                            Hello {{ Auth::user()->name }} (Not {{ Auth::user()->name }}? <a
                                href="{{ route('logout') }}">Logout</a>)
                        </p>
                        <p class="para-1-black m-0 pb-2" style="border-bottom: 2px solid #3865BC;">From your account
                            dashboard you can view your recent orders, manage<br>your billing addressed and edit your
                            password and account details.</p>
                        <form id="form-profile-update" action="{{ route('customer.profile.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div style="border-bottom: 2px solid #3865BC;">
                                <div class="row pt-4 pb-2">
                                    <div class="col-md-12">
                                        <h1 class="heading-dash-o">
                                            Your details
                                        </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="">
                                            <input type="text" name="name" value="{{ Auth::user()->name }}"
                                                class="form-control custom-form" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 py-4 py-md-0">
                                        <div class="">
                                            <input type="email" name="email" value="{{ Auth::user()->email }}"
                                                class="form-control custom-form" placeholder="Email" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-md-4">
                                    <div class="col-md-6 col-12">
                                        <div class="">
                                            <input type="password" id="new_password" name="new_password"
                                                class="form-control custom-form" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 py-4 py-md-0">
                                        <div class="">
                                            <input type="password" id="confirm_password" name="confirm_password"
                                                class="form-control custom-form" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="pb-md-4" style="border-bottom: 2px solid #3865BC;">
                            <div class="row pt-4 pb-2">
                                <div class="col-md-12">
                                    <h1 class="heading-dash-o">
                                        Billing Address
                                    </h1>
                                </div>
                            </div>
                            <div class="row px-md-3">
                                <div class="ps-md-0">
                                    @if ($user->address != '')
                                        <div class="pb-3 pb-md-2">
                                            <h4 class="card-title">User Billing Address</h4>
                                            <p class="card-text">

                                                <strong>{{ $user->name . ' ' . $user->lname }}</strong><br />
                                                {{ $user->address }}<br />
                                                @if ($user->addressL2 != null)
                                                    {{ $user->addressL2 }}<br />
                                                @endif

                                                {{ $user->city }} <br />
                                                @if ($user->stateProvince != null)
                                                    {{ $user->stateProvince }}<br />
                                                @endif
                                            </p>
                                            {{ $user->country }}<br />
                                            {{ $user->postal_code }}<br />

                                        </div>
                                    @else
                                        <strong>No Saved Address Found!</strong>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3 py-3 px-md-3">
                            <div class="col-md-12 col-12 p-md-0">
                                <button form="form-profile-update" type="submit" class="loginbutton btn-blue w-100">Save
                                    Changes</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    {{-- --------------------------------NEW CODE STARTS HERE--------------------- --}}

    <div class="account-detail-page scroll-container">

        <div class="left-image-section d-none d-sm-none d-md-none d-lg-flex">
            <img src="{{ asset('frontend/brandbox/images/account-detail-left-img.png') }}" class="img-fluid">
        </div>
        <div class="account-detail-section">
            <div class="check-order-link d-sm-block d-lg-block d-xl-none d-xxl-none d-md-block">
                <a href="order-history.html" class="a-links">Check Order History</a>
            </div>

            <div class="acc-title scroll-element">
                <h2>Account details</h2>
                <h6>welcome back {{ Auth::user()->name }}! (not {{ Auth::user()->name }}? <a href="{{ route('logout') }}" class="a-links">Logout Here.)</a></h6>
                <p>From your account dashboard you can view your recent orders, manage your billing addressed and edit your password and account details.</p>
            </div>

            <div class="your-detail">
                <h2>Your details</h2>
                <div class="container">
                    <form class="forminfo acc-form" id="form-profile-update" action="{{ route('customer.profile.update') }}" method="POST"
                    enctype="multipart/form-data" onsubmit="return check_agree(this)">
                    @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 scroll-element js-scroll fade-in">
                                <div class="form-group mb-4">
                                    <label>First Name</label>
                                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 scroll-element js-scroll fade-in">
                                <div class="form-group mb-4">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="Email" readonly>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 scroll-element js-scroll fade-in">
                                <div class="form-group mb-4">
                                    <label>New Password</label>
                                    <input type="password" id="new_password" name="new_password" minlength="6" class="form-control" placeholder="New Password">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 scroll-element js-scroll fade-in">
                                <div class="form-group mb-4">
                                    <label>Confirm New Password</label>
                                    <input type="password" id="confirm_password" name="confirm_password" minlength="6" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-btn-inline scroll-element js-scroll fade-in">
                                <div class="form-group inline-ipbox mb-4" style="opacity: 0;">
                                    <label>Current Password</label>
                                </div>
                                <div class="form-group">
                                    <div class="update-btn">
                                        <button class="a-links" type="submit" style="color: #198AB1;background:transparent;border:none;"><u>Update Changes</u></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="billing-detail">
                    <h2>Billing Address</h2>
                    <div class="container">
                        <form class="forminfo acc-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 js-scroll fade-in">
                                    <div class="form-group mb-4">
                                        <label>Addres Line 1</label>
                                        <input type="text" class="form-control" placeholder="Not Added" value="{{ $user->address }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 js-scroll fade-in">
                                    <div class="form-group mb-4">
                                        <label>Addres Line 2</label>
                                        <input type="text" class="form-control" placeholder="Not Added" value="{{ $user->addressL2 }}"> 
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 js-scroll fade-in">
                                    <div class="form-group mb-4">
                                        <label>City</label>
                                        <input type="tel" class="form-control" placeholder="Not Added" value="{{ $user->city }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 js-scroll fade-in">
                                    <div class="form-group mb-4">
                                        <label>Zip / Postal Code</label>
                                        <input type="text" class="form-control" placeholder="Not Added" value="{{ $user->postal_code }}">
                                    </div>
                                </div>

                                @if ($user->stateProvince != null)
                                    <div class="col-lg-6 col-md-6 col-sm-12 js-scroll fade-in">
                                        <div class="form-group mb-4">
                                            <label>Country</label>
                                            <input type="text" class="form-control" placeholder="Not Added" value="{{ $user->country }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 js-scroll fade-in">
                                        <div class="form-group mb-4">
                                            <label>State Province</label>
                                            <input type="text" class="form-control" placeholder="Not Added" value="{{ $user->stateProvince }}">
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-btn-inline js-scroll fade-in">
                                        <div class="form-group inline-ipbox mb-4">
                                            <label>Country</label>
                                            <input type="text" class="form-control" placeholder="Not Added" value="{{ $user->country }}">
                                        </div>
                                        <div class="form-group">
                                            <div class="update-btn" style="opacity: 0">
                                                <label href="#" class="a-links">Update Changes</label>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                {{-- <div class="col-lg-12 col-md-12 col-sm-12 form-btn-inline js-scroll fade-in">
                                    <div class="form-group inline-ipbox mb-4">
                                        <label>Country</label>
                                        <input type="text" class="form-control" placeholder="Not Added" value="{{ $user->country }}">
                                    </div>
                                    <div class="form-group">
                                        <div class="update-btn" style="opacity: 0">
                                            <label href="#" class="a-links">Update Changes</label>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="right-bigbtn-section d-none d-sm-none d-lg-none d-xl-block d-xxl-block">
            <div class="check-order-btn">
                <a href="{{ route('purchase_history.index') }}">Check Order <br/> History Here </a>
            </div>
            <div class="right-plain-box">
                <img src="{{ asset('frontend/brandbox/images/account-right-plain-img.png') }}" class="img-fluid">
            </div>
        </div>

    </div>


    {{-- --------------------------------NEW CODE ENDS HERE--------------------- --}}


@endsection
@section('script')
    <script>

function check_agree(form) {

//var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

var passwordstring = form.new_password.value;
var passwordconfirmstring = form.confirm_password.value;

if (passwordstring.length >= 6 && passwordconfirmstring == passwordstring) {
    return true;
} else if (passwordstring == "" || passwordconfirmstring == "") {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Enter Password'
    })

} else if (passwordstring.length < 6) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Password is too short'
    })

} else if (passwordstring.length < 6) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Password is too short'
    })
} else if (passwordconfirmstring != passwordstring) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Password Mismatched, please try again'
    })
} 
return false;
}

        function tog(v) {
            return v ? 'addClass' : 'removeClass';
        }
        $(document).on('input', '.clearable', function() {
            $(this)[tog(this.value)]('x');
        }).on('mousemove', '.x', function(e) {
            $(this)[tog(this.offsetWidth - 18 < e.clientX - this.getBoundingClientRect().left)]('onX');
        }).on('touchstart click', '.onX', function(ev) {
            ev.preventDefault();
            $(this).removeClass('x onX').val('').change();
        });
        $(document).ready(function() {
            //$("header.fixed-top").addClass("mt-lg-3");
            //$("header .desktop").addClass("bg-white");
            //$("header .desktop div").removeClass("py-3");
            $(".headlogo").attr('src',
                "https://dev.supporthives.com/oceanbluemarketing/public/frontend/ocean/img/black-logo.svg");
        });
    </script>
@endsection
