<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coin Me</title>
    @include('adminLayouts.header')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
</head>

<body>
    <div class="main-wrapper">
        @include('adminLayouts.nav')
        @include('adminLayouts.sidebar')
        <div class="page-wrapper">
            <div class="content">

                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Users</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{url('admin/users/add')}}" class="btn btn-primary float-right btn-rounded"><i
                                class="fa fa-plus"></i> Add Users</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table" id="table_data">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile No</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#table_data').DataTable({
                ajax: {
                    url: '/admin/users/data',
                    type: 'GET',
                    dataType: 'json',
                    processing: true,
                    serverSide: true,
                },
                processing: true,

                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "email"
                    },
                     {
                        "data": "mobile_no"
                    },
                     {
                        "data": "address"
                    },
                     {
                        "data": "gender"
                    },
                    
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-danger btn-sm" onclick="deleteAccess(' +
                                row.id + ')">Delete</button>';
                        }
                    }


                ],
                "dom": 'Bfrtip',
                "buttons": [{
                        "extend": 'copyHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'excelHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'csvHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'pdfHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'print',
                        "title": 'Print'
                    }
                ]
            });
        });

        function deleteAccess(user_id) {
            if (confirm('Are you sure you want to delete this user account?')) {
                $.ajax({
                    url: '/admin/users/developers/delete/' + user_id,
                    type: 'GET',
                    data: {
                        _method: 'DELETE'
                    },
                    success: function(response) {
                        if (response.status === 'success') {

                            $('#table_data').DataTable().ajax.reload();
                        } else {

                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        }
    </script>


    <div class="sidebar-overlay" data-reff=""></div>
   
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/adminbootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/adminapp.js') }}"></script>
    <script src="{{ url('assets/js/jquery.slimscroll.js') }}"></script>
</body>


<!-- blank-page24:04-->

</html>
