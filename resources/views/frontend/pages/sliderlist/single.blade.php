@extends('frontend.layouts.master')
@section('title')  {{ucwords(@$singleSlider->list_header)}} @endsection
@section('css')
@endsection


@section('content')

    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - {{ucwords(@$singleSlider->section->page->name)}}</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">{{ucwords(@$singleSlider->list_header)}}</h1>
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
                            <img src="{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}" alt="Blog" />
                            <div class="sc-blog-date-box">
                                <div class="sc-date-box">
                                    <h4 class="title">{{date('d', strtotime($singleSlider->created_at))}}</h4>
                                    <span class="sub-title">{{date('M', strtotime($singleSlider->created_at))}}</span>
                                </div>
                            </div>
                            <h2 class="detail-title sc-pt-40 sc-mb-20">{{ucwords(@$singleSlider->list_header)}}</h2>
                            <div class="des sc-mb-25 sc-details-check-text custom-description">
                                {!! @$singleSlider->list_description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('frontend.pages.sliderlist.sidebar')

                </div>
            </div>
        </div>
    </div>
@endsection
