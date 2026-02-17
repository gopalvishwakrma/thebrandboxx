@extends('frontend.layouts.app')


@section('content')

         <div class="aboutus-page">
        <!-- <div class="container"> -->
        <div class="aboutus-top-sec">
            <div class="top-tile">
                <h2>
                    a little about us 
                </h2>
            </div>
        </div>

        <div class="about-second-sec scroll-container">
            <div class="second-left-sec">
                <img src="{{ asset('frontend/brandbox/images/aboutus-secondsec-left-bg.png') }}" class="img-fluid d-sm-block d-md-none d-lg-flex">
            </div>
            <div class="second-right-sec scroll-element js-scroll fade-in">
                <div class="right-content">
                    <h2>The brilliant, bespoke Brand Boxx digital marketing approach </h2>
                    <p>Digital marketing is so much more than good-looking websites and getting likes on social media. It’s about building relationships with your customers and putting them at the heart of your brand’s strategy. 
                    </p>
                    <p>At The Brand Boxx our team of digital marketing experts have the skills to look at the wider picture and the technical details. </p>
                  @auth
                  @else
                    <div class="btn-sec forminfo">
                        <div class="common-btn">
                            <a href="{{ route('user.login') }}" class="loginlinks">Sign Up</a>
                        </div>
                    </div>
                  @endauth
                </div>
            </div>
        </div>

        <div class="about-third-sec scroll-container">
            <div class="third-left-sec scroll-element js-scroll fade-in">
                <h5>“The Brand Boxx have propelled our brand into the modern era and brought new customers to us.”</h5>
            </div>
            <div class="third-right-sec scroll-element js-scroll fade-in">
                <div class="right-content">
                    <h2>Our digital marketing services </h2>
                    <p>At The Brand Boxx we will help your brand and evaluate your digital marketing strategy and we will continuously test, learn and optimise your marketing strategies to ensure that they are always effective and impactful. Good digital marketing is about so much more than just being present online – it is all about having a solution-focused approach and finding out what works for each individual brand. 
                    </p>
                    <div class="btn-sec forminfo">
                        <div class="common-btn">
                            <a href="{{ route('home') }}#services" class="loginlinks">View Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-fourth-sec scroll-container">
            <div class="fourth-left-sec">
                <div class="fourth-sec-content scroll-element js-scroll fade-in">
                    <h2>How it works at The Brand Boxx </h2>
                    <p>Digital marketing is about much more than stats and analytics. While this is always an important part of our strategy, the focus is always you and your brand. Getting to know you and your brand is always at the core of our campaigns and is intrinsic to their success. </p>
                </div>
            </div>
            <div class="fourth-right-sec">
                <div class="fourth-content">
                    <div class="service-slider">
                        <div class="myslider owl-carousel owl-theme">
                            <div class="item">
                                <h2> step 01</h2>
                                <p>Do you know which of our services you need? Great. If not, we will help you find the best service for your brand. </p>
                            </div>
                            <div class="item">
                                <h2> step 02</h2>
                                <p>Now it’s time to sit down and talk. Together, we will come up with a strategy using a combination of our services. </p>
                            </div>
                            <div class="item">
                                <h2> step 03</h2>
                                <p>Sit back, relax, and let The Brand Boxx do all the hard work so you don’t have to. We track everything in real time. </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="about-fifth-sec scroll-container">
            <div class="fifth-left-sec scroll-element js-scroll fade-in">
                <div class="left-content">
                    <h2>Let The Brand Boxx become an extension of your team</h2>
                    <p>Whatever you need help within the world of digital marketing, we’re on the same team. From digital media strategies, to online reputation management right through to social media marketing and a complete digital overhaul of your brand online. If you feel like your brand has been standing still, then together with our insight and experience we will take the lead to get your business moving and ensure that it is on the right path.
                    </p>
                    <div class="contact-faq-btn forminfo">
                        <div class="form-btn-inline">
                            <div class="contact-btn common-btn">
                                <a href="{{ route('contactus') }}" class="loginlinks">Contact Us</a>
                            </div>
                            <div class="faq-btn common-btn">
                                <a href="{{ route('faqs') }}" class="loginlinks">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fifth-right-sec">
                <img src="{{ asset('frontend/brandbox/images/aboutus-fifthsec-right-bg.png') }}" class="img-fluid d-sm-block d-md-none d-lg-flex">
            </div>
        </div>

        <div class="about-last-sec scroll-container">
            <img src="{{ asset('frontend/brandbox/images/aboutus-lastsec-bg.png') }}" class="img-fluid d-none d-sm-none d-md-block d-lg-block">
            <img src="{{ asset('frontend/brandbox/images/aboutus-lastsec-mobile-bg.png') }}" class="img-fluid d-sm-block d-md-none d-lg-none">
            <div class="last-sec-content scroll-element js-scroll fade-in">
                <h2>Let’s take your brand above and beyond</h2>
                <p>Our digital marketing experts will take your brand above and beyond. From designers, copywriters as well as website developers and social media pros, The Brand Boxx team does it all, and we do it better than anyone else. Get in touch today to see how we can take your brand to the next level. 
                </p>
                <div class="forminfo join-btn">
                    <div class="common-btn">
                        <a href="{{ route('contactus') }}" class="loginlinks">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- </div> -->

    </div>
@endsection

@section('script')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    function tog(v){return v?'addClass':'removeClass';} 
    $(document).on('input', '.clearable', function(){
        $(this)[tog(this.value)]('x');
    }).on('mousemove', '.x', function( e ){
        $(this)[tog(this.offsetWidth-18 < e.clientX-this.getBoundingClientRect().left)]('onX');
    }).on('touchstart click', '.onX', function( ev ){
        ev.preventDefault();
        $(this).removeClass('x onX').val('').change();
    });
    
  </script>
  
  <script>
        $('.submenu-services').on('click', 'a', function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }

            /* if ($(this).attr('class', 'active')) {
                $(this).removeClass('active');

            } */
        });



        $('.mobilemenu').on('click', function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }

            /* if ($(this).attr('class', 'active')) {
                $(this).removeClass('active');

            } */
        });

        $(document).ready(function() {
            $('.myslider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })

        })




    </script>

    
@endsection