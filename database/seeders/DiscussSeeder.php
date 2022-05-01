<?php

namespace Database\Seeders;

use App\Models\Discuss;
use Illuminate\Database\Seeder;

class DiscussSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discuss::factory(30)->create();
    }
}
