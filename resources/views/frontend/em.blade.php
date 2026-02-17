@extends('frontend.layouts.app')
@section('content')

<div class="services-seo-page service-orm scroll-container">
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
                    <h2>Our Email Marketing services </h2>
                    <p>Accelerate your sales cycle with our bespoke email marketing services. We will help you to create engaging email newsletters which will be sure to stand out in crowded inboxes, with the main delivery being sent straight to your core sales funnel. 
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
                        <h2>The Brand Boxx approach to Email Marketing  </h2>
                        <p>Our approach to email marketing is all about setting the right tone. When done correctly, email marketing is one of the best and most cost-effective ways to ensure that your business reaches your audience. However, if you get the tone wrong, the stakes are high. If your emails are too frequent, irrelevant or worse, just not interesting, then you could risk losing customers rather than gaining them. That’s why you should leave it to us. 
                        </p>
                    </div>
                </div>
                <div class="right-part d-none d-sm-none d-md-none d-lg-block">
                    <img src="{{ asset('frontend/brandbox/images/brand_girl.png') }}" class="img-fluid">
                </div>
            </div>

            <div class="service-third-section scroll-container">
                <div class="third-sec-left-part">
                    <div class="third-left-content ">
                        <h2>What’s included in this package?</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-orm-packages-right.png') }}" class="img-fluid">
                                        <h6>A/B Testing 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-ppc-report-icon.svg') }}" class="img-fluid">
                                        <h6>Customisable template </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-orm-email-icon.svg') }}" class="img-fluid">
                                        <h6>Automated emails 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group">
                                    <div class="icon-content scroll-element js-scroll fade-in">
                                        <img src="{{ asset('frontend/brandbox/images/service-orm-article-icon.svg') }}" class="img-fluid">
                                        <h6>Link tracking 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="third-sec-right-part">
                    <img src="{{ asset('frontend/brandbox/images/brand_laptop.png') }}" class="img-fluid d-none d-sm-none d-md-none d-lg-flex ">
                    <img src="{{ asset('frontend/brandbox/images/brand_laptop_mobo.png') }}" class="img-fluid d-sm-block d-md-none d-lg-none">
                </div>
            </div>

            <div class="service-sec-fourth scroll-container">
                <div class="fouth-sec-content">
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
                    <h2>ORM pricing and packages</h2>
                </div>
                <div class="duration-inline d-sm-flex d-md-none d-lg-none scroll-element js-scroll fade-in">
                    <div class="duration">
                        <h3>Duration of Service:</h3>
                    </div>

                    <div class="dos-select-section forminfo">
                        <select class="form-control down-arrow" id="selectmonth_mobile">
                            <option value="months1">1 Months</option>
                        <option value="months3">3 Month</option>
                        <option value="months6">6 Months</option>
                        <option value="months12">12 Months</option>
                        </select>
                    </div>
                </div>
                <div class="duration d-none d-sm-none d-md-flex d-lg-flex">
                    <h3>Duration of Service:</h3>
                </div>

                <div class="dos-select-section forminfo d-none d-sm-none d-md-flex d-lg-flex">
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
                                <th class="bronze-pack">BRONZE</th>
                                <th class="silver-pack">GOLD</th>
                                <th class="gold-pack">SILVER</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Email Send Limit</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    3000
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   7000
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    Unlimited
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Multiple Users</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                  Unlimited
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   Unlimited
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   Unlimited
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">User Roles & Permissions</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Two Factor Authentication</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Customisable Template Library</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Custom Fields</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Drag-And-Drop Builder</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Signup Forms</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Mobile Optimisation Tools</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">A/B Testing</span>
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
                              </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Preference Center</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Design & Spam Testing</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                     <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Real-Time Reporting Analytics</span>
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

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Worldview Reporting</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">RSS (Straightforward Syndication)</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Transactional Emails</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Campaign Tags</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Email Section Locking</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Dynamic Content</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Countdown Timer</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Optimal Time Zone Sending</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          
                                
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Send Time Optimisation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Advanced Link Tracking</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Email Support</span>
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

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Phone Support</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Deliverability Support</span>
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

                               
                            </tr>

                            

                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(30.61), 2) }}</span>
                                    <a  onclick="addToCart1Step(70)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(62.45), 2) }}</span>
                                    <a  onclick="addToCart1Step(71)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(198.40), 2) }}</span>
                                    <a  onclick="addToCart1Step(72)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                               
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months3" style="display:none">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">BRONZE</th>
                                <th class="silver-pack">GOLD</th>
                                <th class="gold-pack">SILVER</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Email Send Limit</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    3000
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   7000
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    Unlimited
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Multiple Users</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                  Unlimited
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   Unlimited
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   Unlimited
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">User Roles & Permissions</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Two Factor Authentication</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Customisable Template Library</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Custom Fields</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Drag-And-Drop Builder</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Signup Forms</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Mobile Optimisation Tools</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">A/B Testing</span>
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
                              </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Preference Center</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Design & Spam Testing</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                     <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Real-Time Reporting Analytics</span>
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

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Worldview Reporting</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">RSS (Straightforward Syndication)</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Transactional Emails</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Campaign Tags</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Email Section Locking</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Dynamic Content</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Countdown Timer</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Optimal Time Zone Sending</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          
                                
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Send Time Optimisation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Advanced Link Tracking</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Email Support</span>
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

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Phone Support</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Deliverability Support</span>
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

                               
                            </tr>

                            

                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(70.84), 2) }}</span>
                                    <a  onclick="addToCart1Step(73)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(164.05), 2) }}</span>
                                    <a  onclick="addToCart1Step(74)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(581.64), 2) }}</span>
                                    <a  onclick="addToCart1Step(75)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                               
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months6" style="display:none">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">BRONZE</th>
                                <th class="silver-pack">GOLD</th>
                                <th class="gold-pack">SILVER</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Email Send Limit</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    3000
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   7000
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    Unlimited
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Multiple Users</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                  Unlimited
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   Unlimited
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   Unlimited
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">User Roles & Permissions</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Two Factor Authentication</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Customisable Template Library</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Custom Fields</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Drag-And-Drop Builder</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Signup Forms</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Mobile Optimisation Tools</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">A/B Testing</span>
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
                              </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Preference Center</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Design & Spam Testing</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                     <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Real-Time Reporting Analytics</span>
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

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Worldview Reporting</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">RSS (Straightforward Syndication)</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Transactional Emails</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Campaign Tags</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Email Section Locking</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Dynamic Content</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Countdown Timer</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Optimal Time Zone Sending</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          
                                
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Send Time Optimisation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Advanced Link Tracking</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Email Support</span>
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

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Phone Support</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Deliverability Support</span>
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

                               
                            </tr>

                            

                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(119.31), 2) }}</span>
                                    <a  onclick="addToCart1Step(76)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(305.73), 2) }}</span>
                                    <a  onclick="addToCart1Step(77)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(1140.91), 2) }}</span>
                                    <a  onclick="addToCart1Step(78)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                               
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months12" style="display:none">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">BRONZE</th>
                                <th class="silver-pack">GOLD</th>
                                <th class="gold-pack">SILVER</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Email Send Limit</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    3000
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   7000
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    Unlimited
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Multiple Users</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                  Unlimited
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   Unlimited
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   Unlimited
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">User Roles & Permissions</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Two Factor Authentication</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Customisable Template Library</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Custom Fields</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Drag-And-Drop Builder</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Signup Forms</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Mobile Optimisation Tools</span>
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
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">A/B Testing</span>
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
                              </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Preference Center</span>
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

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Design & Spam Testing</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                     <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Real-Time Reporting Analytics</span>
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

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Worldview Reporting</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">RSS (Straightforward Syndication)</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Transactional Emails</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Campaign Tags</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Email Section Locking</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Dynamic Content</span>
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
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Countdown Timer</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Optimal Time Zone Sending</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                          </tr>

                          
                                
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Send Time Optimisation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Advanced Link Tracking</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Email Support</span>
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

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Phone Support</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a ><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Deliverability Support</span>
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

                               
                            </tr>

                            

                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(216.25), 2) }}</span>
                                    <a  onclick="addToCart1Step(79)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(589.09), 2) }}</span>
                                    <a  onclick="addToCart1Step(80)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(2259.44), 2) }}</span>
                                    <a  onclick="addToCart1Step(81)" class="table-addcart-btn">Add to Cart</a>
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
            <div class="center-contact-from forminfo ">
                <div class="center-sec-inner">
                    <div class="contact-ttile scroll-element js-scroll fade-in">
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
                                            <textarea class="form-control message-box" id="message" name="message" placeholder="Additional Information"  required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terms" name="terms">
                                            <label for="terms">
                                                By ticking this box, you agree to the <a href="{{ route('termsandconditions') }}" class="a-links">Terms & Conditions</a>
                                                 & <a href="{{ route('privacypolicy') }}" class="a-links">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-btn-inline">
                                        <div class="form-group scroll-element js-scroll fade-in">
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
    $(document).ready(function() {
        $(function() {
            $('#selectmonth_mobile').change(function(){
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
