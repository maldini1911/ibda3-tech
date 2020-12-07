{{csrf_field()}}
<div class="row">
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{trans("admin.title")}}</label>
            @php $input = 'title'; @endphp
            <input type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->title:''}}">
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{trans("admin.content")}}</label>
            @php $input = 'content'; @endphp
            <textarea class="form-control @error($input) is-invalid @enderror" name="{{$input}}">
             {{isset($row) ? $row->content:''}}
            </textarea>
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{trans("admin.slug")}}</label>
            @php $input = 'slug'; @endphp
            <input type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->slug:''}}">
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">{{trans("admin.show_in_menu")}}</label>
        @php $input = 'show_in_menu'; @endphp
        <select name="{{$input}}" class="form-control">
            @isset($row)
                <option value="{{$row->show_in_menu}}">
                    {{$row->show_in_menu == '0' ? trans('admin.hidden'):trans('admin.show')}}
                </option>
            @endisset
            <option value="0">{{trans('admin.hidden')}}</option>
            <option value="1">{{trans('admin.show')}}</option>
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
            <label class="bmd-label-floating">{{trans("admin.image")}}</label>
            @php $input = 'image'; @endphp
            <input type="file" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" required>
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

</div>
