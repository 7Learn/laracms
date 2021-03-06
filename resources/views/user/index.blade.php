@extends('layout.user')

@section('content')
    @if(isset($all_posts) && count($all_posts) > 0)
        @foreach($all_posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->post_title  }}</div>
                <div class="panel-body">
                    {{--{{ $post->post_content  }}--}}
                    {!! $post->excerpt !!}

                    <div class="post-meta">
                        <span>نویسنده :{{ $post->user->full_name }}</span>
                        <span>تاریخ انتشار :{{ jDate::forge($post->created_at)->format('Y-m-d H:i:s') }}</span>
                        <span>تعداد نظرات :{{ $post->comments()->count() }} </span>
                    </div>
                    <div class="continue pull-left" >
                        <a class="btn btn-primary" href="{{ route('home.show',$post->post_id)  }}">ادامه مطلب</a>
                    </div>
                </div>
            </div>
            @endforeach
        <div>
            {{ $all_posts->links()  }}
        </div>
    @endif
    @endsection
