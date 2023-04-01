@extends('frontend.layouts.seo_master')
@section('css')
    <style>

    .custom-editor .media{
        display: block;
    }

    .custom-editor{
        font-size: 1.1875rem;
    }
    .canosoft-listing ul,.canosoft-listing ol {
        padding: 0;
        margin-left: 15px;
    }
		.home-one a.active {
		color: #fc653c !important;
	}

    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleService->title)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Omama Manpower pvt ltd @endif </title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleService->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleService->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleService->updated_at !=''){?>{{@$singleService->updated_at}} <?php }else {?> {{@$singleService->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleService->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleService->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Omama Manpower pvt ltd @endif" />
    <meta property="og:image" content="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
@endsection

@section('content')


    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Our Services</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Service Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sc-blog-section-area sc-blog-section-two sc-pt-100 sc-md-pt-80 sc-pb-170 sc-md-pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sc-blog-details-content-area">
                        <div class="sc-blog-item sc-mb-30">
                            <img src="{{asset('/images/service/'.@$singleService->banner_image)}}" alt="Blog" />
                            <div class="sc-blog-date-box">
                                <div class="sc-date-box">
                                    <h4 class="title">{{date('d', strtotime($singleService->created_at))}}</h4>
                                    <span class="sub-title">{{date('M', strtotime($singleService->created_at))}}</span>
                                </div>
                            </div>
                            <h2 class="detail-title sc-pt-40 sc-mb-20">{{ucwords(@$singleService->title)}}</h2>
                            <div class="des sc-mb-25 sc-details-check-text custom-description">
                                {!! $singleService->description !!}
                            </div>
                        </div>
                        <div class="sc-detaile-tags-list d-flex align-items-center justify-content-between">
                            <div class="sc-detail-social">
                                <ul class="list-gap">
                                    <li>
                                        <a href="#"><i class="icon-facebook"  onclick='fbShare("{{route('service.single',$singleService->slug)}}")'></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-twiter"  onclick='twitShare("{{route('service.single',$singleService->slug)}}","{{ $singleService->title }}")'></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-whatsapp"  onclick='whatsappShare("{{route('service.single',$singleService->slug)}}","{{ $singleService->title }}")'></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('frontend.pages.services.sidebar')
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
