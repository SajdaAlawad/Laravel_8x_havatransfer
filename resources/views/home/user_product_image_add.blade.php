<html>
<head>
    <title>Image Gallery</title>
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
</head>
<body>

<div class="card">
    <div class="card-body">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <form role="form" action="{{route('user_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label >Image</label>
                        <input type="file" name="image" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Add Image</button>

                </form>

            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped ">
        <thead>
        <tr>
            <th>id</th>
            <th>Title </th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($images as $rs)
            <tr class="table-info">
                <td> {{ $rs->id }}</td>
                <td> {{ $rs->title }}</td>
                <td>
                    @if ($rs->image)
                        <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                    @endif
                </td>
                <td>
                    <a href="{{route('user_image_delete',['id'=>$rs->id,'product_id'=>$rs->id])}}" onclick="return confirm('Record will be Delete! are you sure?')">
                        <img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="card-footer">
        ...
    </div>
</div>
</body>
</html>

