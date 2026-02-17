@extends('frontend.layouts.app')
@section('content')
 <div class="notfound-page">
        <div class="container">
            <div class="error-box">
                <div class="error-title">
                    <h2>404 ERROR</h2>
                    <p>
                       An error has occured. please try again later.
                    </p>
                </div>
                <div class="forminfo notfound-btn-section">
                    <div class="common-btn notfound-btn">
                        <a href="{{ route('home') }}" class="loginlinks">Back To Home</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
 
@endsection
@section('script')
 
@endsection