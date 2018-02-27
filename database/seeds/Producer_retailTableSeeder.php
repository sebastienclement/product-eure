<?php

use Illuminate\Database\Seeder;

class Producer_retailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $producerretail = [];

      $producerretail[] = array(
          'producer_id' => 2,
          'retail_id'   => 1,
      );
      $producerretail[] = array(
          'producer_id' => 2,
          'retail_id'   => 2,
      );
      $producerretail[] = array(
          'producer_id' => 4,
          'retail_id'   => 3,
      );
      $producerretail[] = array(
          'producer_id' => 4,
          'retail_id'   => 4,
      );
      $producerretail[] = array(
          'producer_id' => 9,
          'retail_id'   => 3,
      );
      $producerretail[] = array(
          'producer_id' => 9,
          'retail_id'   => 5,
      );
      $producerretail[] = array(
          'producer_id' => 9,
          'retail_id'   => 6,
      );
      $producerretail[] = array(
          'producer_id' => 10,
          'retail_id'   => 3,
      );
      $producerretail[] = array(
          'producer_id' => 20,
          'retail_id'   => 7,
      );
      $producerretail[] = array(
          'producer_id' => 20,
          'retail_id'   => 8,
      );
      $producerretail[] = array(
          'producer_id' => 21,
          'retail_id'   => 9,
      );
      $producerretail[] = array(
          'producer_id' => 22,
          'retail_id'   => 9,
      );
      $producerretail[] = array(
          'producer_id' => 23,
          'retail_id'   => 9,
      );
      $producerretail[] = array(
          'producer_id' => 27,
          'retail_id'   => 10,
      );
      $producerretail[] = array(
          'producer_id' => 28,
          'retail_id'   => 11,
      );
      $producerretail[] = array(
          'producer_id' => 16,
          'retail_id'   => 9,
      );
      $producerretail[] = array(
          'producer_id' => 16,
          'retail_id'   => 10,
      );

      DB::table('producer_retail')->insert($producerretail);
    }
}
