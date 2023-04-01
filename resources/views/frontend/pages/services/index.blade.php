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

    <div class="page__banner" data-background="{{asset('assets/frontend/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Service</span>
                        <ul>
                            <li><a href="/">Home</a><span>|</span></li>
                            <li>Our Services</li>
                        </ul>
                        <h1>Service List</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="project__one section-padding">
        <div class="container">
            <div class="row">
                @if(count($allservices) > 0)

                    @foreach($allservices as $service)
                        <div class="col-md-4 mb-30">
                            <div class="project__one-item">
                                <img class="img__full" src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="">
                                <div class="project__one-item-content">
                                    <span></span>
                                    <h4><a href="{{route('service.single',$service->slug)}}">{{ @$service->title ?? '' }}</a></h4>
                                </div>
                                <div class="project__one-item-icon">
                                    <a href="{{route('service.single',$service->slug)}}"><i class="fal fa-long-arrow-up"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-xl-8 col-lg-8 lg-mb-60">
                        <div class="error-page">
                            <h2>Oops! Services not found.</h2>
                            <p>The post you are looking for is not available or has been moved from this website!</p>
                            <a class="btn-one" href="/">Back to Home<i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    

@endsection
