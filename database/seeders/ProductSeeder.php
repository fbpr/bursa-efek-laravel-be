<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $products = [
            [
                'product_category_id' => 5,
                'name' => 'Kursi',
                'price' => 999.99,
                'image' => 'products/chair.jpg'
            ],
            [
                'product_category_id' => 5,
                'name' => 'Meja',
                'price' => 129.99,
                'image' => 'products/table.jpg'
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
