@extends('frontend.layouts.app')

@section('content')
    <div class="privacypolicy-page">
        <h2>Privacy Policy</h2>
        <div class="privacy-policy-sec">
            <div class="left-bg-section d-none d-sm-none d-md-none d-lg-block">
                <div class="left-top-bg">
                    <img src="{{ asset('frontend/brandbox/images/privacypolicy-left-top-bg.png') }}" class="img-fluid">
                </div>
                <div class="left-bottom-bg">
                    <img src="{{ asset('frontend/brandbox/images/privacypolicy-left-bottom-bg.png') }}" class="img-fluid">
                </div>
            </div>
            <div class="privcy-desc">
                <h4 style="color: #198AB1;">Introduction </h4>
                <p>This privacy policy works in line with General Data Protection Laws and aims to protect and respect your data and privacy.</p>
                <p>As a leading creative brand and digital agency, the privacy and security of the personal information which we handle at The Brand Boxx is crucial to us. </p>
                <p>This privacy policy explains how we manage and protect your personal data if you are a The Brand Boxx client. </p>
                <p>This privacy policy also tells you information such as who we are, what data about you we might collect and what we might do with this data. </p>
                <h4 style="color: #198AB1;">Who are we?  </h4>
                <p>
                   The Brand Boxx is a leading digital marketing and brand solutions to a global customer vase using a variety of online platforms and channels including social media, SEO, PPC and ORM. We are owned and managed by Blueskies Digital Solutions Limited based at 5 St. John's Lane, London, England, EC1M 4BH.
                </p>
              <P>
                We are responsible for managing our clients’ personal data in connection with our services. Details of how to contact us if you have any questions about the way in which we handle your data can be found at the bottom of this policy.
              </P>
                <h4 style="color: #198AB1;">What data do we collect about you? </h4>
                <p>
                    The types of data that we collect and the reasons for which we collect it from you will depend on a number of factors including who you are and what relationship we have, such as whether or not you are a client with an account with us, or you are only visiting the website <a target="_blank" href="https://www.thebrandboxx.com">www.thebrandboxx.com</a>. 
                </p>
                <p>
                   If you are a client then the personal data that we collect from you could include the following: 
                </p>
                <ul>
                    <p>
                        -	Full name <br>
                        -	Job title <br>
                        -	Contact details including email address, phone number, office address <br>
                        -	Bank account details 
                    </p>
                </ul>
                <h4 style="color: #198AB1;">For what purposes do we use data about you, and on what legal basis? </h4>
                <p>
                    We may use various data about you for various purposes in connection to us providing you with our services. 
                </p>
                <p>This could include for any of the following reasons: </p>
                <ul><p>
                   -	Entering into and managing our commercial relationship with you <br>
                   -	Creating and managing your account with us <br>
                   -	Communicating with you in relation to service provision changes or issues <br>
                   -	Sending you marketing or promotional materials which we think might interest you <br>
                   -	Our record keeping and company administration purposes <br>
                   -	For internal reporting and benchmarking <br>
                   -	To perform our business contact with you 
                </ul></p>
                <h4 style="color: #198AB1;">Who do we share your data with, and for what purpose?  </h4>
                <p>We may share some elements of your data with some of the following parties:</p>
                <ul>
                    <p>
                        -	Third party service providers which provide us with services on our behalf <br>
                        -	Other third parties or where we may be required to do so by law 
                    </p>
                </ul>
                <h4 style="color: #198AB1;">How do we protect data about you?  </h4>
                <p>We implement a number of technical and organisational measures to protect your personal data which we hold from unauthorised disclose, use, alternation or destruction. </p>
                <h4 style="color: #198AB1;">How long will your data be kept? </4>
                <p>
                    The period for which we will keep the data that you send to us will depend on the purposes for which it was originally collected, or whether you have requested the deletion of this data and whether there are any legal obligations to require the retention of the data.
                </p>
                <h4 style="color: #198AB1;">What rights do you have? </4>
                <p>We may have some of the following rights with regards to the data which we hold about you: </p>
                <ul>
                    <p>
                        -	Request us to give you access to it <br>
                        -	Request us to rectify it, update or erase it <br>
                        -	Request us to restrict using it, in certain circumstances <br>
                        -	Object to our using it, in certain circumstances <br>
                        -	Withdraw your consent to our using it <br>
                        -	Data portability <br>
                        -	Opt out from using it for marketing <br>
                        -	Lodge a complaint 
                        
                        
                    </p>
                    <h4 style="color: #198AB1;">Questions?  </h4>
                    <p>The Brand Boxx may be contacted at <a href="support@brandboxx.com">support@brandboxx.com</a>.</p>
                </ul>
            </div>
            <div class="right-bg-section d-none d-sm-none d-md-none d-lg-block">
                <img src="{{ asset('frontend/brandbox/images/privacypolicy-right-bg.png') }}" class="img-fluid">
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 50) {
                    $(".desktop").css("background", "#1b2431");
                } else {
                    $(".desktop").css("background", "transparent");
                }
            });
            //$(".headlogo").attr('src',"https://dev.supporthives.com/oceanbluemarketing/public/frontend/ocean/img/black-logo.svg");
        });
    </script>
@endsection
