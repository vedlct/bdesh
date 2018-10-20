@extends('layout.mainLayout')
@section('content')

    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url(images/temp/slide-9.jpg);">
        <div class="fly-header-content">
            <div class="page-subtitle"></div>
            <h1 class="page-title">Past Events</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->

<!-- Events -->
<section class="section padding-bottom-50 section gray">
    <div class="section-heading">
        <div class="container">
            <div class="section-subtitle">PAST & UPCOMING EVENTS</div>
            <h2 class="section-title">Events at BDESH</h2>
        </div>
    </div>

    <div class="container">
        <div class="fly-events flex-container">
            <div class="column">
                <!-- Event -->
                <article class="fly-card fly-event fly-flip-effect" itemscope itemtype="http://schema.org/Event">
                    <div class="boxed flip-front">
                        <a class="event-media js-wave" href="{{route('familyEvent')}}" itemprop="url">
                            <img src="{{asset('public/images/events/BDeshFlyer_BANNER.jpg')}}" alt="" itemprop="image" />
                        </a>

                        <div class="event-content">
                            <h3 class="event-title" itemprop="name">
                                <a href="{{route('familyEvent')}}">Family Night & Fund Raising Dinner</a>
                            </h3>

                            <div class="event-location">
                                <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>United States</a>
                                <time class="event-date" datetime="2016-12-12T20:11:00" itemprop="startDate">
                                    <i class="material-icons">query_builder</i>12 Dec 2016, 11:00 AM
                                </time>
                            </div>

                            <div class="event-description" itemprop="description">
                                <p>
                                    Family Night & Fund Raising Dinner Date: June 11, 2012 Time: 7:30 PM St Joseph Parish hall 750 Peachtree Street, Herndon, VA 20170 Special Guest: Imam Magid (Executive Director, Imam, ADAMS Center) Br Arif Kabir (Amir, Qabeelah Nurayn, AIMaghrib Instution) Br Mir Ali Bappy (Executive Board Member, BDesh Foundation) Tickets: $15 Contact: Masud Hasan 571-212-2257
                                </p>
                            </div>

                            <div class="event-footer">
                                <div class="event-buttons">
                                    <a href="{{route('familyEvent')}}" class="btn btn-transparent btn-icon-left js-wave" itemprop="url">
                                        <i class="material-icons">arrow_forward</i>Learn More
                                    </a>
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

                        <ul class="card-social">
                            <li><a href="#" class="fa fa-facebook js-wave"></a></li>
                            <li><a href="#" class="fa fa-twitter js-wave"></a></li>
                            <li><a href="#" class="fa fa-instagram js-wave"></a></li>
                            <li><a href="#" class="fa fa-google js-wave"></a></li>
                        </ul>
                    </div>
                </article>
                <!--/ Event -->
            </div>

            <div class="column">
                <!-- Event -->
                <article class="fly-card fly-event fly-flip-effect" itemscope itemtype="http://schema.org/Event">
                    <div class="boxed flip-front">
                        <a class="event-media js-wave" href="{{route('familyEvent')}}" itemprop="url">
                            <img src="{{asset('public/images/events/Family-Night-&-Fund-Raising-Dinner.jpg')}}" alt="" itemprop="image" />
                        </a>

                        <div class="event-content">
                            <h3 class="event-title" itemprop="name">
                                <a href="{{route('familyEvent')}}">Family Night & Fund Raising Dinner</a>
                            </h3>

                            <div class="event-location">
                                <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>United States</a>
                                <time class="event-date" datetime="2016-12-12T20:14:00" itemprop="startDate">
                                    <i class="material-icons">query_builder</i>12 Dec 2016, 2:00 PM
                                </time>
                            </div>

                            <div class="event-description" itemprop="description">
                                <p>
                                    Family Night & Fund Raising Dinner Date: June 11, 2012 Time: 7:30 PM St Joseph Parish hall 750 Peachtree Street, Herndon, VA 20170 Special Guest: Imam Magid (Executive Director, Imam, ADAMS Center) Br Arif Kabir (Amir, Qabeelah Nurayn, AIMaghrib Instution) Br Mir Ali Bappy (Executive Board Member, BDesh Foundation) Tickets: $15 Contact: Masud Hasan 571-212-2257
                                </p>
                            </div>

                            <div class="event-footer">
                                <div class="event-buttons">
                                    <a href="{{route('familyEvent')}}" class="btn btn-transparent btn-icon-left js-wave" itemprop="url">
                                        <i class="material-icons">arrow_forward</i>Learn More
                                    </a>
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
                                 data-map-address="Oklahoma City, OK 73105"
                                 data-map-marker="{{asset('public/images/marker.png')}}"
                                 data-map-marker-size="[31,46]"
                                 data-map-marker-anchor="[16,46]">
                                <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                            </div>
                        </div>

                        <ul class="card-social">
                            <li><a href="#" class="fa fa-facebook js-wave"></a></li>
                            <li><a href="#" class="fa fa-twitter js-wave"></a></li>
                            <li><a href="#" class="fa fa-instagram js-wave"></a></li>
                            <li><a href="#" class="fa fa-google js-wave"></a></li>
                        </ul>
                    </div>
                </article>
                <!--/ Event -->
            </div>
        </div>
    </div>
</section>
<!--/ Events -->
@endsection