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
          'title'   =>  'Fête de la pomme',
          'content'=> 'Week-end du 3 et 4 mars 2018 à Epaignes !
          Venez nombreux pour la fête de la pomme, de nombreux producteurs de la région seront présents afin de faire découvrir leurs spécialités. Démonstration du pressage de pomme à l\'ancienne et course de tracteurs.',
          'status' => 'publié',
          'path_img_article' => 'upload/articles/2018/02/personnage.png',
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'user_id' => 1
      );

      $articles[] = array(
          'title'   =>  'numdeux',
          'content'=> 'deuxieme article',
          'path_img_article' => 'upload/articles/2018/02/personnage.png',
          'status' => 'brouillon',
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'user_id' => 2
      );

    DB::table('articles')->insert($articles);
    }

}
