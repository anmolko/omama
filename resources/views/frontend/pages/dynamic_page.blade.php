@extends('frontend.layouts.master')
@section('title') {{ucwords(@$page_detail->name)}} @endsection
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
                        <div class="sc-slider-subtitle">Home - Page</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">{{ucwords(@$page_detail->name)}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($sections as $key=>$value)

        @if($value == "basic_section")
            <div class="sc-about-area sc-about-section-two position-relative sc-pb-10">
                <div class="container-fluid sc-pl-0 sc-md-pr-20 sc-md-pl-20">
                    <div class="sc-about-content-area sc-pt-40 sc-pb-40 position-relative p-z-idex d-flex align-items-center sc-md-pt-80 sc-md-pb-80">
                        <div class="sc-about-bg-image" data-sal="slide-right" data-sal-duration="800">
                            <img src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}" alt="About" />
                        </div>
                        <div class="sc-about-text-box sc-md-mt-50 sc-pl-30 sc-md-pl-0" data-sal="slide-left" data-sal-duration="800">
                            <div class="sc-heading-area sc-mb-35">
                                <span class="sub-title"><i class="icon-line"></i> {{$basic_elements->subheading??'Omama Manpower'}}</span>
                                <h2 class="title">
                                    <?php
                                    $split = explode(" ", @$basic_elements->heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$basic_elements->heading))."\n"}}
                                    <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                </h2>
                                <div class="des">
                                    {!! @$basic_elements->description !!}
                                </div>
                                @if(@$basic_elements->button_link)
                                    <div class="slider-btn-area sc-ab-area mt-3 d-flex align-items-center">
                                        <div class="sc-slider-btn sc-mr-20">
                                            <a class="sc-primary-btn" href="{{@$basic_elements->button_link}}">{{ucwords(@$basic_elements->button ?? 'Discover More')}}</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="sc-about-shape">
                                <img src="{{asset('assets/frontend/images/icons/about-shape.png')}}" alt="Shape" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if($value == "call_to_action_1")
            <div class="sc-cta-style-four">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9" data-sal="slide-right" data-sal-duration="800">
                            <div class="sc-cta-text m-0">
                                <h2 class="title white-color">{{ucfirst(@$call1_elements->heading)}}</h2>
                                <p class="des white-color">{{ucfirst(@$call1_elements->subheading)}}</p>
                            </div>
                        </div>
                        <div class="col-lg-3" data-sal="slide-left" data-sal-duration="800">
                            <div class="sc-footer-cta-four">
                                <div class="sc-cta-content sc-content-input d-flex align-items-center justify-content-between">
                                    <div class="sc-cta-btn">
                                        <a class="sc-secondary-btn-two sc-cta-estimate" href="{{@$call1_elements->button_link ?? '/contact-us'}}">{{ucwords(@$call1_elements->button ?? 'Get Free Consultations')}} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if($value == "background_image_section")
            <div class="sc-process-section-area sc-pt-110 sc-md-pt-80 sc-process-style-three position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 sc-pb-75">
                            <div class="sc-heading-area sc-mb-35 sc-md-mb-50">
                                <span class="sub-title"><i class="icon-line"></i>{{@$bgimage_elements->subheading ?? ''}}</span>
                                <h2 class="title">
                                    <?php
                                    $split = explode(" ", @$bgimage_elements->heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$bgimage_elements->heading))."\n"}}
                                    <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                </h2>
                            </div>
                            <div class="sc-process-content-area sc-mb-45 ">
                                <div class="row">
                                    <div class="col-md-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                        <div class="des" style="font-size: 18px;text-align: justify;">
                                            {{ @$bgimage_elements->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
                <div class="sc-services-bg-right-three sc-lg-hide"
                     style="background-image: url('{{asset('/images/section_elements/bgimage_section/'.@$bgimage_elements->image)}}')"></div>
            </div>

        @endif

        @if($value == "flash_cards")
            <div class="sc-working-process-area sc-pt-100 sc-md-pt-80 sc-pb-100 sc-md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                            <div class="sc-heading-area sc-mb-55 sc-md-mb-35 text-center">
                                <span class="sub-title"><i class="icon-line"></i> {{$flash_elements[0]->subheading}}</span>
                                <h2 class="title">
                                    <?php
                                    $split = explode(" ", @$flash_elements[0]->heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$flash_elements[0]->heading))."\n"}}
                                    <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach(@$flash_elements as $index=>$flash_element)
                            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="{{($index+3)*100 }}">
                            <div class="sc-process-system-three text-center sc-sm-mb-50">
                                <div class="process-icon sc-mb-35">
                                    <i class="{{get_icons($index)}}"></i>
                                </div>
                                <div class="process-content">
                                    <h4 class="process-title">{{ucwords(@$flash_element->list_header)}}</h4>
                                    <div class="desc">
                                        {{ucfirst(@$flash_element->list_description) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endif

        @if($value == "simple_header_and_description")
            <div class="sc-blog-section-area sc-blog-section-two sc-pt-10 sc-md-pt-10 sc-pb-100 sc-md-pb-80">
                <div class="container">
                    <div class="row">
                        @if(@$header_descp_elements->heading)
                            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 sc-pt-70 sc-md-pt-60 ">
                                <div class="sc-heading-area sc-mb-35 text-center">
                                    <span class="sub-title"><i class="icon-line"></i> {{@$header_descp_elements->subheading ?? ''}}</span>
                                    <h2 class="title">
                                        <?php
                                        $split = explode(" ", @$header_descp_elements->heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$header_descp_elements->heading))."\n"}}
                                        <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                    </h2>
                                </div>
                            </div>
                        @endif
                        <div class="col-lg-12">
                            <div class="sc-blog-details-content-area">
                                <div class="sc-details-develop-text custom-description">
                                    {!! @$header_descp_elements->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if($value == "map_and_description")
            <div class="section-shape">
                <div class="sc-about-area sc-about-section-three position-relative sc-pt-120 sc-md-pt-100 sc-pb-140 sc-md-pb-90" style=" background: none;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                                <div class="sc-about-content-style sc-md-mt-95 sc-pr-40 sc-md-pr-0">
                                    <div class="sc-heading-area sc-mb-25">
                                        <span class="sub-title"><i class="icon-line"></i> {{@$map_descp->subheading ?? ''}}</span>
                                        <h2 class="title">
                                            <?php
                                            $split = explode(" ", @$map_descp->heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$map_descp->heading ))."\n"}}
                                            <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                        </h2>
                                        <div class="description" style="text-align: justify">
                                            {!! ucfirst(@$map_descp->description) !!}
                                        </div>
                                    </div>
                                    @if(@$map_descp->button_link)
                                        <div class="slider-btn-area d-flex align-items-center">
                                            <div class="sc-slider-btn sc-mr-20">
                                                <a class="sc-primary-btn" href="{{@$map_descp->button_link}}">{{ucwords(@$map_descp->button)}}</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                                @if(@$setting_data->google_map)
                                    <iframe src="{{@$setting_data->google_map}}" style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy"></iframe>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if($value == "accordion_section_2")
            <div class="sc-accordion-section-area sc-accordion-style-two sc-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                            <div class="sc-heading-area sc-mb-35">
                                <span class="sub-title"><i class="icon-line"></i> {{ucwords(@$accordian2_elements[0]->subheading ?? 'Essential Query')}}</span>

                                <h2 class="title">
                                    <?php
                                    $split = explode(" ", @$accordian2_elements[0]->heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$accordian2_elements[0]->heading ))."\n"}}
                                    <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                </h2>
                            </div>
                            <div class="accordion sc-faq-style" id="accordionExample">
                                @foreach(@$accordian2_elements as $index=>$accordian2_element)

                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{$index}}">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{$index}}"
                                            aria-expanded="{{ $index==0 ? 'true':'false' }}"
                                            aria-controls="collapse{{$index}}"
                                        >
                                            {{@$accordian2_element->list_header}}
                                        </button>
                                    </h2>
                                    <div
                                        id="collapse{{$index}}"
                                        class="accordion-collapse collapse {{$index==0 ? 'show':''}}"
                                        aria-labelledby="heading{{$index}}"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <strong
                                            >{{@$accordian2_element->list_description}}</strong
                                            >
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sc-essential-image sc-md-mt-40 text-end">
                                <img src="{{ (@$accordian2_elements[0]->image !== null) ? asset('/images/section_elements/basic_section/'.@$accordian2_elements[0]->image):asset('assets/frontend/images/project/essential-bg.jpg')}}" alt="Essential" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc-essential-shape">
                    <img src="{{asset('assets/frontend/images/bg/essential-shape1.png')}}" alt="Shape" />
                </div>
            </div>
        @endif

        @if($value == "small_box_description")
            <div class="sc-service-section-two sc-pt-100 sc-md-pt-80 sc-pb-95 sc-md-pb-50" style="margin-top: 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                            <div class="sc-heading-area sc-mb-35 text-center">
                                <span class="sub-title"><i class="icon-line"></i> {{ ucfirst($process_elements[0]->subheading ?? 'Advance Solutions')}}</span>

                                <h2 class="title">
                                    <?php
                                    $split = explode(" ", @$process_elements[0]->heading );?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$process_elements[0]->heading))."\n"}}
                                    <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @for ($i = 1; $i <=@$process_num; $i++)
                            <div class="col-lg-3 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="{{ ($i+2) * 100 }}">
                                <div class="sc-service-content-box">
                                    <div class="sc-services-image">
                                        <div class="sc-service-icon">
                                            <i class="{{get_solution_icons($i-1)}}"></i>
                                        </div>
                                    </div>
                                    <div class="sc-service-text">
                                        <h4><a class="title">{{ucwords(@$process_elements[$i-1]->list_header ??'')}}</a></h4>
                                        <p class="des sc-mb-25">
                                            {{ucfirst(@$process_elements[$i-1]->list_description)}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        @endif

        @if($value == "gallery_section")
            <div class="sc-working-process-area sc-pt-60 sc-md-pt-80 sc-pb-100 sc-md-pb-80">
                <div class="container">
                    @if($heading!==null)
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <div class="sc-heading-area sc-mb-55 sc-md-mb-35 text-center">
                                    <span class="sub-title"><i class="icon-line"></i> {{$subheading ?? ''}}</span>
                                    <h2 class="title">
                                        <?php
                                        $split = explode(" ", @$heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$heading))."\n"}}
                                        <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div id="gallery" style="padding: 0px 30px 0 30px;">
                            <div id="image-gallery">
                                <div class="row">
                                    @foreach(@$gallery_elements as $gallery_element)

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                                            <div class="img-wrapper">
                                                <a href="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}">
                                                    <img src="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" class="img-responsive"></a>
                                                <div class="img-overlay">
                                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div><!-- End row -->
                            </div><!-- End image gallery -->
                        </div><!-- End container -->

                </div>
            </div>
        @endif

        @if($value == "slider_list")
            <div class="sc-company-section-area sc-pt-115 sc-md-pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                            <div class="sc-heading-area text-center">
                                <span class="sub-title white-sub-title"><i class="icon-line"></i> {{ucwords(@$slider_list_elements[0]->description)}}</span>
                                <h2 class="title white-color">{{ucwords(@$slider_list_elements[0]->heading)}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sc-project-section-area nagetive-margin sc-pb-60 sc-md-pb-80">
                <div class="container">
                    <div class="swiper sc-pagination-active sc-swiper-slider">
                        <div class="swiper-wrapper">
                            @for ($i = 1; $i <=@$list_3; $i++)
                                <div class="swiper-slide">
                                    <div class="sc-project-item">
                                        <img src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.$slider_list_elements[$i-1]->list_image) }}" alt="Image" />
                                        <div class="sc-project-content-box">
                                            <div class="sc-project-icon">
                                                <a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}"><i class="icon-sliuder-arrow2"></i></a>
                                            </div>
                                            <div class="sc-project-text">
                                                <span class="sub-title">Omama Manpower</span>
                                                <h4><a class="title" href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">
                                                        {{ucwords(@$slider_list_elements[$i-1]->list_header)}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        @endif

    @endforeach


@endsection
@section('js')
  <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
  <script>
      $( document ).ready(function() {
          let selector = $('.custom-description').find('table').length;
          if(selector>0){
              $('.custom-description').find('table').addClass('table table-bordered');
          }
      });
  </script>
@endsection
