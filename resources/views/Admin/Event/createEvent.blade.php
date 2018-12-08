
@extends('layouts.mainLayout')

@section('content')

                    <!-- end row -->
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="card m-b-30">
                                  <div class="card-body">
                                      <div class="card-header mb-5">
                                          <h3>Create Event</h3>
                                      </div>
                                      <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Event Name</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="eventName" class="form-control" required placeholder="Event Name">
                                              </div>
                                          </div>


                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Event Location</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="eLocation" class="form-control" required placeholder="Event Location">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Event Start Date</label>
                                              <div class="col-sm-10">
                                                  <input type="date" name="startDate" class="form-control" required placeholder="Event Location">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Event End Date</label>
                                              <div class="col-sm-10">
                                                  <input type="date" name="EndDate" class="form-control" required placeholder="Event Location">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Event Start Time</label>
                                              <div class="col-sm-10">
                                                  <input type="time" name="startTime" class="form-control" required placeholder="Event End Time">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Event End Time</label>
                                              <div class="col-sm-10">
                                                  <input type="time" name="endTime" class="form-control" required placeholder="Event End Time">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Event place</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="place" class="form-control" required placeholder="Event Place">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Event  specialGuest</label>
                                              <div class="col-sm-10">
                                                  {{--<input type="text" name="specialGuest" class="form-control" placeholder="Special Guest">--}}
                                                  <textarea name="specialGuest" class="summernote"></textarea>
                                              </div>
                                          </div>
                                            <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Event  ticketPrice</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="ticketPrice" class="form-control" placeholder="Ticket price">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">contact Information</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="contact" class="form-control" placeholder="Contact Information">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Event Image</label>
                                              <div class="col-sm-10">
                                                  <input type="file" name="eventImage" class="form-control">
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