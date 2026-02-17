@extends('frontend.layouts.app')

@section('content')
<div class="contactus-page">
        <div class="container-fluid">
            <div class="contact-top">
                <div class="contact-top-title">
                    <h2>Contact us</h2>
                </div>
            </div>

            <div class="contact-content">
                <div class="contcat-left-sec d-none d-sm-none d-md-none d-lg-flex ">
                    <img src="{{ asset('frontend/brandbox/images/contactus-left-bg.png') }}" class="img-fluid">
                </div>

                <div class="contact-form forminfo">
                    <form id="contactform" action="{{ route('contactus.store') }}" method="post" onsubmit="return check_agree(this);">
                        @csrf
                        <input type="hidden" name="from_page" value="contactus">
                        <div class="form-group mb-4">
                            <label>Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
                        </div>
                        <div class="form-group mb-4">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email"  placeholder="Email" required>
                        </div>
                        <div class="form-group mb-4">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                        </div>
                        <div class="form-group mb-4">
                            <label>Message</label>
                            <input type="textarea" class="form-control message-box" placeholder="Type Here" placeholder="message" name="message" id="message" required>
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
                                <!--<a href="#"><img src="{{ asset('frontend/brandbox/images/reCAPTCHA.png') }}" class="img-fluid"></a>-->
                                <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
								<div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                            </div>
                            <div class="common-btn message-btn">
                                <button type="submit" class="loginlinks btn bg-transparent">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="contcat-right-sec">
                    <div class="right-top">
                        <div class="callus-title">
                            <h2>Got a question for the team? We’re here to help</h2>
                            <p>
                               If you’ve got a question for the The Brand Boxx team, or you want to know more about how working with us could take your brand above and beyond, then please get in touch with us using the contact information on this page. 
                            </p>
                        </div>
                    </div>
                    <div class="right-bottom" style="padding: 23px 25px; ">
                        <div class="call-email">
                            <h2 class="mb-0">Company Name </h2>
                            <a href="#">BLUESKIES&nbsp;DIGITAL&nbsp;SOLUTIONS&nbsp;LIMITED<br>5&nbsp;St.&nbsp;John's&nbsp;Lane,&nbsp;London,&nbsp;England,<br>EC1M&nbsp;4BH<br>UK&nbsp;TOLL&nbsp;FREE:+44&nbsp;808&nbsp;238&nbsp;9884<br>US&nbsp;TOLL&nbsp;FREE:+1&nbsp;888&nbsp;623&nbsp;5049
                    </a>
                            <h2>Send Us An Email</h2>
                           <a href="mailto:support@thebrandboxx.com">support@thebrandboxx.com</a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
  
  	{{--<script>

    window.addEventListener("DOMContentLoaded", function(e) {
        
    var myForm = document.getElementById("requestform");
     
    var checkForm = function(e) {
    if(!this.terms.checked) {
        swal("Please indicate that you accept the Terms and Conditions");
        this.terms.focus();
        e.preventDefault(); // equivalent to return false
        return;
      } 
     
    };

    // attach the form submit handler
    myForm.addEventListener("submit", checkForm, false);
    

    var myCheckbox = document.getElementById("terms");
    var myCheckboxMsg = "Please indicate that you accept the Terms and Conditions";

    // set the starting error message
    myCheckbox.setCustomValidity(myCheckboxMsg);

    // attach checkbox handler to toggle error message
    myCheckbox.addEventListener("change", function(e) {
      this.setCustomValidity(this.validity.valueMissing ? myCheckboxMsg : "");
    }, false);
      
      
    var myCheckbox2 = document.getElementById("call");
    var myCheckboxMsg2 = "Please indicate that you accept the consultancy rates";

    // set the starting error message
    myCheckbox2.setCustomValidity(myCheckboxMsg2);

    // attach checkbox handler to toggle error message
    myCheckbox2.addEventListener("change", function(e) {
      this.setCustomValidity(this.validity.valueMissing ? myCheckboxMsg2 : "");
    }, false);

  }, false);
  

  </script>--}}
  
  <script>
    function check_agree(form) {
        var response = grecaptcha.getResponse();
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