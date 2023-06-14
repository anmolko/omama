@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
    <link rel="stylesheet" href="{{asset('assets/frontend/css/lightbox.css')}}"><style>

        #gallery #image-gallery .img-wrapper {
            height: 270px;
        }
        #gallery img.img-responsive {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    @if(count($sliders) > 0)
        <section class="sc-slider-section sc-slider-style2">
            <div class="swiper sc-slider-2">
                <div class="swiper-wrapper">
                    @foreach(@$sliders as $slider)
                        <div class="swiper-slide">
                        <div class="sc-image-layer" style="background: url('{{ asset('/images/sliders/'.$slider->image) }}');"></div>
                        <div class="container position-relative">
                            <div class="sc-slider-content p-z-idex">
                                <div class="sc-slider-subtitle">{{@$slider->subheading}}</div>
                                <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">
                                    {{@$slider->heading}}
                                </h1>
                                @if(@$slider->link)
                                    <div class="slider-btn-area d-flex align-items-center">
                                        <div class="sc-slider-btn">
                                            <a class="sc-primary-btn p-z-idex2" href="{{@$slider->link}}"> {{@$slider->button ?? 'Start Exploring'}}</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
    {{--                        <div class="shape-overly-one"></div>--}}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
    @endif
    @if(!empty($homepage_info->why_heading))
        <section class="sc-statistics-section-area gray-bg-color sc-pb-80">
            <div class="container">
                <div class="sc-statistics-style white-bg-color">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sc-statistics-left-content">
                                <div class="sc-heading-area sc-mb-35">
                                    <span class="sub-title"><i class="icon-line"></i> {{ucwords(@$homepage_info->why_subheading)}}</span>
                                    <h2 class="title">
                                        <h2 class="section-title__title"><?php
                                                $split = explode(" ", @$homepage_info->why_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$homepage_info->why_heading)."\n"}}
                                        <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                    </h2>
                                </div>
                                <div
                                    class="sc-ab-image"
                                    data-sal="slide-up"
                                    data-sal-duration="800"
                                    data-sal-delay="250"
                                    style="position: absolute;"
                                >
                                    <img
                                        class="sc-border-radius"
                                        src="{{asset('/images/home/welcome/'.@$homepage_info->what_image5)}}"
                                        alt="Statistics"
                                    />
                                    @if(@$homepage_info->why_description)
                                        <div class="video-area video-center d-flex align-items-center "  data-sal="slide-up"
                                             data-sal-duration="800" data-sal-delay="250">
                                            <div class="sc-video-btn sc-mr-15">
                                                <a
                                                    class="popup-videos-button"
                                                    data-autoplay="true"
                                                    data-vbtype="video"
                                                    href="{{@$homepage_info->why_description}}"
                                                >
                                                    <i class="icon-play_video"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 sc-statistics-area sc-pl-70 sc-md-pl-15 sc-md-mt-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sc-statistics-service-box sc-mb-25 text-center">
                                        <i class="p-z-idex position-relative icomoon icon-happy"></i>
                                        <div class="sc-counter-number">
                                            <div class="sc-count">
                                                <span class="odometer" data-count="{{@$homepage_info->happy_clients ?? '660'}}">0</span>
                                            </div>
                                            <span class="sc-title p-z-idex position-relative">Happy Customer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sc-statistics-service-box sc-mb-25 text-center">
                                        <i class="p-z-idex position-relative icomoon icon-complete"></i>
                                        <div class="sc-counter-number">
                                            <div class="sc-count">
                                                <span class="odometer" data-count="{{@$homepage_info->project_completed ?? '450'}}">0</span>
                                            </div>
                                            <span class="sc-title p-z-idex position-relative">Complete Project</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                    <div class="sc-statistics-service-box sc-mb-25 text-center">
                                        <i class="p-z-idex position-relative icomoon icon-running"></i>
                                        <div class="sc-counter-number">
                                            <div class="sc-count">
                                                <span class="odometer" data-count="{{@$homepage_info->visa_approved ?? '340'}}">0</span>
                                            </div>
                                            <span class="sc-title p-z-idex position-relative">Visa Approved</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                                    <div class="sc-statistics-service-box sc-mb-25 text-center">
                                        <i class="p-z-idex position-relative icomoon icon-wining"></i>
                                        <div class="sc-counter-number">
                                            <div class="sc-count">
                                                <span class="odometer" data-count="{{@$homepage_info->success_stories}}">0</span>
                                            </div>
                                            <span class="sc-title p-z-idex position-relative">Success Stories</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if($homepage_info->mission)
    <div class="sc-service-section-two sc-pb-95 sc-md-pb-50 sc-pt-100 sc-md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="sc-heading-area sc-mb-35 text-center">
                        <span class="sub-title"><i class="icon-line"></i> Our scope</span>

                        <h2 class="title">
                           Closer look at our <span class="primary-color italic">Values</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="sc-service-content-box">
                        <div class="sc-services-image">
                            <div class="sc-service-icon">
                                <i class="icon-bussness2"></i>
                            </div>
                        </div>
                        <div class="sc-service-text">
                            <h4><a class="title">Mission</a></h4>
                            <p class="des sc-mb-25">
                                {{ ucfirst(@$homepage_info->mission) }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                    <div class="sc-service-content-box">
                        <div class="sc-services-image">
                            <div class="sc-service-icon">
                                <i class="icon-expericence"></i>
                            </div>
                        </div>
                        <div class="sc-service-text">
                            <h4><a class="title">Vision</a></h4>
                            <p class="des sc-mb-25">
                                {{ ucfirst(@$homepage_info->vision) }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                    <div class="sc-service-content-box">
                        <div class="sc-services-image">
                            <div class="sc-service-icon">
                                <i class="icon-startup"></i>
                            </div>
                        </div>
                        <div class="sc-service-text">
                            <h4><a class="title">Value</a></h4>
                            <p class="des sc-mb-25">
                                {{ ucfirst(@$homepage_info->value) }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif

    <div class="section-shape">
        @if(!empty($homepage_info->welcome_description))

            <div class="sc-about-area position-relative sc-pt-120 sc-pb-130 sc-md-pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            @if(@$homepage_info->welcome_side_image == "left")

                            <div class="sc-about-group-image">
                                <img
                                    src="{{ @$homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}"
                                    alt="About"
                                    data-sal="slide-right"
                                    data-sal-duration="800"
                                    data-sal-delay="300"
                                />
                                @if(@$homepage_info->welcome_video_link)
                                    <div class="video-area video-center d-flex align-items-center "  data-sal="slide-right"
                                         data-sal-duration="800"
                                         data-sal-delay="300">
                                        <div class="sc-video-btn sc-mr-15">
                                            <a
                                                class="popup-videos-button"
                                                data-autoplay="true"
                                                data-vbtype="video"
                                                href="{{@$homepage_info->welcome_video_link}}"
                                            >
                                                <i class="icon-play_video"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @else

                                <div class="sc-about-content-style sc-md-pt-95">
                                    <div class="sc-heading-area sc-mb-25">
                                        <span class="sub-title"><i class="icon-line"></i> {{$homepage_info->welcome_subheading ?? ''}}</span>
                                        <h2 class="title">
                                            <?php
                                                $split = explode(" ", @$homepage_info->welcome_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$homepage_info->welcome_heading)."\n"}}
                                             <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                        </h2>
                                        <p class="description">
                                            {{ ucfirst(@$homepage_info->welcome_description) }}
                                        </p>
                                    </div>
                                    @if(@$homepage_info->welcome_button)
                                        <div class="slider-btn-area sc-ab-area d-flex align-items-center">
                                            <div class="sc-slider-btn sc-mr-20">
                                                <a class="sc-primary-btn" href="{{@$homepage_info->welcome_link}}">{{@$homepage_info->welcome_button??'Learn More'}}</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                            @endif
                        </div>
                        <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                            @if(@$homepage_info->welcome_side_image == "left")
                                <div class="sc-about-content-style sc-pl-40 sc-lg-pl-70 sc-md-pl-0 sc-md-pt-95">
                                <div class="sc-heading-area sc-mb-25">
                                    <span class="sub-title"><i class="icon-line"></i> {{$homepage_info->welcome_subheading ?? ''}}</span>
                                    <h2 class="title">
                                        <?php
                                        $split = explode(" ", @$homepage_info->welcome_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$homepage_info->welcome_heading)."\n"}}
                                        <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                    </h2>
                                    <p class="description">
                                        {{ ucfirst(@$homepage_info->welcome_description) }}
                                    </p>
                                </div>
                                @if(@$homepage_info->welcome_button)
                                    <div class="slider-btn-area sc-ab-area d-flex align-items-center">
                                    <div class="sc-slider-btn sc-mr-20">
                                        <a class="sc-primary-btn" href="{{@$homepage_info->welcome_link}}">{{@$homepage_info->welcome_button??'Learn More'}}</a>
                                    </div>
                                </div>
                                @endif
                            </div>
                            @else
                                <div class="sc-about-group-image sc-pl-40 sc-lg-pl-70 sc-md-pl-0 ">
                                    <img
                                        src="{{ @$homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}"
                                        alt="About"
                                        data-sal="slide-right"
                                        data-sal-duration="800"
                                        data-sal-delay="300"
                                    />
                                    @if(@$homepage_info->welcome_video_link)
                                        <div class="video-area video-center d-flex align-items-center "  data-sal="slide-right"
                                             data-sal-duration="800"
                                             data-sal-delay="300">
                                            <div class="sc-video-btn sc-mr-15">
                                                <a
                                                    class="popup-videos-button"
                                                    data-autoplay="true"
                                                    data-vbtype="video"
                                                    href="{{@$homepage_info->welcome_video_link}}"
                                                >
                                                    <i class="icon-play_video"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        @endif
        @if(!empty($homepage_info->core_main_heading))
            <div class="sc-service-section-four sc-pb-115 sc-md-pt-80 sc-md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                            <div class="sc-heading-area sc-mb-35 text-center">
                                <span class="sub-title"><i class="icon-line"></i> {{ucfirst(@$homepage_info->core_main_description)}}</span>
                                <h2 class="title">
                                    <?php
                                    $split = explode(" ", @$homepage_info->core_main_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$homepage_info->core_main_heading)."\n"}}
                                    <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="sc-service-style-three sc-mb-25 text-center">
                                <i class="p-z-idex position-relative icomoon icon-startup"></i>
                                <h4 class="title p-z-idex position-relative">
                                    <span class="title">{{ucwords(@$homepage_info->core_heading1 ?? '')}}</span>
                                </h4>
                                <p class="des p-z-idex position-relative">
                                    {{ucfirst(@$homepage_info->core_description1 ?? '')}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                            <div class="sc-service-style-three sc-mb-25 text-center">
                                <i class="p-z-idex position-relative icomoon icon-bussness"></i>
                                <h4 class="title p-z-idex position-relative">
                                    <span class="title">{{ucwords(@$homepage_info->core_heading2)}}</span>
                                </h4>
                                <p class="des p-z-idex position-relative">
                                    {{ucfirst(@$homepage_info->core_description2)}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                            <div class="sc-service-style-three sc-mb-25 text-center">
                                <i class="p-z-idex position-relative icomoon icon-financial"></i>
                                <h4 class="title p-z-idex position-relative">
                                    <span class="title">{{ucwords(@$homepage_info->core_heading3)}}</span>
                                </h4>
                                <p class="des p-z-idex position-relative">
                                    {{ucfirst(@$homepage_info->core_description3)}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="600">
                            <div class="sc-service-style-three sc-mb-25 text-center">
                                <i class="p-z-idex position-relative icomoon icon-risk"></i>
                                <h4 class="title p-z-idex position-relative">
                                    <span class="title">{{ucwords(@$homepage_info->core_heading4)}}</span>
                                </h4>
                                <p class="des p-z-idex position-relative">
                                    {{ucfirst(@$homepage_info->core_description4)}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="700">
                            <div class="sc-service-style-three sc-mb-25 text-center">
                                <i class="p-z-idex position-relative icomoon icon-research"></i>
                                <h4 class="title p-z-idex position-relative">
                                    <span class="title">{{ucwords(@$homepage_info->core_heading5)}}</span>
                                </h4>
                                <p class="des p-z-idex position-relative">
                                    {{ucfirst(@$homepage_info->core_description5)}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="800">
                            <div class="sc-service-style-three sc-mb-25 text-center">
                                <i class="p-z-idex position-relative icomoon icon-wining"></i>
                                <h4 class="title p-z-idex position-relative">
                                    <span class="title">{{ucwords(@$homepage_info->core_heading6)}}</span>
                                </h4>
                                <p class="des p-z-idex position-relative">
                                    {{ucfirst(@$homepage_info->core_description6)}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    @if(!empty($homepage_info->action_heading))
        <div class="sc-cta-section-area sc-pt-130 sc-md-pb-95 sc-cta-style-two">
            <div class="container-fluid">
                <div class="row">
                    <div class="sc-footer-cta-two sc-cta-content-box d-flex align-items-center">
                        <div class="sc-cta-image cta-image2">
                            <img src="{{asset('assets/frontend/images/about/cta_shape.jpg')}}" alt="Business" />
                        </div>
                        <div class="sc-cta-content rounded-0 d-flex align-items-center justify-content-between">
                            <div class="sc-cta-text m-0">
                                <h2 class="title white-color">{{@$homepage_info->action_heading}}</h2>
                                <p class="des white-color">{{@$homepage_info->action_heading2}}</p>
                            </div>
                            <div class="sc-cta-form-box sc-form-box-two">
                                <div class="sc-cta-btn">
                                    <a href="{{@$homepage_info->action_link2}}" class="sc-submit">{{@$homepage_info->action_link ?? 'Learn more'}}</a>
                                </div>
                            </div>
                            <div class="triangle-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   @endif

    @if(count($director) > 0)
        <div class="sc-about-area sc-about-section-two position-relative">
        <div class="container-fluid sc-pl-0 sc-md-pr-20 sc-md-pl-20">
            <div class="swiper sc-pagination-active sac-swiper-slider">
                <div class="swiper-wrapper">
                    @foreach($director as $managing)
                        <div class="swiper-slide sc-about-content-area sc-pt-40 sc-pb-40 position-relative p-z-idex d-flex align-items-center sc-md-pt-80 sc-md-pb-80">
                        <div class="sc-details-social col-lg-5 md-mb-50" data-sal="slide-right" data-sal-duration="800">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{asset('/images/director/'.@$managing->image)}}" alt="" />
                                </div>
                                <div class="team-content text-center">
                                    <h3 class="team-title title-color">{{ucfirst(@$managing->heading)}}</h3>
                                    <div class="text">{{ucfirst(@$managing->designation)}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-about-text-box sc-md-mt-50 sc-pl-80 sc-md-pl-0"
                            data-sal="slide-left"
                            data-sal-duration="800">
                            <div class="sc-heading-area sc-mb-35">
                                <span class="sub-title"><i class="icon-line"></i> Our Stories</span>
                                <h2 class="title">
                                    Message From <span class="primary-color italic">Director</span>
                                </h2>
                                <p class="des">
                                    {{@$managing->description}}
                                </p>
                            </div>
                            <div class="sc-about-shape">
                                <img src="{{asset('assets/frontend/images/icons/about-shape.png')}}" alt="Shape" />
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
        <div class="sc-project-section-area sc-project-section-two sc-pt-100 sc-md-pt-80 sc-pb-120 sc-md-pb-80">
            <div class="container-fluid sc-project-container">   <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div class="sc-heading-area sc-mt-45 sc-mb-45 text-center">
                            <span class="sub-title"><i class="icon-line"></i> What we provide</span>
                            <h2 class="title">
                                Our Best <span class="primary-color italic">Services</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="swiper sc-swiper-slider sc-pagination-active">
                    <div class="swiper-wrapper">
                        @foreach(@$latestServices as $index=>$service)
                            <div class="swiper-slide">
                                <div class="sc-project-item">
                                    <a href="{{route('service.single',$service->slug)}}"></a>
                                    <img src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="Image" />
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a href="{{route('service.single',$service->slug)}}"><i class="icon-sliuder-arrow2"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Omama Consulting</span>
                                            <h4><a class="title" href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    @endif

    @if(@$recruitments[0]->heading)
        <div class="sc-process-section-area sc-business-section-area position-relative sc-pt-100 sc-md-pt-80 sc-pb-100 sc-md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 sc-pb-75 sc-md-pb-55">
                        <div class="sc-heading-area sc-mb-75 sc-md-mb-50">
                            <span class="sub-title"><i class="icon-line"></i> {{@$recruitments[0]->description ?? 'The Work Flow'}}</span>
                            <h2 class="title white-color">
                                <?php
                                $split = explode(" ", @$recruitments[0]->heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$recruitments[0]->heading)."\n"}}
                                <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                            </h2>
                        </div>
                        <div class="sc-process-content-area">
                            <div class="row">

                                @foreach(@$recruitments as $index=>$recruitment)
                                    <div class="col-lg-3 col-md-6 sal-animate mt-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="{{($index+3)*100 }}">
                                        <div class="sc-business-item text-center sc-md-mb-35">
                                            <div class="sc-icon">
                                                <span>{{$index+1}}</span>
                                                <div class="triangle-down"></div>
                                            </div>
                                            <div class="sc-business-text">
                                                <h4 class="title white-color">{{@$recruitment->title}}</h4>
                                                <p class="des">
                                                    {{@$recruitment->icon_description}}
                                                </p>
                                            </div>
                                            @if(!in_array($index,$recuruitment_index) && !$loop->last)
                                                <div class="shape-image">
                                                    <img src="{{asset('assets/frontend/images/icons/business-shape.png')}}" alt="Business">
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($clients) > 0)
        <div class="sc-brand-section-area sc-pt-80 sc-md-pt-80 sc-pb-60 sc-md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div class="sc-heading-area sc-mb-15 text-center">
                            <span class="sub-title"><i class="icon-line"></i> Omama consulting</span>
                            <h2 class="title">Valuable  <span class="primary-color italic">Clients</span></h2>
                        </div>
                    </div>
                    <div class="swiper sc-brand-slider">
                    <div class="swiper-wrapper">
                        @foreach($clients as $client)
                            <div class="swiper-slide">
                                <div class="sc-brand-image-box text-center">
                                    <div class="sc-brand-image">
                                        <a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}"><img src="{{asset('/images/clients/'.@$client->image)}}" alt="Brand" /></a>
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
        <div class="sc-service-section-five sc-pt-100 sc-md-pt-80 sc-pb-100 sc-md-pb-90">
            <div class="container">
                <div class="row align-items-center sc-pb-10">
                    <div class="col-md-7">
                        <div class="sc-heading-area sc-mb-30">
                            <span class="sub-title"><i class="icon-line"></i> Explore more</span>
                            <h2 class="title"> Our Latest Job <span class="primary-color italic">Demands</span></h2>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="sc-service-btn text-end">
                            <a class="sc-transparent-btn" href="{{route('job.list')}}">All Jobs</a>
                        </div>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="row">
                    @foreach($latestJobs as $index=>$job)
                        <div class="col-4">
                            <div class="sc-service-style-four sc-mb-25 text-center">
                                <i class="p-z-idex position-relative icomoon {{$loop->even?'icon-stragy':'icon-risk'}}"></i>
                                <h4 class="title p-z-idex position-relative">
                                    <a class="title" href="{{route('job.single',@$job->slug)}}">{{ucfirst($job->name)}}</a>
                                </h4>
                                <p class="des p-z-idex position-relative">
                                    <i class="icon-calender"></i>
                                    @if(@$job->end_date >= $today)
                                        {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                    @else
                                        Expired
                                    @endif
                                </p>
                                <div class="sc-service-button">
                                    <img src="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/win.png')}}" alt="Service" />
                                    <div class="service-btn">
                                        <a class="sc-service-btn" href="{{route('job.single',@$job->slug)}}"><i class="icon-sliuder-arrow2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if($legal_data && count($legal_data['data'])>0)
        <div class="sc-project-section-area sc-project-section-two sc-pt-100 sc-md-pt-80 sc-pb-120 sc-md-pb-80">
            <div class="container-fluid sc-project-container">   <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div class="sc-heading-area sc-mb-35 sc-mt-35 text-center">
                            <span class="sub-title"><i class="icon-line"></i> {{ $legal_data['subheading'] ?? 'Our Company'}}</span>
                            <h2 class="title">
                                {{ $legal_data['heading'] ?? 'Our Legal Documents' }}
                            </h2>
                        </div>
                    </div>
                </div>

                <div id="gallery" style="padding: 0px 30px 0 30px;">
                    <div id="image-gallery">
                        <div class="row">
                            <div class="swiper sc-swiper-slider sc-pagination-active">
                                <div class="swiper-wrapper">
                                    @foreach(@$legal_data['data'] as $gallery_element)
                                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                                            <div class="img-wrapper">
                                                <a href="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}">
                                                    <img src="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" class="img-responsive"></a>
                                                <div class="img-overlay">
                                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div><!-- End row -->
                    </div><!-- End image gallery -->
                </div>
            </div>
        </div>
    @endif

    @if(count($testimonials) > 0)
        <div class="sc-brand-section-area sc-pt-100 sc-md-pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="sc-heading-area sc-mb-35 p-z-idex">
                            <span class="sub-title"><i class="icon-line"></i> Our Testimonials</span>
                            <h2 class="title">Happy Customer Feedback About Our <span class="primary-color italic">Service</span></h2>
                        </div>
                    </div>
                </div>
                <div class="swiper sc-pagination-active-30 sc-blog-slider">
                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="sc-test-item">
                                    <div class="sc-testimonial-text">
                                        <a><img src="{{asset('assets/frontend/images/icons/quote.png')}}" alt="Blog" /></a>
                                        <p class="des">
                                            {{@$testimonial->description }}
                                        </p>
                                    </div>
                                    <div class="sc-auother-text d-flex align-items-center">
                                        <div class="sc-auother-image sc-mr-15">
                                            <img src="{{asset('/images/testimonial/'.@$testimonial->image)}}" />
                                        </div>
                                        <div class="sc-auother-header">
                                            <h5>{{ucwords($testimonial->name)}}</h5>
                                            <span class="sub-title">{{ucwords($testimonial->position)}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    @endif
    @if(count($subsidiaries) > 0)
        <div class="sc-brand-section-area sc-pt-100 sc-md-pt-80 sc-md-pb-80">
            <div class="container">
                <div class="swiper sc-brand-slider" style="background: #353950;">
                    <div class="swiper-wrapper">
                        @foreach($subsidiaries as $subsidiary)
                            <div class="swiper-slide">
                                <div class="sc-brand-image-box text-center">
                                    <div class="sc-brand-image">
                                        <a href="{{@$subsidiary->link}}" target="{{@$subsidiary->link ? '_blank':''}}"><img src="{{asset('/images/subsidiary/'.@$subsidiary->image)}}" alt="Brand" /></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($latestPosts) > 0)
        <div class="sc-global-section-area sc-pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                        <div class="sc-global-item sc-md-mb-55">
                            <div class="sc-heading-area sc-mb-30">
                                <span class="sub-title"><i class="icon-line"></i>  Latest News & Blogs</span>
                                <h2 class="title">
                                    Recent Story from our<span class="active"> Journal </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="swiper sc-blog-slider">
                            <div class="swiper-wrapper">
                                @foreach(@$latestPosts as $post)
                                    <div class="swiper-slide">
                                        <div class="sc-blog-style2">
                                            <div class="blog-img">
                                                <a href="{{route('blog.single',$post->slug)}}"
                                                ><img src="{{asset('/images/blog/'.@$post->image)}}" alt="Blog"
                                                    /></a>
                                            </div>
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
                                                    >{{ucfirst($post->title)}}</a
                                                    >
                                                </h4>
                                                <div class="des">
                                                    {!! elipsis($post->description) !!}
                                                </div>
                                                <div class="sc-blog-btn">
                                                    <a class="sc-transparent-btn" href="{{route('blog.single',$post->slug)}}">Read Article</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(@$setting_data->grievance_heading)
        <div class="sc-about-area sc-about-section-three position-relative sc-pt-120 sc-md-pt-100 sc-pb-140 sc-md-pb-90" style=" background: none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    @if(@$setting_data->google_map)
                        <iframe src="{{@$setting_data->google_map}}" style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy"></iframe>
                    @endif
                </div>
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="sc-about-content-style sc-md-mt-95 sc-pl-40 sc-md-pl-0">
                        <div class="sc-heading-area sc-mb-25">
{{--                            <span class="sub-title"><i class="icon-line"></i> Omama Manpower</span>--}}
                            <h2 class="title">
                                <?php
                                $split = explode(" ", @$setting_data->grievance_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$setting_data->grievance_heading))."\n"}}
                                <span class="primary-color italic"> {{$split[count($split)-1]}} </span>

                            </h2>
                            <p class="description">
                                {{ ucfirst(@$setting_data->grievance_description) }}
                            </p>
                        </div>
                        @if(@$setting_data->grievance_link)
                            <div class="slider-btn-area d-flex align-items-center">
                                <div class="sc-slider-btn sc-mr-20">
                                    <a class="sc-primary-btn" href="{{@$setting_data->grievance_link}}">{{ucwords(@$setting_data->grievance_button)}}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

@endsection

@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection
