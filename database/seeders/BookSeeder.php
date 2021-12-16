<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        $title = rtrim(ucwords($faker->realText(rand(10, 50))), '.');
        DB::table('books')->insert([
            'slug' => Str::slug($title),
            'title' => $title,
            'description' => $faker->paragraph,
            'author' => $faker->name,
            'pages' => rand(30, 300),
            'pub_year' => rand(1930, 2021),
            'created_at' => $faker->dateTimeThisYear($max = 'now', $timezone = 'Asia/Makassar')
        ]);
    }
}
