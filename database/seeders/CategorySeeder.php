<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Environmental'],
            ['category_name' => 'Animals'],
            ['category_name' => 'Social'],
            ['category_name' => 'Healthcare'],
            ['category_name' => 'Sports and Leisure'],
        ];

        Category::insert($categories);
    }
}
