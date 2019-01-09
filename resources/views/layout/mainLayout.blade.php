@include('include.header')

@yield('content')



<div id="wait" style="display:none;position:fixed;top: 50%;left: 40%;padding:2px;">
    <img src='{{url('public/images/pleaseWait-1.gif')}}' />
</div>

@include('include.footer')
@yield('foot-js')