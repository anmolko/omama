
@extends('frontend.layouts.master')
@section('title') Contact Us @endsection
@section('css')
    <style>

</style>
@endsection
@section('content')
    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Contact</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="sc-contact-section sc-pt-100 sc-md-pt-70 sc-pb-80 sc-md-pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sc-heading-area sc-pr-30 sc-pt-5">
                        <span class="sub-title"><i class="icon-line"></i> Reach Contact</span>
                        <h2 class="title">
                            For any <span class="primary-color italic">questions</span> and concerns
                        </h2>
                    </div>
                    <div class="sc-contact-info sc-mt-35 sc-mb-20">
                        <ul class="list-gap white-color">
                            <li><i class="icon-phone-2"></i><a href="tel:{{@$setting_data->phone ?? @$setting_data->mobile ?? '' }}"> {{@$setting_data->phone ?? @$setting_data->mobile ?? '' }}</a></li>
                            <li>
                                <i class="icon-gap_2"></i>
                                <a href="mailto:{{@$setting_data->email}}"> {{@$setting_data->email}}</a>
                            </li>
                            <li>
                                <i class="icon-mail2"></i
                                ><a href="mailto:{{@$setting_data->email}}">{{@$setting_data->address ?? ''}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sc-chat-box">
                        <h4 class="contact-title sc-pb-15">Follow us</h4>
                        <ul class="about-icon contact-form-social">
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
                <div class="col-lg-8">
                    <div class="contact-box sc-md-mb-10 sc-md-mt-45">
                        <h4 class="contact-title sc-pb-15">Get in Touch</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-box">
                                    <input
                                        class="from-control"
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Full name *"
                                        required=""
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input
                                    class="from-control"
                                    type="email"
                                    id="address"
                                    name="email"
                                    placeholder="Your email *"
                                    required=""
                                />
                            </div>
                            <div class="col-md-6">
                                <div class="form-box">
                                    <input
                                        class="from-control"
                                        type="text"
                                        id="phone"
                                        name="phone"
                                        placeholder="Your phone"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input
                                    class="from-control"
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    placeholder="Subject"
                                />
                            </div>
                            <div class="form-box">
                                <textarea id="message" name="message" placeholder="Write your message"></textarea>
                            </div>
                        </div>
                        <div class="submit-button sc-primary-btn">
                            <input type="submit" value="Send Message"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(@$setting_data->google_map)

        <div class="sc-google-map">
        <div class="sc-gray-icon"><i class="icon-gap_2"></i></div>
        <iframe
            height="750"
            src="{{@$setting_data->google_map}}"
        ></iframe>
    </div>
    @endif
@endsection
@section('js')
  <!-- For Contact Form -->
  <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/contact-form-script.js')}}"></script>
@endsection
