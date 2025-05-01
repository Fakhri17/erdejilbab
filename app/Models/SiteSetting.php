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
    ];

    public static function getGlobal(){
        return self::first();
    }


}
