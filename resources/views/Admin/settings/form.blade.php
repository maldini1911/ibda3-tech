{{csrf_field()}}
<div class="row">
    <div class="col-md-12">
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">{{trans("admin.header_logo")}}</label>
                @php $input = 'logo_nav'; @endphp
                <input type="file" class="form-control @error($input) is-invalid @enderror" name="{{$input}}">
                @error($input)
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{trans("admin.footer_logo")}}</label>
            @php $input = 'logo_footer'; @endphp
            <input type="file" class="form-control @error($input) is-invalid @enderror" name="{{$input}}">
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{trans("admin.intro_image")}}</label>
            @php $input = 'intro_image'; @endphp
            <input type="file" class="form-control @error($input) is-invalid @enderror" name="{{$input}}">
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{trans("admin.slogan")}}</label>
            @php $input = 'slogan'; @endphp
            <input type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->slogan:''}}">
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{trans("admin.address")}}</label>
            @php $input = 'address'; @endphp
            <input type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->address:''}}">
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{trans("admin.status_website")}}</label>
            @php $input = 'status_website'; @endphp
            <select name="{{$input}}" class="form-control">
                @isset($row)
                    <option value="{{$row->status_website}}">
                        {{$row->status_website == '0' ? trans('admin.close'):trans('admin.open')}}
                    </option>
                @endisset
                <option value="0">{{trans('admin.close')}}</option>
                <option value="1">{{trans('admin.open')}}</option>
            </select>
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{trans("admin.maintenance_message")}}</label>
            @php $input = 'maintenance_message'; @endphp
            <textarea class="form-control @error($input) is-invalid @enderror" name="{{$input}}">
             {{isset($row) ? $row->maintenance_message:''}}
            </textarea>
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

</div>