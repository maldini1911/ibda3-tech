{{csrf_field()}}
<div class="row">
    <div class="col-md-12">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">{{trans("admin.name")}}</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{isset($row) ? $row->name:''}}">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">{{trans("admin.email")}}</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{isset($row) ? $row->email:''}}">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">{{trans("admin.password")}}</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
</div>