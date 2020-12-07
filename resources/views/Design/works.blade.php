@extends('Design.index')

@section('info-page')

<section class="we-works text-center">
  <h3 class="text-right we-works-more">أعمالنا</h3>
  <div class="container">
    <div class="row wow fadeInLeft">
    @foreach($projects as $project)
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="info text-center">
          <img src="{{url("/")}}/uploads/projects/{{$project->image}}">
          <a href="{{url('app/'.$project->id)}}">{{$project->title}}</a>
         </div>
      </div>
    @endforeach
    </div>
    <ul class="pagination text-center">
     {!! $projects->render() !!}
    </ul>
  </div>
</section>

@endsection
