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

    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - {{ @$singleJob->name }}</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Job Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sc-project-pages-area sc-pt-100 sc-md-pt-75 sc-pb-160 sc-md-pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-project-content-area">
                        <div class="sc-project-details-inner">
                            @if(@$singleJob->title)
                            <h2 class="title sc-mb-25">{{@$singleJob->title}}</h2>
                            @endif
                            <div class="row sc-mb-40">
                                <div class="col-lg-9">
                                    <div class="sc-project-image">
                                        <img src="{{ asset('/images/job/'.@$singleJob->image) }}" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="sc-project-inner-category sc-md-mt-60">
                                        <div class="sc-inner-title">
                                            <h3 class="cate-title white-color">{{ ucwords(@$singleJob->name) }}:</h3>
                                        </div>
                                        <div class="sc-inner-list">
                                            <ul class="list-gap">
                                                <li>
                                                    <span>Expires on :</span>
                                                    <h5 class="title white-color">{{date('M j, Y',strtotime(@$singleJob->end_date))}}</h5>
                                                </li>
                                                @if(@$singleJob->getJobCategories(@$singleJob->category_ids) !== 'N/A')
                                                    <li>
                                                        <span>Category</span>
                                                        <h5 class="title white-color">{{ucwords(@$singleJob->getJobCategories($singleJob->category_ids))}}</h5>
                                                    </li>
                                                @endif
                                                @if($singleJob->extra_company)
                                                    <li>
                                                        <span>Extra Company</span>
                                                        <h5 class="title white-color">{{ucwords(@$singleJob->extra_company)}}</h5>
                                                    </li>
                                                @endif
                                                @if($singleJob->min_qualification)
                                                    <li>
                                                        <span>Min. Qualification</span>
                                                        <h5 class="title white-color">{{ucwords(@$singleJob->min_qualification)}}</h5>
                                                    </li>
                                                @endif
                                                @if($singleJob->salary)
                                                    <li>
                                                        <span>Salary</span>
                                                        <h5 class="title white-color">{{@$singleJob->salary}}</h5>
                                                    </li>
                                                @endif
                                                @if($singleJob->required_number)
                                                    <li>
                                                        <span>Required Number</span>
                                                        <h5 class="title white-color">{{@$singleJob->required_number}}</h5>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-project-text">
                                <div class="des sc-mb-25 sc-details-check-text custom-description">
                                    {!! $singleJob->description !!}
                                </div>
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
            let selector = $('.custom-description').find('table').length;
            if(selector>0){
                $('.custom-description').find('table').addClass('table table-bordered');
            }
        });
    </script>
@endsection
