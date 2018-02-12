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
          'producer_id'   =>  2,
          'retail_id'=> 1,
      );
      $producerretail[] = array(
          'producer_id'   =>  1,
          'retail_id'=> 2,
      );
      $producerretail[] = array(
          'producer_id'   =>  1,
          'retail_id'=> 2,
      );
      $producerretail[] = array(
          'producer_id'   =>  2,
          'retail_id'=> 1,
      );
      DB::table('producer_retail')->insert($producerretail);
    }
}
