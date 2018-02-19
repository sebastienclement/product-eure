<?php

use Illuminate\Database\Seeder;

class RetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $retails = [];
      $date = new Datetime();

      $retails[] = array(
          'name'       => 'Marché',
          'lieu'       => 'Beuzeville le mardi',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );

      $retails[] = array(
          'name'       => 'Marché',
          'lieu'       => 'Honfleur le mercredi',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );

      $retails[] = array(
          'name'       => 'Marché',
          'lieu'       => 'Bernay le samedi',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );

      $retails[] = array(
          'name'       => 'Marché',
          'lieu'       => 'Brionne le dimanche',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );

      $retails[] = array(
          'name'       => 'Marché',
          'lieu'       => 'Conches en Ouche le jeudi',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );

      $retails[] = array(
          'name'       => 'Marché',
          'lieu'       => 'Beaumont le Roger le vendredi',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );

      $retails[] = array(
          'name'       => 'Marché',
          'lieu'       => 'Romilly sur Andelle le vendredi',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );

      $retails[] = array(
          'name'       => 'Marché',
          'lieu'       => 'Pont st pierre le samedi',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );
      $retails[] = array(
          'name'       => 'Magasin de producteurs',
          'lieu'       => 'La ferme de Derly, RN14/D6014 - La Roquette 27420 Les Thilliers en Vexin',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );
      $retails[] = array(
          'name'       => 'Marché de Producteurs de Jouy sur Eure',
          'lieu'       => '2ème samedi du mois - 9h à 12h',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );
      $retails[] = array(
          'name'       => 'Marché',
          'lieu'       => 'Verneuil sur Avre tous les samedi matin',
          'created_at' => $date->format('Y-m-d H:i:s'),
      );

    DB::table('retails')->insert($retails);
    }
}
