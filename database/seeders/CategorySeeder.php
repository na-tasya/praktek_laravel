<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Sembako', 'description' => null],
            ['name' => 'Minuman', 'description' => null],
            ['name' => 'Makanan Ringan', 'description' => null],
            ['name' => 'Kebutuhan Rumah Tangga', 'description' => null],
        ]);
    }
}