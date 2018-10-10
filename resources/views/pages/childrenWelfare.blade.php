@extends('layout.mainLayout')

@section('content')
    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url({{asset('public/images/current/Childwelfaret-small-Banner.jpg')}});">
        <div class="fly-header-content">
            <h1 id="projectTitle1" class="page-title" itemprop="title">Children Welfare Program</h1>
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
                                        <li>
                                            <img src="{{url('public/images/current/Childwelfaret-small-Banner-300x200.jpg')}}" alt="" itemprop="image"/>

                                            <a class="swipebox" data-rel="gallery1" href="{{url('public/images/current/Childwelfaret-small-Banner-300x200.jpg')}}" title="Image Title"></a>

                                            <div class="description">
                                                <h4 class="title"><span>Image Title</span></h4>
                                                <div class="subtitle"><span>Write here Your image description</span></div>
                                                <a href="#" class="description-close material-icons">close</a>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{url('public/images/temp/project-2.jpg')}}" alt="" itemprop="image"/>

                                            <a class="swipebox" data-rel="gallery1" href="{{url('public/images/temp/project-2.jpg')}}" title="Image Title"></a>

                                            <div class="description bottom">
                                                <h4 class="title"><span>Image Title</span></h4>
                                                <div class="subtitle"><span>Write here Your image description</span></div>
                                                <a href="#" class="description-close material-icons">close</a>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="images/temp/project-3.jpg" alt="" itemprop="image"/>

                                            <a class="swipebox" data-rel="gallery1" href="{{url('public/images/temp/project-3.jpg')}}" title="Image Title"></a>

                                            <div class="description top-right">
                                                <h4 class="title"><span>Image Title</span></h4>
                                                <div class="subtitle"><span>Write here Your image description</span></div>
                                                <a href="#" class="description-close material-icons">close</a>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{url('public/images/temp/project-4.jpg')}}" alt="" itemprop="image"/>

                                            <a class="swipebox" data-rel="gallery1" href="{{url('public/images/temp/project-4.jpg')}}" title="Image Title"></a>

                                            <div class="description bottom-right">
                                                <h4 class="title"><span>Image Title</span></h4>
                                                <div class="subtitle"><span>Write here Your image description</span></div>
                                                <a href="#" class="description-close material-icons">close</a>
                                            </div>
                                        </li>
                                    </ul>

                                    <a href="#" class="prev material-icons js-wave">keyboard_arrow_left</a>
                                    <a href="#" class="next material-icons js-wave">keyboard_arrow_right</a>
                                </div>

                                <div class="slider-thumbs-wrap">
                                    <ul class="slider-thumbs">
                                        <li style="background-image: url({{url('public/images/temp/project-1.jpg')}})"></li>
                                        <li style="background-image: url({{url('public/images/temp/project-2.jpg')}})"></li>
                                        <li style="background-image: url({{url('public/images/temp/project-3.jpg')}})"></li>
                                        <li style="background-image: url({{url('public/images/temp/project-4.jpg')}})"></li>
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
                                    <h4 class="project-title">Children Welfare</h4>

                                    <div class="project-location">
                                        <div class="label">Location:</div>

                                        <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
                                    </div>

                                    <div class="project-description" itemprop="description">
                                        <p>
                                            Today's children are leaders of tomorrow. Unfortunately, the socio-economic environment plays a significant role in children growth and their development as future leaders. Our mission is to create a lasting, positive change in the lives of children in need around the world.
                                        </p>
                                    </div>

                                    <div class="project-footer">
                                        <ul class="project-stats">
                                            <li>
                                                <div class="label">raised</div>
                                                <div class="value" data-raised="12731"><sup>$</sup>12,731</div>
                                            </li>
                                            <li>
                                                <div class="label">goal</div>
                                                <div class="value" data-goal="22500" itemprop="target"><sup>$</sup>22,500</div>
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
                                         data-map-marker="{{url('public/images/marker.png')}}"
                                         data-map-marker-size="[31,46]"
                                         data-map-marker-anchor="[16,46]">
                                        <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Project Stats -->

                        <!-- Post Content -->
                        <div class="post-content">
                            <p class="first-letter">
                                It is hard to imagine that a new born baby will be abandoned by parent soon after the birth. Unfortunately, it is a reality for some children in Bangladesh. Some newborn babies are helplessly left out in hospitals, clinics and even on the street.
                            </p>



                            <p>
                                Indeed, millions of children are orphaned in Bangladesh and around the world. These children need your help and love for a healthy growing environment. B Desh Foundation recognizes that life is a gift from almighty Allah (swt) and every human being has the right to live a dignified and happy life.
                            </p>


                            <img src="images/current/chld-welfair1.jpg" alt="" />


                            <p>
                                BDesh Foundation goal is to ensure that children in need grow up protected, educated, healthy, well-nourished, and able to thrive in an economically secure environment. With your help, many of these children could be saved from working as child labor and receive an opportunity to grow up in a healthy environment. B Desh Foundation delivers your donations directly to the effected children,, helping them afford necessities like food, shelter, healthcare, clothing and education.
                            </p>

                            <img src="images/current/Chld-wellfair-baby.jpg" alt="" />

                            <p>
                                Some Statistics of Child education in Bangladesh
                            </p>

                            <p>
                                There are 20 million children of primary school age in Bangladesh <br>

                                <br>   Of those, <br>

                                16.1 million are enrolled in primary school.<br>

                                <br>   Of those <br>

                                Only 10 million attend regularly.<br>

                                <br> Of those <br>

                                Only 5 million will achieve basic literacy and numeracy by the age of 10. <br> <br>

                                Preschool builds the foundation for a lifetime of achievement. <br>

                                Bdesh Foundation is investing in early education of a child, because Bdesh Foundation believes; <br>

                                When you are helping a child, you are helping a Nation!!
                            </p>



                        </div>
                        <!--/ Post Content -->

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