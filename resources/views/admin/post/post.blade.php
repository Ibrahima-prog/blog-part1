@extends('admin.layouts.app')
@section('headsection')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
@endsection
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Titles</h3>
                </div>
                @if (count($errors)>0)
                    @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                @endif
                <!-- /.card-header -->
                <!-- form start -->
            <form role="form" action="{{route('post.store')}}"method="post">
                {{ csrf_field() }}
                  <div class="card-body">
                      <div class="col-lg-6">
<div class="form-group">
                      <label for="title">Post title</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="title">Post subtitle</label>
                        <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Enter subtitle">
                      </div>

                      <div class="form-group">
                        <label for="title">Post slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug">
                      </div>
  </div>
                      <div class="col-lg-6">
 <div class="form-group">
                        <label for="image">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>
                       <div class="form-check">
                      <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" value="1">
                      <label class="form-check-label" for="exampleCheck1" >Publish</label>
                    </div>
                      </div>


                      <div class="form-group">
                        <label>Select Tags</label>
                        <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true"
                        name="tags[]">
                            @foreach ($tags as $tag)
                                 <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                                 </select>

                               <div class="form-group">
                                 <label>Select Category</label>
                                 <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true"
                                 name="categories[]">
                                     @foreach ($categories as $category)
                                     <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                 </select>
                               </div>




                  </div>
                  <!-- /.card-body -->

                  <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        WRITE POST HERE
                        <small>Simple and fast</small>
                      </h3>
                      <!-- tools box -->
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                          <i class="fas fa-minus"></i></button>

                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                      <div class="mb-3">
                        <textarea class="textarea" placeholder="Place some text here" name="body"
                                  style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>

                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a  href="{{route('post.index')}}" class="btn btn-warning offset-md-4">Back</a>

                  </div>
                </form>
              </div>
              <!-- /.card -->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

 <!-- Bootstrap core JavaScript -->
 <script src="{{asset('user/vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 <!-- Custom scripts for this template -->
 <script src="{{asset('user/js/clean-blog.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
@endsection
@section('footersection')
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
<script>
$(function(){

CKEDITOR.replace('editor1');
$(".textarea").wysihtml5();

});
</script>
<script>
$(document).ready(function(){
    $('.select2').select2();
    $('.select2').select2();
});
</script>
@endsection
