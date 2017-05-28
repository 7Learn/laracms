@if(session('successInsert'))
    <div class="alert alert-success">
        <p>
            کاربر جدید با موفقیت ساخته شد.
        </p>
    </div>
    @endif
@if(session('successDeleted'))
    <div class="alert alert-success">
        <p>
            کاربر مورد نظر با موفقیت حذف شد.
        </p>
    </div>
@endif
@if(session('failDelete'))
    <div class="alert alert-danger">
        <p>
            کاربر مورد نظر وجود ندارد.
        </p>
    </div>
@endif