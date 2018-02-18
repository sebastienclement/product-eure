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
          'producer_id' => 1,
          'item_id'     => 1,
      );
      $itemproducer[] = array(
          'producer_id' => 1,
          'item_id'     => 2,
      );
      $itemproducer[] = array(
          'producer_id' => 2,
          'item_id'     => 3,
      );
      $itemproducer[] = array(
          'producer_id' => 3,
          'item_id'     => 4,
      );
      $itemproducer[] = array(
          'producer_id' => 3,
          'item_id'     => 5,
      );
      $itemproducer[] = array(
          'producer_id' => 3,
          'item_id'     => 6,
      );
      $itemproducer[] = array(
          'producer_id' => 3,
          'item_id'     => 7,
      );
      $itemproducer[] = array(
          'producer_id' => 3,
          'item_id'     => 8,
      );
      $itemproducer[] = array(
          'producer_id' => 6,
          'item_id'     => 9,
      );
      $itemproducer[] = array(
          'producer_id' => 7,
          'item_id'     => 10,
      );
      $itemproducer[] = array(
          'producer_id' => 7,
          'item_id'     => 11,
      );
      $itemproducer[] = array(
          'producer_id' => 8,
          'item_id'     => 12,
      );
      $itemproducer[] = array(
          'producer_id' => 9,
          'item_id'     => 13,
      );
      $itemproducer[] = array(
          'producer_id' => 9,
          'item_id'     => 14,
      );
      $itemproducer[] = array(
          'producer_id' => 12,
          'item_id'     => 15,
      );
      $itemproducer[] = array(
          'producer_id' => 12,
          'item_id'     => 16,
      );
      $itemproducer[] = array(
          'producer_id' => 13,
          'item_id'     => 17,
      );
      $itemproducer[] = array(
          'producer_id' => 13,
          'item_id'     => 18,
      );
      $itemproducer[] = array(
          'producer_id' => 14,
          'item_id'     => 19,
      );
      $itemproducer[] = array(
          'producer_id' => 15,
          'item_id'     => 20,
      );
      $itemproducer[] = array(
          'producer_id' => 16,
          'item_id'     => 21,
      );
      $itemproducer[] = array(
          'producer_id' => 16,
          'item_id'     => 22,
      );
      $itemproducer[] = array(
          'producer_id' => 16,
          'item_id'     => 23,
      );
      $itemproducer[] = array(
          'producer_id' => 17,
          'item_id'     => 24,
      );
      $itemproducer[] = array(
          'producer_id' => 17,
          'item_id'     => 25,
      );
      $itemproducer[] = array(
          'producer_id' => 17,
          'item_id'     => 26,
      );
      $itemproducer[] = array(
          'producer_id' => 17,
          'item_id'     => 27,
      );
      $itemproducer[] = array(
          'producer_id' => 18,
          'item_id'     => 28,
      );
      $itemproducer[] = array(
          'producer_id' => 19,
          'item_id'     => 29,
      );
      $itemproducer[] = array(
          'producer_id' => 20,
          'item_id'     => 30,
      );
      $itemproducer[] = array(
          'producer_id' => 20,
          'item_id'     => 31,
      );
      $itemproducer[] = array(
          'producer_id' => 21,
          'item_id'     => 32,
      );
      $itemproducer[] = array(
          'producer_id' => 22,
          'item_id'     => 33,
      );
      $itemproducer[] = array(
          'producer_id' => 22,
          'item_id'     => 34,
      );
      $itemproducer[] = array(
          'producer_id' => 22,
          'item_id'     => 35,
      );
      $itemproducer[] = array(
          'producer_id' => 22,
          'item_id'     => 36,
      );
      $itemproducer[] = array(
          'producer_id' => 23,
          'item_id'     => 37,
      );
      $itemproducer[] = array(
          'producer_id' => 24,
          'item_id'     => 38,
      );
      $itemproducer[] = array(
          'producer_id' => 25,
          'item_id'     => 39,
      );
      $itemproducer[] = array(
          'producer_id' => 26,
          'item_id'     => 40,
      );
      $itemproducer[] = array(
          'producer_id' => 27,
          'item_id'     => 41,
      );
      $itemproducer[] = array(
          'producer_id' => 27,
          'item_id'     => 42,
      );
      $itemproducer[] = array(
          'producer_id' => 28,
          'item_id'     => 43,
      );
      $itemproducer[] = array(
          'producer_id' => 29,
          'item_id'     => 44,
      );
      $itemproducer[] = array(
          'producer_id' => 30,
          'item_id'     => 45,
      );
      DB::table('item_producer')->insert($itemproducer);
    }

}
