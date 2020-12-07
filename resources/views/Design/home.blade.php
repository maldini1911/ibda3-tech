@extends('Design.index')

@section('info-page')

  <section class="header">
    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
        <div class="header-right text-center wow fadeInRight"><img src="{{url("/")}}/uploads/settings/{{$setting->intro_image}}"></div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
        <div class="header-left wow fadeInLeft">
          <h2>{{$setting->slogan}}</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Page Who We -->

  <section class="who_we">
    @foreach($pages as $page)
      @if($page->title == 'من نحن')
        <div class="container">
          <h3 class="text-center">{{$page->title}} </h3>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center wow fadeInRight"><img src="{{url("/")}}/uploads/pages/{{$page->image}}"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
              <p>{{$page->content}}</p>
            </div>
          </div>
        </div>
      @endif
    @endforeach
    <h3 class="text-center">ما نقدمه لكم</h3>
    <div class="slider services">
      <div class="container">
        <div class="autoplay wow fadeInLeft">
        @for($i = 0; $i <= 2; $i++)
          @foreach($services as $service)
            <div>
              <div class="info-we text-center"><img src="{{url("/")}}/uploads/services/{{$service->image}}">
                <h4>{{$service->title}}</h4>
                <p>{{$service->content}}</p>
              </div>
            </div>
          @endforeach
        @endfor
        </div>
      </div>
      <div class="text-center"><i class="fa fa-arrow-right next">   </i><i class="fa fa-arrow-left prev"> </i></div>
    </div>
  </section>
<!-- End Page Who We -->
<!-- Start Works -->
  <section class="we-works">
    <div class="container">
      <h3 class="text-center">بعض أعمالنا</h3>
      <div class="row wow fadeInLeft">
      @foreach($projects as $project)
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="info text-center">
            <img src="{{url("/")}}/uploads/projects/{{$project->image}}">
            <a href="{{url('app/'.$project->id)}}">{{$project->title}}</a>
          </div>
        </div>
      @endforeach
      </div><a class="link-watch-works" href="{{url('works')}}">شـاهد أعمـالنـا</a>
    </div>
  </section>
<!-- End Works -->
<!-- Start Posts -->
  <section class="blogs">
    <div class="container">
      <div class="row">
        @foreach($posts  as $post)
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="info-blogs-home wow fadeInRight"><img src="{{url("/")}}/uploads/posts/{{$post->image}}">
            <p>{{$post->title}} </p><i class="fas fa-eye views" style="color:red"><span> {{$post->views != null ? $post->views : 0}}</span></i><a class="link-read-now" href="{{url('blog/'.$post->id)}}">اقرأ الأن</a>
          </div>
        </div>
        @endforeach
      </div>
      <a class="more-blogs" href="{{url('blogs')}}">المزيد   </a>
    </div>
  </section>
  <!-- End Posts -->
  <section class="clients">
    <h3 class="text-center">عملاء نفتخر بيهم  </h3>
    <div class="slider-clients">
      <div class="container">
        <div class="info-slider wow fadeInLeft">
          @foreach($clients as $client)
          <div>
            <div class="info-clients text-center"><img src="{{url("/")}}/uploads/clients/{{$client->image}}"></div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="text-center"><i class="fa fa-arrow-right next">   </i><i class="fa fa-arrow-left prev">  </i></div>
    </div>
  </section>

@endsection
