<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\App\Models\Movie;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(FuelSeeder::class);
        $this->call(NewsSeeder::class);

        $this->call(CountySeeder::class);
        $this->call(ReciptSeeder::class);
        $this->call(StationSeeder::class);

    }
}
