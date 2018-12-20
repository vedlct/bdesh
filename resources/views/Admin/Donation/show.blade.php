@extends('layouts.mainLayout')
@section('css')
    <!-- DataTables -->
    <link href="{{url('public/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    @endsection
@section('content')

    <!-- end row -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>LastName</th>
                        <th>email</th>
                        <th>company</th>
                        <th>phone</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>State</th>
                        <th>addr1</th>
                        <th>addr2</th>
                        <th>zip</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- end col -->

@endsection

@section('js')

    <script src="{{url('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('public/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('public/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{url('public/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script>
        $(document).ready( function () {

            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                Filter: true,
                stateSave: true,
                type:"POST",
                "ajax":{
                    "url": "{!! route('donation.getData') !!}",
                    "type": "POST",
                    "data":{ _token: "{{csrf_token()}}"},
                },
                columns: [
                    { data: 'firstName', name: 'donations.firstName'},
                    { data: 'lastName', name: 'donations.lastName'},
                    { data: 'email', name: 'donations.email'},
                    { data: 'country', name: 'donations.country' },
                    { data: 'city', name: 'donations.city' },
                    { data: 'state', name: 'donations.state'},
                    { data: 'company', name: 'donations.company'},
                    { data: 'phone', name: 'donations.phone'},
                    { data: 'addr1', name: 'donations.addr1'},
                    { data: 'addr2', name: 'donations.addr2'},
                    { data: 'zip', name: 'donations.zip'},

                ]
            });
        } );

    </script>

@endsection