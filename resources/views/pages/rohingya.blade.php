@extends('layout.mainLayout')

@section('content')
    <!-- Header Image or Video -->
<section class="fly-header parallax overlay" style="background-image: url({{asset('public/images/rohinga/rohinja-L1.jpg')}});">
        <div class="fly-header-content">
            <h1 id="projectTitle1" class="page-title" itemprop="title">AN APPEAL FOR ROHINGYA REFUGEES</h1> <br>
            <p style="color: #fff;">Rohingya Muslims are being persecuted in Myanmar, scores are killed by Myanmar authorities. According to the United  <br>Nations, more than 700,000 left the country since August 25, 2017. <br>
                ☆Projects Are Eligible For Zakah And Sadaqa☆</p>
        </div>
    </section>
    <!--/ Header Image or Video -->

    <!-- Page -->
    <div class="page-wrapper page-sidebar">
        <!-- TODO: additional classes are: .page-sidebar, .page-sidebar-left, .page-narrow -->
        <div class="container">
            <div class="row">
                <!-- Content -->
                <main itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPageElement" class="content">
                    <!-- Project Details -->
                    <article class="fly-article-details" itemscope itemtype="http://schema.org/DonateAction" itemref="projectTitle1">


                        <!-- Project Stats -->
                        <div class="fly-card fly-project fly-flip-effect vertical">
                            <div class="boxed flip-front">
                                <div class="project-content">



                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="{{asset('public/images/rohinga/2.jpg')}}" alt="Los Angeles" style="width:100%;">
                                            </div>

                                            <div class="item">
                                                <img src="{{asset('public/images/rohinga/1.jpg')}}" alt="Chicago" style="width:100%;">
                                            </div>

                                            <div class="item">
                                                <img src="{{asset('public/images/rohinga/3.png')}}" alt="New york" style="width:100%;">
                                            </div>

                                            <div class="item">
                                                <img src="{{asset('public/images/rohinga/4.jpg')}}" alt="New york" style="width:100%;">
                                            </div>
                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                    <div class="project-description post-content" itemprop="description"> <br>
                                        <p>
                                            Since August 25, 2017, the Burmese military have committed killings, rapes, arbitrary arrests, and mass arson of homes in hundreds of predominantly Rohingya villages in northern Rakhine State, forcing more than 700,000 Rohingya to flee to neighboring Bangladesh. Human Rights Watch has found that this abuse amounts to crimes against humanity under international law.

                                        </p>

                                        <ul>
                                            <li>52% of the women surveyed by the United Nations were raped</li>
                                            <li>More than 40% children are orphans</li>
                                        </ul>




                                    </div>


                                </div>

                            </div>

                            {{--<div class="boxed flip-front">--}}
                                {{--<div class="project-content">--}}

                                    {{--<img src="{{asset('public/images/rohinga/rohinja-L1.jpg')}}" alt="" />--}}
                                    {{--<div class="project-description post-content" itemprop="description"> <br>--}}
                                        {{--<p>--}}
                                            {{--Since August 25, 2017, the Burmese military have committed killings, rapes, arbitrary arrests, and mass arson of homes in hundreds of predominantly Rohingya villages in northern Rakhine State, forcing more than 700,000 Rohingya to flee to neighboring Bangladesh. Human Rights Watch has found that this abuse amounts to crimes against humanity under international law.--}}

                                        {{--</p>--}}

                                        {{--<ul>--}}
                                            {{--<li>52% of the women surveyed by the United Nations were raped</li>--}}
                                            {{--<li>More than 40% children are orphans</li>--}}
                                        {{--</ul>--}}

                                        {{--<h5>How is the BDesh Foundation Helping the Rohingya Refugees on the Ground ? </h5>--}}


                                    {{--</div>--}}


                                {{--</div>--}}

                            {{--</div>--}}



                            <div class="boxed flip-back">
                                <div class="card-map" data-placeholder="waiting for map">
                                    <div class="google-map" data-map-zoom="14" data-map-type="roadmap" data-map-style="onehope" data-map-address="1998 Hulman Blvd, Speedway, IN, 46222"
                                         data-map-marker="{{asset('public/images/marker.png')}}" data-map-marker-size="[31,46]" data-map-marker-anchor="[16,46]">
                                        <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Project Stats -->



                        <!-- Project Stats -->
                        <div class="fly-card fly-project fly-flip-effect vertical">
                            <div class="boxed flip-front">
                                <div class="project-content">


                                    <div class="thumbnail srj" data-animate="fadeInUp" data-animation-delay="400"><iframe src="https://www.youtube.com/embed/7chQGVEBN3Y" width="100%" height="315" frameborder="0" allowfullscreen=""></iframe>
                                    </div>
                                    <div class="project-description post-content" itemprop="description"> <br>
                                        <p>
                                            BDesh Foundation has working partners in Bangladesh who are authorized to work inside the Rohingya camps and assess the needs of authorized camps:

                                        </p>

                                        <ul>
                                            <li>Your efforts will help refugee brothers and sisters in the Ukhia Camp, Kutupalong Camp, and other remote camps close to the Bangladesh Myanmar border area.</li>
                                        </ul>

                                        <p>
                                            In December of 2017 the Founder of Dar-El-Salam Travel Haji Moustafa and Executive Imam of ADAMS Center Mohamed Magid traveled to the Rohingya Refugee Camps in Cox’s Bazaar. They volunteered and saw in person the hard work and dedication the BDesh partners have put into the Rohingya Camps. You can recapture some of their experience in the video above.

                                        </p>


                                    </div>


                                </div>

                            </div>



                            <div class="boxed flip-back">
                                <div class="card-map" data-placeholder="waiting for map">
                                    <div class="google-map" data-map-zoom="14" data-map-type="roadmap" data-map-style="onehope"
                                         data-map-address="1998 Hulman Blvd, Speedway, IN, 46222" data-map-marker="{{asset('public/images/marker.png')}}" data-map-marker-size="[31,46]" data-map-marker-anchor="[16,46]">
                                        <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Project Stats -->
                        <!-- Project Stats -->
                        <div class="fly-card fly-project fly-flip-effect vertical">
                            <div class="boxed flip-front">
                                <div class="project-content">

                                    <h5>How Can You Help?</h5>

                                    <p> BDesh Foundation currently has three different projects on the grounds. You can donate to any of the projects below and they are also eligible for zakah and sadaqa! Below are baseline notes on each project and package/donation costs:</p> <br>

                                </div>
                            </div>
                        </div>
                        @php
                        $count = 1 ;
                        @endphp
                        @foreach($allproject as $ap)
                        <div class="fly-card fly-project fly-flip-effect vertical">
                            <div class="boxed flip-front">
                                <div class="project-content">
                                    <h4 class="project-title">{{$count}}. {{$ap->title}} </h4>


                                    @if(!empty($ap->video) && !empty($ap->image))
                                        <img src="{{url('public/Rohingya')}}/{{$ap->image}}" alt="" />
                                        @if(!empty($ap->imagetitle))
                                            <p class="wp-caption-text">{{$ap->imagetitle}}</p>
                                        @else
                                            <br>
                                        @endif
                                    @elseif(!empty($ap->video))
                                    <div class="thumbnail srj" data-animate="fadeInUp" data-animation-delay="400"><iframe src="<?php echo $ap->video ?>" width="100%" height="315" frameborder="0" allowfullscreen=""></iframe>
                                    </div>
                                    @else
                                        <img src="{{url('public/Rohingya')}}/{{$ap->image}}" alt="" />
                                        @if(!empty($ap->imagetitle))
                                        <p class="wp-caption-text">{{$ap->imagetitle}}</p>
                                        @else
                                           <br>
                                        @endif
                                    @endif


                                    <div class="" >
                                        {{--<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=XKAGUQDFSPFCJ" class="btn btn-yellow js-wave anchor" itemprop="potentialAction">Donate</a>--}}
                                        <button onclick="donation()" class="btn btn-yellow js-wave anchor" itemprop="potentialAction">Donate</button>
                                    </div>


                                    <div class="project-description post-content" itemprop="description"> <br>

                                         {!! $ap->details!!}
                                        {{--<p>--}}
                                            {{--More than 40,000 orphans are now living in the 12 camps in Cox’s Bazaar Bangladesh. Your Zakah and Sadaqa can help BDesh build an Orphan Care Center to provide a better environment for Rohingya orphans.--}}

                                        {{--</p>--}}
                                        {{--<p>--}}
                                            {{--Donate today! Average cost for orphan care: Per month $50; Per year $600 <br> <br> Orphan Care Center - Overview--}}

                                        {{--</p>--}}


                                        {{--<ul>--}}
                                            {{--<li>Children will learn English and Burmese alphabet and numeric number.</li>--}}
                                            {{--<li>This Shobuj Polly Orphan Care center will be followed government and UNICEF, UNHCR curriculum.</li>--}}
                                            {{--<li>All students of this project will be selected from orphan and destitute Rohingya families who are deprived from education, nutrition and primary health care.</li>--}}
                                            {{--<li>School management committee will be formed with 7-9 members comprised of teacher, parents, religious leader(s), etc.</li>--}}

                                        {{--</ul>--}}

                                        {{--<p>--}}
                                            {{--Your Donation Will Provide:--}}
                                        {{--</p>--}}

                                        {{--<ul>--}}
                                            {{--<li>Health Care</li>--}}
                                            {{--<li>Nutritional Food</li>--}}
                                            {{--<li> Clothes/Shoes</li>--}}
                                            {{--<li>Education</li>--}}
                                            {{--<li>Books</li>--}}
                                            {{--<li>Backpacks</li>--}}
                                            {{--<li>School Supplies</li>--}}
                                            {{--<li> …Much more!</li>--}}

                                        {{--</ul>--}}
                                        @if(!empty($ap->video) && !empty($ap->image))
                                            <div class="thumbnail srj" data-animate="fadeInUp" data-animation-delay="400"><iframe src="<?php echo $ap->video ?>" width="100%" height="315" frameborder="0" allowfullscreen=""></iframe>
                                            </div>
                                        @endif

                                    </div>

                                </div>

                            </div>



                            <div class="boxed flip-back">
                                <div class="card-map" data-placeholder="waiting for map">
                                    <div class="google-map" data-map-zoom="14" data-map-type="roadmap" data-map-style="onehope"
                                         data-map-address="1998 Hulman Blvd, Speedway, IN, 46222" data-map-marker="{{asset('public/images/marker.png')}}" data-map-marker-size="[31,46]" data-map-marker-anchor="[16,46]">
                                        <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                                    </div>
                                </div>
                            </div>
                        </div>
                            @php
                                $count ++ ;
                            @endphp
                        @endforeach
                        {{--<!--/ Project Stats -->--}}
                        {{--<!-- Project Stats -->--}}
                        {{--<div class="fly-card fly-project fly-flip-effect vertical">--}}
                            {{--<div class="boxed flip-front">--}}
                                {{--<div class="project-content">--}}

                                    {{--<h4 class="project-title">2.Project Women’s Care:</h4> <br>--}}
                                    {{--<img src="{{asset('public/images/rohinga/rohinja-women.jpg')}}" alt="" />--}}
                                    {{--<p class="wp-caption-text">Rape as weapon of war on Rohingya Women and Adolescent Girls</p>--}}


                                    {{--<div class="">--}}
                                        {{--<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=XKAGUQDFSPFCJ" class="btn btn-yellow js-wave anchor" itemprop="potentialAction">Donate</a>--}}
                                    {{--</div>--}}


                                    {{--<div class="project-description post-content" itemprop="description"> <br>--}}
                                        {{--<p>--}}
                                            {{--Burmese security forces have committed widespread rape against women and girls as part of a campaign of ethnic cleansing against Rohingya Muslims in Burma’s Rakhine State - Human Rights Watch stated in a report.--}}

                                        {{--</p> <br>--}}
                                        {{--<p>--}}
                                            {{--Fifteen-year-old Hala Sadak, from Hathi Para village in Maungdaw Township, said soldiers had stripped her naked and then dragged her from her home to a nearby tree where, she estimates, about 10 men raped her from behind. She said, “They left me where I was…when my brother and sister came to get me, I was lying there on the ground, they thought I was dead.”--}}
                                        {{--</p> <br>--}}

                                        {{--<p>--}}
                                            {{--BDesh’s focus is to improve women’s health and financial well-being. Project Women Care provides women with primary health care, sanitary hygiene aid, livelihood initiatives, etc.--}}
                                        {{--</p> <br>--}}

                                        {{--<p>--}}
                                            {{--Your Zakah and Sadaqa can help to rebuild the lives of Rohingya women.--}}
                                        {{--</p> <br> <br>--}}

                                        {{--<h4 style=""><strong>Donate today! Average cost per:</strong></h4> <br>--}}
                                        {{--<div class="table-responsive">--}}
                                            {{--<table class="table">--}}
                                                {{--<tbody>--}}
                                                {{--<tr>--}}
                                                    {{--<td>Sewing Machine:</td>--}}
                                                    {{--<td>$125 US Dollars</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>Shower Facility:</td>--}}
                                                    {{--<td>$100 US Dollars</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>Hygiene kit:</td>--}}
                                                    {{--<td>$25 US Dollars</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>Medical Care:</td>--}}
                                                    {{--<td>$25-$100 US Dollars</td>--}}
                                                {{--</tr>--}}
                                                {{--</tbody>--}}
                                            {{--</table>--}}
                                        {{--</div>--}}



                                    {{--</div>--}}


                                {{--</div>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                            {{--<div class="boxed flip-back">--}}
                                {{--<div class="card-map" data-placeholder="waiting for map">--}}
                                    {{--<div class="google-map" data-map-zoom="14" data-map-type="roadmap" data-map-style="onehope"--}}
                                         {{--data-map-address="1998 Hulman Blvd, Speedway, IN, 46222" data-map-marker="{{asset('public/images/marker.png')}}--}}
                                            {{--" data-map-marker-size="[31,46]" data-map-marker-anchor="[16,46]">--}}
                                        {{--<!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--/ Project Stats -->--}}


                        <!-- Project Stats -->
                        {{--<div class="fly-card fly-project fly-flip-effect vertical">--}}
                            {{--<div class="boxed flip-front">--}}
                                {{--<div class="project-content">--}}

                                    {{--<h4 class="project-title">3.Project Medical Care:</h4> <br>--}}

                                    {{--<p class="wp-caption-text">Water-borne disease outbreaks such as cholera, bloody diarrhea, typhoid, and hepatitis E have been a major concern in the camps</p>--}}
                                    {{--<img src="{{asset('public/images/rohinga/rohinja-health.jpg')}}" alt="" /> <br>--}}



                                    {{--<div class="">--}}
                                        {{--<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=XKAGUQDFSPFCJ" class="btn btn-yellow js-wave anchor" itemprop="potentialAction">Donate</a>--}}
                                    {{--</div>--}}


                                    {{--<div class="project-description post-content" itemprop="description"> <br>--}}
                                        {{--<p>--}}
                                            {{--Our partnered on-site medical team takes care of refugee medical needs ranging from: paramedics, OB/GYN needs, medicine, vaccinations, surgical services, etc.--}}

                                        {{--</p> <br>--}}
                                        {{--<p>--}}
                                            {{--Fifteen-year-old Hala Sadak, from Hathi Para village in Maungdaw Township, said soldiers had stripped her naked and then dragged her from her home to a nearby tree where, she estimates, about 10 men raped her from behind. She said, “They left me where I was…when my brother and sister came to get me, I was lying there on the ground, they thought I was dead.”--}}
                                        {{--</p> <br>--}}

                                        {{--<br>--}}

                                        {{--<h4 style=""><strong>Donate today! Average cost per:</strong></h4> <br>--}}
                                        {{--<div class="table-responsive">--}}
                                            {{--<table class="table">--}}
                                                {{--<tbody>--}}
                                                {{--<tr>--}}
                                                    {{--<td>Tube Well &ndash;</td>--}}
                                                    {{--<td>$500 US Dollars</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>Sanitary Latrine &ndash;</td>--}}
                                                    {{--<td>$50 US Dollars</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>Women&rsquo;s Shower Facility -</td>--}}
                                                    {{--<td>$100 US Dollars</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>Primary Medical Care Per 100 Patients -</td>--}}
                                                    {{--<td>$500 US Dollars</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>Critical Need Patients -</td>--}}
                                                    {{--<td>$100 US Dollars</td>--}}
                                                {{--</tr>--}}
                                                {{--</tbody>--}}
                                            {{--</table>--}}
                                        {{--</div>--}}


                                        {{--<p>--}}
                                            {{--Please consider donating to the Rohingya Appeal during the month of Ramadan and beyond. The families need as much support as possible and you can help make a difference. <br><br>--}}

                                            {{--You can send your checks payable to BDesh Foundation at the following address: <br> <br>--}}
                                            {{--BDesh Foundation, Inc. <br>--}}
                                            {{--6 Silo Mill CT <br>--}}
                                            {{--Sterling, VA 20164 <br>--}}
                                            {{--USA--}}
                                        {{--</p> <br>--}}





                                        {{--<div class="">--}}
                                            {{--<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=XKAGUQDFSPFCJ" class="btn btn-yellow js-wave anchor" itemprop="potentialAction">Donate</a>--}}
                                        {{--</div> <br>--}}

                                        {{--<div class="thumbnail srj" data-animate="fadeInUp" data-animation-delay="400"><iframe src="https://www.youtube.com/embed/qyRCb3Y6fyI" width="100%" height="315" frameborder="0" allowfullscreen=""></iframe>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}


                                {{--</div>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                            {{--<div class="boxed flip-back">--}}
                                {{--<div class="card-map" data-placeholder="waiting for map">--}}
                                    {{--<div class="google-map" data-map-zoom="14" data-map-type="roadmap" data-map-style="onehope" data-map-address="1998 Hulman Blvd, Speedway, IN, 46222"--}}
                                         {{--data-map-marker="{{asset('public/images/marker.png')}}" data-map-marker-size="[31,46]" data-map-marker-anchor="[16,46]">--}}
                                        {{--<!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--/ Project Stats -->--}}


                    </article>
                    <!--/ Project Details -->

                    @include('layout.payment')

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

@section('foot-js')

   <script>
       function donation() {

           $('html, body').animate({
               scrollTop: $(".up").offset().top
           }, 1500);
       }
   </script>
@endsection