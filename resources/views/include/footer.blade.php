<!-- Footer -->
<footer class="footer" itemscope itemtype="http://schema.org/WPFooter">
    <div class="container">
        <div class="footer-top">
            <!-- Back To Top Button -->
            <a class="back-to-top anchor js-wave" href="#header"><i class="material-icons">keyboard_arrow_up</i></a>
            <!--/ Back To Top Button -->

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <!-- Logo TODO: Use image or text -->
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img class="logo-normal" src="{{url('public/images/logo.png')}}" alt=""/>
                            </a>
                        </div>
                        <!--/ Logo -->

                        <div class="site-description" itemprop="about" >
                            <p style="color: white !important;">
                                B DESH Foundation, Inc is a non-profit charitable organization involved in poverty alleviation, health and sanitation and educational projects. B Desh Foundation, Inc. is an IRS approved 501c3 organization.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- Widget Recent Posts -->
                    <div class="widget-footer widget-posts">
                        <h4 class="widget-title">United States Office</h4>

                        <article class="fly-article" itemscope itemtype="http://schema.org/Article">
                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name"><i class="fa fa-home"></i>
                                        B Desh Foundation, Inc. 6 Silo Mill CT. Sterling, VA 20164 </a></h3>


                            </div>

                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name"><i class="fa fa-user"></i>
                                        Contact Person: Sohel Ahmed </a></h3>


                            </div>

                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name"> <i class="fa fa-phone"></i>
                                        (571)306-2523  </a></h3>


                            </div>
                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name"><i class="fa fa-envelope-o"></i>
                                        Info@bdeshfoundation.org </a></h3>


                            </div>

                        </article>

                    </div>
                    <div class="widget-footer widget-posts">
                        <h4 class="widget-title">Bangladesh Office:</h4>

                        <article class="fly-article" itemscope itemtype="http://schema.org/Article">
                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name"> <i class="fa fa-home"></i>
                                        B Desh Foundation, Inc. </a></h3>
                            </div>
                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name"> <i class="fa fa-user"></i>
                                        Contact Person: Abul Towhid </a></h3>
                            </div>
                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name"> <i class="fa fa-phone"></i>
                                        011-880-1882-722227 </a></h3>
                            </div>
                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name"><i class="fa fa-envelope-o"></i>
                                        atowhid9@gmail.com </a></h3>
                            </div>
                        </article>

                    </div>
                    <!--/ Widget Recent Posts -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- Widget Twitter -->
                    <div class="widget-footer widget-twitter">
                        <h4 class="widget-title">Links</h4>

                        <p><a style="color: #fff;" href="{{route('home')}}">Home</a></p>
                        <p><a style="color: #fff;" href="{{route('about')}}">About</a></p>
                        {{--<p><a style="color: #fff;" href="">Service</a></p>--}}
                        <p><a style="color: #fff;" href="{{route('creditcard')}}">Donate us</a></p>
                        <p><a style="color: #fff;" href="{{route('contact')}}">Contact</a></p>



                    </div>
                    <!--/ Widget Twitter -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- Widget Gallery -->
                    <div class="widget-footer widget-gallery">
                        <h4 class="widget-title">Social Scroll</h4>

                        <div class="item links">

                            <div id="fb-root"></div>
                            <script>
                                (function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id))
                                        return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1401103616787674";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>

                            <div class="fb-page" data-href="https://www.facebook.com/bdeshfoundation/" data-tabs="timeline" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/crebsol/"><a href="https://www.facebook.com/crebsol/">CreBSol</a></blockquote></div></div>
                        </div>
                    </div>
                    <!--/ Widget Gallery -->
                </div>
            </div>
        </div>

        <div class="footer-bottom flex-container">
            <!-- Social Links -->
            <ul class="footer-social clearfix">
                <li><a href="#" class="fa fa-facebook js-wave"></a></li>
                <li><a href="#" class="fa fa-twitter js-wave"></a></li>
                <li><a href="#" class="fa fa-instagram js-wave"></a></li>
                <li><a href="#" class="fa fa-google js-wave"></a></li>
                <li><a href="#" class="fa fa-dribbble js-wave"></a></li>
                <li><a href="#" class="fa fa-vimeo js-wave"></a></li>
                <li><a href="#" class="fa fa-pinterest-p js-wave"></a></li>
                <li><a href="#" class="fa fa-linkedin js-wave"></a></li>
            </ul>
            <!--/ Social Links -->

            <!-- Copyright -->
            <div class="footer-copyright">
                &copy; <span itemprop="copyrightYear">2018 - Bdesh Foundation | All Rights Reserved | </span>  Powered by <a rel="nofollow" href="https://teknovisual.com/" target="_blank" itemprop="copyrightHolder"> <img style="height: 37px; float: right; margin-left: 10px; margin-top: -8px;" src="{{url('public/images/teknologo.png')}}" alt=""/></a>
            </div>
            <!--/ Copyright -->
        </div>
    </div>
