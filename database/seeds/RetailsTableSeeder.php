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
          'lieu'       => 'Marché de Beuzeville le mardi',
          'created_at' => $date->format('Y-m-d H:i:s')
      );

      $retails[] = array(
          'lieu'       => 'Marché de Honfleur le mercredi',
          'created_at' => $date->format('Y-m-d H:i:s')
      );

      $retails[] = array(
          'lieu'       => 'Marché de Bernay le samedi',
          'created_at' => $date->format('Y-m-d H:i:s')
      );

      $retails[] = array(
          'lieu'       => 'Marché de Brionne le dimanche',
          'created_at' => $date->format('Y-m-d H:i:s')
      );

      $retails[] = array(
          'lieu'       => 'Marché de Conches en Ouche le jeudi',
          'created_at' => $date->format('Y-m-d H:i:s')
      );

      $retails[] = array(
          'lieu'       => 'Marché de Beaumont le Roger le vendredi',
          'created_at' => $date->format('Y-m-d H:i:s')
      );

      $retails[] = array(
          'lieu'       => 'Marché de Romilly sur Andelle le vendredi',
          'created_at' => $date->format('Y-m-d H:i:s')
      );

      $retails[] = array(
          'lieu'       => 'Marché de Pont st pierre le samedi',
          'created_at' => $date->format('Y-m-d H:i:s')
      );
      $retails[] = array(
          'lieu'       => 'La ferme de Derly, RN14/D6014 - La Roquette 27420 Les Thilliers en Vexin',
          'created_at' => $date->format('Y-m-d H:i:s')
      );
      $retails[] = array(
          'lieu'       => 'March de producteur de Jouy sur Eure le 2ème samedi du mois - 9h à 12h',
          'created_at' => $date->format('Y-m-d H:i:s')
      );
      $retails[] = array(
          'lieu'       => 'Marché de Verneuil sur Avre tous les samedi matin',
          'created_at' => $date->format('Y-m-d H:i:s')
      );

    DB::table('retails')->insert($retails);
    }
}
