<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'S-CER', 'description' => 'Supercampeonato de España de Rallyes'],
            ['name' => 'CERA Recalvi', 'description' => 'Campeonato de España de Rallyes de Asfalto'],
            ['name' => 'CERT Rallycar', 'description' => 'Campeonato de España de Rallyes de Tierra'],
            ['name' => 'CERTT GT2i', 'description' => 'Campeonato de España de Rallyes Todo Terreno'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
