@extends('Design.index')

@section('info-page')

<h3 class="text-right address-more-blog">المقالات</h3>
<section class="read-blog text-center">
  <h3 class="text-right we-works-inside">بعد مرور 10 سنوات تحديثات ويندوز 7 أوشك علي الأنتهاء</h3>
  <div class="container">
    <div class="info-read-blog wow bounceInUp"><img src="{{url("/")}}/uploads/posts/{{$post->image}}">
      <p>{{$post->content}}</p>
    </div>
  </div>
</section>
@endsection
