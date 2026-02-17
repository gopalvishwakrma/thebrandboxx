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
                    <h2>Our ORM services </h2>
                    <p>If you’re an online brand, reputation is everything and news travels fast. Our online reputation management services include identifying, managing as well as mitigating any potential reputational risks to your brand online, meaning you have a team on hand to manage any crisis moments. 
                    </p>
                    <div class="forminfo price-btn">
                        <div class="view-price-btn common-btn">
                            <a href="#" class="loginlinks">view pricing and packages</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-second-section scroll-container">
                <div class="left-part">
                    <div class="left-content scroll-element js-scroll fade-in">
                        <h2>The Brand Boxx approach to ORM  </h2>
                        <p>The fast spread of news online is accelerated by social media, meaning its essential to have a strategy on-hand to tackle any less than favourable news about your brand. The Brand Boxx can help you meet any reputational threats head-on with a through contingency plan which could help save your brand from irreparable damage. We can help your brand to identify, manage and mitigate a wide range of reputational risks across a full range of potential crisis scenarios. 
                        </p>
                    </div>
                </div>
                <div class="right-part d-none d-sm-none d-md-none d-lg-block">
                    <img src="{{ asset('frontend/brandbox/images/services-orm-buisness-right.png') }}" class="img-fluid">
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
                                        <img src="{{ asset('frontend/brandbox/images/services-orm-website-icon.svg') }}"
                                            class="img-fluid">
                                        <h6>Blog website profiles 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-ppc-report-icon.svg') }}"
                                            class="img-fluid">
                                        <h6>Monthly reports </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-orm-email-icon.svg') }}"
                                            class="img-fluid">
                                        <h6>Email creation 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group">
                                    <div class="icon-content scroll-element js-scroll fade-in">
                                        <img src="{{ asset('frontend/brandbox/images/service-orm-article-icon.svg') }}"
                                            class="img-fluid">
                                        <h6>Article writing 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="third-sec-right-part">
                    <img src="{{ asset('frontend/brandbox/images/service-orm-packages-right.png') }}"
                        class="img-fluid d-none d-sm-none d-md-none d-lg-flex ">
                    <img src="{{ asset('frontend/brandbox/images/services-mobile-orm-packages-right.png') }}"
                        class="img-fluid d-sm-block d-md-none d-lg-none">
                </div>
            </div>

            <div class="service-sec-fourth scroll-container">
                <div class="fouth-sec-content">
                    <h2>Improve your brand in three easy steps </h2>
                    <p>Getting started with The Brand Boxx couldn’t be easier. If you’re looking to boost brand awareness and recognition online, then register for a The Brand Boxx account today to gain instant access to our digital marketing services and expert team insight. When you work with The Brand Boxx we become an extension of your team. 
                    </p>
                    <div class="steps-section scroll-element js-scroll fade-in">
                        <h5>Create an Account</h5>
                        <img src="{{ asset('frontend/brandbox/images/services-steps-right-arrow.svg') }}"
                            class="img-fluid d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('frontend/brandbox/images/services-mobile-steps-down-arrow.svg') }}"
                            class="img-fluid d-sm-block d-md-none d-lg-none p-3">
                        <h5>Explore Services</h5>
                        <img src="{{ asset('frontend/brandbox/images/services-steps-right-arrow.svg') }}"
                            class="img-fluid d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('frontend/brandbox/images/services-mobile-steps-down-arrow.svg') }}"
                            class="img-fluid d-sm-block d-md-none d-lg-none p-3">
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
                    <h2>ORM pricing and packages</h2>
                </div>
                <div class="duration-inline d-sm-flex d-md-none d-lg-none d-none">
                    <div class="duration">
                        <h3>Duration of Service:</h3>
                    </div>

                    <div class="dos-select-section forminfo">
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

                <div class="dos-select-section forminfo d-block d-sm-none d-md-flex d-lg-flex">
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
                                <th class="bronze-pack">BRONZE </th>
                                <th class="silver-pack">SILVER </th>
                                <th class="gold-pack">GOLD</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Phrases Protected And Monitored</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    7
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Web Search Position</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    Top 250
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    Top 100
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    Top 100
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Article Writing</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1 Article 15x
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3 Article 15x
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    4 Articles 15x
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Number Of Directories Appeared On</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    100
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    100
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    100
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Social Media Account Creation (Instagram, Twitter, TikTok,
                                        FB)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    2
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    4
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Website Profiles (Wordpress, Blogspot, Tumbler
                                        Etc)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    1
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    3
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Posts</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    3
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    5
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    9
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Business Listings & Reviews (TrustPilot,
                                        ResellerRatings)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Online Chat Profiles Set Up (Yahoo, Skype, Teams)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Telephone Setup</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(395.33), 2) }}</span>
                                    <a onclick="addToCart1Step(37)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(755.27), 2) }}</span>
                                    <a onclick="addToCart1Step(38)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(1063.97), 2) }}</span>
                                    <a onclick="addToCart1Step(39)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months3" style="display:none;">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">BRONZE </th>
                                <th class="silver-pack">SILVER </th>
                                <th class="gold-pack">GOLD</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Phrases Protected And Monitored</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    7
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Web Search Position</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    Top 250
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    Top 100
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    Top 100
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Article Writing</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1 Article 15x
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3 Article 15x
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    4 Articles 15x
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Number Of Directories Appeared On</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    100
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    100
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    100
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Social Media Account Creation (Instagram, Twitter, TikTok,
                                        FB)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    2
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    4
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Website Profiles (Wordpress, Blogspot, Tumbler
                                        Etc)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    1
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    3
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Posts</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    3
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    5
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    9
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Business Listings & Reviews (TrustPilot,
                                        ResellerRatings)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Online Chat Profiles Set Up (Yahoo, Skype, Teams)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Telephone Setup</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(1185.65), 2) }}</span>
                                    <a onclick="addToCart1Step(40)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(2285.54), 2) }}</span>
                                    <a onclick="addToCart1Step(41)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(3228.84), 2) }}</span>
                                    <a onclick="addToCart1Step(42)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months6" style="display:none;">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                                <th class="bronze-pack">BRONZE </th>
                                <th class="silver-pack">SILVER </th>
                                <th class="gold-pack">GOLD</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Phrases Protected And Monitored</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    7
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Web Search Position</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    Top 250
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    Top 100
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    Top 100
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Article Writing</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1 Article 15x
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3 Article 15x
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    4 Articles 15x
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Number Of Directories Appeared On</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    100
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    100
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    100
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Social Media Account Creation (Instagram, Twitter, TikTok,
                                        FB)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    2
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    4
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Website Profiles (Wordpress, Blogspot, Tumbler
                                        Etc)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    1
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    3
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Posts</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    3
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    5
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    9
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Business Listings & Reviews (TrustPilot,
                                        ResellerRatings)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Online Chat Profiles Set Up (Yahoo, Skype, Teams)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Telephone Setup</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(2348.93), 2) }}</span>
                                    <a onclick="addToCart1Step(43)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(4548.71), 2) }}</span>
                                    <a onclick="addToCart1Step(44)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(6435.31), 2) }}</span>
                                    <a onclick="addToCart1Step(45)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <table class="table months" id="months12" style="display:none;">
                        <thead>
                            <tr>
                                <th class="pack-example" width="300px"></th>
                               <th class="bronze-pack">BRONZE </th>
                                <th class="silver-pack">SILVER </th>
                                <th class="gold-pack">GOLD</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Phrases Protected And Monitored</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    7
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Web Search Position</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    Top 250
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    Top 100
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    Top 100
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Article Writing</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1 Article 15x
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3 Article 15x
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    4 Articles 15x
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Number Of Directories Appeared On</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    100
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    100
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    100
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Social Media Account Creation (Instagram, Twitter, TikTok,
                                        FB)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    2
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    4
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Website Profiles (Wordpress, Blogspot, Tumbler
                                        Etc)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    1
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    3
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Posts</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    3
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    5
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    9
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Business Listings & Reviews (TrustPilot,
                                        ResellerRatings)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Online Chat Profiles Set Up (Yahoo, Skype, Teams)</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Telephone Setup</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img
                                            src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Price</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(4675.48), 2) }}</span>
                                    <a onclick="addToCart1Step(46)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(9075.05), 2) }}</span>
                                    <a onclick="addToCart1Step(47)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span
                                        class="amount">{{ currency_symbol() }}{{ round(convert_price(12848.24), 2) }}</span>
                                    <a onclick="addToCart1Step(48)" class="table-addcart-btn">Add to Cart</a>
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
                <div class="center-sec-inner">
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
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Type Here" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb4 scroll-element js-scroll fade-in">
                                        <div class="form-group mb-4">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Type Here" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb4 scroll-element js-scroll fade-in">
                                        <div class="form-group mb-4">
                                            <label>Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Type Here" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb4 scroll-element js-scroll fade-in">
                                        <div class="form-group mb-4">
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
                                    <div class="form-group mb-4 scroll-element js-scroll fade-in">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terms" name="terms">
                                            <label for="terms">
                                                By ticking this box, you agree to the <a href="{{ route('termsandconditions') }}" class="a-links">Terms & Conditions</a>
                                                 & <a href="{{ route('privacypolicy') }}" class="a-links">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-btn-inline scroll-element js-scroll fade-in">
                                        <div class="form-group ">
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
    




    <div class="collapse" id="mobilemenu">
        <ul>
            <li><a href="#" data-bs-toggle="dropdown" data-bs-target="#subservicemenu">services</a>
                <ul class="dropdown-menu servicesMenu">
                    <li>
                        <a href="#" data-bs-toggle="dropdown" data-bs-target="#mobilemenu">Go Back</a>
                    </li>

                    <li><a href="{{ route('seo') }}">search engine optimisation</a></li>
                    <li><a href="{{ route('ppc') }}">pay per click services</a></li>
                    <li><a href="{{ route('orm') }}">online reputation management</a></li>
                    <li><a href="{{ route('wdd') }}">web design & development</a></li>
                    <li><a href="{{ route('social') }}">social media services</a></li>
                    <li><a href="{{ route('em') }}">email marketing services</a></li>
                </ul>
            </li>
            <li><a href="{{ route('aboutus') }}">about us</a></li>
            <li><a href="{{ route('contactus') }}">contact us</a></li>
            <li><a href="{{ route('faqs') }}">faqs</a></li>
            <li><a href="#">view cart</a></li>
            @auth
            <li><a href="{{ route('dashboard') }}">my account</a></li>
            @else
            <li><a href="{{ route('user.login') }}">login</a></li>
            @endauth
        </ul>
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
                        $('.logo').attr('src',"{{ asset('frontend/dist/img/logo.svg') }}') }}') }}");
                    }
                    if ($(this).scrollTop() < 1000) { 
                        $('.logo').attr('src',"{{ asset('frontend/dist/img/logo.svg') }}') }}') }}");
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
                "https://dev.supporthives.com/oceanbluemarketing/public/frontend/ocean/img/black-logo.svg') }}') }}"
            );
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
                            "src": "img/github.svg') }}') }}",
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
        $('#orm-table').on('change', function(e) {
            $('.tab-pane').removeClass('active in')
            $('#' + $(e.currentTarget).val()).addClass("active in ");
        })
    </script>

    <script>
        $(document).ready(function() {
            $(function() {
                $('#selectmonth').change(function() {
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
