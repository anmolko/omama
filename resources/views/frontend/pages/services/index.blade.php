@extends('frontend.layouts.master')
@section('title') Services @endsection
@section('css')
    <style>

    .corpkit-content > .corpkit-content-inner {
        padding-top: 0;
        padding-bottom: 0;
    }
</style>
@endsection
@section('content')

    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Our Services</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Service List</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sc-project-section-area sc-pt-120 sc-md-pt-80 sc-pb-160 sc-md-pb-100">
        <div class="container sc-project-container">
            @if(count($allservices) > 0)
                <div class="row">
                     @foreach(@$allservices as $index=>$service)
                        <div class="col-md-4 mt-4">
                            <div class="sc-project-item">
                                <a href="{{route('service.single',$service->slug)}}"></a>
                                <img src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="Image" />
                                <div class="sc-project-content-box">
                                    <div class="sc-project-icon">
                                        <a href="{{route('service.single',$service->slug)}}"><i class="icon-sliuder-arrow2"></i></a>
                                    </div>
                                    <div class="sc-project-text">
                                        <span class="sub-title">Omama Consulting</span>
                                        <h4><a class="title" href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach
                </div>
            @else
                <div id="sc-page-error" class="sc-page-error">
                    <div class="error-text">
                        <h1 class="error-code sc-mb-30">404</h1>
                        <h3 class="error-message sc-mb-30">Service Not Found</h3>
                        <div class="sc-error-btn">
                            <a class="sc-primary-btn" href="/">Back to Homepage </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
