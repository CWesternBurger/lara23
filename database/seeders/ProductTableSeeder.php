<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        //
        product::create([
            'name' => 'alvarus',
            'description' => 'mete goles',
            'description_long' => 'a todo diaz ordaz y valadeces',
            'price' => 199.99,
        ]);
    }
}
