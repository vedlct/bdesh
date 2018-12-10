
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
                                              <label class="col-sm-2 col-form-label">Video Url</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="videoUrl" class="form-control" required placeholder="Project Name">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Project image</label>
                                              <div class="col-sm-10">
                                                  <input type="file" name="rImage" class="form-control">
                                              </div>
                                          </div>
                                          {{--<div class="addMoreBody"> </div>--}}
                                          {{--<div class="form-group row">--}}
                                              {{--<label class="col-sm-2 col-form-label">Average Cost</label>--}}
                                              {{--<div class="col-sm-5">--}}
                                                  {{--<input type="text" name="projectName" class="form-control" required placeholder="Average Cost Title">--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-5">--}}
                                                  {{--<input type="text" name="projectName" class="form-control" required placeholder="Average Cost Price">--}}
                                              {{--</div>--}}

                                          {{--</div>--}}
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
            $('#addMore').click(function () {
                $('.addMoreBody').append("<div class=\"form-group row\">\n" +
                    "                                              <label class=\"col-sm-2 col-form-label\">Average Cost</label>\n" +
                    "                                              <div class=\"col-sm-5\">\n" +
                    "                                                  <input type=\"text\" name=\"projectName\" class=\"form-control\" required placeholder=\"Average Cost Title\">\n" +
                    "                                              </div>\n" +
                    "                                              <div class=\"col-sm-5\">\n" +
                    "                                                  <input type=\"text\" name=\"projectName\" class=\"form-control\" required placeholder=\"Average Cost Price\">\n" +
                    "                                              </div>\n" +
                    "\n" +
                    "                                          </div>");
            });
        });
    </script>
    @endsection