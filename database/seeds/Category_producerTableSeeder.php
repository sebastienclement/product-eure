<?php

use Illuminate\Database\Seeder;

class Category_producerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryproducer = [];

        $categoryproducer[] = array(
          'category_id' => 1,
          'producer_id' => 1,
        );

        $categoryproducer[] = array(
          'category_id' => 5,
          'producer_id' => 2,
        );

        $categoryproducer[] = array(
          'category_id' => 3,
          'producer_id' => 3,
        );

        $categoryproducer[] = array(
          'category_id' => 4,
          'producer_id' => 4,
        );

        $categoryproducer[] = array(
          'category_id' => 3,
          'producer_id' => 1,
        );

        $categoryproducer[] = array(
          'category_id' => 2,
          'producer_id' => 1,
        );

        DB::table('category_producer')->insert($categoryproducer);
    }
}
