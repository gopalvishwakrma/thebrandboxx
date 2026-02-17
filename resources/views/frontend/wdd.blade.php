@extends('frontend.layouts.app')
@section('content')
<div class="services-seo-page services-webdesign-page">
        <div class="container-fluid">
            <div class="top-video-box">
                <div class="d-none d-sm-none d-lg-block d-md-block">
                    <video autoplay muted loop class="top-video">
                        <source src="{{ asset('frontend/brandbox/videos/servicesherodesktop.mp4') }}" type="video/mp4">
                    </video>
                </div>

                <div class="d-sm-block d-md-none d-lg-none">
                    <video autoplay muted loop class="top-video">
                        <source src="{{ asset('frontend/brandbox/videos/servicesheromobile.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="inner-content">
                    <h2>Our web design and development services</h2>
                    <p>Here at The Brand Boxx we do much more than build websites – we create online digital experiences which will bridge the gap between your brand and your customers’ needs. Through cutting edge design, we will strengthen the bond between you and your audience. 
                    </p>
                    <div class="forminfo price-btn">
                        <div class="view-price-btn common-btn">
                            <a href="#package" class="loginlinks">view pricing and packages</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-second-section scroll-container">
                <div class="left-part">
                    <div class="left-content scroll-element js-scroll fade-in">
                        <h2>The Brand Boxx approach to Web Design  </h2>
                        <p>We have a unique, non-linear approach to design and development. By building on your unique requirements, we design websites which focus on the user experience from start to finish. As part of our service, we will help you identify who your users online are, what their distinct needs are and how these will translate into different online journeys. By using these insights, we can develop bespoke sitemaps, wireframes and protypes which ensure a unique customer experience. 
                        </p>
                    </div>
                </div>
                <div class="right-part d-none d-sm-none d-md-none d-lg-block">
                    <img src="{{ asset('frontend/brandbox/images/service-webdesign-business-right.png') }}" class="img-fluid">
                </div>
            </div>

            <div class="service-third-section scroll-container">
                <div class="third-sec-left-part">
                    <div class="third-left-content">
                        <h2>What’s included in this package? </h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-orm-email-icon.svg') }}" class="img-fluid">
                                        <h6>Personalised emails 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-webdesign-seoserve-icon.svg') }}" class="img-fluid">
                                        <h6>SEO services </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-webdesign-domain-icon.svg') }}" class="img-fluid">
                                        <h6>Personalised domain 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-webdesign-support-icon.svg') }}" class="img-fluid">
                                        <h6>Support all week </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="third-sec-right-part">
                    <img src="{{ asset('frontend/brandbox/images/service-webdesign-packages-right.png') }}" class="img-fluid d-none d-sm-none d-md-none d-lg-flex ">
                    <img src="{{ asset('frontend/brandbox/images/service-mobile-wedesign-packages-right.png') }}" class="img-fluid d-sm-block d-md-none d-lg-none">
                </div>
            </div>

            <div class="service-sec-fourth scroll-container">
                <div class="fouth-sec-content scroll-element js-scroll fade-in">
                    <h2>Improve your brand in three easy steps </h2>
                    <p>Getting started with The Brand Boxx couldn’t be easier. If you’re looking to boost brand awareness and recognition online, then register for a The Brand Boxx account today to gain instant access to our digital marketing services and expert team insight. When you work with The Brand Boxx we become an extension of your team. 
                    </p>
                    <div class="steps-section scroll-element js-scroll fade-in">
                        <h5>Create an Account</h5>
                        <img src="{{ asset('frontend/brandbox/images/services-steps-right-arrow.svg') }}" class="img-fluid d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('frontend/brandbox/images/services-mobile-steps-down-arrow.svg') }}" class="img-fluid d-sm-block d-md-none d-lg-none p-3">
                        <h5>Explore Services</h5>
                        <img src="{{ asset('frontend/brandbox/images/services-steps-right-arrow.svg') }}" class="img-fluid d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('frontend/brandbox/images/services-mobile-steps-down-arrow.svg') }}" class="img-fluid d-sm-block d-md-none d-lg-none p-3">
                        <h5>Leave It To Us</h5>
                    </div>
                    <div class="buisness-step-btn forminfo">
                        <div class="step-btn common-btn">
                            <a href="{{ route('aboutus') }}" class="loginlinks">About Us</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="pricing-packages-sec scroll-container" id="package">
                <div class="pricing-title">
                    <h2>UI/UX pricing and packages</h2>
                </div>
                <div class="duration-inline d-sm-flex d-md-none d-lg-none">
                    <div class="duration">
                        <h3>Duration of Service:</h3>
                    </div>

                    <div class="dos-select-section forminfo">
                        <select class="form-control down-arrow" id="selectduration">
                            <option value="1month">1 Months</option>
                           
                        </select>
                    </div>
                </div>
                <div class="duration d-none d-sm-none d-md-flex d-lg-flex">
                    <h3>Duration of Service:</h3>
                </div>

                <div class="dos-select-section forminfo d-none d-sm-none d-md-flex d-lg-flex">
                    <select class="form-control down-arrow" id="selectduration">
                        <option value="1month">1 Months</option>
                        
                    </select>
                </div>

            </div>


            <div class="packages-table scroll-container">
                <div class="table-left-bg d-none d-sm-none d-md-flex d-lg-flex">
                    <img src="{{ asset('frontend/brandbox/images/service-table-right-left-bg.png') }}" class="img-fluid">
                </div>
                <div class="table-responsive price-package-table">
                    
                    <div id="1month" class="duration_table_data fade-in">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="pack-example" width="300px"></th>
                                    <th class="bronze-pack ">BRONZE</th>
                                    <th class="silver-pack">GOLD</th>
                                    <th class="gold-pack">SILVER</th>
                                    <th class="platinum-pack">PLATINUM</th>
                                    <th class="dimond-pack">DIAMOND</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="packages scroll-element js-scroll fade-in">
                                    <td class="pack-example">
                                        <span class="text-example">Design And Build</span>
                                    </td>
                                    <td class="bronze-pack" data-title="Bronze">
                                       Wordpress
                                    </td>

                                    <td class="silver-pack" data-title="Silver">
                                        Wordpress
                                    </td>

                                    <td class="gold-pack" data-title="Gold">
                                       Wordpress
                                    </td>

                                    <td class="platinum-pack" data-title="Platinum">
                                       Bespoke
                                    </td>

                                    <td class="dimond-pack" data-title="Dimond">
                                       Bespoke
                                    </td>
                                </tr>

                                <tr class="packages scroll-element js-scroll fade-in">
                                    <td class="pack-example">
                                        <span class="text-example">Number Of Pages</span>
                                    </td>
                                    <td class="bronze-pack" data-title="Bronze">
                                       5
                                    </td>

                                    <td class="silver-pack" data-title="Silver">
                                        10
                                    </td>

                                    <td class="gold-pack" data-title="Gold">
                                        15
                                    </td>

                                    <td class="platinum-pack" data-title="Platinum">
                                       6
                                    </td>

                                    <td class="dimond-pack" data-title="Dimond">
                                        20
                                    </td>
                                </tr>

                                <tr class="packages scroll-element js-scroll fade-in">
                                    <td class="pack-example">
                                        <span class="text-example">Search Engine Optimisation</span>
                                    </td>
                                    <td class="bronze-pack" data-title="Bronze">
                                       <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="silver-pack" data-title="Silver">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="gold-pack" data-title="Gold">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="platinum-pack" data-title="Platinum">
                                       <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="dimond-pack" data-title="Dimond">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>
                                </tr>

                                <tr class="packages scroll-element js-scroll fade-in">
                                    <td class="pack-example">
                                        <span class="text-example">Personalised Domain Name</span>
                                    </td>
                                    <td class="bronze-pack" data-title="Bronze">
                                       <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="silver-pack" data-title="Silver">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="gold-pack" data-title="Gold">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="platinum-pack" data-title="Platinum">
                                       <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="dimond-pack" data-title="Dimond">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>
                                </tr>

                                <tr class="packages scroll-element js-scroll fade-in">
                                    <td class="pack-example">
                                        <span class="text-example">SSL Certificate (Secure Sockets Layer)</span>
                                    </td>
                                    <td class="bronze-pack" data-title="Bronze">
                                       <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="silver-pack" data-title="Silver">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="gold-pack" data-title="Gold">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="platinum-pack" data-title="Platinum">
                                       <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="dimond-pack" data-title="Dimond">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>
                                </tr>

                                <tr class="packages scroll-element js-scroll fade-in">
                                    <td class="pack-example">
                                        <span class="text-example">Suppport, 7 Days A Week</span>
                                    </td>
                                    <td class="bronze-pack" data-title="Bronze">
                                       <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="silver-pack" data-title="Silver">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="gold-pack" data-title="Gold">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="platinum-pack" data-title="Platinum">
                                       <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>

                                    <td class="dimond-pack" data-title="Dimond">
                                        <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                    </td>
                                </tr>

                                
                            </tbody>
                            <tfoot>
                                <tr class="packages scroll-element js-scroll fade-in">
                                    <td class="pack-example">
                                        <span class="text-example">Price</span>
                                    </td>
                                    <td class="bronze-pack" data-title="Bronze">
                                        <span class="amount">{{ currency_symbol() }}{{ round(convert_price(305.03), 2) }}</span>
                                        <a  class="table-addcart-btn" type="submit" onclick="addToCart1Step(65)">Add to Cart</a>
                                    </td>

                                    <td class="silver-pack" data-title="Silver">
                                        <span class="amount">{{ currency_symbol() }}{{ round(convert_price(577.13), 2) }}</span>
                                        <a  class="table-addcart-btn" type="submit" onclick="addToCart1Step(66)">Add to Cart</a>
                                    </td>

                                    <td class="gold-pack" data-title="Gold">
                                        <span class="amount">{{ currency_symbol() }}{{ round(convert_price(956.60), 2) }}</span>
                                        <a  class="table-addcart-btn" type="submit" onclick="addToCart1Step(67)">Add to Cart</a>
                                    </td>

                                    <td class="platinum-pack" data-title="Platinum">
                                        <span class="amount">{{ currency_symbol() }}{{ round(convert_price(3903.27), 2) }}</span>
                                        <a  class="table-addcart-btn" type="submit" onclick="addToCart1Step(68)">Add to Cart</a>
                                    </td>

                                    <td class="dimond-pack" data-title="Dimond">
                                        <a  class="table-addcart-btn" type="submit" onclick="addToCart1Step(69)"> Add to Cart</a>
                                        <span class="amount">{{ currency_symbol() }}{{ round(convert_price(8031.04), 2) }}</span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
                <div class="table-right-bg d-none d-sm-none d-md-flex d-lg-flex">
                    <img src="{{ asset('frontend/brandbox/images/service-table-right-left-bg.png') }}" class="img-fluid">
                </div>
            </div>

        </div>

        <div class="service-last-sec scroll-container">
            <div class="left-sec d-none d-sm-none d-md-none d-lg-block">
                <img src="{{ asset('frontend/brandbox/images/service-last-sec-left.png') }}" class="img-fluid">
            </div>
            <div class="center-contact-from forminfo">
                <div class="center-sec-inner scroll-element js-scroll fade-in">
                    <div class="contact-ttile">
                        <h2>Get your brand a bespoke Brand Boxx package </h2>
                        <p>We can create bespoke packages which have been carefully created for the exact needs of your brand to boost awareness and overall traffic. 
                        </p>
                    </div>
                    <div class="form-start">
                        <form id="requestform" action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data" onsubmit="return check_agree(this);">
                            @csrf
                            <input type="hidden" name="from_page" value="service">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" aria-describedby="emailHelp" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb4">
                                        <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="emailHelp" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb4">
                                        <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                            <label>Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" aria-describedby="emailHelp" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb4">
                                        <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                            <label>Upload File</label>
                                            <input class="form-control" type="file" id="document" name="document" placeholder="Upload Brief" required aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-12 mb4">
                                        <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                            <label>Message</label>
                                            <textarea class="form-control message-box" id="message" name="message" rows="3" placeholder="Additional Information"  required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="form-check scroll-element js-scroll fade-in">
                                            <input class="form-check-input" type="checkbox" id="terms" name="terms">
                                            <label for="terms">
                                                By ticking this box, you agree to the <a href="{{ route('termsandconditions') }}" class="a-links">Terms & Conditions</a>
                                                 & <a href="{{ route('privacypolicy') }}" class="a-links">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-btn-inline">
                                        <div class="form-group ">
                                            <!--<a href="#"><img src="{{ asset('frontend/brandbox/images/reCAPTCHA.png') }}" class="img-fluid"></a>-->
                                          <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
											<div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                                        </div>
                                        <div class="common-btn message-btn">
                                            <button type="submit" class="loginlinks btn btn-transparent">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="right-sec d-none d-sm-none d-md-none d-lg-block">
                <img src="{{ asset('frontend/brandbox/images/service-last-sec-right.png') }}" class="img-fluid">
            </div>
        </div>
    </div>
   
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    {{--<script src="https://www.google.com/recaptcha/api.js" async defer></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script language="javascript">
        $(document).ready(function() {
            //$(".comment").shorten();
        });
    </script>
    <script>
        $(document).ready(function() {
            // $(".readmore a").addClass("btn btn-orange mt-4");
            // $(".readmore a span i").addClass("d-none");
        });
    </script>

    <script>
        $(document).ready(function() {
            /*$(function () { 
                $(window).scroll(function () {
                    if ($(this).scrollTop() >50) { 
                        $('.logo').attr('src',"{{ asset('frontend/dist/img/logo.svg') }}') }}");
                    }
                    if ($(this).scrollTop() < 1000) { 
                        $('.logo').attr('src',"{{ asset('frontend/dist/img/logo.svg') }}') }}");
                    }
                })
            });*/
        });
    </script>
    <script>
        $(document).ready(function() {
            $("header.fixed-top").addClass("mt-lg-3");
            $("header .desktop").addClass("bg-white");
            $("header .desktop div").removeClass("py-3");
            $(".headlogo").attr('src',
                "https://dev.supporthives.com/oceanbluemarketing/public/frontend/ocean/img/black-logo.svg') }}");
        });
    </script>
    <script>
    function check_agree(form) {
        var response = hcaptcha.getResponse();
        console.log(form.email.valid);
        if (form.fullname && form.email && form.phone && form.message && form.terms.checked) {
          
          $('#submit-btn').attr('disabled', true);
          return true;
        }else if(!form.fullname.value){
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Please Enter Fullname'
            }) 
                return false;
        }else if(!form.email.value){
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Please Enter Email'
            }) 
                return false;
        }else if(!form.phone.value){
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Please Enter Phone'
            }) 
                return false;
        }else if(!form.message.value){
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Please Enter Comments'
            }) 
                return false;
        }else if(!form.terms.checked){
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Please Accept T&C'
            }) 
                return false;
        }
        return false;
    }
</script>
    <script>
        $(document).ready(function() {
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#5889ea"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg') }}",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#5889ea",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 243.6239055957366,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
            var count_particles, stats, update;
            stats = new Stats;
            stats.setMode(0);
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            document.body.appendChild(stats.domElement);
            count_particles = document.querySelector('.js-count-particles');
            update = function() {
                stats.begin();
                stats.end();
                if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
                }
                requestAnimationFrame(update);
            };
            requestAnimationFrame(update);
        });
    </script>

    <script type="text/javascript ">
        $('#web-table').on('change', function(e) {
            $('.tab-pane').removeClass('active in')
            $('#' + $(e.currentTarget).val()).addClass("active in ");
        })
    </script>
    
<script>
    document.getElementById('document').addEventListener('change', function () {
            const allowedExtensions = ['doc', 'docx', 'pdf'];
    for (const file of this.files) {
                const ext = file.name.split('.').pop().toLowerCase();
    if (!allowedExtensions.includes(ext)) {
        alert('Invalid file: ' + file.name);
    this.value = '';
    break;
                }
            }
        });
</script>

@endsection
