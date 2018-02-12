<?php

use Illuminate\Database\Seeder;

class Item_producerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $itemproducer = [];

      $itemproducer[] = array(
          'producer_id'   =>  2,
          'item_id'=> 1,
      );
      $itemproducer[] = array(
          'producer_id'   =>  1,
          'item_id'=> 2,
      );
      $itemproducer[] = array(
          'producer_id'   =>  4,
          'item_id'=> 2,
      );
      $itemproducer[] = array(
          'producer_id'   =>  3,
          'item_id'=> 1,
      );
      DB::table('item_producer')->insert($itemproducer);
    }

}
