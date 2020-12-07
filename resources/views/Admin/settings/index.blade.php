@extends('Admin.app')
@section('title-page', 'Settings');
@section('content')

@component('Admin.shared.table', ['titlePage' => $titlePage, 'routeName' => $routeName])
<table id="example1" class="table table-bordered table-striped text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{trans('admin.header_logo')}}</th>
            <th>{{trans('admin.footer_logo')}}</th>
            <th>{{trans('admin.intro_image')}}</th>
            <th>{{trans('admin.status_website')}}</th>
            <th>Control</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rows as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>
              @if(file_exists(public_path('uploads/settings/'.$row->logo_nav)))
              <img src="{{url('/')}}/uploads/settings/{{$row->logo_nav}}" width="50px" height="50px">
              @else No Image @endif
            </td>
            <td>
              @if(file_exists(public_path('uploads/settings/'.$row->logo_footer)))
              <img src="{{url('/')}}/uploads/settings/{{$row->logo_footer}}" width="50px" height="50px">
              @else No Image @endif
            </td>
            <td>
              @if(file_exists(public_path('uploads/settings/'.$row->intro_image)))
              <img src="{{url('/')}}/uploads/settings/{{$row->intro_image}}" width="50px" height="50px">
              @else No Image @endif
            </td>
            <td>{{$row->status_website == '0' ? trans('admin.close'):trans('admin.open')}}</td>
            <td>
                @include('Admin.shared.buttons.edit')
                @include('Admin.shared.buttons.delete')
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endcomponent

@endsection
