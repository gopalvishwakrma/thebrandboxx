 {{-- 
 <section class="navbg">
    <div class="container">
        <div class="row justify-content-md-around py-5">
            <div class="col-md-4 col-12 order-1 order-md-0">
                <div class="row">
                    <h4 class="foot-head-blue pb-3">Useful Links</h4>
                    <div class="col-md-6 d-none d-md-block">
                        <p><a href="{{ route('seo') }}" class="foot-text anchor">SEO</p>
                        <p class="py-2"><a href="{{ route('social') }}" class="foot-text anchor">Social Media</a></p>
                        <p><a href="{{ route('ppc') }}" class="foot-text anchor">Pay Per Click</a></p>
                        <p class=" py-2"><a href="{{ route('wdd') }}" class="foot-text anchor">Web Design & Dev</a></p>
                        <p><a href="{{ route('orm') }}" class="foot-text anchor">ORM</a></p>
                        <p class=" py-2"><a href="{{ route('em') }}" class="foot-text anchor">Email Marketing</a></p>
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <p><a href="{{ route('termsandconditions') }}" class="foot-text anchor">Terms & Conditions</p>
                        <p class="py-2"><a href="{{ route('privacypolicy') }}" class="foot-text anchor">privacy policy</a></p>
                        <p><a href="{{ route('aboutus') }}" class="foot-text anchor">About us</a></p>
                        <p class=" py-2"><a href="{{ route('faqs') }}" class="foot-text anchor">FAQS</a></p>
                        <p><a href="{{ route('contactus') }}" class="foot-text anchor">contact Us</a></p>
                        @auth
                        <p class=" py-2"><a href="{{ route('dashboard') }}" class="foot-text anchor">My Account</a></p>
                        @else  
                        <p class=" py-2"><a href="{{ route('user.login') }}" class="foot-text anchor">Login/Signup</a></p>  
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center text-md-start order-2 order-md-1">
                <h4 class="foot-head-blue1 pb-3">Contact details</h4>
                {{--<p><a href="#" class="foot-text anchor" style="pointer-events: none;">TBC</a></p>--}
                <p class="py-2"><a href="#" class="foot-text anchor" style="pointer-events: none;">support@bluelitebranding.com</a></p>
                <p><a href="#" class="foot-text anchor" style="pointer-events: none;">
                  Brovelle LTD <br />
                  Nirea, 12, Strovolos, 2058,<br />
                  Nicosia, Cyprus <br />
                  Company Reg No. HE 432657 <br>
                  +1 888-212-5102
                  </a></p>
                <hr class="d-block d-md-none" style="background: #E0DFD9;">
            </div>

            <div class="col-md-4 col-12 text-center text-md-left order-0 order-md-2 pb-4">
                <div>
                    <img class="pb-4" src="{{ asset('frontend/bluelitebranding/assets/img/Logo.png') }}" alt="" />
                </div>
                <p class="foot-text d-none d-md-flex justify-content-md-center text-md-start">
                    © 2021 BlueLiteBranding.com. <br> All Rights Reserved
                </p>
                <div>
                    <img src="{{ asset('frontend/bluelitebranding/assets/img/mastercard.png') }}" alt="" />
                </div>
              <div class="d-block marT15">
                                        <a href="https://www.facebook.com/Bluelitebranding-102506479153609" class="text-white"><i class="fa fa-facebook"></i></a>
                                    
                                         <a href="https://www.instagram.com/bluelitebranding/" class="ml-3 text-white marL15"><i class="fa fa-instagram"></i></a>
                              </div>
                <hr class="d-block d-md-none" style="background: #E0DFD9;">
            </div>
            <div class="d-block d-md-none pt-3 order-3">
                <p class="foot-text">
                    © 2021 BlueLiteBranding.com. <br> All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section> --}}


<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="company-info">
                    <a href="{{ route('home') }}"><img src="{{ asset('frontend/brandbox/images/footer-logo.svg') }}" class="img-fluid" alt=""></a>

                    <div class="d-none d-sm-none d-md-none d-lg-block">
                        <div class="company-address">
                            © {{date("Y")}} thebrandboxx.com.<br> All Rights Reserved
                        </div>

                        <img src="{{ asset('frontend/brandbox/images/mastercard.svg') }}" class="img-fluid" alt="">
                    </div>
                    <figure class="text-lg-left mt-3">
                        <a href="https://www.facebook.com/profile.php?id=61553292170085"><i class="fa fa-facebook" aria-hidden="true" style="color: #000000;"></i></a>
                        <a href="https://www.instagram.com/_thebrandboxx/"><i class="fa fa-instagram ml-3" aria-hidden="true" style="color: #000000;"></i></a>
                    </figure>              
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <h3>Services</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('seo') }}">SEO</a></li>
                    <li><a href="{{ route('orm') }}">ORM</a></li>
                    <li><a href="{{ route('ppc') }}">Pay Per Click</a></li>
                    <li><a href="{{ route('wdd') }}">UI & UX Services</a></li>
                    <li><a href="{{ route('social') }}">Social Media</a></li>
                    <li><a href="{{ route('em') }}">Email Marketing</a></li>
                </ul>
            </div>



            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <h3>Useful Links</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('termsandconditions') }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('aboutus') }}">About Us</a></li>
                    <li><a href="{{ route('faqs') }}">FAQS</a></li>
                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                    @auth
                    <li><a href="{{ route('dashboard') }}">My Account</a></li>
                    @else   
                    <li><a href="{{ route('user.login') }}">Login/Signup</a></li>
                    @endauth
                    
                </ul>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                <h3>Contact details</h3>
                <div class="address">
                 <p>BLUESKIES DIGITAL SOLUTIONS LIMITED<br>5 St. John's Lane, London, England, <br>EC1M 4BH
                    </p>
                  <p>
                    UK&nbsp;TOLL&nbsp;FREE:+44&nbsp;808&nbsp;238&nbsp;9884<br>US&nbsp;TOLL&nbsp;FREE:+1&nbsp;888&nbsp;623&nbsp;5049
                  </p>
                    <a href="mailto:support@brandboxx.com">support@thebrandboxx.com</a><br>
                    
                </div>

            </div>



        </div>

        <div class="mobile-footercopyright d-sm-block d-md-none d-lg-none">
            <p>© 2022 thebrandboxx.com. All Rights Reserved</p>
            <img src="{{ asset('frontend/brandbox/images/mastercard.svg') }}" class="img-fluid text-center" alt="">
        </div>
    </div>
</footer>