<?php

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Trains = [
            [
                'train_number' => '5',
                'destination' => 'Scampia',
                'departure_time' => '2023-02-14 10:15:08',
            ],
            [
                'train_number' => '4',
                'destination' => 'Cagliari',
                'departure_time' => '2023-01-24 20:15:05',
            ],
            [
                'train_number' => '8',
                'destination' => 'Roma',
                'departure_time' => '2023-01-24 20:15:05',
            ],
        ];

        foreach ($Trains as $elem) {
            $newTrain = new Train();
            $newTrain->train_number = $elem['train_number'];
            $newTrain->destination = $elem['destination'];
            $newTrain->departure_time = $elem['departure_time'];
            $newTrain->save();
        }
    }
}