@extends('layout.mainLayout')
@section('content')

    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url({{asset('public/HeaderImage')}}/{{$project->headerImage}});">
        <div class="fly-header-content">
            <h1 id="projectTitle1" class="page-title" itemprop="title">{{$project->pName}}</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->

    <!-- Page -->
    <div class="page-wrapper page-sidebar"><!-- TODO: additional classes are: .page-sidebar, .page-sidebar-left, .page-narrow -->
        <div class="container">
            <div class="row">
                <!-- Content -->
                <main itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPageElement" class="content">
                    <!-- Project Details -->
                    <article class="fly-article-details" itemscope itemtype="http://schema.org/DonateAction" itemref="projectTitle1">
                        <div class="post-media">
                            <!-- Thumbnail Slider -->
                            <div class="thumbnail-slider clearfix" data-height="500">
                                <div class="slider-images-wrap">
                                    <ul class="slider-images">
                                        @foreach($projectImage as $image)
                                            <li>
                                                <img src="{{url('public/Gallery')}}/{{$image->projectPath}}" alt="" itemprop="image"/>

                                                <a class="swipebox" data-rel="gallery1" href="{{asset('public/images/current/thumb_img_1.png')}}" title="Image Title"></a>

                                                <div class="description">
                                                    <h4 class="title"><span>Image Title</span></h4>
                                                    <div class="subtitle"><span>Write here Your image description</span></div>
                                                    <a href="#" class="description-close material-icons">close</a>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <a href="#" class="prev material-icons js-wave">keyboard_arrow_left</a>
                                    <a href="#" class="next material-icons js-wave">keyboard_arrow_right</a>
                                </div>

                                <div class="slider-thumbs-wrap">
                                    <ul class="slider-thumbs">
                                        @foreach($projectImage as $image)
                                            <li style="background-image: url({{url('public/Gallery')}}/{{$image->projectPath}})"></li>
                                        @endforeach
                                    </ul>
                                    <a href="#" class="prev material-icons js-wave">keyboard_arrow_up</a>
                                    <a href="#" class="next material-icons js-wave">keyboard_arrow_down</a>
                                </div>

                                <a class="description-open material-icons active" href="#">info_outline</a>
                            </div>
                            <!--/ Thumbnail Slider -->
                        </div>

                        <!-- Project Stats -->
                        <div class="fly-card fly-project fly-flip-effect vertical">
                            <div class="boxed flip-front">
                                <div class="project-content">
                                    <input type="hidden" name="projectId" id="projectId" value="{{$project->projectId}}">
                                    <h4 class="project-title">{{$project->pName}}</h4>

                                    <div class="project-location">
                                        <div class="label">Location:</div>

                                        <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>{{$project->pLocation}}</a>
                                    </div>

                                    <div class="project-description" itemprop="description">
                                        <p>
                                            {!! $project->pName !!}
                                        </p>
                                    </div>

                                    <div class="project-footer">
                                        <ul class="project-stats">
                                            <li>
                                                <div class="label">raised</div>
                                                <div class="value" data-raised="{{$project->pRaised}}"><sup>$</sup>{{$project->pRaised}}</div>
                                            </li>
                                            <li>
                                                <div class="label">goal</div>
                                                <div class="value" data-goal="{{$project->pGoal}}" itemprop="target"><sup>$</sup>{{$project->pGoal}}</div>
                                            </li>
                                        </ul>

                                        <div class="progress">
                                            <span class="progress-label">0%</span>
                                            <span class="progress-bar"></span>
                                        </div>

                                        <div class="project-buttons">
                                            <a href="#donateForm" class="btn btn-yellow js-wave anchor" itemprop="potentialAction">Donate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="boxed flip-back">
                                <div class="card-map" data-placeholder="waiting for map">
                                    <div class="google-map"
                                         data-map-zoom="14"
                                         data-map-type="roadmap"
                                         data-map-style="onehope"
                                         data-map-address="1998 Hulman Blvd, Speedway, IN, 46222"
                                         data-map-marker="{{asset('public/images/marker.png')}}"
                                         data-map-marker-size="[31,46]"
                                         data-map-marker-anchor="[16,46]">
                                        <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Project Stats -->

                    <!--

                        <div class="post-content">
                            <p class="first-letter">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam  erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                                est Lorem ipsum  dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod temport.
                            </p>

                            <blockquote>
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat.
                                <span>John Doe</span>
                            </blockquote>

                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            </p>

                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</li>
                                <li>At vero eos et accusam et justo duo dolores et ea rebum</li>
                                <li>Deirmod tempor invidunt ut labore et dolore magna aliquyam</li>
                                <li>Nonummy nibh euismod tincidunt ut laoreet dolore magna</li>
                            </ul>

                            <ol>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</li>
                                <li>At vero eos et accusam et justo duo dolores et ea rebum</li>
                                <li>Deirmod tempor invidunt ut labore et dolore magna aliquyam</li>
                                <li>Nonummy nibh euismod tincidunt ut laoreet dolore magna</li>
                            </ol>

                            <dl>
                                <dt>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</dt>
                                <dd>At vero eos et accusam et justo duo dolores et ea rebum</dd>
                                <dt>Deirmod tempor invidunt ut labore et dolore magna aliquyam</dt>
                                <dd>Nonummy nibh euismod tincidunt ut laoreet dolore magna</dd>
                            </dl>

                            <p>
                                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et
                                nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua.
                                est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat.
                            </p>

                            <img src="{{asset('public/images/temp/slide-5.jpg')}}" alt="" />
                            <p class="wp-caption-text">This is an image description.</p>

                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            </p>

                            <p>
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            </p>
                        </div>
-->


                        <!-- Post Social Buttons -->
                        <ul class="post-social clearfix">
                            <li><a href="#" class="fa fa-facebook js-wave"></a></li>
                            <li><a href="#" class="fa fa-twitter js-wave"></a></li>
                            <li><a href="#" class="fa fa-instagram js-wave"></a></li>
                            <li><a href="#" class="fa fa-google js-wave"></a></li>
                        </ul>
                        <!--/ Post Social Buttons -->
                    </article>
                    <!--/ Project Details -->

                    <!-- Donation Form -->
                @include('layout.payment')
                <!--/ Donation Form -->
                </main>
                <!--/ Content -->

                <!-- SideBar -->
            @include('include.sidebar')
            <!--/ SideBar -->
            </div>
        </div>
    </div>
    <!--/ Page -->
@endsection