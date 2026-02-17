@extends('frontend.layouts.app')

@section('content')

<h1> gopal </h1>
<? /*
    <section class="o-hidden pb-3">
      <div class="container layer-1">
        <div class="row justify-content-between align-items-center">
          <div class="col-xl-7 col-md-8 text-light">
            <h1 class="text-blue">Everything you need to know about design</h1>
            <p class="large text-grey">Browse by category or topic to find the right design services and content for you.</p>
          </div>
          <!--<div class="col-xl-5 col-md-4">
            <div class="text-center text-light">
              <div class="mb-4">
                <span class="large text-grey">Sort By :</span>
              </div>
            </div>
          </div>-->
          
        </div>
      </div>
      
      <div class="container">
        <div class="justify-content-end float-right">
            <p>
              <label for="select" class="large text-grey">Sort By: </label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option select="selected">Best Sellers</option>
                  <option>Price (low - high)</option>
                  <option>Price (high - low)</option>
                </select>
            </p>  
            <!--<div class="form-group row">
                <label for="" class="col-sm-3 col-form-label large text-grey">Sort By: </label>
                <div class="col-sm-9">
                  <select class="form-control" id="exampleFormControlSelect1">
                  <option select="selected">Best Sellers</option>
                  <option>Price (low - high)</option>
                  <option>Price (high - low)</option>
                </select>
                </div>
              </div>-->
            </div>      
           
      </div>
    </section>
    
    <section class="pt-0">
      <div class="container pt-3 pb-0">
        <div class="row">
          <div class="col-md-3 mb-4 mb-md-0">
            <div class="card product-filter">
              <div class="card-header py-2">
                Category
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Video <span class="count float-right">(123)</span></li>
                <li class="list-group-item">E-Books <span class="count float-right">(7283)</span></li>
                <li class="list-group-item">Software <span class="count float-right">(2323)</span></li>
                <li class="list-group-item">Templates <span class="count float-right">(9340)</span></li>
              </ul>
            </div>
            
            <div class="card product-filter">
              <div class="card-header py-2">
                Topic
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Plugin <span class="count float-right">(123)</span></li>
                <li class="list-group-item">Wordpress <span class="count float-right">(7283)</span></li>
                <li class="list-group-item">Tips & Tricks <span class="count float-right">(2323)</span></li>
                <li class="list-group-item">Devlopement <span class="count float-right">(9340)</span></li>
                <li class="list-group-item">Design <span class="count float-right">(987)</span></li>
                <li class="list-group-item">HTML <span class="count float-right">(3344)</span></li>
              </ul>
            </div>
          </div>
          <div class="col">
           <div class="row">   
            <?php for($i=0; $i<12; $i++){ ?>
                <div class="col-md-4">
                    <div class="card">
                      <img class="card-img-top m-auto" src="../assets/images/svg/computer 1.svg" style="width:80px; height:80px" alt="Card image cap">
                      <div class="card-body text-left d-flex flex-column">
                        <label class="cta-blue">Software</label>
                        <h4 class="card-title">Website Creation and Design</h4>
                        <p class="card-text">How to Choose the Best Website Design for Your Business... </p>
                        <div class="mt-auto">
                          <p class="text-large">Price<span class="float-right">&#163;250</span></p>
                          <input type="button" class="btn btn-block atc mt-auto text-center" value="Add to cart" />
                        </div>
                      </div>
                    </div>
                </div>
            <?php }?>
          </div>
          </div>
        </div>
      </div>
      <div class="container">
          <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
        
    </section>
    
*/ ?>    
@endsection    