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
                  <h3 class="card-title">Edit Role</h3>
                </div>
           @include('includes.messages');
                <!-- /.card-header -->
                <!-- form start -->
            <form role="form" action="{{route('role.update',$role->id)}}" method="POST">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                  <div class="card-body">
                      <div class="offset-lg-4 col-lg-5">
<div class="form-group">
                      <label for="title">Role </label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter role title"
                      value="{{$role->name}}">
                    </div>



  </div>





  <button type="submit" class="btn btn-primary offset-md-4">Submit</button>
<a  href="{{route('role.index')}}" class="btn btn-warning offset-md-4">Back</a>

                  </div>
                  <!-- /.card-body -->




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
