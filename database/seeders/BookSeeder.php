<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//model added
use App\Models\Book;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //set dummy data using only seeder
        for ($i = 0; $i < 100; $i++) {
            Book::create([
                'name' => Str::random(10),
                'author' => Str::random(10),
                'isbn' => random_int(10001, 999999),
                'quantity' => random_int(10, 100),
                'price' => random_int(1, 100)
            ]);
        }
        //set dummy data using faker and seeder
        \App\Models\Book::factory(100)->create();
    }
}
