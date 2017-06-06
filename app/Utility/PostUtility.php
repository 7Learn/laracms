<?php
namespace App\Utility;

class PostUtility
{
    const DRAFT = 1;
    const PENDING = 2;
    const PUBLISH = 3;
    const FUTURE  = 4;

    public static function get_statuses()
    {
        return [
            self::DRAFT => 'پیش نویس',
            self::PENDING => 'در انتظار تایید',
            self::PUBLISH => 'منتشر شده',
            self::FUTURE => 'زمان بنده شده'
        ];
    }

    public static function generate_slug($text)
    {
        return preg_replace('/\s/','-',$text);
    }
}


//trait Sluggable{
//        public function generate_slug($test){
//
//        }
//}