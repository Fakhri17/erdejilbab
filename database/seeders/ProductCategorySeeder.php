<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Jilbab Segi Empat', 'description' => 'Jilbab segi empat dengan berbagai motif dan bahan'],
            ['name' => 'Pashmina', 'description' => 'Pashmina polos dan bermotif dengan bahan nyaman'],
            ['name' => 'Bergo', 'description' => 'Jilbab instan bergo, praktis dipakai'],
            ['name' => 'Ciput', 'description' => 'Dalaman jilbab berbagai model'],
        ];

        foreach ($categories as $category) {
            DB::table('product_categories')->insert([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
