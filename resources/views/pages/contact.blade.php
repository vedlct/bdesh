@extends("layout.mainLayout")

@section('content')
    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url({{asset('public/images/temp/slide-26.jpg')}});">
        <div class="fly-header-content">
            <div class="page-subtitle">Hello There</div>
            <h1 class="page-title">Contact us</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->

    <!-- Page -->
    <div class="page-wrapper"><!-- TODO: additional classes are: .page-sidebar, .page-sidebar-left, .page-narrow -->
        <div class="container">
            <div class="row">
                <!-- Content -->
                <main itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPageElement" class="content">
                    <!-- Map -->
                    {{--<div class="google-map"--}}
                         {{--data-map-zoom="15"--}}
                         {{--data-map-address="1999 Hulman Blvd, Speedway, IN, 46222"--}}
                         {{--data-map-type="roadmap"--}}
                         {{--data-map-style="hency"--}}
                         {{--data-map-marker="{{asset('public/images/marker.png')}}"--}}
                         {{--data-map-marker-size="[50,64]"--}}
                         {{--data-map-marker-anchor="[26,64]">--}}
                        {{--<!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->--}}
                    {{--</div>--}}
                    <!--/ Map -->





                    <div class="row">

                        <div class="col-md-4 text-center">
                            <h3>Let’s connect</h3>
                            <p>B DESH Foundation, Inc is a non-profit charitable organization involved in poverty alleviation, health and sanitation and educational projects. B Desh Foundation, Inc. is an IRS approved 501c3 organization.</p><br>
                        </div>

                        <div class="col-md-4 text-center">
                            <address>
                                <h4>United States:</h4>
                                <p>B Desh Foundation, Inc.<br>
                                    6 Silo Mill CT. Sterling, VA 20164<br>
                                    Contact Person: Sohel Ahmed<br>
                                    Ph# (571)306-2523<br>
                                    E-Mail : info@bdeshfoundation.org<br></p>

                            </address>
                        </div>

                        <div class="col-md-4 text-center">
                            <address>
                                <h4>Bangladesh:</h4>
                                <p>B Desh Foundation, Inc.<br>
                                    Contact Person: Abul Towhid<br>
                                    <!-- Ph# 011-880-171-205-6905<br> -->
                                    Ph# 011-880-1882-722227<br>
                                    E-mail:atowhid9@gmail.com<br></p>

                            </address>
                        </div>

                    </div>


                    <!-- Contact Form -->
                    <form action="{{route('contact.sendMail')}}" method="post" class="wpcf7-form" novalidate="novalidate">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group required">
                                    <label for="your-name">NAME</label>
                                    <br/>
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" name="name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" placeholder="enter your name"/>
                                    </span>
                                </div>

                                <div class="form-group required">
                                    <label for="your-email">Email address</label>
                                    <br/>
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" placeholder="enter your email"/>
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="your-phone">PHONE</label>
                                    <br/>
                                    <span class="wpcf7-form-control-wrap your-phone">
                                        <input type="text" name="phone" value="" class="wpcf7-form-control wpcf7-text" id="your-phone" placeholder="enter your phone number" />
                                    </span>
                                </div>

                                <div class="form-group required">
                                    <label for="your-subject">subject</label>
                                    <br/>
                                    <span class="wpcf7-form-control-wrap your-subject">
                                        <input type="text" name="subject" value="" class="wpcf7-form-control wpcf7-text" id="your-subject" placeholder="subject" />
                                    </span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group required">
                                    <label for="your-message">message</label>
                                    <br/>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="message" class="wpcf7-form-control wpcf7-textarea" id="your-message" placeholder="type in your message"></textarea>
                                    </span>
                                </div>

                                <div class="text-right">
                                    <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit btn" />
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ Contact Form -->
                </main>
                <!--/ Content -->
            </div>
        </div>
    </div>
    <!--/ Page -->




    @endsection

@section('foot-js')

    <script>

        @if(Session::has('mail-message'))

        @if(Session::get('mail-message')=='0')

            $.alert({
            title: 'Alert!',
            type: 'red',
            content: 'Mail does not sent ,please try again',
            buttons: {
                tryAgain: {
                    text: 'Ok',
                    btnClass: 'btn-blue',
                    action: function () {


                    }
                }

            }
        });

        @elseif(Session::get('mail-message')=='1')

            $.alert({
            title: 'Alert!',
            type: 'green',
            content: 'Mail sent successfully',
            buttons: {
                tryAgain: {
                    text: 'Ok',
                    btnClass: 'btn-blue',
                    action: function () {


                    }
                }

            }
        });

        @endif



        @endif
    </script>

    @endsection