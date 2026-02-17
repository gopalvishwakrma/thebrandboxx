@extends('frontend.layouts.app')

@section('content')
<div class="faq-page">
        <div class="container-fluid">
            <div class="faq-top">
                <div class="faq-top-title">
                    <h2>FAQS</h2>
                </div>
            </div>
        </div>

        <div class="faq-second-sec">
            <div class="left-sec d-none d-sm-none s-md-none d-lg-block">
                <img src="{{ asset('frontend/brandbox/images/faq-left-bg.png') }}" class="img-fluid">
            </div>
           

            <div class="middle-sec">
                <div class="faq-acc-sec">
                    <div class="faq-data-wrapper">
                       
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item active" >
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-parent="#accordionPanelsStayOpenExample" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                        Does my website need SEO?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <p>Recent studies have suggested that around 85 per cent of customers will research a brand on Google as their first point of call. You need a solid SEO strategy to make sure that your brand ranks highly on Google, so yes – your website needs SEO. 
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingtwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-parent="#accordionPanelsStayOpenExample" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsetwo" aria-expanded="false" aria-controls="panelsStayOpen-collapsetwo">
                                        How long will SEO take to work? 
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsetwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingtwo">
                                    <div class="accordion-body">
                                        <p>There are a lot of variables with SEO to make giving an exact answer difficult, but we always advise our clients to take a package of at least three months with us to be able to see any significant changes in ranking and traffic. 
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingthree">
                                    <button class="accordion-button collapsed" type="button" data-bs-parent="#accordionPanelsStayOpenExample"  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsethree" aria-expanded="false" aria-controls="panelsStayOpen-headingthree">
                                       How much does Brand Boxx cost?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsethree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingdthree">
                                    <div class="accordion-body">
                                        <p>At The Brand Boxx you only pay for the services you use, and there are no subscription or membership fees. We’ll work out your package, which will depend on which services you want and how long you want them for. 
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-parent="#accordionPanelsStayOpenExample" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                                        How much do I need to spend on PPC? 
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                                    <div class="accordion-body">
                                        <p>Our paid marketing services do come with an additional cost. This cost can vary from business to industry, but we will work with you to come up with a bespoke strategy to ensure your brand gets the most out of PPC. 
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-parent="#accordionPanelsStayOpenExample"  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                        How does email marketing work?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfive">
                                    <div class="accordion-body">
                                        <p>Email marketing is one of the oldest, but one of the best, tricks in the book. It allows you to target customers that you already know are interested in your brand directly. Also, when we write them for you, we always get the tone right. 
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingsix">
                                    <button class="accordion-button collapsed" type="button" data-bs-parent="#accordionPanelsStayOpenExample"  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="false" aria-controls="panelsStayOpen-collapsesix">
                                        What’s included with your UX/UI packages? 
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingsix">
                                    <div class="accordion-body">
                                        <p>Our web design and development team can do any job, big or small. This could be an update of an existing website to improve the user experience, or we could do a complete overhaul and re-build your website and brand online from scratch.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingseven">
                                    <button class="accordion-button collapsed" type="button" data-bs-parent="#accordionPanelsStayOpenExample"  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseseven" aria-expanded="false" aria-controls="panelsStayOpen-collapseseven">
                                        Do I need social media advertising? 
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseseven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingseven">
                                    <div class="accordion-body">
                                        <p>Everyone is on social media. Your brand needs to have a presence if it has any chance against the competition. Social media is becoming more important for businesses, and we will create a strategy for you which gets you in front of potential customers.
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="right-sec d-none d-sm-none s-md-none d-lg-block">
                <img src="{{ asset('frontend/brandbox/images/faq-right-bg.png') }}" class="img-fluid">
            </div>
        </div>

        <div class="container-fluid">
            <div class="faq-last-sec">
                <div class="last-left-sec">
                    <div class="last-left-content">
                        <h2>Let The Brand Boxx become an extension of your team</h2>
                        <p>Whatever you need help within the world of digital marketing, we’re on the same team. From digital media strategies, to online reputation management right through to social media marketing and a complete digital overhaul of your brand online. If you feel like your brand has been standing still, then together with our insight and experience we will take the lead to get your business moving and ensure that it is on the right path. 
                        </p>
                        <div class="last-sec-btn forminfo">
                            <div class="common-btn">
                                <a href="{{ route('contactus') }}" class="loginlinks">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-right-sec">
                    <img src="{{ asset('frontend/brandbox/images/faq-bottom-bg.png') }}" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


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
                            "src": "img/github.svg",
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
@endsection