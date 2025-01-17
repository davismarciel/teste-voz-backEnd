<?php


namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Smartphone XYZ',
                'description' => 'Um smartphone moderno com câmera de alta resolução',
                'price' => 1999.99,
                'category_id' => 1, 
            ],
            [
                'name' => 'Camiseta Básica',
                'description' => 'Camiseta 100% algodão',
                'price' => 49.90,
                'category_id' => 2, 
            ],
            [
                'name' => 'O Senhor dos Anéis',
                'description' => 'Livro em capa dura, edição especial',
                'price' => 89.90,
                'category_id' => 3, 
            ],
            [
                'name' => 'Relógio Inteligente',
                'description' => 'Smartwatch com monitor cardíaco',
                'price' => 599.90,
                'category_id' => 4,
            ],
            [
                'name' => 'Tênis Runner',
                'description' => 'Tênis para corrida com amortecimento',
                'price' => 299.90,
                'category_id' => 5,
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}