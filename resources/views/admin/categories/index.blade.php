@extends('layout.admin')
@section('panel_title')
    {{ $page_data['panel_title'] }}
@stop
@section('content')
    @include('admin.categories.notifications')
    @include('admin.categories.operations')
    <table class="table table-bordered">
        <thead>
        @include('admin.categories.columns')
        </thead>
        <tbody>
        @foreach($categories as $category)
            @include('admin.categories.item',$category)
        @endforeach
        </tbody>
        <tfoot>
        @include('admin.categories.columns')
        </tfoot>
    </table>
@stop