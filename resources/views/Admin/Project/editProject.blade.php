
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
                        <form action="{{route('project.updateData')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" id="projectId" name="id" value="{{$projectUpdate->projectId}}">
                                <label class="col-sm-2 col-form-label">Project Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="projectName" value="{{$projectUpdate->pName}}" class="form-control" required placeholder="Project Name">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Project Location</label>
                                <div class="col-sm-10">
                                    <input type="text" name="projectLocation"value="{{$projectUpdate->pLocation}}" class="form-control" required placeholder="Project Location">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Project Goal</label>
                                <div class="col-sm-10">
                                    <input type="number" name="pGoal" value="{{$projectUpdate->pGoal}}"  class="form-control" required  placeholder="Project Goal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Project Raised</label>
                                <div class="col-sm-10">
                                    <input type="number" name="pRaised" value="{{$projectUpdate->pRaised}}" class="form-control" required placeholder="Project Raised">
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
                                    <textarea name="pDescription" class="summernote"> {!! $projectUpdate->pDescription !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Project Description</label>
                                <div class="col-sm-10">
                                    <textarea name="bdeshDescription" class="summernote"> {!! $projectUpdate->bdeshDescription !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Project image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="projectImage[]" class="form-control" multiple>
                                </div>
                            </div>
                           <div class="row" id="projectTable">
                               @foreach($projectImage as $image)
                                   <div class="col-md-3 mt-2" >
                                       <button type="button" class="btn btn-danger btn-sm" data-Panel-id="{{$image->projectImageId}}" onclick="deleteImage(this)">
                                           <i class="fa fa-trash"></i>
                                       </button>
                                       <img src="{{url('public/Gallery')}}/{{$image->projectPath}}" class="img-thumbnail" alt="">
                                   </div>
                               @endforeach

                           </div>
                            <div class="form-group row">

                                    <label class="col-sm-2 col-form-label">Header image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="headerImage" class="form-control">
                                </div>

                            </div>
                           @if($projectUpdate->headerImage !=null)
                            <div class="col-md-3 mt-2" id="headerImageLoad" >
                                <button type="button" class="btn btn-danger btn-sm" data-Panel-id="{{$projectUpdate->projectId}}" onclick="deleteHeaderImage(this)">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <img src="{{url('public/HeaderImage')}}/{{$projectUpdate->headerImage}}" class="img-thumbnail" alt="">
                            </div>

                        @endif

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
    <script>
        function deleteImage(x) {
            var id = $(x).data('panel-id')
            $.confirm({
                title: 'Are',
                content: 'Your Sure!',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('project.image.delete') !!}",
                            cache: false,
                            data: {_token: "{{csrf_token()}}",'id': id},
                            success: function (data) {
                                $.alert('Image Deleted!');
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
        function deleteHeaderImage(x) {
            var id = $(x).data('panel-id');
            console.log(id)
            $.confirm({
                title: 'Are',
                content: 'Your Sure!',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('project.deleteHeaderImage') !!}",
                            cache: false,
                            data: {_token: "{{csrf_token()}}",'id': id},
                            success: function (data) {
                                $.alert('Image Deleted!');
                                $("#headerImageLoad").load(" #headerImageLoad");
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
