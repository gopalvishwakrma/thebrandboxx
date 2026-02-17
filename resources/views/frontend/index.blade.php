@extends('frontend.layouts.app')

@section('content')
<div class="home-page">

        <div class="home-banner">
            <div class="container-fluid">
                <div class="home-banner">
                    <div class="d-none d-sm-none d-md-block d-lg-block"><img src="{{ asset('frontend/brandbox/images/homebanner.jpg') }}" class="img-fluid" alt=""></div>
                    <div class="d-sm-block d-md-none d-lg-none"><img src="{{ asset('frontend/brandbox/images/homebanner-mobile-top-bg.png') }}" class="img-fluid" alt=""></div>
                    <div class="homeslider-title">
                        <h2>Take your brand above and beyond </h2>
                        <p>With The Brand Boxx you can do more </p>
                        <a href="#services" class="home-explorebtn">Start Exploring</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid scroll-container">
            <div class="home-digitalbox">

                <div class="welcome-homebox scroll-element js-scroll">
                    <div class="welcomeimage_box">
                        <img src="{{ asset('frontend/brandbox/images/homeabout.svg') }}" class="img-fluid d-none d-sm-none d-md-none d-lg-flex" alt="">
                    </div>
                    <div class="welcome_contentbox animated animatedFadeInUp fadeInUp">
                        <h3>Bringing your brand to the next level </h3>
                        <p>At The Brand Boxx our work is about so much more than delivering creative campaigns and business boosting metrics. 
                        We are here to solve problems by embracing creativity and bringing your brand to life in the digital arena. 
                        By understanding what’s really needed for your brand, we deliver unrivalled results. </p>
                      @auth
                      @else
                      <a href="{{ route('user.login') }}" class="home-signup">Sign Up</a>
                      @endauth
                    </div>
                </div>

                <div class="home-imgright d-sm-block d-md-none d-lg-block">
                    <div class="d-none d-sm-none d-md-block d-lg-block"><img src="{{ asset('frontend/brandbox/images/home-imgright.png') }}" class="img-fluid" alt=""></div>
                    <div class="d-sm-block d-md-none d-lg-none"><img src="{{ asset('frontend/brandbox/images/home-mobile-imgright.png') }}" class="img-fluid"></div>
                </div>

            </div>
        </div>

        <div class="home-mainservice-content" id="services">

            <div class="home-mainservicecontentleft">
                <img src="{{ asset('frontend/brandbox/images/home-contentleft01.png') }}" class="img-fluid d-none d-sm-none d-md-none d-lg-flex" alt="">
            </div>
            <div class="home-mainservicecontentmiddle d-none d-sm-none d-md-none d-lg-block">

                <div class="middleflexbox scroll-container">
                    <div class="home-servicemaininfobox boxinfo-home01 scroll-element js-scroll fade-in">
                        <h3>SEARCH ENGINE OPTIMISATION </h3>
                        <p>Do you want your brand and website to rank better on search engine results? At The Brand Boxx we deliver Search Engine Optimisation (SEO) services which will ensure that both your website and brand are user and search engine friendly. </p>
                        <a href="{{ route('seo') }}">Read more</a>
                    </div>

                    <div class="home-servicemaininfobox boxinfo-home02 scroll-element js-scroll fade-in">
                        <h3>Pay per click services </h3>
                        <p>Our tailored Pay Per Click (PPC) services use bespoke PPC ad campaigns which utilise all major platforms including Google Ads, Microsoft Ads, YouTube, Facebook, Instagram, LinkedIn, TikTok, Snapchat and Spotify as well as any other channels you choose. </p>
                        <a href="{{ route('ppc') }}">Read more</a>
                    </div>
                </div>

                <div class="middleflexbox">
                    <div class="home-servicemaininfobox boxinfo-home03 scroll-element js-scroll fade-in">
                        <h3>Online reputation management </h3>
                        <p>Do you want to enhance the way that your brand is perceived online? We use advanced online reputation intelligence methods which will track your audience and the reputation of your brand in real-time so you can always be one step ahead. </p>
                        <a href="{{ route('orm') }}">Read more</a>
                    </div>

                    <div class="home-servicemaininfobox boxinfo-home04 scroll-element js-scroll fade-in">
                        <h3>User interface / user experience </h3>
                        <p>At The Brand Boxx we deliver exceptional end user experience on mobile and web for your brands, whatever platform you’re using. Looking for a new website or an enhanced customer user experience online? We develop digital solutions that get it right first time. </p>
                        <a href="{{ route('wdd') }}">Read more</a>
                    </div>
                </div>


                <div class="middleflexbox">
                    <div class="home-servicemaininfobox boxinfo-home05 scroll-element js-scroll fade-in">
                        <h3>Social media services </h3>
                        <p>Unlike other digital marketing agencies, at The Brand Boxx we do much more than just manage your social media accounts and platforms. Our work delivers much more than usual social media campaigns, and we go above and beyond brand awareness, engagement and followers. </p>
                        <a href="{{ route('social') }}">Read more</a>
                    </div>

                    <div class="home-servicemaininfobox boxinfo-home06 scroll-element js-scroll fade-in">
                        <h3>Email marketing </h3>
                        <p>At The Brand Boxx we know that the backbone of any successful digital marketing campaign is high-quality content. Using experts from both our PR and Digital teams, our email marketing services deliver high-quality content for the entire buyer’s journey. </p>
                        <a href="{{ route('em') }}">Read more</a>
                    </div>
                </div>
            </div>

            <div class="home-service-mobile d-sm-block d-md-block d-lg-none scroll-container">
                <div class="container-fluid">
                    <div class="service-slider">
                        <div class="homemobslider owl-carousel owl-theme scroll-element js-scroll fade-in">
                            <div class="item">
                                <div class="home-servicemaininfobox boxinfo-home01">
                                    <h3>SEARCH ENGINE OPTIMISATION </h3>
                                    <p>Do you want your brand and website to rank better on search engine results? At The Brand Boxx we deliver Search Engine Optimisation (SEO) services which will ensure that both your website and brand are user and search engine friendly. </p>
                                    <a href="{{ route('seo') }}">Read more</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="home-servicemaininfobox boxinfo-home02">
                                    <h3>Pay per click services </h3>
                                    <p>Our tailored Pay Per Click (PPC) services use bespoke PPC ad campaigns which utilise all major platforms including Google Ads, Microsoft Ads, YouTube, Facebook, Instagram, LinkedIn, TikTok, Snapchat and Spotify as well as any other channels you choose. </p>
                                    <a href="{{ route('ppc') }}">Read more</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="home-servicemaininfobox boxinfo-home03">
                                    <h3>Online reputation management </h3>
                                    <p>Do you want to enhance the way that your brand is perceived online? We use advanced online reputation intelligence methods which will track your audience and the reputation of your brand in real-time so you can always be one step ahead. </p>
                                    <a href="{{ route('orm') }}">Read more</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="home-servicemaininfobox boxinfo-home04">
                                    <h3>User interface / user experience </h3>
                                    <p>At The Brand Boxx we deliver exceptional end user experience on mobile and web for your brands, whatever platform you’re using. Looking for a new website or an enhanced customer user experience online? We develop digital solutions that get it right first time. </p>
                                    <a href="{{ route('wdd') }}">Read more</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="home-servicemaininfobox boxinfo-home05">
                                    <h3>Social media services </h3>
                                    <p>Unlike other digital marketing agencies, at The Brand Boxx we do much more than just manage your social media accounts and platforms. Our work delivers much more than usual social media campaigns, and we go above and beyond brand awareness, engagement and followers. </p>
                                    <a href="{{ route('social') }}">Read more</a>
                                </div>

                            </div>
                            <div class="item">
                                <div class="home-servicemaininfobox boxinfo-home06">
                                    <h3>Email marketing </h3>
                                    <p>At The Brand Boxx we know that the backbone of any successful digital marketing campaign is high-quality content. Using experts from both our PR and Digital teams, our email marketing services deliver high-quality content for the entire buyer’s journey. </p>
                                    <a href="{{ route('em') }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-mainservicecontentright">
                <img src="{{ asset('frontend/brandbox/images/home-contentright01.png') }}" class="img-fluid d-none d-sm-none d-md-none d-lg-flex" alt="">
            </div>
        </div>





        <div class="home-exploremain scroll-container">
            <div class="exploremain-middle scroll-element js-scroll fade-in">
                <h3>The possibilities for brands are endless </h3>
                <p>Whether your brand is completely new to online marketing, or your current digital marketing strategy is not delivering, The Brand Boxx can help. As a full-service digital marketing agency we examine every element of the customer’s journey online, using our expert knowledge to make your brand work for your target audience. </p>
                <a href="{{ route('aboutus') }}" class="explore-btnhome">
                        About us
                    </a>
            </div>
        </div>



        <div class="container-fluid scroll-container">
            <div class="about-last-sec scroll-element js-scroll fade-in">
                <img src="{{ asset('frontend/brandbox/images/aboutus-lastsec-bg.png') }}" class="img-fluid d-none d-sm-none d-md-block d-lg-block">
                <img src="{{ asset('frontend/brandbox/images/aboutus-lastsec-mobile-bg.png') }}" class="img-fluid d-sm-block d-md-none d-lg-none">
                <div class="last-sec-content">
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
        </div>

    </div>
