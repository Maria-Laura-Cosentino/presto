<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $categories = ['A', 'B', 'C', 'D', 'E','F', 'G', 'H', 'I', 'L'];
        $categories = ["{{__('ui.categories')}}", 'Fotografia', 'Illustrazioni','Pittura', 'Scultura', 'Artigianato', 'Arte del vetro', 'Vinili'];

        foreach($categories as $category){
            Category::create([
                'name' => $category
            ]);
        }
    }
}
