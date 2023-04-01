@extends('frontend.layouts.master')
@section('title') Clients @endsection
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
                        <div class="sc-slider-subtitle">Home - Clients</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Clients</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sc-team-pages-area sc-pt-100 sc-md-pt-75 sc-pb-160 sc-md-pb-90">
        <div class="container">
            <div class="row">
                @foreach(@$clients as $client)
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="sc-team-pages-content-box text-center sc-mb-40">
                            <div class="sc-page-item">
                                <a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}"
                                ><img src="{{asset('/images/clients/'.@$client->image)}}" alt="Teem"
                                    /></a>
                                <div class="sc-slider-text">
                                    <h4>
                                        <a class="title" href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}">
                                            {{@$client->name ?? ''}}</a>
                                    </h4>
                                    <span class="sub-title">{{ get_country($client->country) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('js')
@endsection
