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

      $users[] = array(
          'name'   =>  'admin',
          'email' =>  'admin@gmail.com',
          'password' => bcrypt('admin'),
          'created_at'=> $date->format('Y-m-d H:i:s'),
          'role'=>'admin',
      );

    DB::table('users')->insert($users);
    }
}
