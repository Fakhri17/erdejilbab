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

    public function getImageUrlAttribute()
    {
        if (is_array($this->product_images) && count($this->product_images) > 0) {
            return array_map(function ($image) {
                return url('storage/' . $image);
            }, $this->product_images);
        }

        return ['https://placehold.co/600x400'];
    }
}
