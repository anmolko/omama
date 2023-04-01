@extends('frontend.layouts.seo_master')
@section('title') Job List @endsection
@section('css')
@endsection
@section('seo')
    <title>{{ucfirst(@$singleJob->name)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Omama Manpower pvt ltd @endif</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleJob->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleJob->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleJob->updated_at !=''){?>{{@$singleJob->updated_at}} <?php }else {?> {{@$singleJob->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleJob->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleJob->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Omama Manpower pvt ltd @endif" />
    <meta property="og:image" content="<?php if(@$singleJob->image){?>{{asset('/images/job/'.@$singleJob->image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleJob->image){?>{{asset('/images/job/'.@$singleJob->image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
@endsection
@section('content')

    <div class="page__banner" data-background="{{asset('assets/frontend/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Job</span>
                        <ul>
                            <li><a href="index.html">Home</a><span>|</span></li>
                            <li>{{ @$singleJob->name }}</li>
                        </ul>
                        <h1>Job Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="project__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project__details-area">
                        <div class="project__details-area-image dark__image text-center">
                            <img src="{{ asset('/images/job/'.@$singleJob->image) }}" alt="">
                        </div>
                        <div class="project__details-area-meta">
                            <div class="project__details-area-meta-item">
                                <h6>Expires on :<span> {{date('M j, Y',strtotime(@$singleJob->end_date))}}</span></h6>
                            </div>
                            @if(@$singleJob->getJobCategories(@$singleJob->category_ids))
                                <div class="project__details-area-meta-item">
                                    <h6>Category :<span>{{ucwords(@$singleJob->getJobCategories($singleJob->category_ids))}}</span></h6>
                                </div>
                            @endif
                            @if($singleJob->extra_company)
                                <div class="project__details-area-meta-item">
                                    <h6>Company :<span>{{ucwords(@$singleJob->extra_company)}}</span></h6>
                                </div>
                            @endif
                            @if($singleJob->min_qualification)
                                <div class="project__details-area-meta-item">
                                    <h6>Min Qualification :<span>{{ucwords(@$singleJob->min_qualification)}}</span></h6>
                                </div>
                            @endif
                        </div>
                        @if($singleJob->salary || $singleJob->required_number)
                            <div class="project__details-area-meta" style="padding-top: 5px;">
                                @if($singleJob->salary)
                                    <div class="project__details-area-meta-item">
                                        <h6>Salary :<span>{{@$singleJob->salary}}</span></h6>
                                    </div>
                                @endif
                                @if($singleJob->required_number)
                                    <div class="project__details-area-meta-item">
                                        <h6>Required Number :<span>{{@$singleJob->required_number}}</span></h6>
                                    </div>
                                @endif

                            </div>
                        @endif
                        <div class="row job_details">
                            <div class="col-xl-8 col-lg-8 lg-mb-60">
                                <h2 class="mb-30">{{ ucwords(@$singleJob->name) }}</h2>
                                <div class="project__details-area-custom">
                                    {!! $singleJob->description !!}
                                </div>
                                <div class="row mt-45 mb-60">
                                    <div class="col-md-4">
                                        <div class="news__details-left-share">
                                            <h6>Share:</h6>
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fab fa-facebook-f" onclick='fbShare("{{route('job.single',$singleJob->slug)}}")'></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-twitter"  onclick='twitShare("{{route('job.single',$singleJob->slug)}}","{{ $singleJob->title }}")'></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('job.single',$singleJob->slug)}}","{{ $singleJob->title }}")'></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                @include('frontend.pages.jobs.sidebar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script>
        function fbShare(url) {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
        }
        function twitShare(url, title) {
            window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
        }
        function whatsappShare(url, title) {
            message = title + " " + url;
            window.open("https://api.whatsapp.com/send?text=" + message);
        }
        $( document ).ready(function() {
            let selector = $('.job_details').find('table').length;
            if(selector>0){
                $('.job_details').find('table').addClass('table table-bordered');
            }
        });
    </script>
@endsection
