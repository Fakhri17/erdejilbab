<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'store_name',
        'store_description',
        'store_logo',
        'store_banner',
        'store_email',
        'phone_number',
        'address',
        'tiktok_link',
        'shopee_link',
    ];

    public static function getGlobal(){
        return self::first();
    }

    public function getWaUrlAttribute()
    {
        $phone = preg_replace('/[^0-9]/', '', $this->phone_number);

        if (substr($phone, 0, 1) === '0') {
            $phone = '62' . substr($phone, 1);
        }
        
        return 'https://wa.me/' . $phone;
    }


}
