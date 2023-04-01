@extends('frontend.layouts.master')
@section('title') Blog @endsection

@section('content')

    <div class="page__banner" data-background="{{asset('assets/frontend/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Our Blogs</span>
                        <ul>
                            <li><a href="/">Home</a><span>|</span></li>
                            <li>List</li>
                        </ul>
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news__standard section-padding">
        <div class="container">
            <div class="row">
                @if(count($allPosts) > 0)
                    <div class="col-xl-8 col-lg-8 lg-mb-60">
                        <div class="container">
                            <div class="row">
                                    @foreach($allPosts as $post)
                                        <div class="col-xl-6 col-lg-6 mb-30">
                                            <div class="blog__two-item page">
                                                <div class="blog__two-item-image">
                                                    <a href="{{route('blog.single',$post->slug)}}">
                                                        <img src="{{ (@$post->image) ? asset('/images/blog/'.@$post->image):'' }} " alt="">
                                                    </a>
                                                    <div class="blog__two-item-image-date">
                                                        <span class="text-five">{{date('M j, Y',strtotime(@$post->created_at))}}</span>
                                                    </div>
                                                </div>
                                                <div class="blog__two-item-content">
                                                    <div class="blog__two-item-content-meta">
                                                        <ul>
                                                            <li><a href="{{route('blog.category',$post->category->slug)}}"><i class="far fa-list-alt"></i>{{ucwords(@$post->category->name)}}</a></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a href="{{route('blog.single',$post->slug)}}">
                                                            {!! ucwords(Str::limit(@$post->title, 35,'...')) !!}</a></h4>
                                                    <a class="btn-six" href="{{route('blog.single',$post->slug)}}">Read More<i class="far fa-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        </div>
                        <div class="row mt-50 ml-15">
                            <div class="col-xl-12">
                                {{ $allPosts->links('vendor.pagination.default') }}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-xl-8 col-lg-8 lg-mb-60">
                        <div class="error-page">
                            <h2>Oops! Blog Post not found.</h2>
                            <p>The post you are looking for is not available or has been moved from this website!</p>
                            <a class="btn-one" href="/">Back to Home<i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                @endif
                <div class="col-xl-4 col-lg-4">
                    @include('frontend.pages.blogs.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
