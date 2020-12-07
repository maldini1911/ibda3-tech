@extends('Admin.app')
@section('title-page', 'All Pages');
@section('content')

@component('Admin.shared.table', ['titlePage' => $titlePage, 'routeName' => $routeName])
<table id="example1" class="table table-bordered table-striped text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{trans('admin.title')}}</th>
            <th>{{trans('admin.show_in_menu')}}</th>
            <th>{{trans('admin.image')}}</th>
            <th>{{trans('admin.user_id')}}</th>
            <th>Control</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rows as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->title}}</td>
            <td>{{$row->show_in_menu == '0' ? trans('admin.hidden'):trans('admin.show')}}</td>
            <td>
              @if(file_exists(public_path('uploads/pages/'.$row->image)))
              <img src="{{url("/")}}/uploads/pages/{{$row->image}}" width="50px" height="50px">
              @else
              No Image
              @endif
            </td>
            <td>{{$row->user()->first()->name}}</td>
            <td>
                @include('Admin.shared.buttons.edit')
                @include('Admin.shared.buttons.delete')
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $rows->render() !!}
@endcomponent

@endsection
