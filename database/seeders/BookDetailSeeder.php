<?php

namespace Database\Seeders;

use App\Models\BookDetail;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;


class BookDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $bookCategories = [];

        for ($i = 1; $i <= 18; $i++) {
            $book_id = null;

            if ($i <= 10) {
                $book_id = $i;
            } else {
                $book_id = rand(1, 10);
            }

            $cat_id = null;

            do {
                $cat_id = rand(1, 5);
            } while (isset($bookCategories[$book_id]) && in_array($cat_id, $bookCategories[$book_id]));

            $bookCategories[$book_id][] = $cat_id;

            BookDetail::create([
                'book_id' => $book_id,
                'cat_id' => $cat_id
            ]);
        }
    }
}
