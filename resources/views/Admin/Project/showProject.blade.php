@extends('layouts.mainLayout')

@section('content')

    <!-- end row -->
            <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header mb-5">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Show Project</h3>

                                    </div>
                                    <div class="col-6">
                                        <a href="{{route('project.create')}}" class="btn btn-primary pull-right">Add Project</a>
                                    </div>
                                </div>
                            </div>
                            <table id="projectTable" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                    <th>Goal</th>
                                    <th>Added By</th>
                                    <td>Homepage</td>
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->pName}}</td>
                                    {{--<td>{!!str_limit($project->pDescription,480)!!}</td>--}}
                                    <td>{!! $project->pDescription !!}</td>
                                    <td>{{$project->pLocation}}</td>
                                    <td>{{$project->pGoal}}</td>

                                    <td>{{\App\Http\Controllers\ProjectController::getUserName($project->fkuserId)}}</td>
                                    <td>
                                        <form >
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="form-control-input" id="checkHome" value="{{$project->projectId}}" />
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <span class="ml-3"></span>
                                        <a href="{{route('project.update',[$project->projectId])}}" class="btn btn-info btn-sm" data-panel-id="{{$project->projectId}}" onclick="editProject(this)"><i class="fa fa-edit"></i></a>
                                        <span class="mr-3"></span>
                                        <button class="btn btn-danger btn-sm" data-panel-id="{{$project->projectId}}" onclick="deleteProject(this)"><i class="fa fa-trash"></i></button>
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


        $(document).ready(function () {
            $('#checkHome').click(function () {
                var checkHome = $('#checkHome').val();
                $.ajax({
                    type: 'POST',
                    url: "{!! route('project.saveToHome') !!}",
                    cache: false,
                    data: {_token: "{{csrf_token()}}",'id': checkHome},
                    success: function (data) {
                        console.log(data)
                    }
                });

            });
        })


        function deleteProject(x) {
            var id = $(x).data('panel-id');
            $.confirm({
                title: 'Are',
                content: 'Your Sure!',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('project.delete') !!}",
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