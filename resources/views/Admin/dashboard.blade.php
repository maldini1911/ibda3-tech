@extends('Admin.app')
@section('title-page', 'Dashboard');
@section('content')

    <h4 class="alert alert-warning"> States Website Ibda3 </h4>
    <div class="row text-center">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{App\User::count()}}</h3>
                <p>Count Admins</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{App\Models\Page::count()}}</h3>
                <p>Count Pages</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{App\Models\Service::count()}}</h3>
                <p>Count Services</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{App\Models\Project::count()}}</h3>
                <p>Count Projects</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{App\Models\Post::count()}}</h3>
                <p>Count Posts</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{App\Models\Client::count()}}</h3>
                <p>Count Clients</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <hr>
        <!-- End -->
@endsection
