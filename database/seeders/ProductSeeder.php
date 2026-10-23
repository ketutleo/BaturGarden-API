<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Jeruk Keprok',
                'description' => 'Jeruk segar dari kebun Batur Garden.',
                'category_id' => 1,
                'price' => 15000,
                'img' => 'jeruk-keprok.jpg',
                'stock' => 50,
                'slug' => 'jeruk-keprok',
            ],
            [
                'name' => 'Jeruk Siem',
                'description' => 'Jeruk Siem segar Batur Garden.',
                'category_id' => 1,
                'price' => 14000,
                'img' => 'jeruk-siem.jpg',
                'stock' => 40,
                'slug' => 'jeruk-siem',
            ],
            [
                'name' => 'Alpukat Hass',
                'description' => 'Alpukat Hass pilihan Batur Garden.',
                'category_id' => 2,
                'price' => 25000,
                'img' => 'alpukat-hass.jpg',
                'stock' => 30,
                'slug' => 'alpukat-hass',
            ],
            [
                'name' => 'Mangga Kiojay',
                'description' => 'Mangga Kiojay segar.',
                'category_id' => 3,
                'price' => 20000,
                'img' => 'mangga-kiojay.jpg',
                'stock' => 25,
                'slug' => 'mangga-kiojay',
            ],
            [
                'name' => 'Pisang Susu',
                'description' => 'Pisang susu manis.',
                'category_id' => 4,
                'price' => 12000,
                'img' => 'pisang-susu.jpg',
                'stock' => 40,
                'slug' => 'pisang-susu',
            ],
            [
                'name' => 'Buah Naga Merah',
                'description' => 'Buah naga merah segar.',
                'category_id' => 5,
                'price' => 18000,
                'img' => 'buah-naga-merah.jpg',
                'stock' => 35,
                'slug' => 'buah-naga-merah',
            ],
            [
                'name' => 'Alpukat Red V',
                'description' => 'Alpukat Red V pilihan Batur Garden.',
                'category_id' => 2,
                'price' => 30000,
                'img' => 'alpukat-red-v.jpg',
                'stock' => 25,
                'slug' => 'alpukat-red-v',
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->updateOrInsert(
                ['slug' => $product['slug']],
                array_merge($product, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ])
            );
        }
    }
}
