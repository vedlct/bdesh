
@extends('layouts.mainLayout')

@section('content')

                    <!-- end row -->
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="card m-b-30">
                                  <div class="card-body">
                                      <div class="card-header mb-5">
                                          <h3>Create Rohingya Project</h3>
                                      </div>
                                      <form action="{{route('rohingya.saveData')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Project Name</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="projectName" class="form-control" required placeholder="Project Name">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Project Details</label>
                                              <div class="col-sm-10">
                                                  <textarea name="details" class="summernote"></textarea>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Image Title</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="imageTitle" class="form-control"  placeholder="Image Title">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Video Url</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="videoUrl" class="form-control"  placeholder="Project Name">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Project image</label>
                                              <div class="col-sm-10">
                                                  <input type="file" name="rImage" class="form-control">
                                              </div>
                                          </div>

                                          {{--<div class="form-group row">--}}
                                              {{--<label class="col-sm-2 col-form-label">Average Cost</label>--}}
                                              {{--<div class="col-sm-5">--}}
                                                  {{--<input type="text" name="avgTitle[]" class="form-control" required placeholder="Average Cost Title">--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-5">--}}
                                                  {{--<input type="text" name="avgPrice[]" class="form-control" required placeholder="Average Cost Price">--}}
                                              {{--</div>--}}

                                          {{--</div>--}}
                                          {{--<div class="addMoreBody"> </div>--}}
                                          {{--<br>--}}
                                              {{--<button type="button" class="btn btn-primary pull-right" id="addMore" >Add More</i> </button>--}}

                                          <div class="form-group">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                  </div>
                        <!-- end col -->
                  </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            var counter = 1;
            $('#addMore').click(function () {
                counter++;
                $('.addMoreBody').append("<div class=\"form-group"+counter+" row\">\n"  +
                    "                                              <label class=\"col-sm-2 col-form-label\">Average Cost</label>\n" +
                    "                                              <div class=\"col-sm-5\">\n" +
                    "                                                  <input type=\"text\" name=\"avgTitle[]\" class=\"form-control\" required placeholder=\"Average Cost Title\">\n" +
                    "                                              </div>\n" +
                    "                                              <div class=\"col-sm-4\">\n" +
                    "                                                  <input type=\"text\" name=\"avgPrice[]\" class=\"form-control\" required placeholder=\"Average Cost Price\">\n" +
                    "                                              </div>\n" +
                    "                                                <button type=\"button\" id="+counter+" class=\"btn remove-btn btn-danger mb-3\"><i class=\"fa fa-trash\"></i></button>\n" +
                    "                                          </div>");
                $('.remove-btn').click(function () {
                    var buttonid = $(this).attr('id');
                    $('.form-group'+buttonid).remove();
                });
            });
        });
    </script>
    @endsection