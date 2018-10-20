@extends('layout.mainLayout')
@section('content')

    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url(images/temp/slide-9.jpg);">
        <div class="fly-header-content">
            <div class="page-subtitle"></div>
            <h1 class="page-title">Video Gallery</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->

    <!-- Projects Grid Style -->
    <section class="section">
        <div class="container">
            <div class="fly-projects columns2 flex-container">
                <div class="column">
                    <!-- Project -->
                    <article class="fly-card fly-project fly-flip-effect" itemscope itemtype="http://schema.org/DonateAction">
                        <div class="boxed flip-front">

                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/KSAyGHwRe0s" frameborder="0" allowfullscreen></iframe> 

                            <div class="project-content">


                                <h3 class="project-title" itemprop="name">
                                    <a href="project-details.html">Imam Magid Bdesh Foundation Fund Raising Dinner</a>
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
    
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/R17w0LM2gMM" frameborder="0" allowfullscreen></iframe>
    
                                <div class="project-content">
    
    
                                    <h3 class="project-title" itemprop="name">
                                        <a href="project-details.html">Pay Your Zakat and Fitra</a>
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
        
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/xHLxp5e1-HI" frameborder="0" allowfullscreen></iframe>
        
                                    <div class="project-content">
        
        
                                        <h3 class="project-title" itemprop="name">
                                            <a href="project-details.html">Shobuj Polly – Building A Self Reliant Community</a>
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
            
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/7b3o5U-m7c8" frameborder="0" allowfullscreen></iframe>
            
                                        <div class="project-content">
            
            
                                            <h3 class="project-title" itemprop="name">
                                                <a href="project-details.html">Donate $25 and change the life of a child</a>
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
                
                                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/yZlXNhuqxxI" frameborder="0" allowfullscreen></iframe>
                
                                            <div class="project-content">
                
                
                                                <h3 class="project-title" itemprop="name">
                                                    <a href="project-details.html">Bdesh Foundation helping the needy</a>
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