@endsection

@section('script')
      <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
      <script>
        $(document).ready(function () {
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
            update = function () {
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
<script>
      jQuery("#carousel").owlCarousel({
        autoplay: true,
        rewind: true, 
        margin: 20,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: false,
        dots:false,
        responsive: {
            300: {
            items: 1,
            nav: true,
            navigation: true,
            navText: ["<span class='show-for-sr'><img src='https://www.oceanbluemarketing.com/public/frontend/ocean/img/left-arrow.svg') }}'></span>","<span class='show-for-sr'><img src='https://www.oceanbluemarketing.com/public/frontend/ocean/img/right-arrow.svg') }}'></span>"]
            },

            600: {
            items: 2
            },

            1024: {
            items: 2
            },

            1366: {
            items: 3
            }
        }
        });
  </script>
  <script>
    $(document).ready(function() {
        $("header.fixed-top").addClass("mt-lg-3");
        $("header .desktop").addClass("bg-white");
        $("header .desktop div").removeClass("py-3");
        $(".headlogo").attr('src',"https://dev.supporthives.com/oceanbluemarketing/public/frontend/ocean/img/black-logo.svg') }}");
    });
  </script>
    <script>
        $(document).ready(function(){
            $(".boxstyle1").hover(function() {
                $(".col-hov1").css("color", "#ffffff");
                $(".head-hov1").css("color", "#ffffff");
            }, function() {
                $(".col-hov1").css("color", "#1C1C1C");
                $(".head-hov1").css("color", "#3865BC");
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $(".boxstyle2").hover(function() {
                $(".col-hov2").css("color", "#ffffff");
                $(".head-hov2").css("color", "#ffffff");
            }, function() {
                $(".col-hov2").css("color", "#1C1C1C");
                $(".head-hov2").css("color", "#3865BC");
            });
        });
    </script>
      <script>
        $(document).ready(function(){
            $(".boxstyle3").hover(function() {
                $(".col-hov3").css("color", "#ffffff");
                $(".head-hov3").css("color", "#ffffff");
            }, function() {
                $(".col-hov3").css("color", "#1C1C1C");
                $(".head-hov3").css("color", "#3865BC");
            });
        });
    </script>
      <script>
        $(document).ready(function(){
            $(".boxstyle4").hover(function() {
                $(".col-hov4").css("color", "#ffffff");
                $(".head-hov4").css("color", "#ffffff");
            }, function() {
                $(".col-hov4").css("color", "#1C1C1C");
                $(".head-hov4").css("color", "#3865BC");
            });
        });
    </script>
      <script>
        $(document).ready(function(){
            $(".boxstyle5").hover(function() {
                $(".col-hov5").css("color", "#ffffff");
                $(".head-hov5").css("color", "#ffffff");
            }, function() {
                $(".col-hov5").css("color", "#1C1C1C");
                $(".head-hov5").css("color", "#3865BC");
            });
        });
    </script>
      <script>
        $(document).ready(function(){
            $(".boxstyle6").hover(function() {
                $(".col-hov6").css("color", "#ffffff");
                $(".head-hov6").css("color", "#ffffff");
            }, function() {
                $(".col-hov6").css("color", "#1C1C1C");
                $(".head-hov6").css("color", "#3865BC");
            });
        });
    </script>

@endsection

