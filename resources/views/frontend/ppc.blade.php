@extends('frontend.layouts.app')
@section('content')

    {{-- new code start --}}

    <div class="services-seo-page service-ppc scroll-container">
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

                <div class="inner-content scroll-element js-scroll fade-in">
                    <h2>Our PPC services </h2>
                    <p>The Brand Boxx approach to Pay Per Click (PPC) management is all about finding the best way to reach your target audience as soon as they start looking for your products online. Using PPC, we target them when they are searching for exactly what your business offers. 
                    </p>
                    <div class="forminfo price-btn">
                        <div class="view-price-btn common-btn">
                            <a href="#ppc-price" class="loginlinks">view pricing and packages</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-second-section">
                <div class="left-part">
                    <div class="left-content scroll-element js-scroll fade-in">
                        <h2>The Brand Boxx approach to PPC  </h2>
                        <p>Whether we’re testing the latest PPC campaigns on Google Ads, or we’re exploring the latest features on Microsoft Ads, we make sure that our PPC services are constantly evolving so that we’re always ahead of the game. At The Brand Boxx our approach is always to develop PPC advertising campaigns which ensure that your brand is targeting the correct keywords for both consumers and channel partners all while our experts make sure you’re getting the best possible value. 
                        </p>
                    </div>
                </div>
                <div class="right-part d-none d-sm-none d-md-none d-lg-block">
                    <img src="{{ asset('frontend/brandbox/images/ppc-services-buisness-right.png') }}" class="img-fluid">
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
                                        <img src="{{ asset('frontend/brandbox/images/service-ppc-unlimited-icon.svg') }}" class="img-fluid">
                                        <h6>Unlimited changes 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-ppc-keyword-icon.svg') }}" class="img-fluid">
                                        <h6>Keyword diagnostics
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-ppc-googleads.svg') }}" class="img-fluid">
                                        <h6>Google Ads Account
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-ppc-report-icon.svg') }}" class="img-fluid">
                                        <h6>Monthly reports 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="third-sec-right-part">
                    <img src="{{ asset('frontend/brandbox/images/service-ppc-packages-right.png') }}" class="img-fluid d-none d-sm-none d-md-none d-lg-flex ">
                    <img src="{{ asset('frontend/brandbox/images/service-ppc-mobile-packages-right.png') }}" class="img-fluid d-sm-block d-md-none d-lg-none">
                </div>
            </div>

            <div class="service-sec-fourth scroll-container">
                <div class="fouth-sec-content scroll-element js-scroll fade-in">
                    <h2>Improve your brand in three easy steps </h2>
                    <p>Getting started with Brand Boxx couldn’t be easier. If you’re looking to boost brand awareness and recognition online, then register for a Brand Boxx account today to gain instant access to our digital marketing services and expert team insight. When you work with Brand Boxx we become an extension of your team. 
                    </p>
                    <div class="steps-section">
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

            <div class="pricing-packages-sec scroll-container" >
                <div class="pricing-title">
                    <h2>PPC pricing and packages</h2>
                </div>
                <div class="duration-inline d-sm-flex d-md-none d-lg-none d-none">
                    <div class="duration">
                        <h3>Duration of Service:</h3>
                    </div>

                    <div class="dos-select-section forminfo" >
                        <select class="form-control down-arrow">
                            <option>1 Months</option>
                            <option>3 Month</option>
                            <option>6 Months</option>
                            <option>12 Months</option>
                        </select>
                    </div>
                </div>
                <div class="duration d-none d-sm-none d-md-flex d-lg-flex">
                    <h3>Duration of Service:</h3>
                </div>

                <div class="dos-select-section forminfo d-block d-sm-none d-md-flex d-lg-flex" id="ppc-price">
                    <select class="form-control down-arrow" id="selectmonth"> 
                        <option value="months1">1 Months</option>
                        <option value="months3">3 Month</option>
                        <option value="months6">6 Months</option>
                        <option value="months12">12 Months</option>
                    </select>
                </div>

            </div>

            <div class="packages-table scroll-container">
                <div class="table-left-bg d-none d-sm-none d-md-flex d-lg-flex">
                    <img src="{{ asset('frontend/brandbox/images/service-table-right-left-bg.png') }}" class="img-fluid">
                </div>
                <div class="table-responsive price-package-table">
                    <table class="table months" id="months1">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">Bronze</th>
                                <th class="silver-pack">Silver</th>
                                <th class="gold-pack">Gold</th>
                                {{-- <th class="platinum-pack">Platinum</th>
                                <th class="dimond-pack">Dimond</th>
                                <th class="dimond-pack">Master</th> --}}
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Unlimited Adjustments</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Keyword Diagnostics</span>
                                </td>
                                <td class="platinum-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Google Ads Account</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Analysis (Bids)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Creation Of Ad Groups</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Display Advertising Creation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Competitor Keyword Tracker</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Reporting</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                Monthly
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                Monthly
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                Monthly
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">No Contract, Cancel Anytime</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(122.01), 2) }}</span>
                                    <a  onclick="addToCart1Step(25)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(486.84), 2) }}</span>
                                    <a  onclick="addToCart1Step(26)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(608.85), 2) }}</span>
                                    <a  onclick="addToCart1Step(27)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months3" style="display:none">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">Bronze</th>
                                <th class="silver-pack">Silver</th>
                                <th class="gold-pack">Gold</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Unlimited Adjustments</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Keyword Diagnostics</span>
                                </td>
                                <td class="platinum-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Google Ads Account</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Analysis (Bids)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Creation Of Ad Groups</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Display Advertising Creation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Competitor Keyword Tracker</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Reporting</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                Monthly
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                Monthly
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                Monthly
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">No Contract, Cancel Anytime</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(350.47), 2) }}</span>
                                    <a  onclick="addToCart1Step(28)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(1465.28), 2) }}</span>
                                    <a  onclick="addToCart1Step(29)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(835512.76), 2) }}</span>
                                    <a  onclick="addToCart1Step(30)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months6" style="display:none">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">Bronze</th>
                                <th class="silver-pack">Silver</th>
                                <th class="gold-pack">Gold</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Unlimited Adjustments</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Keyword Diagnostics</span>
                                </td>
                                <td class="platinum-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Google Ads Account</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Analysis (Bids)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Creation Of Ad Groups</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Display Advertising Creation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Competitor Keyword Tracker</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Reporting</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                Monthly
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                Monthly
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                Monthly
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">No Contract, Cancel Anytime</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(678.58), 2) }}</span>
                                    <a  onclick="addToCart1Step(31)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(2908.19), 2) }}</span>
                                    <a  onclick="addToCart1Step(32)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(3653.89), 2) }}</span>
                                    <a  onclick="addToCart1Step(33)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months12" style="display:none">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">Bronze</th>
                                <th class="silver-pack">Silver</th>
                                <th class="gold-pack">Gold</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Unlimited Adjustments</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Keyword Diagnostics</span>
                                </td>
                                <td class="platinum-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Google Ads Account</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Analysis (Bids)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Creation Of Ad Groups</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Display Advertising Creation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Competitor Keyword Tracker</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Reporting</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                Monthly
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                Monthly
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                Monthly
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">No Contract, Cancel Anytime</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                {{-- <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td> --}}
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(1334.78), 2) }}</span>
                                    <a   onclick="addToCart1Step(34)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(5794.02), 2) }}</span>
                                    <a   onclick="addToCart1Step(35)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(7285.40), 2) }}</span>
                                    <a   onclick="addToCart1Step(36)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
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
                        <h2>Get your brand a bespoke Brand Boxx package</h2>
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
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Type Here" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb4">
                                        <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Type Here" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb4">
                                        <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                            <label>Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Type Here" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb4">
                                        <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                            <label>Upload File</label>
                                            <input class="form-control" type="file" id="document" name="document" placeholder="Type Here" required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb4">
                                        <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                            <label>Message</label>
                                            <textarea class="form-control message-box" id="message" name="message" placeholder="Type Here" required></textarea>
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
                                        <div class="form-group scroll-element js-scroll fade-in">
                                            {{-- <a href="#"><img src="{{ asset('frontend/brandbox/images/reCAPTCHA.png') }}" class="img-fluid"></a> --}}
                                            <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
											<div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                                        </div>
                                        <div class="common-btn message-btn">
                                           <button type="submit" class="loginlinks" style="background: transparent;border: none;">Send Message</button>
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
    {{-- new code end --}}


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
        $(function() {
            $('#selectmonth').change(function(){
                $('.months').hide();
                $('#' + $(this).val()).show();
            });
        }); 
    });
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
