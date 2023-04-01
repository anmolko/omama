
@extends('frontend.layouts.master')
@section('title') Contact Us @endsection
@section('css')
    <style>

</style>
@endsection
@section('content')

    <div class="page__banner" data-background="{{asset('assets/frontend/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Contact</span>
                        <ul>
                            <li><a href="/">Home</a><span>|</span></li>
                            <li>Contact us</li>
                        </ul>
                        <h1>Send us a message</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact__two section-padding pb-0">
        <div class="container">
            <div class="row contact__two-box">
                <div class="col-xl-4 col-lg-5 lg-mb-30">
                    <div class="contact__two-left">
                        <h3>Contact Us</h3>
                        <div class="contact__two-left-item mt-3">
                            <div class="contact__two-left-item-icon">
                                <img src="{{asset('assets/frontend/img/icon/call.png')}}" alt="">
                            </div>
                            <div class="contact__two-left-item-info">
                                <span>Tell With US</span>
                                <p><a href="tel:{{@$setting_data->phone ?? @$setting_data->mobile ?? '' }}">{{@$setting_data->phone ?? @$setting_data->mobile ?? '' }}</a></p>
                            </div>
                        </div>
                        <div class="contact__two-left-item">
                            <div class="contact__two-left-item-icon">
                                <img src="{{asset('assets/frontend/img/icon/email.png')}}" alt="">
                            </div>
                            <div class="contact__two-left-item-info">
                                <span>Quick Email</span>
                                <p><a href="mailto:{{@$setting_data->email}}">{{@$setting_data->email}}</a></p>
                            </div>
                        </div>
                        <div class="contact__two-left-item">
                            <div class="contact__two-left-item-icon">
                                <img src="{{asset('assets/frontend/img/icon/locations.png')}}" alt="">
                            </div>
                            <div class="contact__two-left-item-info">
                                <span>Office Address</span>
                                <p><a href="#">{{@$setting_data->address ?? ''}}</a></p>
                            </div>
                        </div>
                        <div class="contact__two-left-item-socialIcon">
                            <h6>Follow  Us</h6>
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
                <div class="col-xl-8 col-lg-7">
                    <div class="contact__two-right">
                        <h3>Get In Touch</h3>
                        <span id="msgSubmit"></span>
                        <div class="contact__two-right-form mt-3">
                            <form id="contactForm" action="{{route('contact.store')}}" name="contactForm" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="fal fa-user"></span>
                                            <input type="text" name="name" id="name" placeholder="Full Name *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6 md-mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-envelope-open"></span>
                                            <input type="email" name="email" id="email" placeholder="Email Address *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12 md-mb-30 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-phone"></span>
                                            <input type="text" name="phone" id="phone" placeholder="Phone Number *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="fal fa-book"></span>
                                            <input type="text" name="subject" id="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-comments"></span>
                                            <textarea name="message" id="message" placeholder="Message *" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact__two-right-form-item">
                                            <button class="btn-one" type="submit">Submit Message <i class="far fa-chevron-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->
    @if(@$setting_data->google_map)
        <div class="contact__two-map">
            <iframe src="{{@$setting_data->google_map}}" loading="lazy"></iframe>
        </div>
    @endif

@endsection
@section('js')
  <!-- For Contact Form -->
  <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/contact-form-script.js')}}"></script>
@endsection
