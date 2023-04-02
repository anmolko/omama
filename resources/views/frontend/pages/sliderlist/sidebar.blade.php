<div class="sc-blog-widget-inner">
    @if(!empty($slider_lists))
        <div class="sc-blog-post sc-mb-30">
            <div class="sc-blog-title sc-mb-20">
                <h5 class="title"><i class="icon-line"></i> Recent List </h5>
            </div>
            @foreach($slider_lists as $index => $latest)
                <div class="sc-post-auother d-flex align-items-center">
                    <div class="sc-auother-image sc-mr-20">
                        <a href="{{url('/slider-list/'.$latest->subheading)}}">
                            <img style="width: 90px;height: 90px;"
                                 src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.$latest->list_image) }}" />
                        </a>
                    </div>
                    <div class="auother-text">
                        <span class="date"><i class="icon-calender"></i>
                            {{date('j M, Y',strtotime(@$latest->created_at))}}
                        </span>
                        <h5>
                            <a class="title" href="{{url('/slider-list/'.$latest->subheading)}}">
                                {{{ucwords(@$latest->list_header)}}}</a>
                        </h5>
                    </div>
                </div>
            @endforeach

        </div>
    @endif
</div>
