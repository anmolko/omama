<div class="all__sidebar">
    <div class="all__sidebar-item">
        <h4>Search</h4>
        <div class="all__sidebar-item-search">
            <form  method="get" id="searchform" action="{{route('searchJob')}}">
                <input  id="s" name="s" type="text"  placeholder="Search Jobs.." oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
                <button type="submit" class="searchbutton far fa-search"></button>
            </form>
        </div>
    </div>
    <div class="all__sidebar-item">
        @if(!empty($latestJobs))
            <h4>Recent Jobs</h4>
            <div class="all__sidebar-item-post">
                @foreach($latestJobs as $index => $latest)
                    <div class="post__item">
                        <div class="post__item-image">
                            <a href="{{route('job.single',@$latest->slug)}}">
                                <img src="{{ ($latest->image !== null) ? asset('/images/job/thumb/thumb_'.@$latest->image): asset('assets/frontend/images/win.png')}}" alt="">
                            </a>
                        </div>
                        <div class="post__item-title">
                            <h6><a href="{{route('job.single',@$latest->slug)}}">{{{ucwords(@$latest->name)}}}</a></h6>
                            <span><i class="far fa-calendar-alt"></i>
                                @if(@$latest->end_date >= $today)
                                    Expires on - {{date('M j, Y',strtotime(@$latest->end_date))}}
                                @else
                                    Expired
                                @endif
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>

