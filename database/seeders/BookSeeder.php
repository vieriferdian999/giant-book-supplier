<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 10; $i++){
            Book::create([
                'id' => $i,
                'book_title' => implode(' ', $faker->words(2)),
                'book_author' => $faker->name,
                'publisher_id' => rand(1,5),
                'image' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR5od5Dtf0JiAo2d7k3bavZX1bGfyzvpUptthH_i6lDKlOwrJz4',
                'synopsis' => $faker->sentence(),
                'year' => $faker->numberBetween($min = 1970, $max = date('Y')),
            ]);
        }
    }
}
