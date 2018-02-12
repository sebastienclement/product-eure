<?php

use Illuminate\Database\Seeder;

class ProducersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $producers = [];
      $date = new Datetime();

      $producers[] = array(

          'user_id'=>'1',
          'name'   =>  'la ferme de bob',
          'siret' =>  12133215465,
          'adresse' => '28 rue de labas',
          'created_at'=> $date->format('Y-m-d H:i:s'),

      );

      $producers[] = array(

          'user_id'=>'2',
          'name'   =>  'jean claude society',
          'siret' =>  12133215465,
          'adresse' => '28 rue de labas',
          'created_at'=> $date->format('Y-m-d H:i:s'),

      );

      $producers[] = array(

          'user_id'=>'1',
          'name'   =>  'les poissons de robert',
          'siret' =>  12133215465,
          'adresse' => '28 rue de labas',
          'created_at'=> $date->format('Y-m-d H:i:s'),

      );

      $producers[] = array(

          'user_id'=>'2',
          'name'   =>  'john paul et compagnie',
          'siret' =>  12133215465,
          'adresse' => '28 rue de labas',
          'created_at'=> $date->format('Y-m-d H:i:s'),

      );
        DB::table('producers')->insert($producers);

    }
}
