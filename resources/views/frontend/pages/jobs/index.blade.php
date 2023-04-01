@extends('frontend.layouts.master')
@section('title') Job List @endsection
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
    <div class="page__banner" data-background="{{asset('assets/frontend/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Our Jobs</span>
                        <ul>
                            <li><a href="/">Home</a><span>|</span></li>
                            <li>List</li>
                        </ul>
                        <h1>Jobs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="project__area section-padding">
        <div class="container">
            <div class="row">
                @if(count($alljobs) > 0)
                    @foreach($alljobs as $job)
                        <div class="col-xl-4 col-md-6 mb-30">
                            <div class="project__area-item">
                                <img src="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/win.png')}}" alt="">
                                <div class="project__area-item-content">
                                    <h4><a href="{{route('job.single',@$job->slug)}}">{{ ucfirst($job->name)}}</a></h4>
                                    <span>
                                        @if(@$job->end_date >= $today)
                                            {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                        @else
                                            Expired
                                        @endif
                                    </span>
                                </div>
                                <div class="project__area-item-icon">
                                    <a href="{{route('job.single',@$job->slug)}}"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-xl-8 col-lg-8 lg-mb-60">
                        <div class="error-page">
                            <h2>It seems there are no jobs posted at the moment.</h2>
                            <p>The jobs you are looking for is not available or has not been posted yet!</p>
                            <a class="btn-one" href="/">Back to Home<i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                @endif


            </div>
            <div class="row mt-70">
                <div class="col-xl-12 t-center">
                    {{ $alljobs->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- For Contact Form -->
    <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/contact-form-script.js')}}"></script>
@endsection
