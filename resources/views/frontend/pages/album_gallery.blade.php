@extends('frontend.layouts.master')
@section('title') {{ucwords(@$singleAlbum->name)}} | Album @endsection
@section('css')
    <style>

        #gallery #image-gallery .img-wrapper {
            height: 270px;
        }
        #gallery img.img-responsive {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/frontend/css/lightbox.css')}}">

@endsection
@section('content')
    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - {{ucwords(@$singleAlbum->name)}}</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Album Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sc-working-process-area sc-pt-60 sc-md-pt-80 sc-pb-100 sc-md-pb-80">
        <div class="container">
            @if(count(@$singleAlbum->gallery) > 0)
                <div id="gallery" style="padding: 0px 30px 0 30px;">
                    <div id="image-gallery">
                        <div class="row">
                            @foreach($singleAlbum->gallery as $gallery)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                                    <div class="img-wrapper">
                                        <a href="{{asset('/images/albums/gallery/'.@$gallery->filename)}}">
                                            <img src="{{asset('/images/albums/gallery/'.@$gallery->filename)}}" class="img-responsive"></a>
                                        <div class="img-overlay">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- End row -->
                    </div><!-- End image gallery -->
                </div><!-- End container -->
            @else
                    <div id="sc-page-error" class="sc-page-error">
                        <div class="error-text">
                            <h1 class="error-code sc-mb-30">404</h1>
                            <h3 class="error-message sc-mb-30">Gallery Images Not Found</h3>
                            <div class="sc-error-btn">
                                <a class="sc-primary-btn" href="/">Back to Homepage </a>
                            </div>
                        </div>
                    </div>
            @endif
        </div>
    </div>



@endsection
@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection
