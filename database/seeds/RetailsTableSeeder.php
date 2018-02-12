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
          'name'   =>  'amap',
          'lieu' =>  'la salle des fetes de bernay',
          'created_at'=> $date->format('Y-m-d H:i:s'),

      );

      $retails[] = array(
          'name'   =>  'marché',
          'lieu' =>  'epaignes',
          'created_at'=> $date->format('Y-m-d H:i:s'),

      );

    DB::table('retails')->insert($retails);
    }
}
