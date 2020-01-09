 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">My Blog</span>
    </a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">

          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{route('post.index')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Posts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('category.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('tag.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tags</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('role.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Roles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('permission.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Permissions</p>
            </a>
          </li>
        </ul>
      </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
