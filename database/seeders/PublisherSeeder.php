<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 5; $i++){
           Publisher::create([
                'id' => $i,
                'publisher_name' => $faker->company,
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->email,
                'image' => $faker->imageUrl()
            ]);
        }
    }
}
