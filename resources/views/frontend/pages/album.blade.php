@extends('frontend.layouts.master')
@section('title') Album @endsection
@section('styles')
@endsection
@section('content')
    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Our Albums</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Album</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sc-project-section-area sc-pt-120 sc-md-pt-80 sc-pb-160 sc-md-pb-100">
        <div class="container sc-project-container">
            @if(count(@$albums) > 0)
                <div class="row">
                    @foreach($albums as $album)
                        <div class="col-md-4 mt-4">
                            <div class="sc-project-item">
                                <a href="{{route('album.gallery',$album->slug)}}"></a>
                                <img src="{{asset('/images/albums/'.@$album->cover_image)}}"/>
                                <div class="sc-project-content-box">
                                    <div class="sc-project-icon">
                                        <a href="{{route('album.gallery',$album->slug)}}"><i class="icon-sliuder-arrow2"></i></a>
                                    </div>
                                    <div class="sc-project-text">
                                        <span class="sub-title">Images: ({{count(@$album->gallery)}})</span>
                                        <h4><a class="title" href="{{route('album.gallery',$album->slug)}}">{{ucwords(@$album->name)}}</a></h4>
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
                        <h3 class="error-message sc-mb-30">Albums Not Found</h3>
                        <div class="sc-error-btn">
                            <a class="sc-primary-btn" href="/">Back to Homepage </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection


