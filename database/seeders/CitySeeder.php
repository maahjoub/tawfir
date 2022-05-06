<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('Cities')->delete();
         City::create([
            'name' => 'القضارف',
        ]);
         City::create([
            'name' => 'الخرطوم',
        ]);
         City::create([
            'name' => 'الجزيرة',
        ]);
         City::create([
            'name' => 'كسلا',
        ]);
    }
}
