<div class="all__sidebar">
    <div class="all__sidebar-item">
        <h4>Search</h4>
        <div class="all__sidebar-item-search">
            <form method="get" id="searchform" action="{{route('searchBlog')}}">
                <input id="s" name="s" type="text" placeholder="Search Blogs....." oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="all__sidebar-item">
        @if(!empty($bcategories))
            <h4>Our Categories</h4>
            <div class="all__sidebar-item-solution">
                <ul>
                    @foreach(@$bcategories as $bcategory)
                        <li><a href="{{  route('blog.category',$bcategory->slug)}}">
                                <i class="far fa-chevron-double-right"></i>
                                {{ucwords(@$bcategory->name)}}<span>({{$bcategory->blogs->count()}})</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="all__sidebar-item">
        @if(!empty($latestPosts))
            <h4>Recent Post</h4>
            <div class="all__sidebar-item-post">
                @foreach($latestPosts as $index => $latest)
                    <div class="post__item">
                        <div class="post__item-image">
                            <a href="{{route('blog.single',@$latest->slug)}}">
                                <img src="{{ (@$latest->image) ? asset('/images/blog/thumb/thumb_'.@$latest->image):''}}" alt="">
                            </a>
                        </div>
                        <div class="post__item-title">
                            <h6><a href="{{route('blog.single',@$latest->slug)}}">{{ucwords(@$latest->title)}}</a></h6>
                            <span><i class="far fa-calendar-alt"></i>{{date('j M, Y',strtotime(@$latest->created_at))}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
