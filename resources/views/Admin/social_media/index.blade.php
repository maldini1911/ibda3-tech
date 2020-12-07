@extends('Admin.app')

@section('content')

@component('Admin.shared.table', ['titlePage' => $titlePage, 'routeName' => $routeName])
<table id="example1" class="table table-bordered table-striped text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{trans('admin.icon_name')}}</th>
            <th>{{trans('admin.media_name')}}</th>
            <th>Control</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rows as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td><i class="fab {{$row->icon_name}}"></i></td>
            <td>{{$row->media_name}}</td>
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