<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {
    if (!App\User::whereUsername('admin')->count()) $this->call(UsersTableSeeder::class);
  }
}
