  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{url('/')}}/adminlte/img/logo-admin.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"

      <span class="brand-text font-weight-light">Islam Adel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active title-sidebar">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                  {{trans('admin.dashboard')}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{trans('admin.admins')}}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/settings')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{trans('admin.settings')}}</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- ================ -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active title-sidebar">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                  {{trans('admin.pages')}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('admin/pages')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{trans('admin.pages')}}</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/services')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{trans('admin.services')}}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/projects')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{trans('admin.projects')}}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/posts')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{trans('admin.posts')}}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/clients')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{trans('admin.clients')}}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/social_media')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{trans('admin.social_media')}}</p>
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
