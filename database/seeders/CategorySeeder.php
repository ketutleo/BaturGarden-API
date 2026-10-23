<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category' => 'Jeruk'],
            ['category' => 'Alpukat'],
            ['category' => 'Mangga'],
            ['category' => 'Pisang'],
            ['category' => 'Buah Naga'],
        ]);
    }
}