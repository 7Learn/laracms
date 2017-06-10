<tr>
    <td>{{ $category->category_id  }}</td>
    <td>{{ $category->name  }}</td>

    <td>
        {{--encrypt--}}
        <a href="{{ route('admin.categories.remove',$category->category_id) }}">
            <span class="glyphicon glyphicon-remove"></span>
        </a>
        <a href="{{ route('admin.categories.edit',$category->category_id) }}">
            <span class="glyphicon glyphicon-edit"></span>
        </a>
    </td>
</tr>