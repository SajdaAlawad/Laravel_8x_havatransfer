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

                            <form class="forms-sample" action="{{route('admin_rezervationlist_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-bordered table-striped ">

                                    <tr>
                                        <th>id</th><td> {{ $data->id }}</td>
                                    </tr>
                                    <tr>
                                    </tr>
                                        <th>User</th> <td> {{ $data->user->name }}</td>
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
                                        <th>Product</th><td> {{ $data->product_id }}</td>
                                    <tr>
                                    </tr>
                                    <th>From Where</th><td> {{ $data->from_location_id_id }}</td>
                                    <tr>

                                    </tr>
                                    <th>To Where</th><td> {{ $data->to_location_id_id }}</td>
                                    <tr>
                                    </tr>
                                    <th>Total Price</th><td> {{ $data->total_price_id }}</td>
                                    <tr>
                                    </tr>
                                    <th>Airline</th><td> {{ $data->airline }}</td>
                                    <tr>
                                    </tr>
                                    <th>Rezervation No</th><td> {{ $data->rezervation_no }}</td>
                                    <tr>
                                    </tr>
                                    <th>Rezervation Date</th><td> {{ $data->rezervation_date }}</td>
                                    <tr>
                                    </tr>
                                    <th>Rezervation Time</th><td> {{ $data->rezervation_time }}</td>
                                    <tr>
                                    </tr>
                                    <th>Pickup Time</th><td> {{ $data->pickup_time }}</td>
                                    <tr>
                                    </tr>
                                    <th>IP</th><td> {{ $data->IP }}</td>
                                     <tr>
                                    </tr>
                                        <th>Admin Note:</th>
                                    <td>
                                    <textarea id="note" name="note" rows="3" cols="30">{{ $data->note }}</textarea>
                                    </td>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>Accepted</option>
                                                <option>Canceled</option>
                                                <option>Shipping</option>
                                                <option>Completed</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <th>Updated Date</th><td> {{ $data->updated_at }}</td>
                                    <tr>
                                    </tr>
                                     <td>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary mr-2">Update Rezervation </button>
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

