<div class="row">
  <div class="col-md-12">
    <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <a href="{{route($routeName.'.index')}}"> All {{$titlePage}}</a>
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            {{$slot}}
          </div>
          <!-- /.card-body -->
    </div>
  </div>
</div>