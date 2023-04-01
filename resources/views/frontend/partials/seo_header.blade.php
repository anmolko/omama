<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Omama Manpower Pvt Ltd">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="canonical" href="https://lifeinternationaloversea.com/" />

    @yield('seo')


    <link rel="icon" type="image/png" href="{{asset('assets/frontend/img/favicon-1.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/swiper-bundle.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/meanmenu.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/sass/style.css')}}">

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
    <!-- Dark Light Start -->
    <div class="switch__tab">
        <span class="switch__tab-btn active light-mode-title">Light</span>
        <span class="mode__switch" onclick="darkLight()"><span></span></span>
        <span class="switch__tab-btn dark-mode-title">Dark</span>
    </div>
    <!-- Dark Light End -->
    <!-- Top Bar Start -->
    <div class="top__bar">
        <div class="container custom__container">
            <div class="row">
                <div class="col-xl-5 col-md-6">
                    <div class="top__bar-left">
                        <a href="#"><i class="far fa-map-marker-alt"></i>{{$setting_data->address ?? ''}}</a>
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="top__bar-right">
                        <a href="{{$setting_data->email ?? ''}}"><i class="fas fa-envelope"></i>{{$setting_data->email ?? ''}}</a>
                        <div class="top__bar-right-social">
                            <ul>
                                @if(@$setting_data->facebook)
                                    <li><a href="{{@$setting_data->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                @if(@$setting_data->youtube)
                                    <li><a href="{{@$setting_data->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                @endif
                                @if(@$setting_data->instagram)
                                    <li><a href="{{@$setting_data->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                @endif
                                @if(@$setting_data->linkedin)
                                    <li><a href="{{@$setting_data->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- Header Area Start -->
    <div class="header__area header__sticky">
        <div class="container custom__container">
            <div class="header__area-menubar">
                <div class="header__area-menubar-left">
                    <div class="header__area-menubar-left-logo">
                        <a href="/"><img class="dark-n" src="{{asset('/images/settings/'.@$setting_data->logo)}}" alt=""><img class="light-n" src="{{asset('/images/settings/'.@$setting_data->logo_white)}}" alt=""></a>
                    </div>
                </div>
                <div class="header__area-menubar-center">
                    <div class="header__area-menubar-center-menu menu-responsive">
                        <ul id="mobilemenu">
                            <li class="menu-item"><a href="/">Home</a></li>
                            @if(!empty($top_nav_data))
                                @foreach($top_nav_data as $nav)
                                    @if(!empty($nav->children[0]))
                                        <li class="menu-item-has-children">
                                            <a>{{ @$nav->name ?? @$nav->title }}</a>
                                            <ul class="sub-menu">
                                                @foreach($nav->children[0] as $childNav)
                                                    <li class="{{ !empty($childNav->children[0]) ? 'menu-item-has-children':'' }}">
                                                        <a href="{{get_menu_url($childNav->type, $childNav)}}" target="{{@$childNav->target ? '_blank':''}}">
                                                            {{ @$childNav->name ?? @$childNav->title ??''}}</a>
                                                        @if(!empty($childNav->children[0]))
                                                            <ul class="sub-menu">
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
                                        <li class="menu-item">
                                            <a href="{{get_menu_url($nav->type, $nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                {{ @$nav->name ?? @$nav->title ??''}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="header__area-menubar-right">
                    <div class="header__area-menubar-right-box">
                        <div class="header__area-menubar-right-box-search">
                            <div class="search">
                                <span class="header__area-menubar-right-box-search-icon open"><i class="fal fa-search"></i></span>
                            </div>
                            <div class="header__area-menubar-right-box-search-box">
                                <form method="get" id="searchform" action="{{route('searchJob')}}">
                                    <input  id="s" name="s" type="text"  placeholder="Find Jobs here.." oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
                                    <button type="submit"><i class="fal fa-search"></i>
                                    </button>
                                </form> <span class="header__area-menubar-right-box-search-box-icon"><i class="fal fa-times"></i></span>
                            </div>
                        </div>
                        <div class="header__area-menubar-right-sidebar">
                            <div class="header__area-menubar-right-sidebar-popup-icon"><img src="{{asset('assets/frontend/img/icon/menu.png')}}" alt=""></div>
                        </div>
                        <div class="header__area-menubar-right-box-btn">
                            <a class="btn-one" href="{{route('contact')}}">Reach out<i class="far fa-chevron-double-right"></i></a>
                        </div>
                        <!-- sidebar Menu Start -->
                        <div class="header__area-menubar-right-sidebar-popup">
                            <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                            <div class="header__area-menubar-right-sidebar-popup-logo">
                                <a href="/"> <img src="{{asset('/images/settings/'.@$setting_data->logo_white)}}" alt=""> </a>
                            </div>
                            <p> {!! ucfirst(@$setting_data->website_description ?? 'Welcome to Omama Manpower Pvt Ltd') !!}</p>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact">
                                <h4 class="mb-30">Get In Touch</h4>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                        <i class="fal fa-phone-alt icon-animation"></i>
                                    </div>
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                        <span>Call</span>
                                        <h6><a href="tel:{{@$setting_data->phone ?? ''}}">{{@$setting_data->phone ?? ''}}</a></h6>
                                    </div>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                        <span>Email</span>
                                        <h6><a href="mailto:{{$setting_data->email ?? ''}}">{{$setting_data->email ?? ''}}</a></h6>
                                    </div>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                        <span>Address</span>
                                        <h6><a href="/">{{@$setting_data->address}}</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-social">
                                <ul>
                                    @if(@$setting_data->facebook)
                                        <li><a href="{{@$setting_data->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if(@$setting_data->youtube)
                                        <li><a href="{{@$setting_data->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                    @endif
                                    @if(@$setting_data->instagram)
                                        <li><a href="{{@$setting_data->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                    @if(@$setting_data->linkedin)
                                        <li><a href="{{@$setting_data->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-overlay"></div>
                        <!-- sidebar Menu Start -->
                    </div>
                    <div class="responsive-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Area End -->
    <!-- Banner Area Start -->
