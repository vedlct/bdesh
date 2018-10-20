<!-- SideBar -->
<aside class="sidebar sidebar-sticky" itemscope itemtype="http://schema.org/WPSideBar">
    <!-- Widget Text -->
    <div class="widget-sidebar widget_text">
        <h4 class="widget-title">Cause information</h4>

<!--
        <div class="textwidget">
            <p><strong>Where:</strong> South Africa, Capetown</p>
            <p><strong>How to spend:</strong> Online Payments, Credit Card</p>
            <p><strong>Category:</strong> Spending Water</p>
            <p><strong>Donations:</strong> money only</p>
        </div>
-->
    </div>
    <!--/ Widget Text -->

    <!-- Widget Recent Posts -->
    <div class="widget-sidebar widget-posts">
        <h4 class="widget-title">Recent posts</h4>

        <!-- Post -->
<!--
        <article class="fly-article clearfix" itemscope itemtype="http://schema.org/Article">
            <a class="post-media js-wave" href="blog-details.html"><img src="{{asset('public/images/temp/post-4.jpg')}}" alt="" itemprop="image" /></a>

            <div class="post-content" itemprop="articleBody">
                <h3 class="post-title"><a href="#" itemprop="name">Ut wisi enim ad minim venia quis nostrud exerci tation lorem ipsum dolor...</a></h3>

                <div class="post-meta">
                    <time class="post-date" datetime="2016-03-31T20:04:09" itemprop="dateCreated">Dec 31, 2016</time>
                </div>
            </div>
        </article>
-->
        <!--/ Post -->

        <!-- Post -->
<!--
        <article class="fly-article clearfix" itemscope itemtype="http://schema.org/Article">
            <a class="post-media js-wave" href="blog-details.html"><img src="{{asset('public/images/temp/post-5.jpg')}}" alt="" itemprop="image" /></a>

            <div class="post-content" itemprop="articleBody">
                <h3 class="post-title"><a href="#" itemprop="name">Ut wisi enim ad minim venia quis nostrud exerci tation lorem ipsum dolor...</a></h3>

                <div class="post-meta">
                    <time class="post-date" datetime="2016-03-31T20:04:09" itemprop="dateCreated">Dec 31, 2016</time>
                </div>
            </div>
        </article>
-->
        <!--/ Post -->

        <!-- Post -->
<!--
        <article class="fly-article clearfix" itemscope itemtype="http://schema.org/Article">
            <a class="post-media js-wave" href="blog-details.html"><img src="{{asset('public/images/temp/post-6.jpg')}}" alt="" itemprop="image" /></a>

            <div class="post-content" itemprop="articleBody">
                <h3 class="post-title"><a href="#" itemprop="name">Ut wisi enim ad minim venia quis nostrud exerci tation lorem ipsum dolor...</a></h3>

                <div class="post-meta">
                    <time class="post-date" datetime="2016-03-31T20:04:09" itemprop="dateCreated">Dec 31, 2016</time>
                </div>
            </div>
        </article>
-->
        <!--/ Post -->
    </div>
    <!--/ Widget Recent Posts -->

    <!-- Widget Gallery -->
    <div class="widget-sidebar widget-gallery">
        <h4 class="widget-title">Gallery</h4>

        <ul>
            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-1.jpg')}}" alt=""/></a></li>
            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-2.jpg')}}" alt=""/></a></li>
            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-3.jpg')}}" alt=""/></a></li>
            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-4.jpg')}}" alt=""/></a></li>
            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-5.jpg')}}" alt=""/></a></li>
            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-6.jpg')}}" alt=""/></a></li>
        </ul>
    </div>
    <!--/ Widget Gallery -->

    <!-- Widget Facebook -->
    <div class="widget-sidebar widget-facebook">
        <h4 class="widget-title">Facebook</h4>

        <img src="{{asset('public/images/temp/facebook-dummy.jpg')}}" alt=""/>
    </div>
    <!--/ Widget Facebook -->
</aside>
<!--/ SideBar -->

@if(Session::has('SuccessMessage'))
    <p class="alert alert-success">{{ Session::get('SuccessMessage') }}</p>
@endif
@if(Session::has('ErrorMessage'))
    <p class="alert alert-danger">{{ Session::get('ErrorMessage') }}</p>
@endif