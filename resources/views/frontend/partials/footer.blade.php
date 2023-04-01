<!--=========== Footer Section Start =========-->
<section class="sc-footer-section sc-footer-style2 sc-pt-120 footer-bg-image2 sc-md-pt-170">
    <div class="container">
        <!--=========== cta Section Start =========-->
        <div class="sc-cta-section-area">
            <div class="sc-footer-cta sc-cta-content-box d-flex align-items-center">
                <div class="sc-cta-image">
                    <img src="{{asset('assets/frontend/images/about/cta.jpg')}}" alt="Business" />
                </div>
                <div class="sc-cta-content rounded-0 d-flex align-items-center justify-content-between">
                    <div
                        class="sc-cta-text m-0"
                        data-sal="slide-up"
                        data-sal-duration="800"
                        data-sal-delay="300"
                    >
                        <h2 class="title white-color">Grow Your Business</h2>
                        <p class="des white-color">With our services, we can help your business grow faster</p>
                    </div>
                    <div class="sc-cta-btn" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <a class="sc-secondary-btn" href="{{route('contact')}}">Let's Work Together</a>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== cta Section End =========-->
        <div class="row sc-pt-80 sc-pb-80 sc-md-pb-70">
            <div
                class="col-xl-3 col-md-6 col-sm-12"
                data-sal="slide-up"
                data-sal-duration="500"
                data-sal-delay="300"
            >
                <div class="footer-about">
                    <div class="footer-logo sc-mb-30">
                        <a href="#"><img src="{{ (@$setting_data->logo_white) ? asset('/images/settings/'.@$setting_data->logo_white): asset('/images/settings/'.@$setting_data->logo) }}" /></a>
                    </div>
                    <div class="footer-des">
                        {!! ucfirst(@$setting_data->website_description ?? '') !!}
                    </div>
                    <ul class="about-icon">
                        @if(@$setting_data->facebook)
                            <li>
                                <a href="{{@$setting_data->facebook}}"><i class="icon-facebook"></i></a>
                            </li>
                        @endif
                        @if(@$setting_data->youtube)
                            <li>
                                <a href="{{@$setting_data->youtube}}"><i class="icon-youtube"></i></a>
                            </li>
                        @endif
                        @if(@$setting_data->instagram)
                            <li>
                                <a href="{{@$setting_data->instagram}}"><i class="icon-intragram"></i></a>
                            </li>
                        @endif
                        @if(@$setting_data->linkedin)
                            <li>
                                <a href="{{@$setting_data->linkedin}}"><i class="icon-linkedin-2"></i></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div
                class="col-xl-3 col-md-6 col-sm-12"
                data-sal="slide-up"
                data-sal-duration="500"
                data-sal-delay="500"
            >
                <div class="footer-menu-area sc-footer-user sc-pl-75 sc-md-pl-0 sc-md-mb-40 sc-lg-pl-0">
                    <h4 class="footer-title white-color sc-md-mb-15">Useful Links</h4>
                    <div class="sc-contact-number d-flex align-items-center sc-mb-35">
                        <div class="phone-icon">
                            <i class="icons icon-phone white-bg-color"></i>
                        </div>
                        <div class="contact-number">
                            Reach out:
                            <a href="tel:{{@$setting_data->phone}}" class="number">{{@$setting_data->phone}} </a>
                        </div>
                    </div>
                    <div class="sc-contact-number d-flex align-items-center sc-mb-35">
                        <div class="phone-icon">
                            <i class="icons icon-map white-bg-color"></i>
                        </div>
                        <div class="contact-number">
                            Our location:
                            <a class="number">{{@$setting_data->address}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-xl-3 col-md-6 col-sm-12"
                data-sal="slide-up"
                data-sal-duration="500"
                data-sal-delay="700"
            >
                <div
                    class="footer-menu-area sc-footer-service sc-pl-40 sc-blg-pl-30 sc-lg-pl-0 sc-md-mt-20 sc-sm-pt-10"
                >
                    <h4 class="footer-title white-color sc-md-mb-15">{{@$footer_nav_title1 ?? 'Our Solution'}} </h4>
                    <ul class="footer-menu-list">
                        @foreach($footer_nav_data1 as $nav)
                            @if(empty($nav->children[0]))
                                <li><a href="{{get_menu_url($nav->type, $nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                        {{ @$nav->name ?? @$nav->title ?? ''}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div
                class="col-xl-3 col-md-6 col-sm-12"
                data-sal="slide-up"
                data-sal-duration="500"
                data-sal-delay="900">
                @if($footer_jobs)
                    <div class="footer-menu-area sc-footer-recent footer-menu-area-left sc-pl-35 sc-blg-pl-15 sc-lg-pl-0 sc-sm-pt-30">
                        <h4 class="footer-title white-color sc-md-mb-15">Latest Jobs</h4>
                        @foreach(@$footer_jobs as $index=>$job)
                            <div class="sc-recent-post d-flex align-items-center {{$index==0?'sc-mb-25':''}}">
                                <div class="recent-image">
                                    <a href="{{route('job.single',@$job->slug)}}"
                                    ><img src="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/win.png')}}" alt="Recent"/></a>
                                </div>
                                <div class="recent-text">
                                    <div class="calender-item">
                                        <span class="post-date">
                                            <i class="icon-calender"></i>@if(@$job->end_date >= $today)
                                                {{date('M j, Y',strtotime(@$job->end_date))}}
                                            @else
                                                Expired
                                            @endif</span>
                                    </div>
                                    <h5 class="title mb-0">
                                        <a href="{{route('job.single',@$job->slug)}}">
                                            {{ ucfirst($job->name)}}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="copyright-area border-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="copyright-text text-center"
                        data-sal="slide-up"
                        data-sal-duration="800"
                        data-sal-delay="400"
                    >
                        <p>© {{date("Y")}}  <a href="/">{{$setting_data->website_name ?? 'Omama Manpower Pvt Ltd'}}</a> - Developed by <a href="https://www.canosoft.com.np/" target="_blank">Canosoft Techonology</a>. All right reserved</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Footer Section End =========-->

<!--Sc Offcanvas Area Start-->
<div id="sc-overlay-bg2" class="sc-overlay-bg2"></div>
<div class="sc-product-offcanvas-area">
    <div class="sc-offcanvas-header d-flex align-items-center justify-content-between">
        <div class="sticky-logo logo-area text-center">
            <a href="/"><img src="{{asset('/images/settings/'.@$setting_data->logo)}}" /></a>
        </div>
        <div class="offcanvas-icon">
            <a id="canva_close" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="25px">
                    <path
                        d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"
                    />
                </svg>
            </a>
        </div>
    </div>

    <!-- Canvas Mobile Menu start -->
    <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
        <ul class="nav-menu sc-mb-45 sc-pl-0">
            <li class="list-gap hash-has-sub">
                <a class="hash active" href="/"> Home</a>
            </li>
            @if(!empty($top_nav_data))
                @foreach($top_nav_data as $nav)
                    @if(!empty($nav->children[0]))
                        <li class="list-gap menu-item-has-children has-sub hash-has-sub">
                            <a href="#" class="hash">{{ @$nav->name ?? @$nav->title }}</a>
                            <ul class="list-gap sub-menu-list">
                                @foreach($nav->children[0] as $childNav)
                                    <li class="hash-has-sub menu-item-has-inner-children"><a href="{{get_menu_url($childNav->type, $childNav)}}" target="{{@$childNav->target ? '_blank':''}}">
                                            {{ @$childNav->name ?? @$childNav->title ??''}}</a>
                                        @if(!empty($childNav->children[0]))
                                            <ul class="list-gap inner-menu-list">
                                                @foreach($childNav->children[0] as $key => $lastchild)
                                                    <li><a class="hash" href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
                                                            {{ @$lastchild->name ?? @$lastchild->title ?? ''}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{get_menu_url($nav->type, $nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                {{ @$nav->name ?? @$nav->title ??''}}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        </ul>
    </nav>
    <!-- Canvas Menu end -->
    <div class="sc-offcanvas-list-info">
        <p class="des sc-mb-20">
            {!! ucfirst(@$setting_data->website_description ?? 'Welcome to Omama Manpower PVT LTD') !!}
        </p>
        <h4 class="product-title">Contact Info</h4>
        <ul class="list-gap">
            <li>
                <i class="icon-map"></i>
                {{@$setting_data->address}}
            </li>
            <li><i class="icon-phone"></i><a href="tel:{{@$setting_data->phone ?? ''}}">{{@$setting_data->phone ?? ''}}</a></li>
            <li><i class="icon-mail"></i><a href="mailto:{{$setting_data->email ?? ''}}">{{$setting_data->email ?? ''}}</a></li>
        </ul>
    </div>
    <div class="contact-map">
        <iframe
            src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
            style="border: 0"
            allowfullscreen=""
        ></iframe>
    </div>
    <div class="sc-canva-button">
        <a class="sc-primary-btn" href="{{route('contact')}}">Get Consulting</a>
    </div>
    <div class="sc-offcanvas-icon-list">
        <ul>
            @if(@$setting_data->facebook)
                <li>
                    <a href="{{@$setting_data->facebook}}"><i class="icon-facebook-2"></i></a>
                </li>
            @endif
            @if(@$setting_data->youtube)
                <li>
                    <a href="{{@$setting_data->youtube}}"><i class="icon-youtube" style="font-size: 16px"></i></a>
                </li>
            @endif
            @if(@$setting_data->instagram)
                <li>
                    <a href="{{@$setting_data->instagram}}"><i class="icon-intragram"></i></a>
                </li>
            @endif
            @if(@$setting_data->linkedin)
                <li>
                    <a href="{{@$setting_data->linkedin}}"><i class="icon-linkedin-2"></i></a>
                </li>
            @endif
        </ul>
    </div>
</div>
<!--Sc Offcanvas Area End-->

<!-- Search Modal Start -->
<div aria-hidden="true" id="search-modal" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30px" height="30px">
            <path
                d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"
            />
        </svg>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form method="get" id="searchform" action="{{route('searchJob')}}">
                    <div class="form-group">
                        <input  id="s" name="s" type="text" class="form-control" placeholder="Find Jobs here.." oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="icon-angle_right"></i>
</div>
<!-- End scrollUp  -->

<!-- start scrollUp  -->
<div class="boxfin-scroll-top progress-done">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path
            d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    "
        ></path>
    </svg>
    <div class="boxfin-scroll-top-icon">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            role="img"
            width="1em"
            height="1em"
            viewBox="0 0 24 24"
            data-icon="mdi:arrow-up"
            class="iconify iconify--mdi"
        >
            <path
                fill="currentColor"
                d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z"
            ></path>
        </svg>
    </div>
</div>
<!-- End scrollUp  -->

<!-- Bootstrap.min js -->
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<!-- jquery.min js -->
<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
<!-- modernizr.js -->
<script src="{{asset('assets/frontend/js/modernizr-2.8.3.min.js')}}"></script>
<!-- Swiper JS -->
<script src="{{asset('assets/frontend/swiper/swiper-bundle.min.js')}}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{asset('assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- magnific.min js -->
<script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Swiper.min js -->
<script src="{{asset('assets/frontend/js/swiper.min.js')}}"></script>
<!-- appear js -->
<script src="{{asset('assets/frontend/js/jquery.appear.min.js')}}"></script>
<!-- odometer js -->
<script src="{{asset('assets/frontend/js/odometer.min.js')}}"></script>
<!-- sal js -->
<script src="{{asset('assets/frontend/js/sal.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/frontend/js/main.js')}}"></script>
@yield('js')
@stack('scripts')
</body>
</html>
