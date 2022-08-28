<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use DB;

class CategoriesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //foreign key chek
        DB::statement("SET FOREIGN_KEY_CHECKS=0");
        DB::table('categories')->truncate();
        Category::factory()->count(10)
        ->create();
    }
}
