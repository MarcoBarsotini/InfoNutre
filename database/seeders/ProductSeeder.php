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
            'name' => 'Coca Cola',
            'price' => 10,
            'description' => 'Refrigerante',
            'image' => 'images/food/coca_2l.png'
        ]);
        Product::create([
            'name' => 'Enroladinho de Salsicha',
            'price' => 10,
            'description' => 'Salgado',
            'image' => 'images/food/salsicha.png'
        ]);
        Product::create([
            'name' => 'Pepsi 350ml',
            'price' => 4,
            'description' => 'Refrigerante',
            'image' => 'images/food/pepsi.png'
        ]);
    }
}