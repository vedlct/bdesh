@extends('layout.mainLayout')
@section('content')
    <!-- Fly Slider -->
    <div class="fly-slider invisible" data-rotation-interval="10000" data-rotation-duration="1000">
        <div class="cube">
            <section class="slide" style="background-image: url({{asset('public/images/temp/slide-1.jpg')}});">
                <div class="slide-content">
                    <h1 class="page-title">Helping Hands for Everyone</h1>

                    <div class="page-subtitle">Choose the way to help people in need</div>

                    <div class="volunteer-cta">
                        <a href="#" class="btn btn-large btn-icon js-wave"><i class="material-icons">arrow_forward</i>BECOME A VOLUNTEER TODAY</a>
                        <div class="note">no credit card needed / secure payments</div>
                    </div>
                </div>
            </section>

            <section class="slide" style="background-image: url({{asset('public/images/temp/slide-2.jpg')}});">
                <div class="slide-content">
                    <h2 class="page-title">Helping Hands for Everyone</h2>

                    <div class="page-subtitle">Choose the way to help people in need</div>

                    <div class="volunteer-cta">
                        <a href="#" class="btn btn-large btn-icon js-wave"><i class="material-icons">arrow_forward</i>BECOME A VOLUNTEER TODAY</a>
                        <div class="note">no credit card needed / secure payments</div>
                    </div>
                </div>
            </section>

            <section class="slide" style="background-image: url({{asset('public/images/temp/slide-3.jpg')}});">
                <div class="slide-content">
                    <h2 class="page-title">Helping Hands for Everyone</h2>

                    <div class="page-subtitle">Choose the way to help people in need</div>

                    <div class="volunteer-cta">
                        <a href="#" class="btn btn-large btn-icon js-wave"><i class="material-icons">arrow_forward</i>BECOME A VOLUNTEER TODAY</a>
                        <div class="note">no credit card needed / secure payments</div>
                    </div>
                </div>
            </section>

            <section class="slide" style="background-image: url({{asset('images/temp/slide-4.jpg')}});">
                <div class="slide-content">
                    <h2 class="page-title">Helping Hands for Everyone</h2>

                    <div class="page-subtitle">Choose the way to help people in need</div>

                    <div class="volunteer-cta">
                        <a href="#" class="btn btn-large btn-icon js-wave"><i class="material-icons">arrow_forward</i>BECOME A VOLUNTEER TODAY</a>
                        <div class="note">no credit card needed / secure payments</div>
                    </div>
                </div>
            </section>
        </div>

        <a class="slider-control prev js-wave" href="#"><i class="material-icons">keyboard_arrow_left</i></a>
        <a class="slider-control next js-wave" href="#"><i class="material-icons">keyboard_arrow_right</i></a>
    </div>
    <!--/ Fly Slider -->

    <!-- Services -->
    <section class="flex-container fly-services">
        <div class="fly-service">
            <div class="service-content">
                <i class="material-icons">language</i>
                <h3 class="title">Pay Your Zakat</h3>
                <div class="description">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</div>
            </div>

            <div class="service-buttons">
                <a href="https://www.paypal.com/cgi-bin/webscr" class="btn btn-medium js-wave">READ MORE</a>
            </div>
        </div>

        <div class="fly-service">
            <div class="service-content">
                <i class="material-icons">face</i>
                <h3 class="title">Zakat Calculator</h3>
                <div class="description">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</div>
            </div>

            <div class="service-buttons">
                <a href="http://bdeshfoundation.org/zakat_calculator-content.php" class="btn btn-medium js-wave">READ MORE</a>
            </div>
        </div>

        <div class="fly-service">
            <div class="service-content">
                <i class="material-icons">favorite_border</i>
                <h3 class="title">Pay Your Zakatul Fitrana</h3>
                <div class="description">"Pay Your Zakatul Fitrana and Bring the Joy of Eid to People in Need"</div>
            </div>

            <div class="service-buttons">
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FS3HK7GLRNFVY" class="btn btn-medium js-wave">READ MORE</a>
            </div>
        </div>


    </section>
    <!--/ Services -->






    <!-- Current Projects -->
    <section class="section padding-bottom-70">
        <div class="section-heading">
            <div class="container">
                <div class="section-subtitle">what do we do</div>
                <h2 class="section-title">Current Projects</h2>
            </div>
        </div>

        <div class="container">
            <div class="fly-projects alternate-layout">
                <!-- Project -->
                <article class="fly-card fly-project fly-flip-effect vertical" itemscope itemtype="http://schema.org/DonateAction">
                    <div class="boxed flip-front">
                        <a class="project-media js-wave" href="{{route('tubewellSanitation')}}" itemprop="url">
                            <img src="{{asset('public/images/current/thumb_img_1.png')}}" alt="" itemprop="image" />

                        </a>

                        <div class="project-content">
                            <h3 class="project-title" itemprop="name">
                                <a href="{{route('tubewellSanitation')}}">Tube Well & Santitation</a>
                            </h3>

                            <div class="project-location">
                                <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
                            </div>

                            <div class="project-description" itemprop="description">
                                <p>
                                    Our primary objective is to have a healthy and wealthy society. Our health care program is more focus on the proactive measurement. Hundreds of families suffer diarrhea and cholera from not having clean drinkable water and from poor sanitation.
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

                                <div class="project-buttons">
                                    <a href="{{route('tubewellSanitation')}}" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>
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
                <!--/ Project -->

                <!-- Project -->
                <article class="fly-card fly-project fly-flip-effect vertical" itemscope itemtype="http://schema.org/DonateAction">
                    <div class="boxed flip-front">
                        <a class="project-media js-wave" href="{{route('multimedia')}}" itemprop="url">
                            <img src="{{asset('public/images/current/Multimedia-small-Banner-300x200.jpg')}}" alt="" itemprop="image" />

                        </a>

                        <div class="project-content">
                            <h3 class="project-title" itemprop="name">
                                <a href="{{route('multimedia')}}">Multimedia Program</a>
                            </h3>

                            <div class="project-location">
                                <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
                            </div>

                            <div class="project-description" itemprop="description">
                                <p>
                                    The multimedia program is designed to educated and bring the awareness among the people of every walk of life. It plays dvd and vcd programs on various religious, and social issues. It covers health and world affairs as well.
                                </p>
                            </div>

                            <div class="project-footer">
                                <ul class="project-stats">
                                    <li>
                                        <div class="label">raised</div>
                                        <div class="value" data-raised="26456"><sup>$</sup>26,456</div>
                                    </li>
                                    <li>
                                        <div class="label">goal</div>
                                        <div class="value" data-goal="25000" itemprop="target"><sup>$</sup>25,000</div>
                                    </li>
                                </ul>

                                <div class="project-buttons">
                                    <a href="{{route('multimedia')}}" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>
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
                                 data-map-address="Fontana, CA 92335"
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
                <!--/ Project -->

                <!-- Project -->
                <article class="fly-card fly-project fly-flip-effect vertical" itemscope itemtype="http://schema.org/DonateAction">
                    <div class="boxed flip-front">
                        <a class="project-media js-wave" href="{{route('food')}}" itemprop="url">
                            <img src="{{asset('public/images/current/Food-Bank-small-Banner21-300x200.jpg')}}" alt="" itemprop="image" />

                        </a>

                        <div class="project-content">
                            <h3 class="project-title" itemprop="name">
                                <a href="{{route('food')}}">Food Bank</a>
                            </h3>

                            <div class="project-location">
                                <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
                            </div>

                            <div class="project-description" itemprop="description">
                                <p>
                                    It's a food reserve bank for the rainy day. Most of the Bangladesh is a flood prune area, recently Bangladesh had a devastated flood and cyclone. Most of the poor family lives in hand to mouth, so when the calamity strikes their first resort become to go to the money lenders and loan the money with very high interest rates. The objective of the food bank is to provide the food security during the time of calamity as well as when there is a food shortage due to bad harvest.
                                </p>
                            </div>

                            <div class="project-footer">
                                <ul class="project-stats">
                                    <li>
                                        <div class="label">raised</div>
                                        <div class="value" data-raised="8345"><sup>$</sup>8,345</div>
                                    </li>
                                    <li>
                                        <div class="label">goal</div>
                                        <div class="value" data-goal="24500" itemprop="target"><sup>$</sup>24,500</div>
                                    </li>
                                </ul>

                                <div class="project-buttons">
                                    <a href="{{route('food')}}" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>
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
                                 data-map-address="Phoenix, AZ 85007"
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
                <!--/ Project -->


                <!-- Project -->
                <article class="fly-card fly-project fly-flip-effect vertical" itemscope itemtype="http://schema.org/DonateAction">
                    <div class="boxed flip-front">
                        <a class="project-media js-wave" href="{{route('health')}}" itemprop="url">
                            <img src="{{asset('public/images/current/Eyecampt-small-Banner1-300x200.jpg')}}" alt="" itemprop="image" />

                        </a>

                        <div class="project-content">
                            <h3 class="project-title" itemprop="name">
                                <a href="{{route('health')}}">Health Care</a>
                            </h3>

                            <div class="project-location">
                                <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
                            </div>

                            <div class="project-description" itemprop="description">
                                <p>
                                    Our primary objective is to have a healthy and wealthy society. Our health care program is more focus on the proactive measurement. Hundreds of families suffer diarrhea and cholera from not having clean drinkable water and from poor sanitation.

                                    In recent month we have installed 72 sanitation facilities which will help hundreds of families. Our goal is to install another 100 sanitation facilities in coming months and to install 10 more Tube wells.
                                </p>
                            </div>

                            <div class="project-footer">
                                <ul class="project-stats">
                                    <li>
                                        <div class="label">raised</div>
                                        <div class="value" data-raised="26456"><sup>$</sup>26,456</div>
                                    </li>
                                    <li>
                                        <div class="label">goal</div>
                                        <div class="value" data-goal="25000" itemprop="target"><sup>$</sup>25,000</div>
                                    </li>
                                </ul>

                                <div class="project-buttons">
                                    <a href="{{route('health')}}" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>
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
                                 data-map-address="Fontana, CA 92335"
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
                <!--/ Project -->

                <!-- Project -->
                <article class="fly-card fly-project fly-flip-effect vertical" itemscope itemtype="http://schema.org/DonateAction">
                    <div class="boxed flip-front">
                        <a class="project-media js-wave" href="{{route('childrenwelfare')}}" itemprop="url">
                            <img src="{{asset('public/images/current/Childwelfaret-small-Banner-300x200.jpg')}}" alt="" itemprop="image" />

                        </a>

                        <div class="project-content">
                            <h3 class="project-title" itemprop="name">
                                <a href="{{route('childrenwelfare')}}">Children Welfare Program</a>
                            </h3>

                            <div class="project-location">
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
                                        <div class="value" data-raised="8345"><sup>$</sup>8,345</div>
                                    </li>
                                    <li>
                                        <div class="label">goal</div>
                                        <div class="value" data-goal="24500" itemprop="target"><sup>$</sup>24,500</div>
                                    </li>
                                </ul>

                                <div class="project-buttons">
                                    <a href="{{route('childrenwelfare')}}" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>
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
                                 data-map-address="Phoenix, AZ 85007"
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
                <!--/ Project -->

                <!-- Project -->
                <article class="fly-card fly-project fly-flip-effect vertical" itemscope itemtype="http://schema.org/DonateAction">
                    <div class="boxed flip-front">
                        <a class="project-media js-wave" href="{{route('ramadanFood')}}" itemprop="url">
                            <img src="{{asset('public/images/current/Ramadhanfood-small-Banner212-300x200.jpg')}}" alt="" itemprop="image" />

                        </a>

                        <div class="project-content">
                            <h3 class="project-title" itemprop="name">
                                <a href="{{route('ramadanFood')}}">Ramadan Food Basket</a>
                            </h3>

                            <div class="project-location">
                                <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
                            </div>

                            <div class="project-description" itemprop="description">
                                <p>
                                    In the blessed month of Ramadan Bdesh foundation shares the joy and blessing with the fellow brothers and sisters in Islam by providing food to the needy families.

                                    Bdesh foundation has launched this program in Bangladesh last year and Alhamdulillah !! this program was able to reach around 1500 needy families last year. Each basket costs around $10 which is the same amount for the zakatul fitra in USA.
                                </p>
                            </div>

                            <div class="project-footer">
                                <ul class="project-stats">
                                    <li>
                                        <div class="label">raised</div>
                                        <div class="value" data-raised="26456"><sup>$</sup>26,456</div>
                                    </li>
                                    <li>
                                        <div class="label">goal</div>
                                        <div class="value" data-goal="25000" itemprop="target"><sup>$</sup>25,000</div>
                                    </li>
                                </ul>

                                <div class="project-buttons">
                                    <a href="{{route('ramadanFood')}}" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>
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
                                 data-map-address="Fontana, CA 92335"
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
                <!--/ Project -->

            </div>
        </div>
    </section>
    <!--/ Current Projects -->

    <!-- Call To Action -->
    <section class="section section-cta parallax" style="background-image: url({{asset('public/images/temp/slide-5.jpg')}});">
        <div class="container">
            <h2 class="section-title">We help people in need</h2>
            <div class="section-subtitle">Become a volunteer and help others</div>
            <form class="form-inline" action="/action_page.php">
                <div class="form-group">
                    <input type="name" class="form-control" id="email" placeholder="Enter Name" name="email">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="pwd">
                </div>
            </form>
            <a href="#" class="btn btn-medium btn-yellow js-wave">SIGN UP TODAY</a>
        </div>
    </section>
    <!--/ Call To Action -->

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
                            <a class="event-media js-wave" href="event-details.html" itemprop="url">
                                <img src="{{asset('public/images/events/BDeshFlyer_BANNER.jpg')}}" alt="" itemprop="image" />
                            </a>

                            <div class="event-content">
                                <h3 class="event-title" itemprop="name">
                                    <a href="event-details.html">Family Night & Fund Raising Dinner</a>
                                </h3>

                                <div class="event-location">
                                    <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
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
                                        <a href="event-details.html" class="btn btn-transparent btn-icon-left js-wave" itemprop="url">
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
                            <a class="event-media js-wave" href="event-details.html" itemprop="url">
                                <img src="{{asset('public/images/events/Family-Night-&-Fund-Raising-Dinner.jpg')}}" alt="" itemprop="image" />
                            </a>

                            <div class="event-content">
                                <h3 class="event-title" itemprop="name">
                                    <a href="event-details.html">Family Night & Fund Raising Dinner</a>
                                </h3>

                                <div class="event-location">
                                    <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
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
                                        <a href="event-details.html" class="btn btn-transparent btn-icon-left js-wave" itemprop="url">
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




    <!-- Recent Posts -->
    <section class="section padding-bottom-50">
        <div class="section-heading">
            <div class="container">
                <div class="section-subtitle">RECENT BLOGPOSTS</div>
                <h2 class="section-title">Latest from our Blog</h2>
            </div>
        </div>

        <div class="container">
            <div class="fly-articles columns3 flex-container">
                <div class="column">
                    <!-- Post -->
                    <article class="fly-card fly-article boxed" itemscope itemtype="http://schema.org/Article">
                        <div class="boxed">
                            <a class="post-media js-wave" href="blog-details.html" itemprop="url">
                                <img src="{{asset('public/images/current/thumb_img_1.png')}}" alt="" itemprop="image" />
                            </a>

                            <div class="post-content">
                                <h3 class="post-title" itemprop="name">
                                    <a href="blog-details.html">Tube Well & Sanitation</a>
                                </h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-12-12T20:04:09" itemprop="dateCreated">12 Dec 2016</time>
                                    <a href="#" class="post-comments"><span itemprop="commentCount">26</span> comments</a>
                                    <span class="post-category" itemprop="keywords">tagged in <a href="#">volunteer</a></span>
                                    <!--<span class="post-author" itemprop="author">by <a href="#">John Doe</a></span>-->
                                </div>

                                <div class="post-description" itemprop="articleBody">
                                    <p>
                                        Our primary objective is to have a healthy and wealthy society. Our health care program is more focus on the proactive measurement. Hundreds of families suffer diarrhea.
                                    </p>
                                </div>

                                <div class="post-footer">
                                    <div class="post-buttons">
                                        <a href="blog-details.html" class="btn btn-transparent js-wave" itemprop="url">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--/ Post -->
                </div>

                <div class="column">
                    <!-- Post -->
                    <article class="fly-card fly-article boxed" itemscope itemtype="http://schema.org/Article">
                        <div class="boxed">
                            <a class="post-media js-wave" href="blog-details.html" itemprop="url">
                                <img src="{{asset('public/images/current/Multimedia-small-Banner-300x200.jpg')}}" alt="" itemprop="image" />
                            </a>

                            <div class="post-content">
                                <h3 class="post-title" itemprop="name">
                                    <a href="blog-details.html">Multimedia Program</a>
                                </h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-12-12T20:04:09" itemprop="dateCreated">12 Dec 2016</time>
                                    <a href="#" class="post-comments"><span itemprop="commentCount">26</span> comments</a>
                                    <span class="post-category" itemprop="keywords">tagged in <a href="#">volunteer</a></span>
                                    <!--<span class="post-author" itemprop="author">by <a href="#">John Doe</a></span>-->
                                </div>

                                <div class="post-description" itemprop="articleBody">
                                    <p>
                                        The multimedia program is designed to educated and bring the awareness among the people of every walk of life. It plays dvd and vcd programs on various religious, and social issues.
                                    </p>
                                </div>

                                <div class="post-footer">
                                    <div class="post-buttons">
                                        <a href="blog-details.html" class="btn btn-transparent js-wave" itemprop="url">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--/ Post -->
                </div>

                <div class="column">
                    <!-- Post -->
                    <article class="fly-card fly-article boxed" itemscope itemtype="http://schema.org/Article">
                        <div class="boxed">
                            <a class="post-media js-wave" href="blog-details.html" itemprop="url">
                                <img src="{{asset('public/images/current/Childwelfaret-small-Banner-300x200.jpg')}}" alt="" itemprop="image" />
                            </a>

                            <div class="post-content">
                                <h3 class="post-title" itemprop="name">
                                    <a href="blog-details.html">Children Welfare Program</a>
                                </h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-12-12T20:04:09" itemprop="dateCreated">12 Dec 2016</time>
                                    <a href="#" class="post-comments"><span itemprop="commentCount">26</span> comments</a>
                                    <span class="post-category" itemprop="keywords">tagged in <a href="#">volunteer</a></span>
                                    <!--<span class="post-author" itemprop="author">by <a href="#">John Doe</a></span>-->
                                </div>

                                <div class="post-description" itemprop="articleBody">
                                    <p>
                                        Today's children are leaders of tomorrow. Unfortunately, the socio-economic environment plays a significant role in children growth and their development as future leaders. Our mission is to create a lasting, positive change in the lives of children in need around the world.
                                    </p>
                                </div>

                                <div class="post-footer">
                                    <div class="post-buttons">
                                        <a href="blog-details.html" class="btn btn-transparent js-wave" itemprop="url">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--/ Post -->
                </div>
            </div>
        </div>
    </section>
    <!--/ Recent Posts -->

    <!-- Contact Us -->
    <section class="section gray">
        <div class="section-heading">
            <div class="container">
                <div class="section-subtitle">CONTACT US</div>
                <h2 class="section-title">Get in touch with us</h2>
            </div>
        </div>

        <div class="container">
            <!-- Contact Form -->
            <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group required">
                            <label for="your-name">NAME</label>
                            <br/>
                            <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" placeholder="Name"/>
                                    </span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group required">
                            <label for="your-email">Email address</label>
                            <br/>
                            <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" placeholder="Email Address"/>
                                    </span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group required">
                            <label for="your-subject">subject</label>
                            <br/>
                            <span class="wpcf7-form-control-wrap your-subject">
                                        <input type="text" name="your-subject" value="" class="wpcf7-form-control wpcf7-text" id="your-subject" placeholder="Subject" />
                                    </span>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group required">
                            <label for="your-message">message</label>
                            <br/>
                            <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="your-message" class="wpcf7-form-control wpcf7-textarea" id="your-message" placeholder="Type in your message"></textarea>
                                    </span>
                        </div>

                        <div class="text-right">
                            <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" />
                        </div>
                    </div>
                </div>
            </form>
            <!--/ Contact Form -->
        </div>
    </section>
    <!--/ Contact Us -->
@endsection