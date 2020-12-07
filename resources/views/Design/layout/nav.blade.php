<nav class="navbar {{$nav_page}}">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8"><img src="{{url("/")}}/uploads/settings/{{$setting->logo_nav}}"></div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4"><i class="fas fa-bars"></i>
        <ul class="list-unstyled menu-nav">
          <li><a href="{{url('/')}}">الرئيسية</a></li>
          <li><a href="{{url('/')}}" data-scroll="who_we">من نحن</a></li>
          <li><a href="{{url('/')}}" data-scroll="services">خدماتنا</a></li>
          <li><a href="{{url('works')}}">أعمالنا</a></li>
          <li><a href="{{url('blogs')}}">المقالات</a></li>
          <li><a href="{{url('/')}}" data-scroll="clients">العملاء</a></li>
        </ul>
      </div>
    </div>
</nav>
