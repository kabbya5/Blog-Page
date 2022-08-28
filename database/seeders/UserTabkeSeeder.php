<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
class UserTabkeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement("SET FOREIGN_KEY_CHECKS=0");
      User::factory()->count(10)->create();
    }
}
