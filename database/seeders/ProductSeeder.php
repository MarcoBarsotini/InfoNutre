<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Coxinha de Frango',
            'price' => 5,
            'description' => 'Uma deliciosa Coxinha!',
            'image' => 'images/food/coxinha.png'
        ]);
        Product::create([
            'name' => 'Bag',
            'price' => 100,
            'description' => 'Apple Bag',
            'image' => 'https://images.unsplash.com/photo-1554342872-034a06541bad?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
        ]);
        Product::create([
            'name' => 'perfume',
            'price' => 150,
            'description' => 'Apple Perfume',
            'image' => 'https://images.unsplash.com/photo-1523293182086-7651a899d37f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
        ]);
        Product::create([
            'name' => 'coffee',
            'price' => 100,
            'description' => 'Cold Coffee',
            'image' => 'https://images.unsplash.com/photo-1568649929103-28ffbefaca1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80'
        ]);
    }
}