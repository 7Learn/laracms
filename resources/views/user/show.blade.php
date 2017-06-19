@extends('layout.user')

@section('content')
    @if(isset($post) )
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->post_title  }}</div>
                <div class="panel-body">
                    {{ $post->post_content  }}
                    {{--{!! $post->excerpt !!}--}}

                    <div class="post-meta">
                        <span>نویسنده :{{ $post->user->full_name }}</span>
                        <span>تاریخ انتشار :{{ jDate::forge($post->created_at)->format('Y-m-d H:i:s') }}</span>
                        <span>تعداد نظرات :{{ $post->comments()->count() }} </span>
                    </div>

                </div>
            </div>
    @endif
    @endsection
