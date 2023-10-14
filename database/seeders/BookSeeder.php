<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // Buat 5 data dummy
        for ($i = 0; $i < 5; $i++) {
            Book::create([
                'isbn' => $faker->isbn13,
                'judul' => $faker->sentence,
                'halaman' => $faker->numberBetween(100, 500),
                'kategori' => $faker->randomElement(['uncategorized', 'sci-fi', 'novel', 'history', 'biography', 'romance', 'education', 'culinary', 'comic']),
                'penerbit' => $faker->company,
            ]);
        }
    }
}