</footer>
<!--/ Footer -->

<!-- JS Section -->

<!-- Libs -->
<script src="{{url('public/js/libs/jquery-1.12.2.min.js')}}"></script>
<script src="{{url('public/js/libs/jquery-ui-1.11.4.min.js')}}"></script>
<script src="{{url('public/js/libs/bootstrap-3.3.6.min.js')}}"></script>

<script src="{{url('public/js/jquery.nicescroll.min.js')}}"></script>

<!-- Placeholders -->
<script src="{{url('public/js/jquery.powerful-placeholder.min.js')}}"></script>

<!-- Select2  -->
<script src="{{url('public/js/select2.full.min.js')}}"></script>

<!-- InputMask -->
<script src="{{url('public/js/inputmask.min.js')}}"></script>
<script src="{{url('public/js/jquery.inputmask.min.js')}}"></script>

<!-- LightBox -->
<script src="{{url('public/js/jquery.swipebox.min.js')}}"></script>

<!-- Owl Slider -->
<script src="{{url('public/js/owl.carousel.js')}}"></script>

<!-- CarouFredSel -->
<script src="{{url('public/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>

<!-- MouseWheel -->
<script src="{{url('public/js/jquery.mousewheel.min.js')}}"></script>

<!-- TouchSwipe -->
<script src="{{url('public/js/jquery.touchSwipe.min.js')}}"></script>

<!-- ScrollBar -->

<!-- StickyKit -->
<script src="{{url('public/js/jquery.sticky-kit.min.js')}}"></script>

<!-- TweenLite, used for smooth scrolling -->
<script src="{{url('public/js/TweenLite.min.js')}}"></script>
<script src="{{url('public/js/ScrollToPlugin.min.js')}}"></script>

<!-- Google Map -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDw2p1HpU_Ng_yCbqGBnstSPwKWfQtKwak"></script>
<script src="{{url('public/js/jquery.gmap.min.js')}}"></script>
<script src="{{url('public/js/gmap-style.js')}}"></script>
<script src="{{url('public/js/gmap-init.js')}}"></script>

<!-- Youtube Api -->
<script src="https://www.youtube.com/iframe_api"></script>

<!-- FroogaLoop for Vimeo  -->
{{--<script src="{{url('public/../../f.vimeocdn.com/js/froogaloop2.min.js')}}"></script>--}}

<!-- Waves -->
<script src="{{url('public/js/waves.min.js')}}"></script>

<!-- Object Fit PolyFill -->
<script src="{{url('public/js/ofi.browser.js')}}"></script>

<!-- General Scripts -->
<script src="{{url('public/js/general.js')}}"></script>


<script src="{{url('public/js/waypoints.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.search_icon').click(function () {
            $('.nav-justified').toggleClass('search_opened');
            $('.navbar_search').fadeToggle();
        });
        $('.navbar_search .overlay').click(function () {
            $('.nav-justified').toggleClass('search_opened');
            $('.navbar_search').fadeToggle();
        })

        $(window).scroll(function () {
            var top_bar_height = $('.top_bar').height();
            var header_height = $('.header').height();
            var total_scroll = $(window).scrollTop();
            if (total_scroll > top_bar_height + header_height) {
                $('.navbar-default').addClass('navbar-fixed-top');
            } else {
                $('.navbar-default').removeClass('navbar-fixed-top');
            }
        })

        $("html").niceScroll({
            cursorcolor: "#51a83f",
            cursorwidth: "10px",
            cursorborder: "0px solid transparent",
            cursorborderradius: "0px",
            mousescrollstep: 60,
            autohidemode: false,
            background: "gray",
            horizrailenabled: false
        });

        $('.srj').waypoint(function () {
            var anim = $(this).attr('data-animate'),
                del = $(this).attr('data-animation-delay');
            var window_width = $(window).width();
            if (window_width > 767) {
                $(this).addClass('animated ' + anim).css({animationDelay: del + 'ms'});
            } else {
                $(this).addClass('animated ' + anim).css({animationDelay: 200 + 'ms'});
            }
        }, {offset: '100%', triggerOnce: true});

        /*==============Code for Back to Top==============*/
        if ((jQuery(window).height() + 100) < jQuery(document).height()) {
            jQuery('#top-link-block').removeClass('hidden').affix({
                offset: {top: 100}
            });
        }

        jQuery('.carousel').carousel({
            interval: 5000
        })

    });
</script>

@yield('foot-js')
{{--<!--goal meter js-->--}}
{{--<script src="{{url('GoalMeter/js/goalmeter.js')}}"></script>--}}
{{--<script src="{{url('GoalMeter/js/demo.js')}}"></script>--}}
{{--<!--goal meter js-->--}}


</body>

</html>