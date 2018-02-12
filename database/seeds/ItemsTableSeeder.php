<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $items = [];
      $date = new Datetime();

      $items[] = array(
          'name'   =>  'banane',
          'comment'=> 'de jamaique',
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'category_id' => 1
      );

      $items[] = array(
          'name'   =>  'haricots',
          'comment'=> 'verts',
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'category_id' => 2
      );

    DB::table('items')->insert($items);
    }
}
