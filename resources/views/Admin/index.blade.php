@include('Admin.layout.header')
@include('Admin.layout.nav')
@include('Admin.layout.aside')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @include('Admin.layout.message')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <hr>
            <h4 class="alert alert-info text-center"> @yield('title-page') </h4>
            @yield('content')
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>


@include('Admin.layout.footer')
