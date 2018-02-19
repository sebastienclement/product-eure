<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProducersTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(RetailsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(Item_producerTableSeeder::class);
        $this->call(Producer_retailTableSeeder::class);
        $this->call(Category_producerTableSeeder::class);
    }
}
