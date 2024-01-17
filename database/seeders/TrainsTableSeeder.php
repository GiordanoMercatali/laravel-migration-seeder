<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
        $train->company = 'Trenitalia';
        $train->start_station = 'Torino Porta Nuova';
        $train->arrival_station = 'Genova Brignole';
        $train->start_time = '2024/01/01 18:13:59';
        $train->arrival_time = '2024/01/02 01:02:30';
        $train->coach = '9';
        $train->is_on_time = true;
        $train->has_been_canceled = false;
        $train->save();
    }
}
