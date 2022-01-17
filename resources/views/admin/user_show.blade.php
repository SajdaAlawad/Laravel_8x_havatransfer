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
<title>{{$data->name}}</title>
    <section class="content">
        <div class="card">
            <div class="card-body">
                 <div class="card-header">
                     <h3 class="card-title">User Roles</h3>
                     @include('home.message')
                 </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <table class="table table-bordered table-striped ">
                               <tr>
                                  <th rowspan="8" align="center" valign="center">
                                    @if($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="300" style="border-radius: 10px" alt="">
                                    @endif
                                  </th>
                               </tr>
                                <tr>
                                    <th>Name</th> <td> {{ $data->name }}</td>
                                </tr>
                                 <tr>
                                     <th>Email </th>   <td>{{ $data->email }} </td>
                                  </tr>
                                  <tr>
                                         <th>Phone </th>   <td>{{ $data->phone }} </td>
                                      </tr>
                                      <tr>
                                         <th>Adress </th>   <td>{{ $data->address }} </td>
                                      </tr>
                                     <tr>
                                      <th>Date </th>   <td>{{ $data->created_at }} </td>
                                     </tr>
                                    <tr>
                                        <th>Roles</th>
                                        <td>
                                            <table>
                                                @foreach($data->roles as $row)
                                                    <tr>
                                                        <td>{{$row->name}}</td>
                                                        <td>
                                                            <a href="{{route('admin_user_role_delete',['userid'=> $data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete! are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Add Roles</th>
                                        <td>
                                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                               @csrf
                                              <select name="roleid">
                                                @foreach($datalist as $rs)
                                                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                @endforeach
                                              </select>
                                                <button type="submit" class="btn btn-primary">Add Role</button>
                                            </form>
                                        </td>
                                    </tr>

                                </table>
                            </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

