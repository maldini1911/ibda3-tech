@extends('Admin.app')
@section('title-page', 'Add Client')
@section('content')

@component('Admin.shared.create', ['titlePage' => $titlePage, 'routeName' => $routeName])

<form action="{{route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
    @include('Admin.'.$routeName.'.form')
    <button type="submit" class="btn btn-success"> {{trans('admin.add')}}</button>
</form>

@endcomponent
@endsection
