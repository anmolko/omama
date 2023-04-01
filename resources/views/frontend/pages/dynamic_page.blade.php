@extends('frontend.layouts.master')
@section('title') {{ucwords(@$page_detail->name)}} @endsection
@section('css')
    <style>

        .theme-btn.style-three, a.theme-btn.style-three.faq-button {
            color: #293043 !important;
            background: transparent;
            border: 1px solid rgba(0, 102, 255, 0.2);
        }
      .custom-editor .media{
            display: block;
        }

        .feature-item-three > img {
            width:60px;
            height:60px;
            margin-top: 10px;
            margin-right: 25px;
        }
        .custom-editor{
            font-size: 1.1875rem;
            text-align: justify;
        }

      .accordion-item {
          margin-bottom: 30px;
      }

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

    <div class="page__banner" data-background="{{asset('assets/frontend/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Page</span>
                        <ul>
                            <li><a href="/">Home</a><span>|</span></li>
                            <li>{{ucwords(@$page_detail->name)}}<</li>
                        </ul>
                        <h1>{{ucwords(@$page_detail->name)}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($sections as $key=>$value)

        @if($value == "basic_section")
            <div class="about__one dark__image section-padding-4 ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 lg-mb-30">
                            @if(@$basic_elements->list_image == "left")
                                <div class="about__one-left">
                                    <div class="about__one-left-image">
                                        <img class="two" src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}" alt="">
                                    </div>
                                </div>
                            @else
                                <div class="about__one-right">
                                    <div class="about__one-right-title">
                                        <span class="subtitle-one">{{$basic_elements->subheading??'Know more'}}</span>
                                        <h2 style="max-width: 550px;"> {{ucwords(@$basic_elements->heading)}}</h2>
                                        <p style="max-width: 550px;">  {!! @$basic_elements->description !!}</p>
                                    </div>
                                    @if(@$basic_elements->button_link)
                                        <div class="about__one-right-btn">
                                            <div>
                                                <a class="btn-one" href="{{@$basic_elements->button_link}}">{{ucwords(@$basic_elements->button ?? 'Discover More')}}<i class="far fa-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif


                        </div>
                        <div class="col-xl-6 col-lg-6">
                            @if(@$basic_elements->list_image == "left")
                                <div class="about__one-right-title ml-10">
                                    <span class="subtitle-one">{{$basic_elements->subheading??'Know more'}}</span>
                                    <h2 style="max-width: 550px;"> {{ucwords(@$basic_elements->heading)}}</h2>
                                    <p style="max-width: 550px;">  {!! @$basic_elements->description !!}</p>
                                </div>
                                @if(@$basic_elements->button_link)
                                    <div class="about__one-right-btn">
                                        <div>
                                            <a class="btn-one" href="{{@$basic_elements->button_link}}">{{ucwords(@$basic_elements->button ?? 'Discover More')}}<i class="far fa-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="about__one-left">
                                    <div class="about__one-left-image">
                                        <img class="two" src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}" alt="">
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

        @if($value == "call_to_action_1")
            <div class="about__solution mt-5" data-background="{{asset('assets/frontend/img/about/about-solution.jpg')}}" style="background-image: url('{{asset('assets/frontend/img/about/about-solution.jpg')}}');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8">
                            <div class="about__solution-left xl-t-center">
                                <h2>{{ucfirst(@$call1_elements->heading)}}</h2>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="about__solution-right t-right xl-t-center">
                                <a class="btn-one" href="{{@$call1_elements->button_link ?? '/contact-us'}}">{{ucwords(@$call1_elements->button ?? 'Get Free Consultations')}} <i class="far fa-chevron-double-right"></i></a>
                                <img class="about__solution-right-shape left-right-animate" src="{{asset('assets/frontend/img/shape/about-solution.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if($value == "background_image_section")
          <!--- Background Image--->
          <div class="cta__two" data-background="{{ @$bgimage_elements->image ? asset('/images/section_elements/bgimage_section/'.@$bgimage_elements->image):asset('assets/frontend//img/pages/getInTouchThree.jpg')}}">
              <img class="cta__two-shape left-right-animate2" src="{{asset('assets/frontend/img/shape/getInTouch.png')}}" alt="">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-xl-6 col-lg-5 lg-mb-30">
                          <div class="cta__two-title">
                              <span class="subtitle-one">{{@$bgimage_elements->subheading ?? 'Need Help?'}}</span>
                              <h2>{{@$bgimage_elements->heading ?? 'Have Questions? Lets Connect'}}</h2>
                          </div>
                      </div>
                      <div class="col-xl-6 col-lg-7">
                          <div class="cta__two-info">
                              <div class="cta__two-info-item">
                                  <div class="cta__two-info-item-icon">
                                      <i class="fal fa-phone-alt icon-animation"></i>
                                  </div>
                                  <div>
                                      <span>Reach out</span>
                                      <h6><a href="tel:{{@$setting_data->phone ??''}}">{{@$setting_data->phone ??''}}</a></h6>
                                  </div>
                              </div>
                              <div class="cta__two-info-item">
                                  <div class="cta__two-info-item-icon">
                                      <i class="fal fa-envelope"></i>
                                  </div>
                                  <div>
                                      <span>Mail us</span>
                                      <h6><a href="mailto:{{@$setting_data->email ??''}}">{{@$setting_data->email ??''}}</a></h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        @endif

        @if($value == "flash_cards")
            <div class="chooseUs__area section-padding-3">
                <div class="container">
                    <div class="row align-items-center mb-70">
                        <div class="col-xl-6 col-lg-7 lg-mb-20">
                            <div class="chooseUs__area-title">
                                <span class="subtitle-one">Why Choose Us</span>
                                <h2>consultant's reputation is extremely important.</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="chooseUs__area-right">

                                <div class="chooseUs__area-right-shape">
                                    <img class="left-right-animate dark-n" src="{{asset('assets/frontend/img/shape/choose-us.png')}}" alt="">
                                    <img class="left-right-animate light-n" src="{{asset('assets/frontend/img/shape/choose-us-dark.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach(@$flash_elements as $index=>$flash_element)

                            <div class="col-sm-4">
                                <div class="chooseUs__area-item">
                                    <div class="chooseUs__area-item-icon">
                                        <img src="{{asset('assets/frontend/img/icon/'.get_icons(@$index))}}" alt="">
                                    </div>
                                    <h4>{{ucwords(@$flash_element->list_header)}}</h4>
                                    <p>{{ucfirst(@$flash_element->list_description) }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endif

        @if($value == "simple_header_and_description")
            <div class="project__details section-padding-3 {{ @$header_descp_elements->heading ?  '':'pt-0'}}">
                <div class="container">
                    @if(@$header_descp_elements->heading)
                        <div class="portfolio__area-title t-center mb-5">
                            <span class="{{@$header_descp_elements->subheading ? 'subtitle-one':''}}">{{@$header_descp_elements->subheading ?? ''}}</span>
                            <h2>{{ucwords(@$header_descp_elements->heading)}}</h2>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project__details-area">
                                {!! @$header_descp_elements->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if($value == "map_and_description")
            <div class="contact__three section-padding-3" style="background: var(--color-6);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 lg-mb-30">
                            <div class="contact__three-right">
                                <div class="contact__three-right-title">
                                    <span class="subtitle-one">{{@$map_descp->subheading ?? ''}}</span>
                                    <h2 class="mb-30">{{ucwords(@$map_descp->heading ?? '')}}</h2>
                                </div>
                                <div class="contact__three-right-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="about__one-right-title">
                                                    <p> {!! ucfirst(@$map_descp->description) !!}</p>
                                                </div>
                                                @if(@$map_descp->button)
                                                    <div class="contact__two-right-form-item">
                                                        <a href="{{@$map_descp->link}}" class="btn-one" type="submit">
                                                            {{ucwords(@$map_descp->button)}} <i class="far fa-chevron-double-right"></i></a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact__three-left mr-40 xl-mr-0">
                                <div class="contact__three-left-map">
                                    @if(@$setting_data->google_map)
                                        <iframe src="{{@$setting_data->google_map}}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if($value == "accordion_section_2")
            <div class="faq__area section-padding-3">
                <div class="container">
                    <div class="row"><div class="row align-items-end mb-70">
                            <div class="col-xl-7 col-lg-8 lg-mb-30">
                                <div class="blog__one-title lg-t-center">
                                    <span class="subtitle-one">{{ucwords(@$accordian2_elements[0]->subheading)}}</span>
                                    <h2>{{ucwords(@$accordian2_elements[0]->heading)}}</h2>
                                </div>
                            </div>

                            <div class="col-xl-5 col-lg-4 t-right lg-t-center">
                                @if(@$accordian2_elements[0]->button_link)
                                    <a class="btn-two" href="{{@$accordian2_elements[0]->button_link}}">{{ucwords(@$accordian2_elements[0]->button ?? 'Reach Out')}}<i class="far fa-chevron-double-right"></i></a>
                                @endif
                            </div>
                        </div>

                        @foreach(@$accordian2_elements->chunk($list_2/2) as $index=>$accordian2_elements)
                            <div class="col-xl-6">
                                @foreach(@$accordian2_elements as $index2=>$accordian2_element)
                                    <div class="faq-collapse">
                                        <div class="faq-collapse-item mb-2">
                                            <div class="faq-collapse-item-card">
                                                <div class="faq-collapse-item-card-header">
                                                    <h6><span class="far fa-question-circle"></span>{{@$accordian2_element->list_header}}-{{$index2}}</h6>
                                                    <i class="far fa-minus"></i>
                                                </div>
                                                <div class="faq-collapse-item-card-header-content display-none {{ ($index2==0 ||$index2==4) ? 'active':''}}" style="display:{{ ($index2==0 || $index2==4) ? 'block':'none'}}">
                                                    <p>{{@$accordian2_element->list_description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endif

        @if($value == "small_box_description")
            <div class="solutions__two section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 lg-mb-30">
                            <div class="solutions__two-title">
                                <span class="subtitle-one">{{ ucfirst($process_elements[0]->subheading ?? 'Advance Solutions')}}</span>
                                <h2>{{ ucfirst($process_elements[0]->heading ?? '')}}</h2>
                                <p>{{ $process_elements[0]->description ?? ''}}</p>
                            </div>
                        </div>

                        @for ($i = 1; $i <=@$process_num; $i++)
                            <div class="col-xl-3 col-md-6 xl-mb-30">
                            <div class="solutions__two-item">
                                <div class="solutions__two-item-icon">
                                    <img src="{{asset('assets/frontend/img/icon/'.get_solution_icons($i-1))}}" alt="">
                                </div>
                                <h4>{{ucwords(@$process_elements[$i-1]->list_header ??'')}}</h4>
                                <p>{{ucfirst(@$process_elements[$i-1]->list_description)}}</p>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
          <!-- Feature Six Area end -->
        @endif

        @if($value == "gallery_section")
          <!--- Gallery Section 1-->
          <div class="faq__area section-padding-3">
              <div class="container">
                  @if($heading!==null)
                      <div class="row">
                          <div class="col-xl-12">
                              <div class="portfolio__area-title t-center">
                                  <span class="subtitle-one">{{$subheading ?? ''}}</span>
                                  <h2>{{$heading ?? ''}}</h2>
                              </div>
                          </div>
                      </div>
                  @endif
                    <div id="gallery" style="">
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
            <div class="portfolio__area dark__image section-padding">
                <div class="container-fluid p-0">
                    <div class="row mb-60">
                        <div class="col-xl-12">
                            <div class="portfolio__area-title t-center">
                                <span class="subtitle-one">{{ucwords(@$slider_list_elements[0]->description)}}</span>
                                <h2>{{ucwords(@$slider_list_elements[0]->heading)}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="swiper portfolio__area-slider">
                                <div class="swiper-wrapper">
                                    @for ($i = 1; $i <=@$list_3; $i++)
                                        <div class="portfolio__area-item swiper-slide">
                                            <img src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.$slider_list_elements[$i-1]->list_image) }}" alt="">
                                            <div class="portfolio__area-item-content">
                                                <div class="portfolio__area-item-content-title">
                                                    <h4><a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">{{ucwords(@$slider_list_elements[$i-1]->list_header)}}</a></h4>
                                                    <span class="text-eight">Omama Manpower</span>
                                                </div>
                                                <div class="portfolio__area-item-content-icon">
                                                    <a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">
                                                        <img src="{{asset('assets/frontend/img/icon/up-arrow.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    @endforeach


@endsection
@section('js')
  <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>

@endsection
