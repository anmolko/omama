@extends('frontend.layouts.master')
@section('title')  Page Not Found @endsection
@section('content')

    <!--=========== breadcrumb Section Start =========-->
    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - 404 Error</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">404 Error</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== breadcrumb Section End =========-->

    <!--=========== error Section Start =========-->
    <div id="sc-page-error" class="sc-page-error sc-pt-115 sc-md-pt-55">
        <div class="error-text">
            <h1 class="error-code sc-mb-30">404</h1>
            <h3 class="error-message sc-mb-30">Page Not Found</h3>
            <div class="sc-error-btn">
                <a class="sc-primary-btn" href="/">Back to Homepage </a>
            </div>
        </div>
    </div>
    <!--=========== error Section End =========-->

@endsection
