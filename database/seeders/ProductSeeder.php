<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = Category::query()->pluck('id');

        Product::factory()
            ->count(20)
            ->state(fn () => [
                'category_id' => $categoryIds->isEmpty() ? null : $categoryIds->random(),
            ])
            ->create();
    }
}