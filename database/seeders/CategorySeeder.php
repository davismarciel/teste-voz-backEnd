<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Eletrônicos',
            ],
            [
                'name' => 'Roupas',
            ],
            [
                'name' => 'Livros',
            ],
            [
                'name' => 'Acessórios',
            ],
            [
                'name' => 'Calçados',
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}