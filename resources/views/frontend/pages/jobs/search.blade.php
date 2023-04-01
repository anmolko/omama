@extends('frontend.layouts.master')
@section('title') Search | Jobs @endsection
@section('css')
    <style>
        .text-flow {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
            line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>
@endsection
@section('content')

    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Search Result For : {{$title}}</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Job Search result</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sc-service-section-five sc-pt-100 sc-md-pt-75 sc-pb-160 sc-md-pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 lg-mb-60">
                    @if(count($alljobs) > 0)
                        <div class="row">
                            @foreach($alljobs as $job)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="sc-service-style-four sc-mb-25 text-center">
                                        <i class="p-z-idex position-relative icomoon {{$loop->even?'icon-stragy':'icon-risk'}}"></i>
                                        <h4 class="title p-z-idex position-relative">
                                            <a class="title" href="{{route('job.single',@$job->slug)}}">{{ucfirst($job->name)}}</a>
                                        </h4>
                                        <p class="des p-z-idex position-relative">
                                            <i class="icon-calender"></i>
                                            @if(@$job->end_date >= $today)
                                                {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                            @else
                                                Expired
                                            @endif
                                        </p>
                                        <div class="sc-service-button">
                                            <img src="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/win.png')}}" alt="Service" />
                                            <div class="service-btn">
                                                <a class="sc-service-btn" href="{{route('job.single',@$job->slug)}}"><i class="icon-sliuder-arrow2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="sc-blog-navigation sc-pt-40 sc-md-mb-50">
                                {{ $alljobs->links('vendor.pagination.default') }}
                            </div>
                        </div>
                    @else
                        <div id="sc-page-error" class="sc-page-error">
                            <div class="error-text">
                                <h1 class="error-code sc-mb-30">404</h1>
                                <h3 class="error-message sc-mb-30">Jobs Not Found</h3>
                                <div class="sc-error-btn">
                                    <a class="sc-primary-btn" href="/">Back to Homepage </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-xl-4 col-lg-4">
                    @include('frontend.pages.jobs.sidebar')
                </div>
           </div>
        </div>
    </div>
@endsection
