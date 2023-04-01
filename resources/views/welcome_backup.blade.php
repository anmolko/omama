@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')
    @if(count($sliders) > 0)
        <div class="banner__two swiper banner-two-slider">
            <div class="swiper-wrapper">
                @foreach(@$sliders as $slider)
                    <div class="banner__two-image swiper-slide" data-background="{{ asset('/images/sliders/'.$slider->image) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="banner__two-content">
                                    <b class="subtitle">Omama Manpower</b>
                                    <span data-animation="fadeInUp" data-delay=".3s">{{@$slider->subheading}}</span>
                                    <h1 data-animation="fadeInUp" data-delay=".7s">{{@$slider->heading}}</h1>
                                    @if(@$slider->button)
                                        <div class="banner__two-content-button" data-animation="fadeInUp" data-delay="1s">
                                            <a class="btn-five" href="{{@$slider->link}}"> {{@$slider->button ?? 'Start here'}} <i class="far fa-chevron-double-right"></i></a>
                                        </div>
                                    @endif
                                    <img class="banner__two-image-shape-one" src="{{asset('assets/frontend/img/shape/about-solution.png')}}" data-animation="rollIn" data-delay="2s" alt="">
                                </div>
                                <img class="banner__two-image-shape-two" src="{{asset('assets/frontend/img/shape/about-2-dark.png')}}" data-animation="fadeInRightBig" data-delay="1.1s" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="banner__two-arrow">
                <div class="banner__two-arrow-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                <div class="banner__two-arrow-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
            </div>
        </div>
    @endif
    @if($homepage_info->mission)
        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="features-area">
                            <div class="features-area-item ltb-radius">
                                <span><i class="far fa-arrow-right"></i></span>
                                <h4>Mission</h4>
                                <p>{{ ucfirst(@$homepage_info->mission) }}</p>
                            </div>
                            <div class="features-area-item features-area-item-hover">
                                <span><i class="far fa-arrow-right"></i></span>
                                <h4>Vision</h4>
                                <p>{{ ucfirst(@$homepage_info->vision) }}</p>
                            </div>
                            <div class="features-area-item rtb-radius">
                                <span><i class="far fa-arrow-right"></i></span>
                                <h4>Goal</h4>
                                <p>{{ ucfirst(@$homepage_info->value) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(!empty($homepage_info->welcome_description))
        <div class="about__one dark__image section-padding">
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 lg-mb-30">
                            @if(@$homepage_info->welcome_side_image == "left")
                                <div class="about__one-left">
                                    <div class="about__one-left-image">
                                        <img class="two" src="{{ $homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt="">
                                    </div>
                                </div>
                            @else
                                <div class="about__one-right">
                                    <div class="about__one-right-title">
                                        <span class="subtitle-one">{{$homepage_info->welcome_subheading ?? ''}}</span>
                                        <h2>{{$homepage_info->welcome_heading ?? ''}}</h2>
                                        <p> {{ ucfirst(@$homepage_info->welcome_description) }}</p>
                                    </div>
                                    @if(@$homepage_info->welcome_button)
                                        <div class="about__one-right-btn">
                                            <div>
                                                <a class="btn-one" href="{{@$homepage_info->welcome_link}}">Discover More<i class="far fa-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif


                        </div>
                        <div class="col-xl-6 col-lg-6">
                            @if(@$homepage_info->welcome_side_image == "left")
                                <div class="about__one-right">
                                    <div class="about__one-right-title">
                                        <span class="subtitle-one">{{$homepage_info->welcome_subheading ?? ''}}</span>
                                        <h2>{{$homepage_info->welcome_heading ?? ''}}</h2>
                                        <p> {{ ucfirst(@$homepage_info->welcome_description) }}</p>
                                    </div>
                                    @if(@$homepage_info->welcome_button)
                                        <div class="about__one-right-btn">
                                            <div>
                                                <a class="btn-one" href="{{@$homepage_info->welcome_link}}">Discover More<i class="far fa-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div class="about__one-left">
                                    <div class="about__one-left-image">
                                        <img class="two" src="{{ $homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt="">
                                    </div>
                                </div>
                            @endif
                        </div>

                </div>
            </div>
            <img class="about__one-shape-1 dark-n" src="{{asset('assets/frontend/img/shape/about-1.png')}}" alt="">
            <img class="about__one-shape-1 light-n" src="{{asset('assets/frontend/img/shape/about-1-dark.png')}}" alt="">
            <img class="about__one-shape-2 dark-n" src="{{asset('assets/frontend/img/shape/about-2.png')}}" alt="">
            <img class="about__one-shape-2 light-n" src="{{asset('assets/frontend/img/shape/about-2-dark.png')}}" alt="">
        </div>
    @endif

    @if(!empty($homepage_info->core_main_heading))
        <div class="services__one section-padding-2 pt-0" >
            <div class="container">
                <div class="row align-items-end mb-70">
                    <div class="col-xl-7 col-lg-8 lg-mb-30">
                        <div class="services__one-title lg-t-center">
                            <span class="subtitle-one">{{ucfirst(@$homepage_info->core_main_description)}}</span>
                            <h2>{{ucwords(@$homepage_info->core_main_heading)}}</h2>
                        </div>
                    </div>
{{--                    <div class="col-xl-5 col-lg-4 t-right lg-t-center">--}}
{{--                        <a class="btn-one" href="services-two.html">All Services<i class="far fa-chevron-double-right"></i></a>--}}
{{--                    </div>--}}
                </div>
                <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-6 xl-mb-30">
                            <div class="services__one-item">
                                <div class="services__one-item-icon">
                                    <img src="{{asset('assets/frontend/img/icon/services-1.png')}}" alt="">
                                    <div class="services__one-item-icon-one">
                                        <img src="{{asset('assets/frontend/img/icon/services-11.png')}}" alt="">
                                    </div>
                                </div>
                                <h4><a>{{ucwords(@$homepage_info->core_heading1 ?? '')}}</a></h4>
                                <p>{{ucfirst(@$homepage_info->core_description1 ?? '')}}</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
                            <div class="services__one-item">
                                <div class="services__one-item-icon">
                                    <img src="{{asset('assets/frontend/img/icon/services-2.png')}}" alt="">
                                    <div class="services__one-item-icon-one">
                                        <img src="{{asset('assets/frontend/img/icon/services-22.png')}}" alt="">
                                    </div>
                                </div>
                                <h4><a>{{ucwords(@$homepage_info->core_heading2)}}</a></h4>
                                <p>{{ucfirst(@$homepage_info->core_description2)}}</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
                            <div class="services__one-item">
                                <div class="services__one-item-icon">
                                    <img src="{{asset('assets/frontend/img/icon/services-3.png')}}" alt="">
                                    <div class="services__one-item-icon-one">
                                        <img src="{{asset('assets/frontend/img/icon/services-33.png')}}" alt="">
                                    </div>
                                </div>
                                <h4><a>{{ucwords(@$homepage_info->core_heading3)}}</a></h4>
                                <p>{{ucfirst(@$homepage_info->core_description3)}}</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30 mt-2">
                            <div class="services__one-item">
                                <div class="services__one-item-icon">
                                    <img src="{{asset('assets/frontend/img/icon/services-4.png')}}" alt="">
                                    <div class="services__one-item-icon-one">
                                        <img src="{{asset('assets/frontend/img/icon/services-44.png')}}" alt="">
                                    </div>
                                </div>
                                <h4><a>{{ucwords(@$homepage_info->core_heading4)}}</a></h4>
                                <p>{{ucfirst(@$homepage_info->core_description4)}}</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30 mt-2">
                            <div class="services__one-item">
                                <div class="services__one-item-icon">
                                    <img src="{{asset('assets/frontend/img/icon/services-3.png')}}" alt="">
                                    <div class="services__one-item-icon-one">
                                        <img src="{{asset('assets/frontend/img/icon/services-33.png')}}" alt="">
                                    </div>
                                </div>
                                <h4><a>{{ucwords(@$homepage_info->core_heading5)}}</a></h4>
                                <p>{{ucfirst(@$homepage_info->core_description5)}}</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mt-2">
                                <div class="services__one-item">
                                    <div class="services__one-item-icon">
                                        <img src="{{asset('assets/frontend/img/icon/services-2.png')}}" alt="">
                                        <div class="services__one-item-icon-one">
                                            <img src="{{asset('assets/frontend/img/icon/services-22.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h4><a>{{ucwords(@$homepage_info->core_heading6)}}</a></h4>
                                    <p>{{ucfirst(@$homepage_info->core_description6)}}</p>
                                </div>
                            </div>

                </div>
            </div>
        </div>
    @endif

    @if(!empty($homepage_info->action_heading))
        <!-- Cta Area Start -->
        <div class="cta__area">
            <div class="container">
                <div class="row cta__area-bg align-items-center">
                    <div class="col-xxl-9 col-xl-4">
                        <div class="cta__area-title">
                            <h2>{{@$homepage_info->action_heading}}</h2>
                            <span class="text-two">{{@$homepage_info->action_heading2}}</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-8 pr-0">
                        <div class="cta__area-form">
                            <form>
                                <div class="cta__area-form-item">
                                    <a href="{{@$homepage_info->action_link2}}" class="btn-four" type="submit">{{@$homepage_info->action_link ?? 'Learn more'}}<i class="far fa-chevron-double-right"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cta Area End -->
    @endif
    <!-- Experience Area Start -->
    @if(count($director) > 0)
        <div class="team__details dark__image section-padding-3">
            <div class="container">
                <div class="row mb-40 align-items-end">
                    <div class="col-xl-8 col-lg-8 lg-mb-30">
                        <div class="testimonial__area-title lg-t-center">
                            <span class="subtitle-one">Our Stories</span>
                            <h2>Message From Director</h2>
                        </div>
                    </div>
                </div>
                <div class="swiper director-slider">
                    <div class="swiper-wrapper">
                        @foreach($director as $managing)
                            <div class="row align-items-center swiper-slide">
                                <div class="col-xl-5 xl-mb-30">
                                    <div class="team__details-thumb dark__image">
                                        <img class="img__full" src="{{asset('/images/director/'.@$managing->image)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="team__details-content ml-20 xl-ml-0">
                                        <span>{{ucfirst($managing->designation)}}</span>
                                        <h2>{{ucfirst($managing->heading)}}</h2>
                                        <p> {{$managing->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($latestServices) > 0)
        <div class="portfolio__area section-padding pb-0">
            <div class="container-fluid p-0">
                <div class="row mb-60">
                    <div class="col-xl-12">
                        <div class="portfolio__area-title t-center">
                            <span class="subtitle-one">What we provide</span>
                            <h2>Our Best Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio dark__image">
                            @foreach(@$latestServices as $index=>$service)
                                <div class="portfolio-item {{$index==1?'active':''}}">
                                <img src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="">
                                <div class="portfolio-item-inner">
                                    <div class="portfolio-item-inner-title">
                                        <h4>{{ucwords(@$service->title)}}</h4>
                                        <span>Life International</span>
                                    </div>
                                    <div class="portfolio-item-inner-icon">
                                        <a href="{{route('service.single',$service->slug)}}"><i class="fal fa-long-arrow-up"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(@$recruitments[0]->heading)
        <div class="work__area section-padding">
            <div class="container">
                <div class="row mb-70">
                    <div class="col-xl-12">
                        <div class="work__area-title t-center">
                            <span class="subtitle-two">{{@$recruitment[0]->description ?? 'The Process'}}</span>
                            <h2>{{@$recruitment[0]->heading ?? 'Our Recruitment Process'}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach(@$recruitments as $index=>$recruitment)
                        <div class="col-xl-3 col-sm-6 xl-mb-30 mt-3">
                            <div class="work__area-item">
                                <span>{{$index>8?'':'0'}}{{ $index+1 }}</span>
                                <h6>{{@$recruitment->title}}</h6>
                                <p>{{@$recruitment->icon_description}}</p>
                                @if(!in_array($index,$recuruitment_index) && !$loop->last)
                                        <img class="work__area-item-arrow sm-display-n dark-n" src="{{ $loop->even ? asset('assets/frontend/img/icon/arrow-1.png'):asset('assets/frontend/img/icon/arrow-2.png') }}" alt="">
                                        <img class="work__area-item-arrow sm-display-n light-n" src="{{ $loop->even ? asset('assets/frontend/img/icon/arrow-1-dark.png'):asset('assets/frontend/img/icon/arrow-2-dark.png') }}" alt="">
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    @if(count($clients) > 0)
        <div class="team__area section-padding-3 dark__image">
            <div class="container">
                <div class="row mb-70">
                    <div class="col-xl-12">
                        <div class="work__area-title t-center">
                            <span class="subtitle-two">Life International Special</span>
                            <h2>Our Valuable Clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper testimonial__area-slider">
                        <div class="swiper-wrapper">
                            @foreach($clients as $client)
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 swiper-slide">
                                    <div class="team__area-item">
                                        <div class="team__area-item-image d-flex justify-content-center align-items-center">
                                            <img src="{{asset('/images/clients/'.@$client->image)}}" alt="">
                                        </div>
                                        <div class="team__area-item-content page">
                                            <h5><a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}">{{@$client->name ?? ''}}</a></h5>
                                            {{--                                        <span class="text-eight">Sr. Consultant</span>--}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($latestJobs) > 1)
        <div class="project__area section-padding-3" style="background: var(--color-6);">
            <div class="container">
                <div class="row mb-60">
                    <div class="col-xl-12">
                        <div class="portfolio__area-title t-center">
                            <span class="subtitle-one">Explore more</span>
                            <h2>Our Latest Job Demands</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($latestJobs as $job)
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
                </div>
                <div class="row mt-70">
                    <div class="col-xl-12 t-center">
                        <a class="btn-one" href="{{route('job.list')}}"> See more Jobs<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endif


    @if(count($testimonials) > 0)
        <div class="testimonial__area section-padding-3">
            <img class="testimonial__area-shape dark-n" src="{{asset('assets/frontend/img/shape/testimonial.png')}}" alt="">
            <img class="testimonial__area-shape light-n" src="{{asset('assets/frontend//img/shape/testimonial-dark.png')}}" alt="">
            <div class="container">
                <div class="row mb-70 align-items-end">
                    <div class="col-xl-8 col-lg-8 lg-mb-30">
                        <div class="testimonial__area-title lg-t-center">
                            <span class="subtitle-one">Our Client Stories</span>
                            <h2>Customer Experiences</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="testimonial__area-button t-right lg-t-center">
                            <div class="testimonial__area-button-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                            <div class="testimonial__area-button-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="swiper testimonial__area-slider">
                            <div class="swiper-wrapper">
                                @foreach($testimonials as $testimonial)
                                    <div class="testimonial__area-item swiper-slide">
                                    <div class="testimonial__area-item-client">
                                        <div class="testimonial__area-item-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                        <div class="testimonial__area-item-client-image">
                                            <img src="{{asset('/images/testimonial/'.@$testimonial->image)}}" alt="">
                                        </div>
                                        <div class="testimonial__area-item-client-title">
                                            <h5>{{ucwords($testimonial->name)}}</h5>
                                            <span class="text-eight">{{ucwords($testimonial->position)}}</span>
                                        </div>
                                    </div>
                                    <p>{{@$testimonial->description }}</p>
{{--                                    <div class="testimonial__area-item-reviews">--}}
{{--                                        <i class="fas fa-star"></i>--}}
{{--                                        <i class="fas fa-star"></i>--}}
{{--                                        <i class="fas fa-star"></i>--}}
{{--                                        <i class="fas fa-star"></i>--}}
{{--                                        <i class="fas fa-star"></i>--}}
{{--                                    </div>--}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(!empty($homepage_info->why_heading))
        <div class="company__two dark__image section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 lg-mb-30">
                        <div class="company__two-left">
                            <div class="company__two-left-title">
                                <span class="subtitle-one">{{ucwords(@$homepage_info->why_subheading)}}</span>
                                <h2>{{ucwords(@$homepage_info->why_heading)}}</h2>
                                <p>{{ucfirst(@$homepage_info->why_description)}}</p>
                            </div>
                            <div class="company__two-left-skill">
                                <div class="company__two-left-skill-item">
                                    <h2><span class="counter">{{@$homepage_info->project_completed ?? '450'}}</span></h2>
                                    <h6>Project Completed Overall</h6>
                                </div>
                                <div class="company__two-left-skill-item">
                                    <h2><span class="counter">{{@$homepage_info->visa_approved ?? '340'}}</span></h2>
                                    <h6>Total Visa Approved</h6>
                                </div>
                            </div>
                            <div class="company__two-left-skill">
                                <div class="company__two-left-skill-item">
                                    <h2><span class="counter">{{@$homepage_info->happy_clients}}</span></h2>
                                    <h6>Happy Clients All Over</h6>
                                </div>
                                <div class="company__two-left-skill-item">
                                    <h2><span class="counter">{{@$homepage_info->success_stories}}</span></h2>
                                    <h6>Our Success Stories</h6>
                                </div>
                            </div>
                            @if(@$homepage_info->why_button)
                                <a class="btn-two" href="{{@$homepage_info->why_link}}">{{@$homepage_info->why_button}}<i class="far fa-chevron-double-right"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="company__two-right dark__image t-right">
                            <img class="img__full" src="{{asset('/images/home/welcome/'.@$homepage_info->what_image5)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(count($latestPosts) > 0)
        <!-- Blog Area Start -->
        <div class="blog__one dark__image section-padding-3" >
            <div class="container">
                <div class="row align-items-end mb-70">
                    <div class="col-xl-7 col-lg-8 lg-mb-30">
                        <div class="blog__one-title lg-t-center">
                            <span class="subtitle-one">From the blog</span>
                            <h2>News & Articles</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 t-right lg-t-center">
                        <a class="btn-two" href="{{route('blog.frontend')}}">See more blog<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    @foreach(@$latestPosts as $post)
                        <div class="col-xl-4 col-lg-6 xl-mb-30">
                        <div class="blog__one-item">
                            <div class="blog__one-item-image">
                                <a href="{{route('blog.single',$post->slug)}}"><img src="{{asset('/images/blog/'.@$post->image)}}" alt=""></a>
                                <div class="blog__one-item-image-date">
{{--                                    <span class="text-three">23</span>--}}
                                    <span class="text-five">{{date('M j, Y',strtotime(@$post->created_at))}}</span>
                                </div>
                            </div>
                            <div class="blog__one-item-content">
                                <div class="blog__one-item-content-meta">
                                    <ul>
                                        <li><a href="{{route('blog.category',@$post->category->slug)}}"><i class="far fa-list-alt"></i>{{ucfirst(@$post->category->name)}}</a></li>
                                    </ul>
                                </div>
                                <h4><a href="{{route('blog.single',$post->slug)}}">{{ucfirst($post->title)}}</a></h4>
                                {!! elipsis($post->description) !!}
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Blog Area End -->
    @endif
    @if(@$setting_data->grievance_heading)
        <div class="contact__three section-padding-2" style="background: var(--color-6);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 lg-mb-30">
                        <div class="contact__three-left mr-40 xl-mr-0">
                            <div class="contact__three-left-map">
                                @if(@$setting_data->google_map)
                                    <iframe src="{{@$setting_data->google_map}}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact__three-righ">
                            <div class="contact__three-right-title">
                                <span class="subtitle-one">Life International Overseas</span>
                                <h2 class="mb-30">{{ucwords(@$setting_data->grievance_heading)}}</h2>
                            </div>
                            <div class="contact__three-right-form">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="about__one-right-title">
                                                <p> {{ ucfirst(@$setting_data->grievance_description) }}</p>
                                            </div>
                                            @if(@$setting_data->grievance_button)
                                                <div class="contact__two-right-form-item">
                                                    <a href="{{@$setting_data->grievance_link}}" class="btn-one" type="submit">
                                                        {{ucwords(@$setting_data->grievance_button)}} <i class="far fa-chevron-double-right"></i></a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@section('js')

@endsection
