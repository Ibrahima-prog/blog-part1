@extends('admin.layouts.app')

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
            <form role="form" action="{{route('post.update',$post->id)}}"method="post">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                  <div class="card-body">
                      <div class="col-lg-6">
<div class="form-group">
                      <label for="title">Post title</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Post subtitle</label>
                        <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Enter subtitle"
                        value="{{$post->subtitle}}"  >
                      </div>

                      <div class="form-group">
                        <label for="title">Post slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug"
                        value="{{$post->slug}}">
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
                      <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1"
                      @if ($post->status==1) checked

                      @endif>
                      <label class="form-check-label" for="exampleCheck1">Publish</label>
                    </div>
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
                                  style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                   >{{$post->body}} </textarea>
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
