@extends('admin.layouts.app')
@section('headsection')
<link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

@endsection
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Permissions</h3>
        <a class="offset-5 btn btn-success" href="{{route('permission.create')}}">Add new</a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="box-header">
                 @include('includes.messages')
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Permission </th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($permissions as $permission)
                       <tr>
                      <td>{{$loop->index+1}}</td>
                      <td>{{$permission->name}}</td>
                      <td><a href="{{route('permission.edit',$permission->id)}}"><i class="fas fa-edit" style="font-size: 20px;"></i></a></td>
                      <td>
                      <form id="delete-form-{{$permission->id}}" method="POST" action="{{route('permission.destroy',$permission->id)}}" style="display: none">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}

                    </form>

                        <a href=""
                         onclick="if(confirm('Are you sure you want to delete?'))
                         {
                             event.preventDefault();
                         document.getElementById('delete-form-{{$permission->id}}').submit();
                         }
                         else{
                             event.preventDefault()
                             }
                             ">
                         <i class="fas fa-trash" style="font-size: 20px;"></i></a></td>
                    </tr>
          @endforeach


                    </tbody>
                    <tfoot>
                    <tr>
                        <th>S.No</th>
                        <th>Permission </th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection

@section('footersection')
{{-- <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script> --}}
{{-- <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>

<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
{{-- <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script> --}}
{{-- <script src="{{ asset('admin/dist/js/demo.js') }}"></script> --}}
<script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
@endsection
