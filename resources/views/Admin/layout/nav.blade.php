 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('admin/dashboard')}}" class="nav-link"> {{trans('admin.home')}} </a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Start Language -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{url('admin/logout')}}">
        <i class="fas fa-sign-out-alt"></i>  {{trans('admin.logout')}}
        </a>
      </li>

      <!-- Options Admin -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->
