@extends('layout.admin')
@section('panel_title')
    {{ $page_data['panel_title'] }}
@stop
@section('content')
    @include('admin.users.operations')
    <table class="table table-bordered">
        <thead>
        @include('admin.users.columns')
        </thead>
        <tbody>
        @foreach($users as $user)
            @include('admin.users.item',$user)
        @endforeach
        </tbody>
        <tfoot>
        @include('admin.users.columns')
        </tfoot>
    </table>
@stop