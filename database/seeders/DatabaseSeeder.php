<?php

namespace Database\Seeders;

use App\Models\curso;
use App\Models\profesor;
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
        profesor::factory(18)->create();
        curso::factory(45)->create(); 
    }
}
