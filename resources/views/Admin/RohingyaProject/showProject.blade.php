@extends('layouts.mainLayout')

@section('content')

    <!-- end row -->
            <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header mb-5">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Show Rohingya Project</h3>

                                    </div>
                                    <div class="col-6">
                                        <a href="{{route('rohingya.create')}}" class="btn btn-primary pull-right">Add Project</a>
                                    </div>
                                </div>
                            </div>
                            <table id="projectTable" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image Title</th>
                                    <th>Image</th>
                                    <th>serial</th>
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->title}}</td>
                                    <td>{!! $project->imagetitle !!}</td>
                                    <td>{{$project->image}}</td>
                                    <td>{{$project->serial}}</td>
                                    <td>
                                        <span class="ml-3"></span>
                                        <a href="{{route('rohingya.edit',[$project->rohingyaprojectId])}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <span class="mr-3"></span>
                                        <button class="btn btn-danger btn-sm" data-panel-id="{{$project->rohingyaprojectId}}" onclick="deleteProject(this)"><i class="fa fa-trash"></i></button>
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
                            url: "{!! route('rohingya.delete') !!}",
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