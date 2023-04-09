<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Omama Manpower Pvt Ltd">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="canonical" href="https://omamamanpower.com" />

    @yield('seo')

<!-- Bootstrap  v5.1.3 css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" />
    <!-- Sall css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/sal.css')}}" />
    <!-- magnific css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/magnific-popup.css')}}" />
    <!-- Swiper Slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/swiper.min.css')}}" />
    <!-- Remixicon Fonts css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/ico-fonts.css')}}" />
    <!-- Remixicon Fonts css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/odometer.min.css')}}" />
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>
    @yield('css')
    @stack('styles')
</head>

<body>
<!-- preloader -->
{{--<div id="preloader" class="preloader">--}}
{{--    <div class="animation-preloader">--}}
{{--        <div class="spinner">--}}
{{--            <div class="loader-icon">--}}
{{--                <img src="{{ (@$setting_data->favicon) ? asset('/images/settings/'.@$setting_data->favicon): asset('assets/frontend/images/favicon.png')}}" alt="Omama Manpower Pvt Ltd" />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="txt-loading">--}}
{{--            <span data-text-preloader="O" class="letters-loading"> O </span>--}}
{{--            <span data-text-preloader="M" class="letters-loading"> M </span>--}}
{{--            <span data-text-preloader="A" class="letters-loading"> A </span>--}}
{{--            <span data-text-preloader="M" class="letters-loading"> M </span>--}}
{{--            <span data-text-preloader="A" class="letters-loading"> A </span>--}}
{{--        </div>--}}
{{--        <p class="text-center">Loading</p>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- welcome content start from here -->

<!--========== Header Section Start ==============-->
<header class="sc-header-section" id="sc-header-sticky">
    <div class="sc-topbar-section sc-topbar-section-two">
        <div class="container">
            <!-- Topbar Section Start -->
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-7">
                    <div class="sc-menu-inner p-z-idex d-flex align-items-center justify-content-md-start justify-content-center">
                        {{--                        <div class="sc-header-date">--}}
                        {{--                            <ul class="list-gap sc-date">--}}
                        {{--                                <li><i class="icon-timer"></i> No hidden charges apply</li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                        <div class="sc-header-content-left text-center">
                            <ul class="list-gap white-color">
                                {{--                                <li>--}}
                                {{--                                    <i class="icon-phone"></i--}}
                                {{--                                    ><a href="tel:+1(520)2563650"> +1 (520) 256 3650</a>--}}
                                {{--                                </li>--}}
                                <li>
                                    <i class="icon-map"></i
                                    ><a href="mailto:{{@$setting_data->email ?? ''}}"> {{@$setting_data->address ?? ''}}</a>
                                </li>
                                <li class="header-mail">
                                    <i class="icon-message"></i
                                    ><a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->email ?? ''}}</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div
                        class="sc-header-content-right p-z-idex align-items-center d-flex justify-content-md-end justify-content-center"
                    >
                        <div class="sc-header-social-icon">
                            <ul class="list-gap sc-social-list">
                                @if(@$setting_data->facebook)
                                    <li>
                                        <a href="{{@$setting_data->facebook}}"> <i class="icon-facebook-2"></i></a>
                                    </li>
                                @endif
                                @if(@$setting_data->youtube)
                                    <li>
                                        <a href="{{@$setting_data->youtube}}"> <i class="icon-youtube" style="font-size: 16px;"></i></a>
                                    </li>
                                @endif
                                @if(@$setting_data->instagram)
                                    <li>
                                        <a href="{{@$setting_data->instagram}}"> <i class="icon-intragram"></i></a>
                                    </li>
                                @endif
                                @if(@$setting_data->linkedin)
                                    <li>
                                        <a href="{{@$setting_data->linkedin}}"> <i class="icon-linkedin-2"></i></a>
                                    </li>
                                @endif
                                @if(!empty(@$setting_data->ticktock))
                                    <li>
                                        <a href="{{@$setting_data->ticktock}}"> <i class="fa-brands fa-tiktok"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Section End -->
        </div>
    </div>
    <!-- Header Section Start -->
    <div class="sc-header-content sc-header-content-two">
        <div class="container">
            <div class="row align-items-center justify-content-between p-z-idex">
                <div class="col-lg-9 col-6">
                    <div class="sc-menu-inner d-flex align-items-center">
                        <div class="sc-header-logo sc-pr-112">
                            <a href="/"><img src="{{asset('/images/settings/'.@$setting_data->logo)}}" /></a>
                        </div>
                        <div class="sc-main-menu d-lg-block d-none">
                            <!-- Mainmenu Section Start -->
                            <ul class="list-gap main-menu">
                                <li class="current-menu-item">
                                    <a class="active" href="/"> Home</a>
                                </li>
                                @if(!empty($top_nav_data))
                                    @foreach($top_nav_data as $nav)
                                        @if(!empty($nav->children[0]))
                                            <li class="menu-item-has-children">
                                                <a href="#">{{ @$nav->name ?? @$nav->title }}</a>
                                                <ul class="list-gap sub-menu-list">
                                                    @foreach($nav->children[0] as $childNav)
                                                        <li class="menu-item-has-inner-children"><a href="{{get_menu_url($childNav->type, $childNav)}}" target="{{@$childNav->target ? '_blank':''}}">
                                                                {{ @$childNav->name ?? @$childNav->title ??''}}</a>
                                                            @if(!empty($childNav->children[0]))
                                                                <ul class="list-gap inner-menu-list">
                                                                    @foreach($childNav->children[0] as $key => $lastchild)
                                                                        <li><a href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="sc-menu-select-box d-flex align-items-center justify-content-end">
                        <div class="sc-search-box sc-mr-20">
                            <a data-bs-target="#search-modal" data-bs-toggle="modal" href="#">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                        <div class="sc-hambagur-icon sc-mr-20">
                            <a id="canva_expander" href="#" class="nav-menu-link menu-button">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                            </a>
                        </div>
                        <div class="header-btn">
                            <a href="#"><i class="ri-search-line"></i></a>
                            <a class="sc-primary-btn" href="{{route('contact')}}">Get Consulting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--========== Header Section End ==============-->
