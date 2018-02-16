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
          'name'   =>  'bovin',
      );

      $categories[] = array(
          'name'   =>  'porc',
      );

      $categories[] = array(
          'name'   =>  'volaille',
      );

      $categories[] = array(
          'name'   =>  'ovin',
      );

      $categories[] = array(
          'name'   =>  'produit laitier',
      );

      $categories[] = array(
          'name'   =>  'fruit',
      );

      $categories[] = array(
          'name'   =>  'legume',
      );

      $categories[] = array(
          'name'   =>  'boisson',
      );

      $categories[] = array(
          'name'   =>  'miel',
      );

      $categories[] = array(
          'name'   =>  'produit fabriqué',
      );


    DB::table('categories')->insert($categories);
    }
}
