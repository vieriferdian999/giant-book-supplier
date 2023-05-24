<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $genres = ['Romance', 'Horror', 'Action', 'Adventure', 'Drama'];
        for($i = 1; $i <= 5; $i++){
            Category::create([
                'id' => $i,
                'name_category' => $genres[$i - 1],
            ]);
        }
    }
}
