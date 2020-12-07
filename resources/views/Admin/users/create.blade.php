@extends('Admin.app')
@section('title-page', 'Add Admin');
@section('content')

@component('Admin.shared.create', ['titlePage' => $titlePage, 'routeName' => $routeName])

<form action="{{route('users.store')}}" method="POST">
    @include('Admin.'.$routeName.'.form')
    <button type="submit" class="btn btn-success"> {{trans('admin.add')}}</button>
</form>

@endcomponent
@endsection
