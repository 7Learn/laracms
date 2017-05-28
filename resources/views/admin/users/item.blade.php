<tr>
    <td>{{ $user->full_name  }}</td>
    <td>{{ $user->email  }}</td>
    <td>{{ $user->role }}</td>
    <td>{{ $user->wallet }}</td>
    <td>{{ $user->created_at  }}</td>
    <td>
        {{--encrypt--}}
        <a href="{{ route('admin.users.remove',$user->id) }}">
            <span class="glyphicon glyphicon-remove"></span>
        </a>
        <a href="{{ route('admin.users.edit',$user->id) }}">
            <span class="glyphicon glyphicon-edit"></span>
        </a>
    </td>
</tr>