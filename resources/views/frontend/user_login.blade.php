@extends('frontend.layouts.app')
@section('content')

<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
    
    
{{-- <section>
    <div class="container px-md-5 mb-md-5 mb-0">
        <div class="row mt-5 px-md-5">
            <div class="col-12 col-md-6 px-md-5">
                <div class="loginbox ">
                    <div class="head-3-black pb-4">Log In</div>
                    <form id="loginform" role="form" action="{{ route('login') }}" method="POST" onsubmit="return check_agree(this);">
                        @csrf
                        <div class="">
                            <input type="email" name="email" id="email" class="form-control custom-form" id="loginemail" placeholder="Email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="py-4">
                            <input type="password" name="password" id="password" class="form-control custom-form" placeholder="Password" required>
                        </div>
                        <div class="row">
                            <div class="form-check col-md-6 col-6">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <div class="form-check col-md-6 col-6 text-end">
                            <p class="form-check-label" for="remember" style="cursor:pointer;">
                                <a href="{{ route('password.request') }}" class="forget-a">Forgot Password?</a>
                            </p>

                        </div>
                        </div>
                        
                        <button type="submit" class="btn-blue btn-blue mt-md-0 mt-3 w-100">Log In</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 px-md-5">
                <div class="mt-5 mt-md-0">
                    <div class="head-3-black pb-4">Sign Up</div>
                    <form id="registerform" role="form" action="{{ route('register') }}" method="POST" onsubmit="return check_agree(this);">
                        @csrf
                        <div class="">
                            <input type="text" class="form-control custom-form" id="name" name="name" placeholder="Full Name" aria-describedby="emailHelp" required>
                        </div>
                        <div class="py-4">
                            <input type="email" class="form-control custom-form" placeholder="Email" name="email" id="email" required>
                        </div>
                        <div class="">
                            <input type="password" class="form-control custom-form" placeholder="Password" name="password" id="password" required>
                        </div>
                        <div class="py-4">
                            <input type="password" class="form-control custom-form" placeholder="Confirm Password" name="password_confirmation" id="confirmpassword" required>
                        </div>
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input" id="terms" name="terms">
                            <label class="form-check-label" for="terms">By ticking this checkbox, you agree to the <a href="{{ route('termsandconditions') }}">Terms & Conditions</a> & <a href="{{ route('privacypolicy') }}"> Privacy Policy</a></label>
                        </div>
                        <div class="g-recaptcha" data-recaptcha data-sitekey="{{config('google_captcha.site_key')}}"></div>
                          @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                              <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>
                                  @if($errors->first('g-recaptcha-response') == 'The g-recaptcha-response field is required.')
                                  {{ 'Captcha is Required' }}
                                  @else
                                  {{ $errors->first('g-recaptcha-response') }}
                                  @endif
                                </strong>
                              </div>
                            </span>
                          @endif

                        <button type="submit" class="btn-blue w-100 mb-5 mb-md-0">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<div class="login-register-page">
    <div class="container">
        <div class="login-page-title">
            <h1 class="text-center">
                access your account
            </h1>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="loginform-part">
                    <div class="login-title">
                        <h2>Login</h2>
                    </div>
                    <div class="login-form forminfo">
                        <form id="loginform" role="form" action="{{ route('login') }}" method="POST" >
                            @csrf
                            <div class="form-group mb-4">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Type Here" required>
                            </div>

                            <div class="form-group mb-4">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Type Here" required>
                            </div>
                            <div class="form-group mb-4">
                                <div class="forgot-pass">
                                    Forgot your password?
                                    <a class="a-links" href="{{ route('password.request') }}">Reset Password</a>
                                </div>
                            </div>
                            <div class="common-btn login-btn">
                                <button type="submit" class="loginlinks" style="background: transparent;border: none;">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="login-below-img d-none d-sm-none d-md-block d-lg-block">
                    <img src="{{ asset('frontend/brandbox/images/login-bottom.png') }}" class="img-fluid">
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="right-side">
                    <div class="registartion-part">
                        <div class="regist-title">
                            <h2>Registration</h2>
                        </div>
                        <div class="registration-form forminfo">
                            <form id="registerform" role="form" action="{{ route('register') }}" method="POST" onsubmit="return check_agree(this);">
                                @csrf
                                <div class="form-group mb-4">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Type Here" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Type Here" name="email" id="email" required>

                                </div>
                                <div class="form-group mb-4">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Type Here" name="password" id="password" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Type Here" name="password_confirmation" id="confirmpassword" required>
                                </div>

                                <div class="form-group mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="terms" name="terms">
                                        <label for="terms">
                                            By ticking this box, you agree to the <a href="{{ route('termsandconditions') }}" class="a-links">Terms & Conditions</a>
                                             & <a href="{{ route('privacypolicy') }}" class="a-links">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-btn-inline">
                                    <div class="form-group ">
                                       <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
										<div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                                    </div>
                                    <div class="common-btn register-btn">
                                        <button type="submit" class="loginlinks" style="background: transparent;border: none;">Register</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-below-img d-sm-block d-md-none d-lg-none">
                <img src="{{ asset('frontend/brandbox/images/login-bottom.png') }}" class="img-fluid">
            </div>
        </div>
    </div>
</div>


    
@endsection



@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    {{--<script src="https://www.google.com/recaptcha/api.js?render=6LerEakZAAAAAJC3jzg1_kgNaBJtHrCBTxQb7i_o"></script>--}}

    
    <script>
    function check_agree(form) {

        //var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

        var passwordstring = form.password.value;
        var passwordconfirmstring = form.confirmpassword.value;

        if (passwordstring.length >= 6 && passwordconfirmstring == passwordstring && form.terms.checked) {
            return true;
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
        } else if (!form.terms.checked) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please accept terms and conditions'
            })
        }
        return false;
    }

</script>
    <script>
        var state=false;
        function toggle(){
            if (state){
                document.getElementById("password").setAttribute("type","password");
                state=false;
            }
            else{
               document.getElementById("password").setAttribute("type","text");
                state=true; 
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $("header.fixed-top").addClass("mt-lg-3");
            $("header .desktop").addClass("bg-white");
            $("header .desktop div").removeClass("py-3");
            $(".headlogo").attr('src',"https://dev.supporthives.com/oceanbluemarketing/public/frontend/ocean/img/black-logo.svg");
        });
   </script>
@endsection
