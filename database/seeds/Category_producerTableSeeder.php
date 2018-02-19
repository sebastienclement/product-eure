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
          'category_id' => 11,
          'producer_id' => 2,
        );

        $categoryproducer[] = array(
          'category_id' => 3,
          'producer_id' => 3,
        );

        $categoryproducer[] = array(
          'category_id' => 9,
          'producer_id' => 4,
        );

        $categoryproducer[] = array(
<<<<<<< HEAD
          'category_id' => 3,
          'producer_id' => 1,
=======
          'category_id' => 13,
          'producer_id' => 5,
        );

        $categoryproducer[] = array(
          'category_id' => 14,
          'producer_id' => 6,
        );

        $categoryproducer[] = array(
          'category_id' => 14,
          'producer_id' => 7,
        );

        $categoryproducer[] = array(
          'category_id' => 4,
          'producer_id' => 8,
        );

        $categoryproducer[] = array(
          'category_id' => 5,
          'producer_id' => 9,
        );

        $categoryproducer[] = array(
          'category_id' => 1,
          'producer_id' => 10,
>>>>>>> 74fade154e7d208523aa2d3e3d06558ae62ecec2
        );

        $categoryproducer[] = array(
          'category_id' => 2,
<<<<<<< HEAD
          'producer_id' => 1,
        );

=======
          'producer_id' => 10,
        );

        $categoryproducer[] = array(
          'category_id' => 13,
          'producer_id' => 11,
        );

        $categoryproducer[] = array(
          'category_id' => 6,
          'producer_id' => 12,
        );

        $categoryproducer[] = array(
          'category_id' => 7,
          'producer_id' => 12,
        );

        $categoryproducer[] = array(
          'category_id' => 1,
          'producer_id' => 13,
        );

        $categoryproducer[] = array(
          'category_id' => 1,
          'producer_id' => 13,
        );

        $categoryproducer[] = array(
          'category_id' => 6,
          'producer_id' => 14,
        );

        $categoryproducer[] = array(
          'category_id' => 9,
          'producer_id' => 15,
        );

        $categoryproducer[] = array(
          'category_id' => 1,
          'producer_id' => 16,
        );

        $categoryproducer[] = array(
          'category_id' => 2,
          'producer_id' => 16,
        );

        $categoryproducer[] = array(
          'category_id' => 3,
          'producer_id' => 16,
        );

        $categoryproducer[] = array(
          'category_id' => 1,
          'producer_id' => 17,
        );

        $categoryproducer[] = array(
          'category_id' => 7,
          'producer_id' => 17,
        );

        $categoryproducer[] = array(
          'category_id' => 8,
          'producer_id' => 17,
        );

        $categoryproducer[] = array(
          'category_id' => 7,
          'producer_id' => 18,
        );

        $categoryproducer[] = array(
          'category_id' => 7,
          'producer_id' => 19,
        );

        $categoryproducer[] = array(
          'category_id' => 3,
          'producer_id' => 20,
        );

        $categoryproducer[] = array(
          'category_id' => 10,
          'producer_id' => 20,
        );

        $categoryproducer[] = array(
          'category_id' => 8,
          'producer_id' => 21,
        );

        $categoryproducer[] = array(
          'category_id' => 8,
          'producer_id' => 22,
        );

        $categoryproducer[] = array(
          'category_id' => 11,
          'producer_id' => 23,
        );

        $categoryproducer[] = array(
          'category_id' => 5,
          'producer_id' => 24,
        );

        $categoryproducer[] = array(
          'category_id' => 5,
          'producer_id' => 25,
        );

        $categoryproducer[] = array(
          'category_id' => 5,
          'producer_id' => 26,
        );

        $categoryproducer[] = array(
          'category_id' => 6,
          'producer_id' => 27,
        );

        $categoryproducer[] = array(
          'category_id' => 10,
          'producer_id' => 27,
        );

        $categoryproducer[] = array(
          'category_id' => 10,
          'producer_id' => 28,
        );

        $categoryproducer[] = array(
          'category_id' => 10,
          'producer_id' => 29,
        );

        $categoryproducer[] = array(
          'category_id' => 4,
          'producer_id' => 30,
        );
>>>>>>> 74fade154e7d208523aa2d3e3d06558ae62ecec2
        DB::table('category_producer')->insert($categoryproducer);
    }
}
