@extends('layout.mainLayout')
@section('content')
    <!-- Header Image or Video -->
<section class="fly-header parallax overlay" style="background-image: url({{asset('public/images/rohinga/2.jpg')}});">
        <div class="fly-header-content">
            <div class="page-subtitle"></div>
            <h1 class="page-title">FAQS</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->



    <div style="margin-top:30px; " class="container">
        <div class="row">
            <div class="content">

                <h2 style="text-align: left;">General Questions</h2>

                <section class="ac-container">
                    <div>
                        <input id="ac-1" name="accordion-1" type="radio">
                        <label for="ac-1">Who we are ?</label>
                        <article>
                            <p style="">BDesh Foundation is a Northern Virginia based non-profit organization dedicated to poverty alleviation, health, sanitation and educational projects. We have no political affiliation. Currently, there are number of on-going projects in Bangladesh for clean water, sanitation, education, health, children welfare, etc. Details of our projects are available at                                 <a href="http://bdeshfoundation.org/">www.BDeshFoundation.org </a> BDesh Foundation is an IRS approved non-profit 501c3 organization and donations to BDesh are tax deductible. </p>
                        </article>
                    </div>
                    <div>
                        <input id="ac-2" name="accordion-1" type="radio">
                        <label for="ac-2"> How do you work in Bangladesh? </label>
                        <article>

                            <p style="">We have formed partnership with registered NGOs in Bangladesh who have a proven record of accomplishments. Their missions and objectives are aligned with BDesh. We verify their NGO status and legitimacy using the state department’s database.
                            </p>

                        </article>
                    </div>
                    <div>
                        <input id="ac-3" name="accordion-1" type="radio">
                        <label for="ac-3">How do you monitor your projects and ensure the money is spent on the correct causes?</label>
                        <article>
                            <p>We have representatives in the field to supervise BDesh sponsored projects. Also, we conduct independent audits and surveys in order to validate project execution and expenses. In addition, we have a Key Performance Indicator matrix associated with all of our projects and we strictly measure performance of our projects against the matrix.
                            </p>
                        </article>
                    </div>
                    <div>
                        <input id="ac-4" name="accordion-1" type="radio">
                        <label for="ac-4"> What are your overhead expenses?</label>
                        <article>
                            <p>We maintain very low administrative expenses. Most of our administrative expenses are covered from donations received from our board of directors. We try our best to keep our overhead cost low. All of our board of directors and the advisors work on a volunteer basis and are not compensated for their work.
                            </p>
                        </article>
                    </div>

                    <div>
                        <input id="ac-6" name="accordion-1" type="radio">
                        <label for="ac-6">  How can we help?</label>
                        <article>
                            <p> You can pay your Zakat or Sadaqa (donation) towards any of the Bdesh sponsors projects.  You can donate online at <a href="#">http://www.bdeshfoundation.org</a> or mail your check payable to BDesh Foundation at the following address: <br> <br>

                                BDesh Foundation, Inc. <br>
                                6 Silo Mill Ct, <br>
                                Sterling, VA 20164.  <br> <br>



                            </p>
                        </article>
                    </div>
                </section>



            </div>
        </div>
    </div>

    <!--/ Projects Grid Style -->





@endsection


@section('foot-js')
    {{--<script type="text/javascript">--}}
    {{--$(document).ready(function () {--}}
    {{--$('.search_icon').click(function () {--}}
    {{--$('.nav-justified').toggleClass('search_opened');--}}
    {{--$('.navbar_search').fadeToggle();--}}
    {{--});--}}
    {{--$('.navbar_search .overlay').click(function () {--}}
    {{--$('.nav-justified').toggleClass('search_opened');--}}
    {{--$('.navbar_search').fadeToggle();--}}
    {{--})--}}

    {{--$(window).scroll(function () {--}}
    {{--var top_bar_height = $('.top_bar').height();--}}
    {{--var header_height = $('.header').height();--}}
    {{--var total_scroll = $(window).scrollTop();--}}
    {{--if (total_scroll > top_bar_height + header_height) {--}}
    {{--$('.navbar-default').addClass('navbar-fixed-top');--}}
    {{--} else {--}}
    {{--$('.navbar-default').removeClass('navbar-fixed-top');--}}
    {{--}--}}
    {{--})--}}

    {{--$("html").niceScroll({--}}
    {{--cursorcolor: "#51a83f",--}}
    {{--cursorwidth: "10px",--}}
    {{--cursorborder: "0px solid transparent",--}}
    {{--cursorborderradius: "0px",--}}
    {{--mousescrollstep: 60,--}}
    {{--autohidemode: false,--}}
    {{--background: "gray",--}}
    {{--horizrailenabled: false--}}
    {{--});--}}

    {{--$('.srj').waypoint(function () {--}}
    {{--var anim = $(this).attr('data-animate'),--}}
    {{--del = $(this).attr('data-animation-delay');--}}
    {{--var window_width = $(window).width();--}}
    {{--if (window_width > 767) {--}}
    {{--$(this).addClass('animated ' + anim).css({animationDelay: del + 'ms'});--}}
    {{--} else {--}}
    {{--$(this).addClass('animated ' + anim).css({animationDelay: 200 + 'ms'});--}}
    {{--}--}}
    {{--}, {offset: '100%', triggerOnce: true});--}}

    {{--/*==============Code for Back to Top==============*/--}}
    {{--if ((jQuery(window).height() + 100) < jQuery(document).height()) {--}}
    {{--jQuery('#top-link-block').removeClass('hidden').affix({--}}
    {{--offset: {top: 100}--}}
    {{--});--}}
    {{--}--}}

    {{--jQuery('.carousel').carousel({--}}
    {{--interval: 5000--}}
    {{--})--}}

    {{--});--}}
    {{--</script>--}}
@endsection