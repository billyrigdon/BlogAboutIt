<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserProfilesTableSeeder extends Seeder {
  public function run() {
    $users = DB::table('users')->get();
    $faker = Faker::create();

    foreach ($users as $user) {
      DB::table('user_profiles')->insert([
        'user_id' => $user->id,
        'display_name' => $faker->name,
        'bio' => $faker->text,
        'profile_picture' => $faker->imageUrl,
        'background_picture' => $faker->imageUrl,
        'music' => $faker->sentence,
        'interests' => $faker->sentence,
        'website' => $faker->url,
        'location' => $faker->city . ', ' . $faker->country,
        'birthday' => $faker->date,
        'relationship_status' => $faker->randomElement(['Single', 'In a Relationship', 'Married', 'Divorced', 'Widowed']),
      ]);
    }
  }
}
