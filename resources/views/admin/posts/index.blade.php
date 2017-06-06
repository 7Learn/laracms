@extends('layout.admin')
@section('panel_title')
    {{ $page_data['panel_title'] }}
@stop
@section('content')
    @include('admin.posts.notifications')
    @include('admin.posts.operations')
    <table class="table table-bordered">
        <thead>
        @include('admin.posts.columns')
        </thead>
        <tbody>
        @foreach($posts as $post)
            @include('admin.posts.item',$post)
        @endforeach
        </tbody>
        <tfoot>
        @include('admin.posts.columns')
        </tfoot>
    </table>
@stop