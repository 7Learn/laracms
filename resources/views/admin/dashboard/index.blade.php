@extends('layout.admin')
@section('panel_title')
    {{ $page_data['panel_title']  }}
    @stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">{{ $data['total_users']  }}</span>
                        تعداد کل کابران :
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{ $data['total_posts']  }}</span>
                        تعداد کل مطالب :
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{ $data['total_comments']  }}</span>
                        تعداد کل دیدگاه ها :
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @stop