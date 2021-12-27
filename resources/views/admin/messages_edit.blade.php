<link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/feather/feather.css">
<link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/js/select.dataTables.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/vertical-layout-light/style.css">
<!-- endinject -->
<link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.png" />
    <section class="content">
        <div class="card">
            <div class="card-body">
{{--                <h3>Message Details</h3>--}}
                @include('home.message')
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                            <form class="forms-sample" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-bordered table-striped ">

                                    <tr>
                                        <th>id</th><td> {{ $data->id }}</td>
                                    </tr>
                                    <tr>
                                    </tr>
                                        <th>Name</th> <td> {{ $data->name }}</td>
                                    <tr>
                                    </tr>
                                        <th>Email </th>   <td>{{ $data->email }} </td>
                                    <tr>
                                    </tr>
                                        <th>Phone</th><td> {{ $data->phone }}</td>
                                    <tr>
                                    </tr>
                                        <th>Subject</th><td> {{ $data->subject }}</td>
                                    <tr>
                                    </tr>
                                        <th>Message</th><td> {{ $data->message }}</td>
                                    <tr>
                                    </tr>
                                        <th>Admin Note</th>
                                    <td>
                                    <textarea id="note" name="note">{{ $data->note }}</textarea>
                                    </td>
                                    <tr>
                                        <td></td>
                                        <td>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary mr-2">Update Message </button>
                                        </div>
                                        </td>
                                    </tr>

                                </table>
                            </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

