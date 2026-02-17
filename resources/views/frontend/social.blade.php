@extends('frontend.layouts.app')
@section('content')
<div class="services-seo-page service-socialmedia">
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
                    <h2>Our Social Media services </h2>
                    <p>Social media audiences in their thousands want to engage with your brand, and we will show them how. The Brand Boxx goes much further than managing social media accounts – we will work closely with your in-house team to ensure your social media campaigns drive ROI. 
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
                        <h2>The Brand Boxx approach to Social Media  </h2>
                        <p>With more than half of the global population now active on social media, that’s an audience your brand simply can not afford to miss out on. Our skilled team of social media marketing experts will make sure that you improve your brand awareness and engage with and grow on your dedicated social media platforms online. By keeping ahead of trends and regularly analysing your performance, our social media campaigns always deliver ROI. 
                        </p>
                    </div>
                </div>
                <div class="right-part d-none d-sm-none d-md-none d-lg-block">
                    <img src="{{ asset('frontend/brandbox/images/service-socialmedia-business-right.png') }}" class="img-fluid">
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
                                        <img src="{{ asset('frontend/brandbox/images/service-socialmedia-userinter-icon.svg') }}" class="img-fluid">
                                        <h6>User Interaction </h6>
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
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-socialmedia-weekpost-icon.svg') }}" class="img-fluid">
                                        <h6>Weekly posts </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-ppc-report-icon.svg') }}" class="img-fluid">
                                        <h6>Monthly reports </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="third-sec-right-part">
                    <img src="{{ asset('frontend/brandbox/images/service-socialmedia-packages-right.png') }}" class="img-fluid d-none d-sm-none d-md-none d-lg-flex ">
                    <img src="{{ asset('frontend/brandbox/images/service-mobile-socialmedia-packages-right.png') }}" class="img-fluid d-sm-block d-md-none d-lg-none">
                </div>
            </div>

            <div class="service-sec-fourth scroll-container" id="package">
                <div class="fouth-sec-content scroll-element js-scroll fade-in">
                    <h2>Improve your brand in three easy steps </h2>
                    <p>Getting started with The Brand Boxx couldn’t be easier. If you’re looking to boost brand awareness and recognition online, then register for a The Brand Boxx account today to gain instant access to our digital marketing services and expert team insight. When you work with The Brand Boxx we become an extension of your team. 
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

            <div class="pricing-packages-sec scroll-container">
                <div class="pricing-title">
                    <h2>SOCIAL MEDIA  PRICING AND PACKAGES</h2>
                </div>
                <div class="duration-inline d-sm-flex d-md-none d-lg-none">
                    <div class="duration">
                        <h3>Duration of Service:</h3>
                    </div>

                    <div class="dos-select-section forminfo">
                         <select class="form-control down-arrow" id="selectmonth_mobile" > 
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
                                <th class="silver-pack">SILVER</th>
                                <th class="gold-pack">GOLD</th>
                                <th class="platinum-pack">PLATINUM</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Ad Spend Included</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Social Media Profile/Channels</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   2
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   2
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                   3
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Posts Per Per Week</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                   2
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   5
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                   5
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Written & Designed Posts</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Interaction & Responses</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Statistics/Analytics</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Support, 7 Days A Week</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                              
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">No Contract - Cancel Anytime</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>


                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(113.16), 2) }}</span>
                                    <a  onclick="addToCart1Step(49)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(170.31), 2) }}</span>
                                    <a  onclick="addToCart1Step(50)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(456.06), 2) }}</span>
                                    <a  onclick="addToCart1Step(51)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(787.54), 2) }}</span>
                                    <a  onclick="addToCart1Step(52)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                 
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months3" style="display:none">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">BRONZE</th>
                                <th class="silver-pack">SILVER</th>
                                <th class="gold-pack">GOLD</th>
                                <th class="platinum-pack">PLATINUM</th>
                                
                            </tr>
                        </thead>

                         <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Ad Spend Included</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Social Media Profile/Channels</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   2
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   2
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                   3
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Posts Per Per Week</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                   2
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   5
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                   5
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Written & Designed Posts</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Interaction & Responses</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Statistics/Analytics</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Support, 7 Days A Week</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                              
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">No Contract - Cancel Anytime</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>


                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(318.90), 2) }}</span>
                                    <a  onclick="addToCart1Step(53)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(490.36), 2) }}</span>
                                    <a  onclick="addToCart1Step(54)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(1347.62), 2) }}</span>
                                    <a  onclick="addToCart1Step(55)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(2342.05), 2) }}</span>
                                    <a  onclick="addToCart1Step(56)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                 
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months6" style="display:none">
                       <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">BRONZE</th>
                                <th class="silver-pack">SILVER</th>
                                <th class="gold-pack">GOLD</th>
                                <th class="platinum-pack">PLATINUM</th>
                                
                            </tr>
                        </thead>

                         <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Ad Spend Included</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Social Media Profile/Channels</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   2
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   2
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                   3
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Posts Per Per Week</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                   2
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   5
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                   5
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Written & Designed Posts</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Interaction & Responses</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Statistics/Analytics</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Support, 7 Days A Week</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                              
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">No Contract - Cancel Anytime</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>


                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(617.23), 2) }}</span>
                                    <a  onclick="addToCart1Step(57)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(960.14), 2) }}</span>
                                    <a  onclick="addToCart1Step(58)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(2674.67), 2) }}</span>
                                    <a  onclick="addToCart1Step(59)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(4663.52), 2) }}</span>
                                    <a  onclick="addToCart1Step(60)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                  
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months12" style="display:none">
                       <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">BRONZE</th>
                                <th class="silver-pack">SILVER</th>
                                <th class="gold-pack">GOLD</th>
                                <th class="platinum-pack">PLATINUM</th>
                                
                            </tr>
                        </thead>

                         <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Ad Spend Included</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Social Media Profile/Channels</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                   2
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   2
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                   3
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Posts Per Per Week</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                   2
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                   5
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                   5
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Written & Designed Posts</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Interaction & Responses</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Statistics/Analytics</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                               
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Support, 7 Days A Week</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                              
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">No Contract - Cancel Anytime</span>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                
                            </tr>


                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(1213.89), 2) }}</span>
                                    <a  onclick="addToCart1Step(61)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(1899.70), 2) }}</span>
                                    <a  onclick="addToCart1Step(62)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(5328.76), 2) }}</span>
                                    <a  onclick="addToCart1Step(63)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ number_format(convert_price(9306.47), 2) }}</span>
                                    <a  onclick="addToCart1Step(64)" class="table-addcart-btn">Add to Cart</a>
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
                                            <input class="form-control" type="file" id="document" name="document" placeholder="Upload Brief" required aria-describedby="emailHelp" >
                                        </div>
                                    </div>
                                    <div class="col-12 mb4">
                                        <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                            <label>Message</label>
                                            <textarea class="form-control message-box" id="message" name="message" required placeholder="Additional Information"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  id="terms" name="terms">
                                            <label for="terms">
                                                By ticking this box, you agree to the <a href="{{ route('termsandconditions') }}" class="a-links">Terms & Conditions</a>
                                                 & <a href="{{ route('privacypolicy') }}" class="a-links">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-btn-inline scroll-element js-scroll fade-in">
                                        <div class="form-group ">
                                            <!--<a href="#"><img src="{{ asset('frontend/brandbox/images/reCAPTCHA.png') }}" class="img-fluid"></a>-->
                                           <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
											<div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                                        </div>
                                        <div class="common-btn message-btn">
                                            <button  class="loginlinks btn btn-transparent">Send Message</button>
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
