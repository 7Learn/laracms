<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'#post_content' });</script>
<form method="post" action="" enctype="multipart/form-data">
    {{ csrf_field()  }}
    <div class="form-group">
        <label for="full_name">عنوان مطلب : </label>
        <input
                type="text"
                name="post_title"
                class="form-control"
                id="post_title"
                value="{{ old('post_title',isset($post_item)?$post_item->post_title:'')  }}">
    </div>
    <div class="form-group">
        <label for="email">محتوای مطلب  :</label>
        <textarea name="post_content" id="post_content" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="post_status">
            وضعیت مطلب
        </label>
        <select name="post_status" class="form-control" id="post_status">
            @if(isset($post_status))
                @foreach($post_status as $id=>$title)
                    <option value="{{ $id  }}">{{ $title }}</option>
                    @endforeach
                @endif
        </select>

    </div>
    <div class="form-group">
        <label for="post_thumbnail">
            تصویر شاخص
        </label>
        <input type="file" name="post_thumbnail">
    </div>

    @if(isset($user))
        <input type="hidden" name="user_id" value="{{ $user->id  }}">
        @endif
    <button type="submit" class="btn btn-default">ذخیره اطلاعات</button>
</form>