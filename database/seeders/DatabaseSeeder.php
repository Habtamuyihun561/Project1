<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // call run method in TodosSeeder to generate fake data
        $this->call(TodosSeeder::class);
    }
}
