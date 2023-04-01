<div class="sc-blog-widget-inner">
    @if(!empty($latestServices))
        <div class="sc-blog-post sc-mb-30">
            <div class="sc-blog-title sc-mb-20">
                <h5 class="title"><i class="icon-line"></i> Recent Services</h5>
            </div>
            @foreach($latestServices as $index => $latest)
                <div class="sc-post-auother d-flex align-items-center">
                    <div class="sc-auother-image sc-mr-20">
                        <a href="{{route('service.single',$latest->slug)}}">
                            <img style="width: 90px;height: 90px;"
                                 src="{{ ($latest->banner_image !== null) ? asset('/images/service/thumb/thumb_'.@$latest->banner_image):""}}" />
                        </a>
                    </div>
                    <div class="auother-text">
                        <span class="date"><i class="icon-calender"></i>
                             {{date('j M, Y',strtotime(@$latest->created_at))}}
                        </span>
                        <h5>
                            <a class="title" href="{{route('service.single',$latest->slug)}}">
                                {{{ucwords(@$latest->title)}}}</a>
                        </h5>
                    </div>
                </div>
            @endforeach

        </div>
    @endif
</div>
