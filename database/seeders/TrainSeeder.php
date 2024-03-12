<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Bologna Station',
                'arrival_station' => 'Torino Station',
                'departure_time' => '14:10:00',
                'arrival_time' => '18:30:00',
                'departure_date' => '2024-03-19',
                'train_code' => 1294,
                'carriages_number' => 5,
                'is_delayed' => 1,
                'is_cancelled' => 0
            ],
            [
                'company' => 'Flixbus',
                'departure_station' => 'Catania Station',
                'arrival_station' => 'Palermo Station',
                'departure_time' => '18:25:00',
                'arrival_time' => '21:48:00',
                'departure_date' => '2024-03-24',
                'train_code' => 1837,
                'carriages_number' => 9,
                'is_delayed' => 0,
                'is_cancelled' => 0
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Station',
                'arrival_station' => 'Milano Station',
                'departure_time' => '10:48:00',
                'arrival_time' => '13:15:00',
                'departure_date' => '2024-03-14',
                'train_code' => 4896,
                'carriages_number' => 4,
                'is_delayed' => 0,
                'is_cancelled' => 0
            ],
        ];

        foreach($trains as $train) {
            $new_train = new Train();
            $new_train->fill($train);
            $new_train->save();
        }
    }
}
