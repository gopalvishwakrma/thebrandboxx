@extends('frontend.layouts.app')
@section('content')

<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
    {{-- <section class="sec1-height">
        <div class="custom-section-height" id="particles-js" class="particles-js-canvas-el"></div>
        <div class="container">
            <div class="row pt-md-5">
                <div class="pt-5 pt-md-5" style="z-index: 1;">
                    <div class="col-md-12 pt-md-3">
                        <p class="p-blue">Services</p>
                        <h1 class="head-1-white text-center">Search Engine Optimisation</h1>
                        <p class="para-1-white text-center d-none d-md-block">Make the most of the visibility of your business online with a specifically developed SEO strategy<br>that will make your business stand out against the competition. </p>
                         <p class="para-1-white text-center d-block d-md-none">Make the most of the visibility of your business online with a specifically developed SEO strategy that will make your business stand out against the competition. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row py-md-5 px-md-5">
                <div class="col-12 col-md-6">
                    <div>
                        <p class="para-1-black">At Blue Lite Branding we have a highly skilled SEO team who will be able to help you with a number of different SEO services. We believe that SEO, or Search Engine Optimisation, is the best way to organically boost your business online. However, effective and well-designed SEO strategies take time and expertise to create, which is what Blue Lite Branding offers. </p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div>
                        <p class="para-1-black">SEO works by using Keyword Analytics to make sure that your website comes out as close to the top as possible on search engine results when potential customers are searching for your products and services. This is done by incorporating these keywords into the body copy of the content which is on your website and homepage. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="seo-bg">
      <video class="vid-sec" src="https://www.bluelitebranding.com/public/frontend/bluelitebranding/assets/img/service-vid.mp4" muted loop autoplay></video>
        <div class="container">
            <div class="row py-md-5">
                <div class="col-12 col-md-6 p-0"></div>
                <div class="col-12 col-md-6">
                    <div class="more">
                        <h3 class="head-3-black text-start pt-md-4">more info</h3>
                        <p class="para-1-black pt-md-4">You can’t make an SEO strategy by attempting to cram as many keywords as possible on to your website or homepage. This simply won’t work, and it will also look cluttered and will make the website read badly which in turn could have the detrimental effect of actually turning away some of the customers that you want. <br></p>
                        <p class="para-1-black">Our SEO services are well written and designed using advanced technology and analytics to ensure that not only does your website appear in search results when it is looked for, but it also looks and reads well when customers come to find it. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seo-4-bg py-5">
        <div class="container py-md-4">
            <div class="row">
                <div class="col-12">
                    <h3 class="head-3-white text-center">Content Optimisation</h3>
                    <p class="whats text-center">What’s included?</p>
                </div>
            </div>

            
            <div class="row icon-pad py=md-2 pt-md-4 d-none d-md-flex">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/bluelitebranding/assets/img/s1.png') }}') }}">
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/bluelitebranding/assets/img/s2.png') }}') }}">
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/bluelitebranding/assets/img/s3.png') }}') }}">
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/bluelitebranding/assets/img/s4.png') }}') }}">
                    </div>
                </div>
            </div>
            <div class="row icon-pad d-none d-md-flex">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <h2 class="key">keyword analysis</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <h2 class="key">technical optimisation
                        </h2>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <h2 class="key">competitor analysis
                        </h2>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <h2 class="key">content optimisation
                        </h2>
                    </div>
                </div>
            </div>
            <!-- DESKTOP END -->

            <!-- MOBILE START -->
            <div class="row pt-3 d-flex d-md-none">
                <div class="col-6">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/bluelitebranding/assets/img/s1.png') }}') }}">
                    </div>
                    <h3 class="key pt-3">keyword<br>analysis</h3>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/bluelitebranding/assets/img/s2.png') }}') }}">
                    </div>
                    <h3 class="key pt-3">technical<br>optimisation
                    </h3>
                </div>
                <div class="col-6 pt-3">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/bluelitebranding/assets/img/s3.png') }}') }}">
                    </div>
                    <h3 class="key pt-3">competitor<br> analysis
                    </h3>
                </div>
                <div class="col-6 pt-3">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/bluelitebranding/assets/img/s4.png') }}') }}">
                    </div>
                    <h3 class="key pt-3">content<br> optimisation
                    </h3>
                </div>
            </div>
            <!-- MOBILE END -->
        </div>
    </section>

    <section class="py-5 mobile-scroll">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="head-3-black-custom pb-md-4 pb-3 d-none d-md-block">SEO packages and pricing</h3>
                     <h3 class="head-3-black-custom pb-md-4 pb-3 d-block d-md-none">SEO packages<br>and pricing</h3>
                </div>
            </div>
            <table class="table tab-content">
                <thead>
                    <tr>
                        <th scope="col" class="ps-md-0 pt-md-0 pt-0 ps-0">
                            <select id="seo-table" class="form-select form-select-sm " name="seo" aria-label="Small select" style="padding: 12px;border: 1px solid;">
                    <option value="tab-pane1-seo">1 Months</option>
                    <option value="tab-pane2-seo">3 Months</option>
                    <option value="tab-pane3-seo">6 Months</option>
                    <option value="tab-pane4-seo">12 Months</option>
                  </select></th>

                        <th scope="col" class="t-head">Basic</th>
                        <th scope="col" class="t-head">Standard</th>
                        <th scope="col" class="t-head ">Advanced</th>
                        <th scope="col" class="t-head">Platinum</th>
                        <th scope="col" class="t-head ">Diamond</th>
                        <th scope="col" class="t-head ">master</th>

                    </tr>
                </thead>


                <tbody role="tabpanel" class="tab-pane fade active in" id="tab-pane1-seo">
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3 w-25">Free Setup</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Audits</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Blog / News Site Outreach</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Press Release Creation </th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">National / International SEO</th>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">Both</td>
                        <td class="p-3 text-center para-2-roboto bor">Both</td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Your Keyword / Phrase</th>
                        <td class="p-3 text-center para-2-roboto bor">1</td>
                        <td class="p-3 text-center para-2-roboto bor">3</td>
                        <td class="p-3 text-center para-2-roboto bor">5</td>
                        <td class="p-3 text-center para-2-roboto bor">10</td>
                        <td class="p-3 text-center para-2-roboto bor">15</td>
                        <td class="p-3 text-center para-2-roboto bor">25</td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Keyword Analysis</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Link Building</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Content Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Monthly Blog Post</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Blog Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Competitor Analysis</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Technical Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Daily Keyword Monitoring</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Support, 7 Days A Week</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Detailed Monthly Reports</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">No Contract, Cancel Anytime</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Pricing</th>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(141.6), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(311.52), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(645.46), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(813.02), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(1156.4), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(1598.9), 2) }}</td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3"></th>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(1)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(2)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(3)" type="submit">Add To Cart</a>
                            </a> 
                        </td>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(4)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(5)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(6)" type="submit">Add To Cart</a>
                            </a>
                        </td>

                    </tr>

                </tbody>

                <tbody role="tabpanel" class="tab-pane fade" id="tab-pane2-seo">
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3 w-25">Free Setup</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Audits</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Blog / News Site Outreach</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Press Release Creation </th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">National / International SEO</th>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">Both</td>
                        <td class="p-3 text-center para-2-roboto bor">Both</td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Your Keyword / Phrase</th>
                        <td class="p-3 text-center para-2-roboto bor">1</td>
                        <td class="p-3 text-center para-2-roboto bor">3</td>
                        <td class="p-3 text-center para-2-roboto bor">5</td>
                        <td class="p-3 text-center para-2-roboto bor">10</td>
                        <td class="p-3 text-center para-2-roboto bor">15</td>
                        <td class="p-3 text-center para-2-roboto bor">25</td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Keyword Analysis</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Link Building</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Content Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Monthly Blog Post</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Blog Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Competitor Analysis</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Technical Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Daily Keyword Monitoring</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Support, 7 Days A Week</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Detailed Monthly Reports</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">No Contract, Cancel Anytime</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Pricing</th>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(403.56), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(913.32), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(1915.14), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(2417.82), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(3447.96), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(4775.46), 2) }}</td>
                    </tr>

                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3"></th>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(7)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(8)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(9)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(10)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(11)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(12)" type="submit">Add To Cart</a>
                            </a>
                        </td>

                    </tr>

                </tbody>

                <tbody role="tabpanel" class="tab-pane fade" id="tab-pane3-seo">
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3 w-25">Free Setup</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Audits</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Blog / News Site Outreach</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Press Release Creation </th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">National / International SEO</th>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">Both</td>
                        <td class="p-3 text-center para-2-roboto bor">Both</td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Your Keyword / Phrase</th>
                        <td class="p-3 text-center para-2-roboto bor">1</td>
                        <td class="p-3 text-center para-2-roboto bor">3</td>
                        <td class="p-3 text-center para-2-roboto bor">5</td>
                        <td class="p-3 text-center para-2-roboto bor">10</td>
                        <td class="p-3 text-center para-2-roboto bor">15</td>
                        <td class="p-3 text-center para-2-roboto bor">25</td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Keyword Analysis</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Link Building</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Content Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Monthly Blog Post</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Blog Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Competitor Analysis</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Technical Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Daily Keyword Monitoring</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Support, 7 Days A Week</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Detailed Monthly Reports</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">No Contract, Cancel Anytime</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Pricing</th>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(785.88), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(1805.4), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(3809.04), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(4814.4), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(6874.68), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(9629.68), 2) }}</td>
                    </tr>

                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3"></th>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(13)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(14)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(15)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(16)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(17)" type="submit">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" onclick="addToCart1Step(18)" type="submit">Add To Cart</a>
                            </a>
                        </td>

                    </tr>

                </tbody>

                <tbody role="tabpanel" class="tab-pane fade" id="tab-pane4-seo">
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3 w-25">Free Setup</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Audits</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Blog / News Site Outreach</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Press Release Creation </th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">National / International SEO</th>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">National</td>
                        <td class="p-3 text-center para-2-roboto bor">Both</td>
                        <td class="p-3 text-center para-2-roboto bor">Both</td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Your Keyword / Phrase</th>
                        <td class="p-3 text-center para-2-roboto bor">1</td>
                        <td class="p-3 text-center para-2-roboto bor">3</td>
                        <td class="p-3 text-center para-2-roboto bor">5</td>
                        <td class="p-3 text-center para-2-roboto bor">10</td>
                        <td class="p-3 text-center para-2-roboto bor">15</td>
                        <td class="p-3 text-center para-2-roboto bor">25</td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Keyword Analysis</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Link Building</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Content Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Monthly Blog Post</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Blog Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/cross.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Competitor Analysis</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Technical Optimisation</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Daily Keyword Monitoring</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Support, 7 Days A Week</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Detailed Monthly Reports</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">No Contract, Cancel Anytime</th>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                        <td class="p-3 text-center para-2-roboto bor"><img src="{{ asset('frontend/bluelitebranding/assets/img/right.png') }}') }}" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3">Pricing</th>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(1550.52), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(3589.56), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(7596.84), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(9607.56), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(13728.12), 2) }}</td>
                        <td class="p-3 text-center para-2-roboto bor">{{ currency_symbol() }}{{ round(convert_price(19038.12), 2) }}</td>
                    </tr>

                    <tr>
                        <th scope="row" style="background: #F9F9F9;border-bottom-width: 0;" class="para-2-roboto p-3"></th>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" type="submit" onclick="addToCart1Step(19)">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" type="submit" onclick="addToCart1Step(20)">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" type="submit" onclick="addToCart1Step(21)">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" type="submit" onclick="addToCart1Step(22)">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" type="submit" onclick="addToCart1Step(23)">Add To Cart</a>
                            </a>
                        </td>
                        <td class="p-3 text-center p-3 text-center bor-trans">
                            <a href="#" class="" style="text-decoration: none;">
                                <button class="btn-seo-card border-0 px-3 w-100" type="submit" onclick="addToCart1Step(24)">Add To Cart</a>
                            </a>
                        </td>

                    </tr>

                </tbody>

            </table>
        </div>
    </section>

    <section style="background: #F9F9F9;">
        <form class="custom-pad" id="requestform" action="{{ route('contactus.store') }}" method="post"
            enctype="multipart/form-data" onsubmit="return check_agree(this);">
            @csrf
            <input type="hidden" name="from_page" value="service">
            <div class="container">
                <div class="row d-md-flex flex-md-row align-items-md-center py-5">
                    <div class="col-md-12 order-md-1 order-2">
                        <h3 class="head-3-black pb-3 pb-md-0">request a custom package</h3>
                        <p class="para-1-black text-md-center py-3 d-none d-md-block">We can create a custom package which is specifically designed for you and your business’ needs. If this is something that you are interested in, please get in touch with us.</p>
                        <form class="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="">
                                                <input type="text" class="form-control custom-form" id="fullname" name="fullname" placeholder="Full Name" aria-describedby="emailHelp" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="py-4">
                                                <input type="email" class="form-control custom-form" id="email" name="email" placeholder="Email" aria-describedby="emailHelp" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="">
                                                <input type="tel" class="form-control custom-form" id="phone" name="phone" placeholder="Phone" aria-describedby="emailHelp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="pt-4 pt-md-0">
                                                <input type="file" class="form-control custom-form" id="document" name="document" placeholder="Upload Brief" required aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col-12 py-4">
                                            <div class="">
                                                <textarea class="form-control custom-border" id="message" name="message" rows="3" placeholder="Additional Information" style="height: 113.5px;background: #E0DFD9!important;" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                             <div class="col-md-6 col-12 mb-3 order-2 order-md-1 pt-3 pt-md-0">
                                   <div class="g-recaptcha" data-recaptcha data-sitekey="{{config('google_captcha.site_key')}}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                      <span class="help-block">
                                        <div class="alert">
                                          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                            <strong>
                                              @if($errors->first('g-recaptcha-response') == 'The g-recaptcha-response field is required.')
                                              {{ 'Captcha is Required' }}
                                              @else
                                              {{ $errors->first('g-recaptcha-response') }}
                                              @endif
                                            </strong>
                                        </div>
                                      </span>
                                    @endif
                             </div>
                            <div class="col-md-6 form-check order-1 order-md-2 check-left">
                                <input type="checkbox" class="form-check-input" id="terms" name="terms">
                                <label class="form-check-label terms ps-md-3" for="terms">By ticking this checkbox, you agree to the <a href="{{ route('termsandconditions') }}">Terms & Conditions</a> & <a href="{{ route('privacypolicy') }}"> Privacy Policy</a></label>
                            </div>
                        </div>
                      

                        <div class="row pt-4 d-none d-md-block">
                            <div class="col-md-12 col-12 mb-4 px-md-5 d-flex justify-content-center">
                                <button class="btn-blue px-5 justify-content-center w-50" type="submit">Send Message</a>
                            </div>
                        </div>
                        <div class="row pt-2 d-block d-md-none">
                            <div class="col-md-12 col-12 mb-4 px-md-5 d-flex justify-content-center">
                                <button class="btn-blue px-5 justify-content-center w-100" type="submit">Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section> --}}

    {{-- new code start --}}

    <div class="services-seo-page scroll-container">
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
                    <h2>Our SEO services </h2>
                    <p>The Brand Boxx is not your typical SEO agency. We don’t waste time with keyword jargon, and we deliver services which organically ensure that your website is both user and search engine friendly so that you appear higher up in search results. 
                    </p>
                    <div class="forminfo price-btn">
                        <div class="view-price-btn common-btn">
                            <a href="#seo-price" class="loginlinks">view pricing and packages</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-second-section">
                <div class="left-part">
                    <div class="left-content scroll-element js-scroll fade-in">
                        <h2>The Brand Boxx approach to SEO</h2>
                        <p>Organic search results for your brand have never been more important. We offer server optimisations which will help search engines index your website more effectively so that your brand is more visible online. We’ll also optimise your web pages so that they rank even higher and earn more relevant traffic through search engines. Our creative team specialises in writing strong SEO content which will get picked up by all the major search engines. 
                        </p>
                    </div>
                </div>
                <div class="right-part d-none d-sm-none d-md-none d-lg-block">
                    <img src="{{ asset('frontend/brandbox/images/services-buisness-right.png') }}" class="img-fluid">
                </div>
            </div>

            <div class="service-third-section scroll-container">
                <div class="third-sec-left-part">
                    <div class="third-left-content">
                        <h2>What’s included in this package?</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-keyword-analys-icon.svg') }}" class="img-fluid">
                                        <h6>Keyword Analytics </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-technical-optimis-icon.svg') }}" class="img-fluid">
                                        <h6>Technical optimisation </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-competitor-analysis-icon.svg') }}" class="img-fluid">
                                        <h6>Competitor analysis </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon-group scroll-element js-scroll fade-in">
                                    <div class="icon-content">
                                        <img src="{{ asset('frontend/brandbox/images/service-content-optimise-icon.svg') }}" class="img-fluid">
                                        <h6>Content optimisation </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="third-sec-right-part">
                    <img src="{{ asset('frontend/brandbox/images/service-packages-right.png') }}" class="img-fluid d-none d-sm-none d-md-none d-lg-flex ">
                    <img src="{{ asset('frontend/brandbox/images/service-mobile-packages-right.png') }}" class="img-fluid d-sm-block d-md-none d-lg-none">
                </div>
            </div>

            <div class="service-sec-fourth scroll-container">
                <div class="fouth-sec-content scroll-element js-scroll fade-in">
                    <h2>Improve your brand in three easy steps </h2>
                    <p>Getting started with Brand Boxx couldn’t be easier. If you’re looking to boost brand awareness and recognition online, then register for a Brand Boxx account today to gain instant access to our digital marketing services and expert team insight. When you work with Brand Boxx we become an extension of your team. 
                    </p>
                    <div class="steps-section scroll-element js-scroll fade-in">
                        <h5>Create An Account</h5>
                        <img src="{{ asset('frontend/brandbox/images/services-steps-right-arrow.svg') }}" class="img-fluid d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('frontend/brandbox/images/services-mobile-steps-down-arrow.svg') }}" class="img-fluid d-sm-block d-md-none d-lg-none p-3">
                        <h5>Explore Services</h5>
                        <img src="{{ asset('frontend/brandbox/images/services-steps-right-arrow.svg') }}" class="img-fluid d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('frontend/brandbox/images/services-mobile-steps-down-arrow.svg') }}" class="img-fluid d-sm-block d-md-none d-lg-none p-3">
                        <h5>Leave It To Us</h5>
                    </div>
                    <div class="buisness-step-btn forminfo scroll-element js-scroll fade-in">
                        <div class="step-btn common-btn">
                            <a href="{{ route('aboutus') }}" class="loginlinks">About Us</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="pricing-packages-sec scroll-container">
                <div class="pricing-title">
                    <h2>Seo pricing and packages</h2>
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
                <div class="duration d-none d-sm-none d-md-flex d-lg-flex" id="seo-price">
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
                                <th class="bronze-pack">Bronze</th>
                                <th class="silver-pack">Silver</th>
                                <th class="gold-pack">Gold</th>
                                <th class="platinum-pack">Platinum</th>
                                <th class="dimond-pack">Diamond</th>
                                <th class="dimond-pack">Master</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Free Setup</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Audits</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog / News Site Outreach</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Press Release Creation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">National/International SEO</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                National
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                National
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                National
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                National
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                Both
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                Both
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Your Keyword / Phrase</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    5
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    10
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    15
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    25
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Keyword Analysis</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Link Building</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Content Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Blog Post</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Competitor Analysis</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Technical Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Daily Keyword Monitoring</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Detailed Monthly Reports</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
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
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(149.13), 2) }}</span>
                                    <a  onclick="addToCart1Step(1)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(328.10), 2) }}</span>
                                    <a  onclick="addToCart1Step(2)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(679.82), 2) }}</span>
                                    <a  onclick="addToCart1Step(3)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(856.30), 2) }}</span>
                                    <a  onclick="addToCart1Step(4)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(1217.97), 2) }}</span>
                                    <a  onclick="addToCart1Step(5)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(1684.02), 2) }}</span>
                                    <a  onclick="addToCart1Step(6)" class="table-addcart-btn">Add to Cart</a>
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
                                <th class="platinum-pack">Platinum</th>
                                <th class="dimond-pack">Diamond</th>
                                <th class="dimond-pack">Master</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Free Setup</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Audits</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog / News Site Outreach</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Press Release Creation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">National/International SEO</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                National
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                National
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                National
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                National
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                Both
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                Both
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Your Keyword / Phrase</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    5
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    10
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    15
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    25
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Keyword Analysis</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Link Building</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Content Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Blog Post</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Competitor Analysis</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Technical Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Daily Keyword Monitoring</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Detailed Monthly Reports</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
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
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(425.04), 2) }}</span>
                                    <a  onclick="addToCart1Step(7)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(961.94), 2) }}</span>
                                    <a  onclick="addToCart1Step(8)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(2017.10), 2) }}</span>
                                    <a  onclick="addToCart1Step(9)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(2546.53), 2) }}</span>
                                    <a  onclick="addToCart1Step(10)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(3631.51), 2) }}</span>
                                    <a  onclick="addToCart1Step(11)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(5029.68), 2) }}</span>
                                    <a  onclick="addToCart1Step(12)" class="table-addcart-btn">Add to Cart</a>
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
                                <th class="platinum-pack">Platinum</th>
                                <th class="dimond-pack">Diamond</th>
                                <th class="dimond-pack">Master</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Free Setup</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Audits</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog / News Site Outreach</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Press Release Creation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">National/International SEO</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                National
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                National
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                National
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                National
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                Both
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                Both
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Your Keyword / Phrase</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    5
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    10
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    15
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    25
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Keyword Analysis</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Link Building</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Content Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Blog Post</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Competitor Analysis</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Technical Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Daily Keyword Monitoring</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Detailed Monthly Reports</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
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
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(827.72), 2) }}</span>
                                    <a  onclick="addToCart1Step(13)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(1901.51), 2) }}</span>
                                    <a  onclick="addToCart1Step(14)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(4011.81), 2) }}</span>
                                    <a  onclick="addToCart1Step(15)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(5070.70), 2) }}</span>
                                    <a  onclick="addToCart1Step(16)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(7240.66), 2) }}</span>
                                    <a  onclick="addToCart1Step(17)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(10037.00), 2) }}</span>
                                    <a onclick="addToCart1Step(18)" class="table-addcart-btn">Add to Cart</a>
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
                                <th class="platinum-pack">Platinum</th>
                                <th class="dimond-pack">Diamond</th>
                                <th class="dimond-pack">Master</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Free Setup</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Audits</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog / News Site Outreach</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Press Release Creation</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-cross-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">National/International SEO</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                National
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                National
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                National
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                National
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                Both
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                Both
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Your Keyword / Phrase</span>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    1
                                </td>

                                <td class="silver-pack" data-title="Silver">
                                    3
                                </td>

                                <td class="gold-pack" data-title="Gold">
                                    5
                                </td>

                                <td class="platinum-pack" data-title="Platinum">
                                    10
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    15
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    25
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Keyword Analysis</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Link Building</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Content Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Monthly Blog Post</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Blog Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Competitor Analysis</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Technical Optimisation</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Daily Keyword Monitoring</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                            </tr>

                            <tr class="packages scroll-element js-scroll fade-in">
                                <td class="pack-example">
                                    <span class="text-example">Detailed Monthly Reports</span>
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

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
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

                                <td class="platinum-pack" data-title="Platinum">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>

                                <td class="dimond-pack" data-title="Dimond">
                                    <a href="*"><img src="{{ asset('frontend/brandbox/images/service-check-sign.svg') }}"></a>
                                </td>
                                <td class="dimond-pack" data-title="Master">
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
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(1633.06), 2) }}</span>
                                    <a  onclick="addToCart1Step(19)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(3780.65), 2) }}</span>
                                    <a  onclick="addToCart1Step(20)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(8001.25), 2) }}</span>
                                    <a  onclick="addToCart1Step(21)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(10119.02), 2) }}</span>
                                    <a  onclick="addToCart1Step(22)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(14458.93), 2) }}</span>
                                    <a onclick="addToCart1Step(23)" class="table-addcart-btn">Add to Cart</a>
                                </td>
                                <td class="bronze-pack" data-title="Bronze">
                                    <span class="amount">{{ currency_symbol() }}{{ round(convert_price(20051.61), 2) }}</span>
                                    <a  onclick="addToCart1Step(24)" class="table-addcart-btn">Add to Cart</a>
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

    {{-- new code end --}}



@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
