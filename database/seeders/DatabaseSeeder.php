<?php

namespace Database\Seeders;
use \App\Models\Jimpitan;

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
        Jimpitan::factory(40)->create();
    }
}
