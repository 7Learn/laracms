<?php
namespace App\Utility;

class UserUtility
{
    const SUBSCRIBER = 1;
    const AUTHOR = 2;
    const ADMIN  = 3;
    const EDITOR = 4;

    public static function get_roles()
    {
        return [
            self::ADMIN => 'مدیر',
            self::AUTHOR => 'نویسنده',
            self::SUBSCRIBER => 'کاربر',
            self::EDITOR => 'ویرایشگر'
        ];
    }
}