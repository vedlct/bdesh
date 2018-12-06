@extends('layout.mainLayout')
@section('content')
    <!-- Header Image or Video -->
<section class="fly-header parallax overlay" style="background-image: url({{asset('public/images/temp/slide-25.jpg')}});">
        <div class="fly-header-content">
            <div class="page-subtitle"></div>
            <h1 class="page-title">FAQS</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->


<!-- Tutorial: https://www.w3schools.com/howto/howto_js_accordion.asp -->
<!-- Info: https://en.wikipedia.org/wiki/Markup_language#HTML -->
            
            
            <div style="margin-top:30px; " class="container">
                <div class="row">
                    <div class="content">

                        <h2 style="text-align: left;">General Questions</h2>

                        <button class="accordion"><strong> Who we are ?</strong></button>
                        <div class="panel">
                            <p style="padding: 5px">BDesh Foundation is a Northern Virginia based non-profit organization dedicated to poverty alleviation, health, sanitation and educational projects. We have no political affiliation. Currently, there are number of on-going projects in Bangladesh for clean water, sanitation, educational, eye camp, children welfare program, etc. Details on our projects are available at <a href="http://bdeshfoundation.org/">www.BDeshFoundation.org</a> Bdesh Foundation is an IRS approved non-profit 501c3 organization and donation to Bdesh is tax deductible. </p>
                        </div>

                        <button class="accordion"><strong> Can you highlight some of Bdesh Foundation projects ?</strong></button>
                        <div class="panel">
                            <p style="padding: 5px"> <strong>Some of our projects are:</strong> 

                            <p>Economic Empowerment: We have Islamic sharia compliant micro financing program. We provide Qarde hasana, and Zakat toward economic empowerment projects.</p>

                            <p>  Children Welfare Program: In this program we sponsor socially disadvantage children (orphan, disable and mentally challenged, abandon by parent and other poor and needy) in shelter, education, healthcare, and food.</p>

                            <p>Eye Camp Program: We setup eye camps in different areas of Bangladesh to conduct eye examination and screening for cataract surgery, and general physical health examination. We provide free medication to all needy patients who participate in the camp. We also finance the cataract removal surgery for those patients who need them.</p>

                            <p>Safe Drinking Water and Sanitation Program: We sponsor installation of tube wells in remote villages in Bangladesh for clean and safe drinking water. We also fund installation of sanitary latrine for a healthy and hygienic community.</p>

                            <p>Food Basket: During the month of Ramdan we provide food basket to poor and needy people in Bangladesh and in the USA. We also provide food basket during natural disasters and food shortages.</p>

                            <p> Vocational Training: We provide vocational training on how to form cooperative and cooperative management, entrepreneurship and small business development. We also provide training to farmers for soil testing, seed preservation, palm tree plantation, producing bio-fertilizer and bio-gas, and running nurseries.</p>

                                Multimedia Program: We provide educational seminars in various socio-economical subjects using multimedia players such as TV, DVD, Big screen projector, laptop etc.</p>
                        </div>
                        
                    <button class="accordion"><strong> Why do you work in Bangladesh ?</strong></button>
                    <div class="panel">
                        <p style="padding: 5px">We form partnership with the registered NGOs in Bangladesh who has proven record of accomplishments and whose mission and objectives are aligned with Bdesh’s mission and visions. We verify their NGO status and legitimacy using State department’s database. </p>
                    </div>
                        
                    <button class="accordion"><strong> How do you monitor your projects and make sure money is spent in right cause ?</strong></button>
                    <div class="panel">
                        <p style="padding: 5px">We have representative in the field to supervise Bdesh sponsored projects. Also, we conduct independent audit and survey in order to validate the project execution and expenses. In addition, we have Key Performance Indicator matrix associated with all of our projects and we strictly measure performance of our project against those matrix.  </p>
                    </div>
                        
                    <button class="accordion"><strong> What is your Overhead expense ?</strong></button>
                    <div class="panel">
                        <p style="padding: 5px">We maintain very low administrative expenses. Most of our administrative expenses are covered from donations received from our board of directors. We try our best to keep our overhead cost low. All of our board of directors and the advisors work on volunteer basis and are not compensated for their work. </p>
                    </div>
                        
                    <button class="accordion"><strong> How can we help ?</strong></button>
                    <div class="panel">
                        <p style="padding: 5px">
                            You can pay your Zakat or Sadaqa (donation) towards any of the Bdesh sponsors projects.  You can donate online at <a href="#">http://www.bdeshfoundation.org</a> or mail your check payable to BDesh Foundation at the following address:
                        </p>
                        <pre style="padding: 5px;text-align: left;">
                        
 BDesh Foundation, Inc.
 6 Silo Mill Ct,
 Sterling, VA 20164. 
                         </pre>
                        
                        <p style="padding: 5px">Check our website and support a program you like. Your donation and support can improve the lives of many half away across the world. If you have any question, concern or suggestion, please feel free to contact us by  info@bdeshfoundation.org  or by phone at (571)306-2523.</p>
                    </div>

                       

                    </div>
                </div>
            </div>


    <!--/ Projects Grid Style -->



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

@endsection