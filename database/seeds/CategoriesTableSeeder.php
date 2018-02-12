<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $categories = [];

      $categories[] = array(
          'name'   =>  'fruits',
      );

      $categories[] = array(
          'name'   =>  'legumes',
      );


    DB::table('categories')->insert($categories);
    }
}
