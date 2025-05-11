<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'product_images',
        'description',
        'price',
        'size',
        'color',
        'is_published',
        'product_category_id',
        'tiktok_link',
        'shopee_link',
    ];

    protected $casts = [
        'product_images' => 'array',
        'is_published' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
      
}
