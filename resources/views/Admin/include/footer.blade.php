<!-- content -->
<footer class="footer">© 2018 <b>Tekno Visual</b> </footer>
</div>
<!-- End Right content here -->
</div>
<!-- END wrapper -->
<!-- jQuery  -->
<script src="{{url('public/assets/js/jquery.min.js')}}"></script>
<script src="{{url('public/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('public/assets/js/modernizr.min.js')}}"></script>
<script src="{{url('public/assets/js/detect.js')}}"></script>
<script src="{{url('public/assets/js/fastclick.js')}}"></script>
<script src="{{url('public/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{url('public/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{url('public/assets/js/waves.js')}}"></script>
<script src="{{url('public/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{url('public/assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{url('public/assets/js/parsley.min.js')}}"></script>
<script src="{{url('public/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- skycons -->
<script src="{{url('public/assets/plugins/skycons/skycons.min.js')}}"></script>
<!-- skycons -->
<script src="{{url('public/assets/plugins/peity/jquery.peity.min.js')}}"></script>
<!--Morris Chart-->
{{--<script src="{{url('public/plugins/morris/morris.min.js')}}"></script>--}}
<script src="{{url('public/assets/plugins/raphael/raphael-min.js')}}"></script>
<!-- dashboard -->
{{--<script src="{{url('public/pages/dashboard.js')}}"></script>--}}
<!-- App js -->
<script src="{{url('public/assets/js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $('form').parsley();
    });
</script>
<script>
    jQuery(document).ready(function() {
        $('.summernote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    });
</script>
@yield('js')
</body>
<!-- Mirrored from themesdesign.in/drixo/vertical/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 08:38:33 GMT -->

</html>