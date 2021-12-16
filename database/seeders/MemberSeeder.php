<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('members')->insert([
            'name' => $faker->name,
            'address' => $faker->address,
            'email' => $faker->email,
            'password' => $faker->password,
            'phone_number' => $faker->phoneNumber,
            'created_at' => $faker->dateTimeThisYear($max = 'now', $timezone = 'Asia/Makassar')
        ]);
    }
}
