@extends('layout.mainLayout')
@section('content')

    <!-- Header Image or Video -->
<section class="fly-header parallax overlay" style="background-image: url({{url('public/images/events/BDeshFlyer_BANNER.jpg')}});background-size: contain;">
        <div class="fly-header-content">
            <div class="page-subtitle"></div>
            <h1 id="projectTitle1" class="page-title" itemprop="title"></h1>
        </div>
    </section>
    <!--/ Header Image or Video -->

    <!-- Page -->
    <div class="page-wrapper page-sidebar"><!-- TODO: additional classes are: .page-sidebar, .page-sidebar-left, .page-narrow -->
        <div class="container">
            <div class="row">
                <!-- Content -->
                <main itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPageElement" class="content">
                    <!-- Event Details -->
                    <article class="fly-article-details" itemscope itemtype="http://schema.org/DonateAction" itemref="projectTitle1">
                        <div class="post-media">
                            <div class="owl-carousel post-slider">
                                <a class="swipebox" data-rel="gallery1" href="{{asset('public/images/events/Family-Night-&-Fund-Raising-Dinner.jpg')}}" title="This is the First Image Description"><img src="{{asset('public/images/events/Family-Night-&-Fund-Raising-Dinner.jpg')}}" alt="" itemprop="image" /></a>
                                
                            </div>
                        </div>

                        <!-- Event Info -->
                        <article class="fly-card fly-event fly-flip-effect vertical" itemscope itemtype="http://schema.org/Event">
                            <div class="boxed flip-front">
                                <div class="event-content">
                                    <h3 class="event-title" itemprop="name">
                                        <a href="event-details.html">Event Info</a>
                                    </h3>

                                    <ul class="event-location">
                                        <li>
                                            <div class="label">Location:</div>
                                            <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>United States</a>
                                        </li>

                                        <li>
                                            <div class="label">Date:</div>

                                            <time class="event-date" datetime="2016-12-12T20:11:00" itemprop="startDate">
                                                <i class="material-icons">query_builder</i>12 Dec 2016, 11:00 AM
                                            </time>
                                        </li>
                                    </ul>

                                    <div class="event-description" itemprop="description">
                                        <p>
                                            <br> <br> Starts: June 11, 2011 @ 7:30 pm <br> <br> 

                                            Ends: June 11, 2011 @ 11:30 pm <br> <br>

                                            Place: St Joseph Parish hall, 750 Peachtree Street, Herndon, VA 20170 <br> <br>

                                            Family Night & Fund Raising Dinner <br> <br>

                                            Date: June 11, 2011 <br> <br>

                                            Time: 7:30 PM <br> <br>

                                            St Joseph Parish hall <br> <br>

                                            750 Peachtree Street, Herndon, VA 20170 <br> <br>

                                            Special Guest: <br> <br>

                                            Imam Magid (Executive Director, Imam, ADAMS Center) <br> <br>

                                            Br Arif Kabir (Amir, Qabeelah Nurayn, AIMaghrib Instution) <br> <br>

                                            Br Mir Ali Bappy (Executive Board Member, BDesh Foundation) <br> <br>

                                            Tickets: $15 <br> <br>

                                            Contact: Masud Hasan 571-212-2257 <br>
                                        </p>
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
                                         data-map-marker="images/marker.png"
                                         data-map-marker-size="[31,46]"
                                         data-map-marker-anchor="[16,46]">
                                        <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--/ Event Info -->

                       

                        <!-- Post Social Buttons -->
                        <ul class="post-social clearfix">
                            <li><a href="#" class="fa fa-facebook js-wave"></a></li>
                            <li><a href="#" class="fa fa-twitter js-wave"></a></li>
                            <li><a href="#" class="fa fa-instagram js-wave"></a></li>
                            <li><a href="#" class="fa fa-google js-wave"></a></li>
                        </ul>
                        <!--/ Post Social Buttons -->
                    </article>
                    <!--/ Event Details -->

					
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