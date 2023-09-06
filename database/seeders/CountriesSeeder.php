<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\{Carbon, Facades\DB};


class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'user_id' => 1,
                'name' => 'Israel',
                'iso' => 'IL',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'name' => 'Cyprus',
                'iso' => 'CY',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'name' => 'Greece',
                'iso' => 'GR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
