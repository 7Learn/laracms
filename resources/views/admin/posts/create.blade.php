@extends('layout.admin')
@section('panel_title')
    {{ $page_data['panel_title'] }}
@stop
@section('content')
    {{--@include('admin.users.operations')--}}
    @include('admin.posts.errors')
    @include('admin.posts.form')
@stop