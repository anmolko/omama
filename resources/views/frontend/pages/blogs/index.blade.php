@extends('frontend.layouts.master')
@section('title') Blog @endsection

@section('content')

    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Our Blog</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Our Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sc-blog-section-area sc-pt-100 sc-md-pt-80 sc-pb-180 sc-md-pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if(count($allPosts) > 0)

                        <div class="sc-blog-content-area row">
                            @foreach($allPosts as $post)
                                <div class="col-lg-6">
                                    <div class="sc-blog-item">
                                    <a href="{{route('blog.single',$post->slug)}}"
                                    ><img src="{{asset('/images/blog/'.@$post->image) }}"/></a>
                                    <div class="sc-blog-date-box">
                                        <div class="sc-date-box">
                                            <h4 class="title">{{date('d', strtotime($post->created_at))}}</h4>
                                            <span class="sub-title">{{date('M', strtotime($post->created_at))}}</span>
                                        </div>
                                        <div class="sc-blog-social text-center">
                                            <ul class="list-gap">
                                                <li><i class="icon-david2"></i> {{ucfirst(@$post->category->name)}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sc-blog-text">
                                        <h4>
                                            <a class="title" href="{{route('blog.single',$post->slug)}}"
                                            > {!! ucwords(Str::limit(@$post->title, 35,'...')) !!}</a
                                            >
                                        </h4>
                                    </div>
                                    <div class="sc-blog-btn">
                                        <a class="sc-transparent-btn" href="{{route('blog.single',$post->slug)}}">Read Article</a>
                                    </div>
                                </div>
                                </div>
                            @endforeach

                            <div class="sc-blog-navigation sc-pt-40 sc-md-mb-50">
                                {{ $allPosts->links('vendor.pagination.default') }}
                            </div>
                        </div>
                    @else
                        <div id="sc-page-error" class="sc-page-error">
                            <div class="error-text">
                                <h1 class="error-code sc-mb-30">404</h1>
                                <h3 class="error-message sc-mb-30">Blog Post Not Found</h3>
                                <div class="sc-error-btn">
                                    <a class="sc-primary-btn" href="/">Back to Homepage </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-4">
                    @include('frontend.pages.blogs.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
