<form method="post" action="" enctype="multipart/form-data">
    {{ csrf_field()  }}
    <div class="form-group">
        <label for="full_name">نام کامل :</label>
        <input
                type="text"
                name="full_name"
                class="form-control"
                id="full_name"
                value="{{ old('full_name',isset($user)?$user->full_name:'')  }}">
    </div>
    <div class="form-group">
        <label for="email">ایمیل :</label>
        <input
                type="email"
                name="email"
                class="form-control"
                id="email"
                value="{{ old('email',isset($user)?$user->email:'') }}"
        >
    </div>
    <div class="form-group">
        <label for="password">کلمه عبور :</label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    <div class="form-group">
        <label for="password_confirmation">تکرار کلمه عبور :</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
    </div>
    <div class="form-group">
        <label for="wallet">موجودی اولیه :</label>
        <input
                type="text"
                name="wallet"
                class="form-control"
                id="wallet"
                value="{{ old('wallet',isset($user)?number_format($user->wallet):'')  }}"
        >
    </div>
    <div class="form-group">
        <label for="role">نقش کاربری :</label>
        <select class="form-control" name="role" id="role">
            @foreach($user_roles as $role_id => $role_title)
                <option value="{{ $role_id  }}" {{ isset($user) && $user->role == $role_id ? 'selected' : ''  }}>{{ $role_title  }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="avatar">تصویر پروفایل :</label>
        <input type="file" name="avatar" id="avatar">
    </div>
    @if(isset($user))
        <input type="hidden" name="user_id" value="{{ $user->id  }}">
        @endif
    <button type="submit" class="btn btn-default">ذخیره اطلاعات</button>
</form>