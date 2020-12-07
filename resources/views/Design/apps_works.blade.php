@extends('Design.index')

@section('info-page')

<section class="apps-works text-center">
  <h3 class="text-right">{{$project->title}}</h3>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <img class="wow rotateInDownLeft app-image" src="{{url('/')}}/uploads/projects/{{$project->cover_image}}">
    </div>
  </div>
  <h3 class="text-right">تفاصيل المشروع</h3>
  <div class="details">
    <p class="text-center">{{$project->content}}</p>
  </div>
  <h3 class="text-right">صور للعرض</h3>
  <div class="text-center"><i class="fa fa-arrow-right" id="prev">   </i><i class="fa fa-arrow-left" id="next"></i></div>
    <div class="card-carousel">
      @foreach($project->photos as $row)
      <div class="my-card"><img src="{{url('/'.$row->url)}}"></div>
      <!-- <div class="my-card"><img src="{{url('/')}}/website/imges/slider-two.png"></div>
      <div class="my-card"><img src="{{url('/')}}/website/imges/slider-three.png"></div>
      <div class="my-card"><img src="{{url('/')}}/website/imges/slider-four.png"></div>
      <div class="my-card"><img src="{{url('/')}}/website/imges/slide-one.png"></div> -->
      @endforeach
      <div class="my-card">
        <img src="{{url('/')}}/website/imges/slider-three.png">
        <img src="{{url('/')}}/website/imges/slider-two.png">
      </div>

  </div>
</section>



@endsection
