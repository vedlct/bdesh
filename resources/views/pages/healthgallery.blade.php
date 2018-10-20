@extends('layout.mainLayout')
@section('content')
    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url(images/temp/slide-11.jpg);">
        <div class="fly-header-content">
            <div class="page-subtitle"></div>
            <h1 class="page-title">Healthcare Gallery</h1>
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
                                <img src="{{asset('public/images/current/health-care-01.jpg')}}" alt="" itemprop="image" />

                            </a>

                            <div class="project-content">
                               
                                <h3 class="project-title" itemprop="name">
                                    <a href="#">Health care 01</a>
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
                                <img src="{{asset('public/images/current/health-care-02.jpg')}}" alt="" itemprop="image" />

                            </a>

                            <div class="project-content">
                                <h3 class="project-title" itemprop="name">
                                    <a href="#">Health care 02</a>
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