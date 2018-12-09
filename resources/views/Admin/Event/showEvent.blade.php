@extends('layouts.mainLayout')

@section('content')

    <!-- end row -->
            <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header mb-5">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Show Event</h3>
i
                                    </div>
                                    <div class="col-6">
                                        <a href="{{route('event.create')}}" class="btn btn-primary pull-right">Add Project</a>
                                    </div>
                                </div>
                            </div>
                            <table id="projectTable" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Start Time</th>
                                    <th>place</th>
                                    <th>Special Guest</th>
                                    <th>Ticket Price</th>
                                    <th>Contact</th>
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <td>{{$event->eventName}}</td>
                                    <td>{!!$event->eLocation !!}</td>
                                    <td>{{$event->startDate}}</td>
                                    <td>{{$event->EndDate}}</td>
                                    <td>{{$event->startTime}}</td>
                                    <td>{{$event->place}}</td>
                                    <td>{!! $event->specialGuest !!}</td>
                                    <td>{{$event->ticketPrice}}</td>
                                    <td>{{$event->contact}}</td>
                                    <td>
                                        <span class="ml-3"></span>
                                        <a href="{{route('event.update',[$event->eventId])}}" class="btn btn-info btn-sm" data-panel-id="{{$event->eventId}}" onclick="editProject(this)"><i class="fa fa-edit"></i></a>
                                        <span class="mr-3"></span>
                                        <button class="btn btn-danger btn-sm" data-panel-id="{{$event->eventId}}" onclick="deleteProject(this)"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>

        <!-- end col -->

@endsection

@section('js')
    <script type="text/javascript">
        function deleteProject(x) {
            var id = $(x).data('panel-id');
            $.confirm({
                title: 'Are',
                content: 'Your Sure!',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('event.delete') !!}",
                            cache: false,
                            data: {_token: "{{csrf_token()}}",'id': id},
                            success: function (data) {
                                $.alert('Project Deleted!');
                                $("#projectTable").load(" #projectTable");
                            }
                        });
                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    }
                }
            });


        }
    </script>
    @endsection