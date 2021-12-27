@extends('layouts.admin')

@section('title', 'Add Setting ')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

@endsection

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit Setting </h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">home</a>  </li>
                            <li class="breadcrumb-item"><a href="#">Edit </a>  </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <form class="forms-sample" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
           <section class="content">
               @csrf
             <div class="row">
                <div class="card-body">
                   <div class="col-12 col-sm-12">
                      <div class="card">
                            <div class="default-tab">
                               <ul class="nav nav-tabs" role="tablist">
                                   <li class="nav-item">
                                       <a class="nav-link active" data-toggle="tab" href="#general">General</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#smtp">Smtp Email</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#social">Social Media</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#about">About Us</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#contact">Contact Page</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#references">references</a>
                                   </li>
                               </ul>
                            </div>
                               <div class="tab-content">
                                   <div class="tab-pane fade show active" id="general" role="tabpanel">
                                       <div class="pt-4">
                                           <input type="hidden" id="id" name="id"  value="{{$data->id}}"  class="form-control" >
                                           <div class="form-group">
                                               <label >Title</label>
                                               <input type="text" id="title" name="title"  value="{{$data->title}}"  class="form-control" >
                                           </div>
                                           <div class="form-group">
                                               <label >Keyword</label>
                                               <input type="text" name="keyword" value="{{$data->keyword}}" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                               <label >Description</label>
                                               <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                               <label >Company</label>
                                               <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                                           </div>

                                           <div class="form-group">
                                               <label >Address</label>
                                               <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                               <label>Phone</label>
                                               <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                               <label >Fax </label>
                                               <input type="text" name="fax" value="{{$data->fax}}" class="form-control" >
                                           </div>

                                           <div class="form-group">
                                               <label >Email </label>
                                               <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                               <label>Status</label>
                                               <select class="js-example-basic-single w-100" name="status">
                                                   <option selected="selected">{{$data->status}}</option>
                                                   <option>True</option>
                                                   <option>False</option>
                                               </select>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="tab-pane fade" id="smtp">
                                       <div class="pt-4">
                                           <div class="form-group">
                                               <label >Smtpserver </label>
                                               <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                                           </div>

                                           <div class="form-group">
                                               <label >Smtpemail </label>
                                               <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                                           </div>

                                           <div class="form-group">
                                               <label >Smtppassword </label>
                                               <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                                           </div>

                                           <div class="form-group">
                                               <label >Smtpport </label>
                                               <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" >
                                           </div>
                                       </div>
                                   </div>
                                   <div class="tab-pane fade" id="social">
                                       <div class="pt-4">
                                           <div class="form-group">
                                               <label >Facebook </label>
                                               <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" >
                                           </div>

                                           <div class="form-group">
                                               <label >Instagram </label>
                                               <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" >
                                           </div>

                                           <div class="form-group">
                                               <label >Twitter </label>
                                               <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" >
                                           </div>

                                           <div class="form-group">
                                               <label >Youtube </label>
                                               <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control" >
                                           </div>

                                       </div>
                                   </div>
                                   <div class="tab-pane fade" id="about">
                                       <div class="pt-4">
                                           <div class="form-group">
                                               <label>Aboutus</label>
                                               <textarea id="aboutus" name="aboutus"> {{$data->aboutus}} </textarea>
                                           </div>
                                           <script>
                                               CKEDITOR.replace( 'aboutus' );
                                           </script>
                                       </div>
                                   </div>

                                   <div class="tab-pane fade" id="contact">
                                       <div class="pt-4">
                                           <div class="form-group">
                                               <label>Contact</label>
                                               <textarea id="contact" name="contact" >{{$data->contact}} </textarea>
                                           </div>
                                           <script>
                                               CKEDITOR.replace('contact')
                                           </script>
                                       </div>
                                   </div>

                                   <div class="tab-pane fade" id="references">
                                       <div class="pt-4">
                                           <div class="form-group">
                                               <label>References</label>
                                             <textarea id="references" name="references" >{{$data->references}}</textarea>
                                           </div>
                                           <script>
                                               CKEDITOR.replace('references')
                                           </script>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
               <div class="card-footer">
                   <button type="submit" class="btn btn-primary mr-2">Update </button>
               </div>
      </section>
    </form>
</div>
@endsection
