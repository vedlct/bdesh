@extends('layout.mainLayout')
@section('content')
    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url({{asset('public/images/current/Multimedia-small-Banner.jpg')}});">
        <div class="fly-header-content">
            <h1 class="page-title">Bdesh Projects</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->

    <!-- Projects Grid Style -->
    <section class="section">
        <div class="container">
            <div class="fly-projects columns4 flex-container">
                @foreach($allProjects as $project)
                <div class="column">

                    <!-- Project -->
                    <article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">
                        <div class="boxed flip-front">
                            <a class="project-media js-wave" href="{{route('project.singlePost',[$project->slug])}}" itemprop="url">
                                {{--<img src="{{asset('public/Gallery')}}/{{\App\Http\Controllers\HomeController::getThumnailImage($project->projectId)}}" alt="" itemprop="image" />--}}
                                <img src="{{url('public/thumbnailImage')}}/{{$project->thumbnailImage}}" class="img-thumbnail" alt="">

                                <span class="progress">
                                    <span class="progress-label">0%</span>
                                    <span class="progress-bar"></span>
                                </span>
                            </a>

                            <div class="project-content">
                                <h3 class="project-title" itemprop="name">
                                    <a href="{{route('project.singlePost',[$project->slug])}}">{{$project->pName}}</a>
                                </h3>

                                <div class="project-location">
                                    <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>{{$project->pLocation}}</a>
                                </div>

                                <div class="project-description" itemprop="description">
                                    {!!  substr(strip_tags($project->pDescription), 0, 150) !!}
                                      {{--{!! str_limit($project->pDescription,250) !!}--}}
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

                                    <div class="project-buttons">
                                        <a href="{{route('project.singlePost',[$project->slug])}}/#donateForm" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>
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
                </div>
                @endforeach
                {{--<div class="column">--}}
                    {{--<!-- Project -->--}}
                    {{--<article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">--}}
                        {{--<div class="boxed flip-front">--}}
                            {{--<a class="project-media js-wave" href="{{route('multimedia')}}" itemprop="url">--}}
                                {{--<img src="{{asset('public/images/current/Multimedia-small-Banner-300x200.jpg')}}" alt="" itemprop="image" />--}}
                                {{--<span class="progress">--}}
                                    {{--<span class="progress-label">0%</span>--}}
                                    {{--<span class="progress-bar"></span>--}}
                                {{--</span>--}}
                            {{--</a>--}}

                            {{--<div class="project-content">--}}
                                {{--<h3 class="project-title" itemprop="name">--}}
                                    {{--<a href="{{route('multimedia')}}">Multimedia Program</a>--}}
                                {{--</h3>--}}

                                {{--<div class="project-location">--}}
                                    {{--<a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>United States</a>--}}
                                {{--</div>--}}

                                {{--<div class="project-description" itemprop="description">--}}
                                    {{--<p>--}}
                                        {{--The multimedia program is designed to educated and bring the awareness among the people of every walk of life.--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="project-footer">--}}
                                    {{--<ul class="project-stats">--}}
                                        {{--<li>--}}
                                            {{--<div class="label">raised</div>--}}
                                            {{--<div class="value" data-raised="12731"><sup>$</sup>12,731</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="label">goal</div>--}}
                                            {{--<div class="value" data-goal="22500" itemprop="target"><sup>$</sup>22,500</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="project-buttons">--}}
                                        {{--<a href="{{route('multimedia')}}/#donateForm" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="boxed flip-back">--}}
                            {{--<div class="card-map" data-placeholder="waiting for map">--}}
                                {{--<div class="google-map"--}}
                                     {{--data-map-zoom="14"--}}
                                     {{--data-map-type="roadmap"--}}
                                     {{--data-map-style="onehope"--}}
                                     {{--data-map-address="7th & Gaffey St San Pedro, S Gaffey St, San Pedro, CA"--}}
                                     {{--data-map-marker="{{asset('public/images/marker.png')}}"--}}
                                     {{--data-map-marker-size="[31,46]"--}}
                                     {{--data-map-marker-anchor="[16,46]">--}}
                                    {{--<!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<ul class="card-social">--}}
                                {{--<li><a href="#" class="fa fa-facebook js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-twitter js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-instagram js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-google js-wave"></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<!--/ Project -->--}}
                {{--</div>--}}

                {{--<div class="column">--}}
                    {{--<!-- Project -->--}}
                    {{--<article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">--}}
                        {{--<div class="boxed flip-front">--}}
                            {{--<a class="project-media js-wave" href="{{route('food')}}" itemprop="url">--}}
                                {{--<img src="{{asset('public/images/current/Food-Bank-small-Banner21-300x200.jpg')}}" alt="" itemprop="image" />--}}
                                {{--<span class="progress">--}}
                                    {{--<span class="progress-label">0%</span>--}}
                                    {{--<span class="progress-bar"></span>--}}
                                {{--</span>--}}
                            {{--</a>--}}

                            {{--<div class="project-content">--}}
                                {{--<h3 class="project-title" itemprop="name">--}}
                                    {{--<a href="{{route('food')}}">Food Bank</a>--}}
                                {{--</h3>--}}

                                {{--<div class="project-location">--}}
                                    {{--<a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Bangladesh</a>--}}
                                {{--</div>--}}

                                {{--<div class="project-description" itemprop="description">--}}
                                    {{--<p>--}}
                                        {{--It’s a food reserve bank for the rainy day. Most of the Bangladesh is a flood prune area, recently Bangladesh--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="project-footer">--}}
                                    {{--<ul class="project-stats">--}}
                                        {{--<li>--}}
                                            {{--<div class="label">raised</div>--}}
                                            {{--<div class="value" data-raised="12731"><sup>$</sup>12,731</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="label">goal</div>--}}
                                            {{--<div class="value" data-goal="22500" itemprop="target"><sup>$</sup>22,500</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="project-buttons">--}}
                                        {{--<a href="{{route('food')}}/#donateForm" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="boxed flip-back">--}}
                            {{--<div class="card-map" data-placeholder="waiting for map">--}}
                                {{--<div class="google-map"--}}
                                     {{--data-map-zoom="14"--}}
                                     {{--data-map-type="roadmap"--}}
                                     {{--data-map-style="onehope"--}}
                                     {{--data-map-address="Fontana, CA 92335"--}}
                                     {{--data-map-marker="{{asset('public/images/marker.png')}}"--}}
                                     {{--data-map-marker-size="[31,46]"--}}
                                     {{--data-map-marker-anchor="[16,46]">--}}
                                    {{--<!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<ul class="card-social">--}}
                                {{--<li><a href="#" class="fa fa-facebook js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-twitter js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-instagram js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-google js-wave"></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<!--/ Project -->--}}
                {{--</div>--}}

                {{--<div class="column">--}}
                    {{--<!-- Project -->--}}
                    {{--<article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">--}}
                        {{--<div class="boxed flip-front">--}}
                            {{--<a class="project-media js-wave" href="{{route('health')}}" itemprop="url">--}}
                                {{--<img src="{{asset('public/images/current/Eyecampt-small-Banner1-300x200.jpg')}}" alt="" itemprop="image" />--}}
                                {{--<span class="progress">--}}
                                    {{--<span class="progress-label">0%</span>--}}
                                    {{--<span class="progress-bar"></span>--}}
                                {{--</span>--}}
                            {{--</a>--}}

                            {{--<div class="project-content">--}}
                                {{--<h3 class="project-title" itemprop="name">--}}
                                    {{--<a href="{{route('health')}}">Health Care</a>--}}
                                {{--</h3>--}}

                                {{--<div class="project-location">--}}
                                    {{--<a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>United States</a>--}}
                                {{--</div>--}}

                                {{--<div class="project-description" itemprop="description">--}}
                                    {{--<p>--}}
                                        {{--Our primary objective is to have a healthy and wealthy society. Our health care program is more focus on the--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="project-footer">--}}
                                    {{--<ul class="project-stats">--}}
                                        {{--<li>--}}
                                            {{--<div class="label">raised</div>--}}
                                            {{--<div class="value" data-raised="12731"><sup>$</sup>12,731</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="label">goal</div>--}}
                                            {{--<div class="value" data-goal="22500" itemprop="target"><sup>$</sup>22,500</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="project-buttons">--}}
                                        {{--<a href="{{route('health')}}/#donateForm" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="boxed flip-back">--}}
                            {{--<div class="card-map" data-placeholder="waiting for map">--}}
                                {{--<div class="google-map"--}}
                                     {{--data-map-zoom="14"--}}
                                     {{--data-map-type="roadmap"--}}
                                     {{--data-map-style="onehope"--}}
                                     {{--data-map-address="Phoenix, AZ 85007"--}}
                                     {{--data-map-marker="{{asset('public/images/marker.png')}}"--}}
                                     {{--data-map-marker-size="[31,46]"--}}
                                     {{--data-map-marker-anchor="[16,46]">--}}
                                    {{--<!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<ul class="card-social">--}}
                                {{--<li><a href="#" class="fa fa-facebook js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-twitter js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-instagram js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-google js-wave"></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<!--/ Project -->--}}
                {{--</div>--}}

                {{--<div class="column">--}}
                    {{--<!-- Project -->--}}
                    {{--<article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">--}}
                        {{--<div class="boxed flip-front">--}}
                            {{--<a class="project-media js-wave" href="{{route('childrenwelfare')}}" itemprop="url">--}}
                                {{--<img src="{{asset('public/images/current/Childwelfaret-small-Banner-300x200.jpg')}}" alt="" itemprop="image" />--}}
                                {{--<span class="progress">--}}
                                    {{--<span class="progress-label">0%</span>--}}
                                    {{--<span class="progress-bar"></span>--}}
                                {{--</span>--}}
                            {{--</a>--}}

                            {{--<div class="project-content">--}}
                                {{--<h3 class="project-title" itemprop="name">--}}
                                    {{--<a href="{{route('childrenwelfare')}}">Children Welfare Program</a>--}}
                                {{--</h3>--}}

                                {{--<div class="project-location">--}}
                                    {{--<a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Bangladesh</a>--}}
                                {{--</div>--}}

                                {{--<div class="project-description" itemprop="description">--}}
                                    {{--<p>--}}
                                        {{--Today’s children are leaders of tomorrow. Unfortunately, the socio-economic environment plays a significant role in children growth and their development--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="project-footer">--}}
                                    {{--<ul class="project-stats">--}}
                                        {{--<li>--}}
                                            {{--<div class="label">raised</div>--}}
                                            {{--<div class="value" data-raised="12731"><sup>$</sup>12,731</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="label">goal</div>--}}
                                            {{--<div class="value" data-goal="22500" itemprop="target"><sup>$</sup>22,500</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="project-buttons">--}}
                                        {{--<a href="{{route('childrenwelfare')}}/#donateForm" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="boxed flip-back">--}}
                            {{--<div class="card-map" data-placeholder="waiting for map">--}}
                                {{--<div class="google-map"--}}
                                     {{--data-map-zoom="14"--}}
                                     {{--data-map-type="roadmap"--}}
                                     {{--data-map-style="onehope"--}}
                                     {{--data-map-address="Albuquerque, NM 87106"--}}
                                     {{--data-map-marker="{{asset('public/images/marker.png')}}"--}}
                                     {{--data-map-marker-size="[31,46]"--}}
                                     {{--data-map-marker-anchor="[16,46]">--}}
                                    {{--<!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<ul class="card-social">--}}
                                {{--<li><a href="#" class="fa fa-facebook js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-twitter js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-instagram js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-google js-wave"></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<!--/ Project -->--}}
                {{--</div>--}}

                {{--<div class="column">--}}
                    {{--<!-- Project -->--}}
                    {{--<article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">--}}
                        {{--<div class="boxed flip-front">--}}
                            {{--<a class="project-media js-wave" href="{{route('ramadanFood')}}" itemprop="url">--}}
                                {{--<img src="{{asset('public/images/current/Ramadhanfood-small-Banner212-300x200.jpg')}}" alt="" itemprop="image" />--}}
                                {{--<span class="progress">--}}
                                    {{--<span class="progress-label">0%</span>--}}
                                    {{--<span class="progress-bar"></span>--}}
                                {{--</span>--}}
                            {{--</a>--}}

                            {{--<div class="project-content">--}}
                                {{--<h3 class="project-title" itemprop="name">--}}
                                    {{--<a href="{{route('ramadanFood')}}">Ramadan Food Basket</a>--}}
                                {{--</h3>--}}

                                {{--<div class="project-location">--}}
                                    {{--<a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Bangladesh</a>--}}
                                {{--</div>--}}

                                {{--<div class="project-description" itemprop="description">--}}
                                    {{--<p>--}}
                                        {{--In the blessed month of Ramadan Bdesh foundation shares the joy and blessing with the fellow brothers and sisters in--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="project-footer">--}}
                                    {{--<ul class="project-stats">--}}
                                        {{--<li>--}}
                                            {{--<div class="label">raised</div>--}}
                                            {{--<div class="value" data-raised="12731"><sup>$</sup>12,731</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="label">goal</div>--}}
                                            {{--<div class="value" data-goal="22500" itemprop="target"><sup>$</sup>22,500</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="project-buttons">--}}
                                        {{--<a href="{{route('ramadanFood')}}/#donateForm" class="btn btn-yellow js-wave" itemprop="potentialAction">Donate</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="boxed flip-back">--}}
                            {{--<div class="card-map" data-placeholder="waiting for map">--}}
                                {{--<div class="google-map"--}}
                                     {{--data-map-zoom="14"--}}
                                     {{--data-map-type="roadmap"--}}
                                     {{--data-map-style="onehope"--}}
                                     {{--data-map-address="Oklahoma City, OK 73105"--}}
                                     {{--data-map-marker="{{asset('public/images/marker.png')}}"--}}
                                     {{--data-map-marker-size="[31,46]"--}}
                                     {{--data-map-marker-anchor="[16,46]">--}}
                                    {{--<!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<ul class="card-social">--}}
                                {{--<li><a href="#" class="fa fa-facebook js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-twitter js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-instagram js-wave"></a></li>--}}
                                {{--<li><a href="#" class="fa fa-google js-wave"></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<!--/ Project -->--}}
                {{--</div>--}}




            </div>

            <!-- Pagination -->
<!--
            <ul class="pagination">
                <li class="disabled prev"><a href="#"></a></li>

                <li><span class='page-numbers current'>1</span></li>
                <li><a class='page-numbers' href='#'>2</a></li>
                <li><span class="page-numbers dots">&hellip;</span></li>
                <li><a class='page-numbers' href='#'>6</a></li>
                <li><a class='page-numbers' href='#'>7</a></li>

                <li class="next"><a href="#"></a></li>
            </ul>
-->
            <!--/ Pagination -->
        </div>
    </section>
    <!--/ Projects Grid Style -->
@endsection