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
          'slug' => 'la-ferme-de-bob',
          'siret' =>  12133215465,
          'adresse' => '28 rue de labas',
          'description' => 'Petite ferme familiale perchée sur les hauteurs d\'Evreux',
          'created_at'=> $date->format('Y-m-d H:i:s'),

      );

      $producers[] = array(

          'user_id'=>'2',
          'name'   =>  'jean claude society',
          'slug'  => 'jean-claude-society',
          'siret' =>  12133215465,
          'adresse' => '28 rue de labas',
          'description' => 'hfheflif aozufrazfra ahalhroa ahafr aoarf aa zrfi âptfr rgzgzgrg ttzfzgt',
          'created_at'=> $date->format('Y-m-d H:i:s'),

      );

      $producers[] = array(

          'user_id'=>'1',
          'name'   =>  'les poissons de robert',
          'slug'  =>  'les-poissons-de-robert',
          'siret' =>  12133215465,
          'adresse' => '28 rue de labas',
          'description' => 'gdteyhfjfir ozzdhfyhf zuz euduudzh duzaufe eizfzehfzehfez azzpoa zaazfr ezfezfzeg zgzg eee',
          'created_at'=> $date->format('Y-m-d H:i:s'),

      );

      $producers[] = array(

          'user_id'=>'3',
          'name'   =>  'john paul et compagnie',
          'slug'  =>  'john-paul-et-compagnie',
          'siret' =>  12133215465,
          'adresse' => '28 rue de labas',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'created_at'=> $date->format('Y-m-d H:i:s'),

      );
        DB::table('producers')->insert($producers);

    }
}
