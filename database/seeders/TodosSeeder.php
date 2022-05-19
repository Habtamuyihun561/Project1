<?php

namespace Database\Seeders;

use App\Models\Todo;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::factory(5)->create();
    }
}
