@extends('Admin.app')
@section('title-page', 'Edit Admin');
@section('content')

@component('Admin.shared.create', ['titlePage' => $titlePage, 'routeName' => $routeName])

<form action="{{route($routeName.'.update', ['id' => $row])}}" method="POST">
    {{method_field('PUT')}}
    @include('Admin.'.$routeName.'.form')
    <button type="submit" class="btn btn-success"> {{trans('admin.edit')}}</button>
</form>

@endcomponent
@endsection
