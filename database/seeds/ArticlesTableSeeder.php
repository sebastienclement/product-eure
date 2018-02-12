<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $articles = [];
      $date = new Datetime();

      $articles[] = array(
          'title'   =>  'numtrois',
          'content'=> 'premier article',
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'user_id' => 1
      );

      $articles[] = array(
          'title'   =>  'numdeux',
          'content'=> 'deuxieme article',
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'user_id' => 2
      );

    DB::table('articles')->insert($articles);
    }

}
