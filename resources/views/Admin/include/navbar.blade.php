<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="ion-close"></i></button>
    <div class="left-side-logo d-block d-lg-none">
        <div><h2>BDESH</h2>
            {{--<a href="{{route('index')}}" class="logo"><img src="{{url('public/images/logo-dark.png')}}" height="20" alt="logo"></a>--}}
        </div>
    </div>
    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="dripicons-blog"></i> <span>Dashboard </span>
                    </a>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-meter"></i> <span>Project </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('project.create')}}#projectCreate" id="projectCreate" class="waves-effect">Create Project</a></li>
                        <li><a href="{{route('project.show')}}#projectShow" id="projectShow" class="waves-effect">Show Project</a></li>

                    </ul>
                </li>

                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-meter"></i> <span>Event </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('event.create')}}#eventCreate" id="eventCreate" class="waves-effect">Create Event</a></li>
                        <li><a href="{{route('event.show')}}#eventShow" id="eventShow" class="waves-effect">Show Event</a></li>

                    </ul>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-meter"></i> <span>Rohingya Project </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('rohingya.create')}}#eventCreate" id="eventCreate" class="waves-effect">Create project</a></li>
                        <li><a href="{{route('rohingya.show')}}#eventShow" id="eventShow" class="waves-effect">Show project</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{route('donation.show')}}" class="waves-effect">
                        <i class="dripicons-blog"></i> <span>Donation </span>
                    </a>
                </li>




            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
</div>