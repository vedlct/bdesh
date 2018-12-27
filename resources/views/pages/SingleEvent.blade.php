@extends('layout.mainLayout')
@section('content')

    <!-- Header Image or Video -->
<section class="fly-header parallax overlay" style="background-image: url({{url('public/Event/Header')}}/{{$event->headerImage}});background-size: contain;">
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
                                <a class="swipebox" data-rel="gallery1" href="{{asset('public/Event')}}/{{$event->eventImage}}" title="This is the First Image Description">
                                    <img src="{{asset('public/Event')}}/{{$event->eventImage}}" alt="" itemprop="image" /></a>

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
                                            <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>{{$event->eLocation}}</a>
                                        </li>

                                        <li>
                                            <div class="label">Date:</div>{{$event->startDate}}

                                            <time class="event-date" datetime="2016-12-12T20:11:00" itemprop="startDate">
                                                <i class="material-icons">query_builder</i> {{$event->startTime}}
                                            </time>
                                        </li>
                                    </ul>

                                    <div class="event-description" itemprop="description">
                                        <p>
                                            <br> <br> Starts: {{$event->startDate}} @ {{$event->startTime}} <br> <br>

                                            Ends: {{$event->EndDate}} @ {{$event->endTime}} <br> <br>

                                            Place: {{$event->place}}<>

                                            {{$event->eventName}} <br> <br>

                                            Date: {{$event->startDate}} <br> <br>

                                            Time: {{$event->startTime}} <br> <br>

                                            {{$event->place}} <br> <br>

                                             <br> <br>

                                            {!! $event->specialGuest !!}

                                            Tickets: ${{$event->ticketPrice}} <br> <br>

                                            Contact: {{$event->contact}} <br>
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