<div class="all__sidebar">
    <div class="all__sidebar-item">
        @if(!empty($slider_lists))
            <h4>Our Services</h4>
            <div class="all__sidebar-item-post">
                @foreach($slider_lists as $index => $slider_list)
                    <div class="post__item">
                        <div class="post__item-image">
                            <a href="{{url('/slider-list/'.$slider_list->subheading)}}">
                                <img src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.$slider_list->list_image) }}" alt="">
                            </a>
                        </div>
                        <div class="post__item-title">
                            <h6><a href="{{url('/slider-list/'.$slider_list->subheading)}}">{{{ucwords(@$slider_list->list_header)}}}</a></h6>
                            <span><i class="far fa-calendar-alt"></i>
                                {{date('j M, Y',strtotime(@$slider_list->created_at))}}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
