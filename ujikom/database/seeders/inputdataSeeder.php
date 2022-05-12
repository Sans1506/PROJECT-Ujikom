<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inputdata;

class inputdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inputdata::factory(100)->create();
    }
}
