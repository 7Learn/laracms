<tr>
    <td>{{ $post->post_title  }}</td>
    <td>{{ $post->user->full_name  }}</td>
    <td>{{ $post->post_comment_count }}</td>
    <td>{{ $post->post_view_count }}</td>
    <td>{{ $post->post_status  }}</td>
    <td>{{ $post->created_at  }}</td>
    <td>{{ $post->published_at  }}</td>
    <td>
        {{--encrypt--}}
        <a href="{{ route('admin.users.remove',$post->id) }}">
            <span class="glyphicon glyphicon-remove"></span>
        </a>
        <a href="{{ route('admin.users.edit',$post->id) }}">
            <span class="glyphicon glyphicon-edit"></span>
        </a>
    </td>
</tr>