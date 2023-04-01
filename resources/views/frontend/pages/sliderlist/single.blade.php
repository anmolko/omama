@extends('frontend.layouts.master')
@section('title')  {{ucwords(@$singleSlider->list_header)}} @endsection

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

	.widget-category ul li a.active {
			color: #fc653c !important;
		}
    </style>
@endsection


@section('content')

    <div class="page__banner" data-background="{{asset('assets/frontend/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Details</span>
                        <ul>
                            <li><a href="/">Home</a><span>|</span></li>
                            <li>{{ucwords(@$singleSlider->list_header)}}</li>
                        </ul>
                        <h1>{{ucwords(@$singleSlider->section->page->name)}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 lg-mb-60">
                    <div class="services__details-left">
                        <div class="services__details-left-image dark__image">
                            <img src="{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}" alt="">
                        </div>
                        <div class="services__details-left-content">
                            <h2>{{ucwords(@$singleSlider->list_header)}}</h2>
                            <div class="content-area">
                                {{@$singleSlider->list_description}}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    @include('frontend.pages.sliderlist.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
