@extends('layout.mainLayout')
@section('content')
    <!-- Header Image or Video -->
<section class="fly-header parallax overlay" style="background-image: url({{asset('public/images/temp/slide-25.jpg')}});">
        <div class="fly-header-content">
            <div class="page-subtitle"></div>
            <h1 class="page-title">Clildren Welfare</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->

    <!-- Projects Grid Style -->
    <section class="section">
        <div class="container">
            <div class="fly-projects columns4 flex-container">
                <div class="column">
                    <!-- Project -->
                    <article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">
                        <div class="boxed flip-front">
                            <a class="project-media js-wave" href="#" itemprop="url">
                                <img src="{{asset('public/images/current/children-wellfair-01.jpg')}}" alt="" itemprop="image" />

                            </a>

                            <div class="project-content">
                                <h3 class="project-title" itemprop="name">
                                    <a href="#">Children welfare 01</a>
                                </h3>

                            </div>
                        </div>


                    </article>
                    <!--/ Project -->
                </div>


                <div class="column">
                    <!-- Project -->
                    <article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">
                        <div class="boxed flip-front">
                            <a class="project-media js-wave" href="#" itemprop="url">
                                <img src="{{asset('public/images/current/children-wellfair-02.jpg')}}" alt="" itemprop="image" />

                            </a>

                            <div class="project-content">
                                <h3 class="project-title" itemprop="name">
                                    <a href="#">Children welfare 02</a>
                                </h3>

                            </div>
                        </div>


                    </article>
                    <!--/ Project -->
                </div>

                <div class="column">
                    <!-- Project -->
                    <article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">
                        <div class="boxed flip-front">
                            <a class="project-media js-wave" href="#" itemprop="url">
                                <img src="{{asset('public/images/current/children-wellfair-03.jpg')}}" alt="" itemprop="image" />

                            </a>

                            <div class="project-content">
                                <h3 class="project-title" itemprop="name">
                                    <a href="#">Children welfare 03</a>
                                </h3>

                            </div>
                        </div>


                    </article>
                    <!--/ Project -->
                </div>


                <div class="column">
                    <!-- Project -->
                    <article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">
                        <div class="boxed flip-front">
                            <a class="project-media js-wave" href="#" itemprop="url">
                                <img src="{{asset('public/images/current/children-wellfair-04.jpg')}}" alt="" itemprop="image" />

                            </a>

                            <div class="project-content">
                                <h3 class="project-title" itemprop="name">
                                    <a href="#">Children welfare 04</a>
                                </h3>

                            </div>
                        </div>


                    </article>
                    <!--/ Project -->
                </div>




            </div>

        </div>
    </section>
    <!--/ Projects Grid Style -->

@endsection