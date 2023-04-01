<div class="sc-blog-widget-inner">
    <form method="get" id="searchform" action="{{route('searchBlog')}}">
        <div class="sc-searchbar-area sc-mb-30 p-z-idex d-flex align-items-center justify-content-end">
            <div class="input-field">
                <input
                    type="text"
                    id="s"
                    name="s"
                    placeholder="Search Blogs....."
                    oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required
                />
            </div>
            <div class="sc-submit sc-primary-btn">
                <i class="icon-search"></i>
                <input type="submit" id="search" />
            </div>
        </div>
    </form>
    <div class="sc-blog-category sc-mb-30">
        @if(!empty($bcategories))
            <div class="sc-blog-title sc-mb-25">
                <h5 class="title"><i class="icon-line"></i> Blog Category</h5>
            </div>
            <div class="category-list">
                 <ul class="list-gap">
                        @foreach(@$bcategories as $bcategory)
                            <li>
                                <a href="{{route('blog.category',$bcategory->slug)}}">
                                    {{ucwords(@$bcategory->name)}} ({{$bcategory->blogs->count()}})<span><i class="icon-angle_right"></i>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
            </div>
        @endif
    </div>
    @if(!empty($latestPosts))
        <div class="sc-blog-post sc-mb-30">
            <div class="sc-blog-title sc-mb-20">
                <h5 class="title"><i class="icon-line"></i> Recent Post</h5>
            </div>
            @foreach($latestPosts as $index => $latest)
                <div class="sc-post-auother d-flex align-items-center">
                    <div class="sc-auother-image sc-mr-20">
                        <a href="#"><img src="{{(@$latest->image) ? asset('/images/blog/thumb/thumb_'.@$latest->image):''}}" /></a>
                    </div>
                    <div class="auother-text">
                        <span class="date"><i class="icon-calender"></i>{{date('j M, Y',strtotime(@$latest->created_at))}}</span>
                        <h5>
                            <a class="title" href="{{route('blog.single',@$latest->slug)}}">{{ucwords(@$latest->title)}}</a>
                        </h5>
                    </div>
                </div>
            @endforeach

        </div>
    @endif
</div>
