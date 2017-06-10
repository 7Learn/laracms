<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">منوی ادمین</h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ route('admin.dashboard.index') }}">داشبورد</a>
            </li>
            <li class="list-group-item">
                <a href="{{  route('admin.users.index') }}">کاربران</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('admin.posts.index') }}">مطالب</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('admin.categories.index') }}">دسته بندی</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('admin.tags.index') }}">تگ ها</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('admin.comments.index') }}">دیدگاه ها</a>
            </li>

        </ul>
    </div>
</div>