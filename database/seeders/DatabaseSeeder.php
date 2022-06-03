<?php

namespace Database\Seeders;

use App\Models\Cinema;
use App\Models\CinemaMovie;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Cinema::factory(10)->create();
        Movie::factory(50)->create();
        CinemaMovie::factory(50)->create();
    }
}
