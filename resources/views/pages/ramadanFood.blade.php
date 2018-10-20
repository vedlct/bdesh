@extends('layout.mainLayout')

@section('content')
    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url({{url('public/images/current/Ramadhanfood-small-Banner212.jpg')}}); background-position: contain;">
        <div class="fly-header-content">
            <h1 id="projectTitle1" class="page-title" itemprop="title">Ramadan Food Basket</h1>
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
                                            <img src="{{url('public/images/temp/project-1.jpg')}}" alt="" itemprop="image"/>

                                            <a class="swipebox" data-rel="gallery1" href="{{url('public/images/temp/project-1.jpg')}}" title="Image Title"></a>

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
                                            <img src="images/temp/project-4.jpg" alt="" itemprop="image"/>

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
                                    <h4 class="project-title">Ramadan Food</h4>

                                    <div class="project-location">
                                        <div class="label">Location:</div>

                                        <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Bangladesh</a>
                                    </div>

                                    <div class="project-description" itemprop="description">
                                        <p>
                                            In the blessed month of Ramadan Bdesh foundation shares the joy and blessing with the fellow brothers and sisters in Islam by providing food to the needy families.
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
                                Bdesh foundation has launched this program in Bangladesh last year and Alhamdulillah !! this program was able to reach around 1500 needy families last year. Each basket costs around $10 which is the same amount for the zakatul fitra in USA.
                            </p>



                            <p>
                                May Allah bring the joy to your family as you are bringing the joy to your fellow brothers and sisters in the blessed month. May Allah lift all your stress and burden as you are lifting the stress and burden of your fellow Muslim. May Allah grant all of us Jannatul Firdous. Ameen !!
                            </p>





                            <img src="{{url('public/images/current/ramadan1.jpg')}}" alt="" />


                            <p>
                                If you wish to donate toward this endeavor please send your donation (checks payable to: Bdesh Foundation Inc.): <br>

                                B Desh Foundation, Inc. <br>
                                6 Silo Mill CT. <br>
                                Sterling, VA 20164  <br>
                            </p>

                            <div class="table-responsive text-center table_single">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr> <th>No</th> <th>Item</th> <th>Unit Cost</th> <th>Quantity</th> <th>Total Cost</th> </tr>
                                    </thead>
                                    <tbody>
                                    <tr> <th scope="row">1</th> <td>Rice</td> <td>35c /KG</td> <td>15 KG</td> <td>$5.25</td></tr>
                                    <tr> <th scope="row">2</th> <td>Lentil</td> <td>$1.5/KG</td> <td>1 KG</td> <td>$1.50</td></tr>
                                    <tr> <th scope="row">3</th> <td>Shemai</td> <td>$2.0 /KG</td> <td>500 gm</td> <td>$1.00</td></tr>
                                    <tr> <th scope="row">4</th> <td>Sugar</td> <td>70c /KG</td> <td>500 gm</td> <td>$0.35</td></tr>
                                    <tr> <th scope="row">5</th> <td>Raisin</td> <td>22c</td> <td></td> <td>$0.22</td></tr>
                                    <tr> <th scope="row">6</th> <td>Spices</td> <td>15c</td> <td></td> <td>$0.15</td></tr>
                                    <tr> <th scope="row">7</th> <td>Coconut</td> <td>30c</td> <td></td> <td>$0.30</td></tr>
                                    <tr> <th scope="row">8</th> <td>Milk</td> <td>23c</td> <td>Pint</td> <td>$0.23</td></tr>
                                    <tr> <th scope="row">9</th> <td>Administrative</td> <td>$1.00</td> <td></td> <td>$1.00</td></tr>
                                    <tr> <th scope="row"></th> <td></td> <td></td> <td>Total</td><td>$10.00</td></tr>
                                    </tbody>
                                </table>
                            </div>


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