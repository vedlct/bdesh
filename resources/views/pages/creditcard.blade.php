@extends('layout.mainLayout')
@section('content')
<!-- Header Image or Video -->
<section class="fly-header parallax overlay" style="background-image: url({{asset('public/images/temp/post-8.jpg')}});">
    <div class="fly-header-content">
        <div class="page-subtitle"></div>
        <h1 class="page-title">Donate Now</h1>
    </div>
</section>
<!--/ Header Image or Video -->

<!-- Projects Grid Style -->




<div class="container">
    <div style="margin: 50px;" class="row">
        @include('layout.payment')
    </div>
</div>





<!--/ Projects Grid Style -->

@endsection