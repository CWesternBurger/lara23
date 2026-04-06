<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->insert([
            [
                'name' => 'Tecnologia',
                'description' => 'Dispositivos y accesorios',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hogar',
                'description' => 'Productos para el hogar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Deportes',
                'description' => 'Articulos deportivos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}