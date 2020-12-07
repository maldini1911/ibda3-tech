@extends('Admin.app')
@section('title-page', 'All Projects')
@section('content')

@component('Admin.shared.table', ['titlePage' => $titlePage, 'routeName' => $routeName])
<table id="projects" class="table table-bordered table-striped text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{trans('admin.title')}}</th>
            <th>{{trans('admin.image')}}</th>
            <th>{{trans('admin.cover_image')}}</th>
            <th>{{trans('admin.is_active')}}</th>
            <th>{{trans('admin.user_id')}}</th>
            <th>Control</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rows as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->title}}</td>
            <td>
              @if(file_exists(public_path('uploads/projects/'.$row->image)))
              <img src="{{url('/')}}/uploads/projects/{{$row->image}}" width="50px" height="50px">
              @else No Image @endif
            </td>
            <td>
              @if(file_exists(public_path('uploads/projects/'.$row->cover_image)))
              <img src="{{url('/')}}/uploads/projects/{{$row->cover_image}}" width="50px" height="50px">
              @else No Image @endif
            </td>
            <td>{{$row->is_active == '0' ? trans('admin.not_active'):trans('admin.active')}}</td>
            <td>{{$row->user()->first()->name}}</td>
            <td>
                @include('Admin.shared.buttons.edit')
                @include('Admin.shared.buttons.delete')
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
{!! $rows->render() !!}

@endcomponent
@endsection
