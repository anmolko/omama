@extends('frontend.layouts.master')
@section('title') Team @endsection
@section('css')
    <style>
        .team-member:after{
            height: 340px;
        }
    </style>
@endsection
@section('content')

    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Teams</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Our Teams</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sc-team-pages-area sc-pt-100 sc-md-pt-75 sc-pb-160 sc-md-pb-90">
        <div class="container">
            @if(count($teams) > 0)
                @php $i=2; @endphp
                <div class="row">
                    @foreach($teams as $team)
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="{{ ($i+1)*100}}">
                            <div class="sc-team-item text-center">
                                <div class="item-img">
                                    <div class="team-image">
                                        <a
                                        ><img src="{{ ($team->image!==null) ? asset('/images/teams/'.$team->image ):asset('assets/backend/images/users/user-dummy-img.jpg')}}" alt="Team"
                                            /></a>
                                    </div>
                                    @if(!empty(@$team->fb) || !empty(@$team->twitter) || !empty(@$team->linkedin) || !empty(@$team->insta))
                                        <ul class="team-social-1 list-gap">
                                        <li class="social-item">
                                            <a href="#" class="social-hover-icon social-link"
                                            ><i class="icon-share"></i
                                                ></a>
                                                <ul class="list-gap team-social-dropdown">
                                                @if(!empty(@$team->fb))
                                                    <li class="social-item social-item1">
                                                        <a href="{{@$team->fb}}" target="{{@$team->fb ? '_blank':''}}" class="social-link">
                                                            <i class="icon-facebook-2"></i>
                                                        </a>
                                                    </li>
                                                @endif
                                                @if(!empty(@$team->twitter))
                                                        <li class="social-item social-item1">
                                                            <a href="{{@$team->twitter}}" target="{{@$team->twitter ? '_blank':''}}" class="social-link">
                                                                <i class="icon-twiter"></i>
                                                            </a>
                                                        </li>
                                                @endif
                                                @if(!empty(@$team->linkedin))
                                                        <li class="social-item social-item1">
                                                            <a href="{{@$team->linkedin}}" target="{{@$team->linkedin ? '_blank':''}}" class="social-link">
                                                                <i class="icon-linkedin-2"></i>
                                                            </a>
                                                        </li>
                                                @endif
                                                @if(!empty(@$team->insta))
                                                        <li class="social-item social-item1">
                                                            <a href="{{@$team->insta}}" target="{{@$team->insta ? '_blank':''}}" class="social-link">
                                                                <i class="icon-intragram"></i>
                                                            </a>
                                                        </li>
                                                @endif
                                            </ul>

                                        </li>
                                    </ul>
                                    @endif
                                    <div class="sc-team-content">
                                        <h4><a class="title">{{ucfirst(@$team->name)}}</a></h4>
                                        <span>{{ucfirst(@$team->post)}}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @php $i++ @endphp
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
@section('js')
@endsection
