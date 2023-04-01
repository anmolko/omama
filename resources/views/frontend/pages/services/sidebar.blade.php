
<div class="all__sidebar">
    <div class="all__sidebar-item">
        @if(!empty($latestServices))
            <h4>Our Services</h4>
            <div class="all__sidebar-item-post">
                @foreach($latestServices as $index => $latest)
                    <div class="post__item">
                        <div class="post__item-image">
                            <a href="{{route('service.single',$latest->slug)}}">
                                <img src="{{ ($latest->banner_image !== null) ? asset('/images/service/thumb/thumb_'.@$latest->banner_image):""}}" alt="">
                            </a>
                        </div>
                        <div class="post__item-title">
                            <h6><a href="{{route('service.single',$latest->slug)}}">{{{ucwords(@$latest->title)}}}</a></h6>
                            <span><i class="far fa-calendar-alt"></i>
                                {{date('j M, Y',strtotime(@$latest->created_at))}}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
