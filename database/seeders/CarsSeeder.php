<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    DB::table('cars')->delete();
        Cars::create([
            'name' => 'فور اكس فور',
            'car_model' => '2018',
            'car_type' => '2',
            'out_image' => 'car/default.png',
            'out_image' => 'car/default.png',
            'status' => 1,
        ]);
        Cars::create([
            'name' => '1 فور اكس فور',
            'car_model' => '2015',
            'car_type' => '2',
            'out_image' => 'car/default.png',
            'out_image' => 'car/default.png',
            'status' => 1,
        ]);
        Cars::create([
            'name' => ' 2 فور اكس فور',
            'car_model' => '2019',
            'car_type' => '2',
            'out_image' => 'car/default.png',
            'out_image' => 'car/default.png',
            'status' => 1,
        ]);

    }
}
