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
                'name' => 'Jilbab Segi Empat Polos Classic',
                'price' => 25000,
                'size' => '110x110 cm',
                'color' => 'Hitam',
                'is_published' => true,
            ],
            [
                'category_slug' => 'pashmina',
                'name' => 'Pashmina Ceruty Babydoll Premium',
                'price' => 30000,
                'size' => '175x75 cm',
                'color' => 'Dusty Pink',
                'is_published' => true,
            ],
            [
                'category_slug' => 'bergo',
                'name' => 'Bergo Instan Rempel Deluxe',
                'price' => 28000,
                'size' => 'All Size',
                'color' => 'Navy',
                'is_published' => true,
            ],
            [
                'category_slug' => 'ciput',
                'name' => 'Ciput Rajut Antem Classic',
                'price' => 15000,
                'size' => 'Free Size',
                'color' => 'Cream',
                'is_published' => true,
            ],
            [
                'category_slug' => 'jilbab-segi-empat',
                'name' => 'Jilbab Segi Empat Premium Silk',
                'price' => 35000,
                'size' => '110x110 cm',
                'color' => 'Maroon',
                'is_published' => true,
            ],
            [
                'category_slug' => 'pashmina',
                'name' => 'Pashmina Premium Crinkle Luxe',
                'price' => 45000,
                'size' => '175x75 cm',
                'color' => 'Sage Green',
                'is_published' => true,
            ],
            [
                'category_slug' => 'bergo',
                'name' => 'Bergo Instan Premium Collection',
                'price' => 40000,
                'size' => 'All Size',
                'color' => 'Burgundy',
                'is_published' => true,
            ],
            [
                'category_slug' => 'ciput',
                'name' => 'Ciput Premium Rajut Signature',
                'price' => 25000,
                'size' => 'Free Size',
                'color' => 'Tosca',
                'is_published' => true,
            ],
            [
                'category_slug' => 'jilbab-segi-empat',
                'name' => 'Jilbab Segi Empat Premium Cotton',
                'price' => 35000,
                'size' => '110x110 cm',
                'color' => 'Navy',
                'is_published' => true,
            ],
            [
                'category_slug' => 'pashmina',
                'name' => 'Pashmina Premium Crinkle Deluxe',
                'price' => 45000,
                'size' => '175x75 cm',
                'color' => 'Dusty Pink',
                'is_published' => true,
            ],
            [
                'category_slug' => 'bergo',
                'name' => 'Bergo Instan Premium Silk',
                'price' => 40000,
                'size' => 'All Size',
                'color' => 'Maroon',
                'is_published' => true,
            ],
            [
                'category_slug' => 'ciput',
                'name' => 'Ciput Premium Rajut Luxe',
                'price' => 25000,
                'size' => 'Free Size',
                'color' => 'Sage Green',
                'is_published' => true,
            ],
            [
                'category_slug' => 'jilbab-segi-empat',
                'name' => 'Jilbab Segi Empat Premium Collection',
                'price' => 35000,
                'size' => '110x110 cm',
                'color' => 'Burgundy',
                'is_published' => true,
            ],
            [
                'category_slug' => 'pashmina',
                'name' => 'Pashmina Premium Crinkle Signature',
                'price' => 45000,
                'size' => '175x75 cm',
                'color' => 'Tosca',
                'is_published' => true,
            ],
            [
                'category_slug' => 'bergo',
                'name' => 'Bergo Instan Premium Cotton',
                'price' => 40000,
                'size' => 'All Size',
                'color' => 'Navy',
                'is_published' => true,
            ],
            [
                'category_slug' => 'ciput',
                'name' => 'Ciput Premium Rajut Collection',
                'price' => 25000,
                'size' => 'Free Size',
                'color' => 'Dusty Pink',
                'is_published' => true,
            ],
            [
                'category_slug' => 'jilbab-segi-empat',
                'name' => 'Jilbab Segi Empat Premium Luxe',
                'price' => 35000,
                'size' => '110x110 cm',
                'color' => 'Maroon',
                'is_published' => true,
            ],
            [
                'category_slug' => 'pashmina',
                'name' => 'Pashmina Premium Crinkle Cotton',
                'price' => 45000,
                'size' => '175x75 cm',
                'color' => 'Sage Green',
                'is_published' => true,
            ],
            [
                'category_slug' => 'bergo',
                'name' => 'Bergo Instan Premium Signature',
                'price' => 40000,
                'size' => 'All Size',
                'color' => 'Burgundy',
                'is_published' => true,
            ],
            [
                'category_slug' => 'ciput',
                'name' => 'Ciput Premium Rajut Silk',
                'price' => 25000,
                'size' => 'Free Size',
                'color' => 'Tosca',
                'is_published' => true,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'product_category_id' => $categories[$product['category_slug']],
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'description' => $product['name'] . ' berkualitas tinggi dan nyaman dipakai. Terbuat dari bahan premium yang lembut dan tahan lama.',
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
