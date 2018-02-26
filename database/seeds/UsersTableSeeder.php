<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [];
      $date = new Datetime();

      $users[] = array(
          'name'   =>  'admin',
          'email' =>  'mabasewf3@gmail.com',
          'password' => bcrypt('admin'),
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'role'=>'admin',
      );

      $users[] = array(
          'name'   =>  'user',
          'email' =>  'user@gmail.com',
          'password' => bcrypt('user'),
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'role'=>'abonne',
      );

      $users[] = array(
          'name'   =>  'antoine',
          'email' =>  'quidelantoine@gmail.com',
          'password' => bcrypt('michel'),
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'role'=>'admin',
      );
      
      for ($i=1; $i <= 30 ; $i++) {
        $users[] = array(
          'name'   =>  'user'.$i,
          'email' =>  'user'.$i.'@gmail.com',
          'password' => bcrypt('user'.$i),
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'role'=>'abonne',
        );
      }

    DB::table('users')->insert($users);
    }
}
