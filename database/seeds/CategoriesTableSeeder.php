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
          'name'   =>  'fruit',
      );

      $categories[] = array(
          'name'   =>  'légume',
      );

      $categories[] = array(
          'name'   =>  'viande',
      );

      $categories[] = array(
          'name'   =>  'boisson',
      );

      $categories[] = array(
          'name'   =>  'laitage',
      );


    DB::table('categories')->insert($categories);
    }
}
