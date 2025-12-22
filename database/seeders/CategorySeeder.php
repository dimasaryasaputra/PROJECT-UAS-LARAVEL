<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Technology',
                'description' => 'Kategori teknologi dan IT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Education',
                'description' => 'Kategori pendidikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Business',
                'description' => 'Kategori bisnis dan ekonomi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
