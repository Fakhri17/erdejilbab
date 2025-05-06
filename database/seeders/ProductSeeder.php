<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        
        $categories = DB::table('product_categories')->pluck('id', 'slug');

        $products = [
            [
                'category_slug' => 'jilbab-segi-empat',
                'name' => 'Jilbab Segi Empat Polos',
                'price' => 25000,
                'size' => '110x110 cm',
                'color' => 'Hitam',
                'is_published' => true,
            ],
            [
                'category_slug' => 'pashmina',
                'name' => 'Pashmina Ceruty Babydoll',
                'price' => 30000,
                'size' => '175x75 cm',
                'color' => 'Dusty Pink',
                'is_published' => true,
            ],
            [
                'category_slug' => 'bergo',
                'name' => 'Bergo Instan Rempel',
                'price' => 28000,
                'size' => 'All Size',
                'color' => 'Navy',
                'is_published' => true,
            ],
            [
                'category_slug' => 'ciput',
                'name' => 'Ciput Rajut Antem',
                'price' => 15000,
                'size' => 'Free Size',
                'color' => 'Cream',
                'is_published' => true,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'product_category_id' => $categories[$product['category_slug']],
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                // 'product_image' => null,
                'description' => $product['name'] . ' berkualitas tinggi dan nyaman dipakai.',
                'price' => $product['price'],
                'size' => $product['size'],
                'color' => $product['color'],
                'is_published' => $product['is_published'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
