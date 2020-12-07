@extends('Design.index')

@section('info-page')

<h3 class="text-right address-more-blog">المقالات</h3>
<section class="blogs">
  <div class="container">
    <div class="row wow bounceInUp">
    @foreach($posts as $post)
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="info-blogs-home">
          <img src="{{url("/")}}/uploads/posts/{{$post->image}}">
          <p>{{$post->title}} </p>
           <i class="fas fa-eye views" style="color:red"> <span>{{$post->views != null ? $post->views : 0}}</span></i>
           <a class="link-read-now" href="read_blog.html">اقرأ الأن</a>
        </div>
      </div>
    @endforeach
    </div>
    <ul class="pagination text-center">
      {!! $posts->render() !!}
    </ul>
  </div>
</section>

@endsection
