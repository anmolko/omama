<div class="sc-blog-widget-inner">
    <form method="get" id="searchform" action="{{route('searchJob')}}">
        <div class="sc-searchbar-area sc-mb-30 p-z-idex d-flex align-items-center justify-content-end">
            <div class="input-field">
                <input
                    type="text"
                    id="s"
                    name="s"
                    placeholder="Search Jobs....."
                    oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required
                />
            </div>
            <div class="sc-submit sc-primary-btn">
                <i class="icon-search"></i>
                <input type="submit" id="search" />
            </div>
        </div>
    </form>
    @if(!empty($latestJobs))
        <div class="sc-blog-post sc-mb-30">
            <div class="sc-blog-title sc-mb-20">
                <h5 class="title"><i class="icon-line"></i> Recent Post</h5>
            </div>
            @foreach($latestJobs as $index => $latest)
                <div class="sc-post-auother d-flex align-items-center">
                    <div class="sc-auother-image sc-mr-20">
                        <a href="{{route('job.single',@$latest->slug)}}">
                            <img style="    width: 90px;height: 90px;"
                                src="{{ ($latest->image !== null) ? asset('/images/job/thumb/thumb_'.@$latest->image): asset('assets/frontend/images/oamama_thumb.png')}}" />
                        </a>
                    </div>
                    <div class="auother-text">
                        <span class="date"><i class="icon-calender"></i>
                             @if(@$latest->end_date >= $today)
                                Expires on - {{date('M j, Y',strtotime(@$latest->end_date))}}
                            @else
                                Expired
                            @endif
                        </span>
                        <h5>
                            <a class="title" href="{{route('job.single',@$latest->slug)}}">{{ucwords(@$latest->name)}}</a>
                        </h5>
                    </div>
                </div>
            @endforeach

        </div>
    @endif
</div>
