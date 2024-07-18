<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\admin\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for($j=1;$j<=5;$j++){
            Category::create([
                'name_category'=>fake()->name(),
            ]);
        for($i=1;$i<20;$i++){
            Product::create([
                'name'=>fake()->name(),
                'img'=>fake()->imageUrl(),
                'price'=>fake()->randomFloat(2, 10, 1000),
                'stock'=>fake()->numberBetween(0, 100),
                'description'=>fake()->text(200),
                'warranty_policy'=>fake()->text(50),
                'discount'=>fake()->randomFloat(2, 0, 100),
                'category_id'=>fake()->numberBetween(1, 4),
            ]);
        }
    }
}
}