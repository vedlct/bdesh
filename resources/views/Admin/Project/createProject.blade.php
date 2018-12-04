
@extends('layouts.mainLayout')

@section('content')

                    <!-- end row -->
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="card m-b-30">
                                  <div class="card-body">
                                      <div class="card-header mb-5">
                                          <h3>Create Project</h3>
                                      </div>
                                      <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Project Name</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="projectName" class="form-control" required placeholder="Project Name">
                                              </div>
                                          </div>


                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Project Location</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="projectLocation" class="form-control" required placeholder="Project Location">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Project Goal</label>
                                              <div class="col-sm-10">
                                                  <input type="number" name="pGoal" class="form-control" required placeholder="Project Goal">
                                              </div>
                                          </div>

                                          {{--<div class="form-group row">--}}
                                              {{--<label class="col-sm-2 col-form-label">Project Progress</label>--}}
                                              {{--<div class="col-sm-10">--}}
                                                  {{--<input type="text" id="pProgress" class="form-control" required placeholder="Project Progress">--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Project Description</label>
                                              <div class="col-sm-10">
                                                  <textarea name="pDescription" class="summernote"></textarea>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Project image</label>
                                              <div class="col-sm-10">
                                                  <input type="file" name="projectImage[]" class="form-control" multiple>
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                  <button type="reset" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
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