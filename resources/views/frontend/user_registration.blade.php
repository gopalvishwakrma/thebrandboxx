@extends('frontend.layouts.app')

@section('content')
    
<section class="login-page p-lg-0">
    <div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 col-sm-12 p-4 p-lg-0 order-1 order-lg-0">
                <div class="login-left">
                    <div class="login-box-head">
                        <h2 class="h2-black">Sign up</h2>
                    </div>
                    <div class="">
                        <form id="registerform" class="form-default form-group" role="form" action="{{ route('register') }}" method="POST" onsubmit="return check_agree(this);">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 col-sm-12 mb-4">
                                    <input type="text" id="fullname" name="name" class="form-control-lg" placeholder="Name" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 col-sm-12 mb-4">
                                    <input type="email" id="email" name="email" class="form-control-lg" placeholder="Email" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 col-sm-12 mb-4">
                                    <input type="password" id="password" name="password" class="form-control-lg" placeholder="Password ( at least 8 characters)" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 col-sm-12 mb-4">
                                    <input type="password" id="confirmpassword" name="password_confirmation" class="form-control-lg" placeholder="Confirm Password ( same as password)" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="c-checkbox register-check">
                                        <label class="d-flex ml-3">
                                            <input type="checkbox" id="terms" name="terms" class="mt-2">
                                            <label for="terms"></label>
                                            <span class="check-text"> I agree with <a href="{{ route('termsandconditions') }}">Terms and Conditions </a> and <a href="{{ route('privacypolicy') }}">Privacy Policy</a></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 col-sm-12 mb-4">
                                    <div class="g-recaptcha" data-recaptcha data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 col-sm-12 mb-4">
                                    <button type="submit" class="btn btn-tertiary w-100">Sign up</button>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                    <hr>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 col-sm-12 mb-lg-4 text-center">
                                    <div class="dont-account">
                                        <p>Already have an account?</p>
                                        <a href="{{ route('user.login') }}">Log in</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                <img src="{{ asset('frontend/ocean/img/sign-right-img.png') }}" alt="img" class="img-fluid sign-right-img d-none d-lg-block d-md-block">
                <img src="{{ asset('frontend/ocean/img/sign-right-img-mo.png') }}" alt="img" class="img-fluid d-block d-lg-none d-lg-none">
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    {{--<script type="text/javascript">

        var isPhoneShown = true;

        var input = document.querySelector("#phone-code");
        var iti = intlTelInput(input, {
            separateDialCode: true,
            preferredCountries: []
        });

        var countryCode = iti.getSelectedCountryData();


        input.addEventListener("countrychange", function() {
            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);
        });

        $(document).ready(function(){
            $('.email-form-group').hide();
        });

        function autoFillSeller(){
            $('#email').val('seller@example.com');
            $('#password').val('123456');
        }
        function autoFillCustomer(){
            $('#email').val('customer@example.com');
            $('#password').val('123456');
        }

        function toggleEmailPhone(el){
            if(isPhoneShown){
                $('.phone-form-group').hide();
                $('.email-form-group').show();
                isPhoneShown = false;
                $(el).html('Use Phone Instead');
            }
            else{
                $('.phone-form-group').show();
                $('.email-form-group').hide();
                isPhoneShown = true;
                $(el).html('Use Email Instead');
            }
        }
    </script>--}}
    <script type="text/javascript">
        
        function check_agree(form) {
            var response = grecaptcha.getResponse();
            var password1 = form.password.value;
            var password2 = form.confirmpassword.value;
    
            
            if (password2 == password1 && form.terms.checked && response) {
              return true;
            } else if(password1.length < 6) {
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Password is too short, please try again !'
                })
            } else if(password2 != password1) {
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Password does not matched, please try again !'
                })
            } else if(!form.terms.checked) {
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'You must agree to the Terms and Conditions and Privacy Policy before continuing.'
                })
            }else if(response.length == 0){
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Please select Captcha'
                }) 
                    return false;
            }
            return false;
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
