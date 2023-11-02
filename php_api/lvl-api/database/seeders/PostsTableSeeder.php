<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {
  public function run() {
    $users = DB::table('users')->get();
    $faker = Faker::create();

    foreach ($users as $user) {
      foreach (range(1, 3) as $i) {
        DB::table('posts')->insert([
          'user_id' => $user->id,
          'content' => $faker->text,
          'image' => $faker->imageUrl,
          'created_at' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d H:i:s'),
          'updated_at' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d H:i:s'),
        ]);
      }
    }
  }
}
