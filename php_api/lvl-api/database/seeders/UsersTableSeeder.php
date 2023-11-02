<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   */
  public function run() {
    foreach (range(1, 10) as $i) {
      DB::table('users')->insert([
        'name' => 'clone' . $i,
        'email' => 'clone' . $i . '@libretrac.app',
        'password' => Hash::make('H@ck3rm@n'),
      ]);
    }
  }
}
