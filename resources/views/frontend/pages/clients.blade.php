@extends('frontend.layouts.master')
@section('title') Clients @endsection
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
                        <span>Valuable</span>
                        <ul>
                            <li><a href="/">Home</a><span>|</span></li>
                            <li>List</li>
                        </ul>
                        <h1>Clients</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team__three section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mb-30">
                    <div class="conbix__filter-button">
                        <button class="active" data-filter="*">All</button>
                        @foreach($country as $key=>$value)
                            <button data-filter=".{{$key}}">{{$value}}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row conbix__filter-active">
                @foreach(@$clients as $client)
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30 {{$client->country}}">
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
    <!-- Page Banner End -->




@endsection
@section('js')
@endsection
