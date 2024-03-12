<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        \App\Models\Train::factory(10)->create();

        $this->call([TrainSeeder::class]);
    }
}
