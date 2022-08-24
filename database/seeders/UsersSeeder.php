<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    collect([
      [
        'name' => 'Niman Wulandari',
        'email' => 'niman@mail.com',
        'password' => Hash::make('password'),
        'email_verified_at' => Carbon::now(),
        'created_at' => now(),
      ], [
        'name' => 'Namin Wika',
        'email' => 'namin@mail.com',
        'password' => Hash::make('password'),
        'email_verified_at' => Carbon::now(),
        'created_at' => now(),
      ],
    ])->each(function ($user) {
      DB::table('users')->insert($user);
    });
  }
}
