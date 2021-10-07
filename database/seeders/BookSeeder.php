<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => Str::random(10),
            'author' => Str::random(10),
            'pages' => rand(40, 300),
            'pub_year' => rand(1930, 2020),
            'image_path' => '/'.Str::random(rand(5, 10)).'.jpg',
        ]);
    }
}
