<?php

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
        // $this->call(UsersTableSeeder::class);

        // $country = new \App\Country([
        //     'country_name' => 'Sri Lanka',
        //     'country_code' => 'SL'
        //     ]);
        // $country->save();

        // $country = new \App\Country([
        //     'country_name' => 'India',
        //     'country_code' => 'IND'
        //     ]);
        // $country->save();

        // $country = new \App\Country([
        //     'country_name' => 'America',
        //     'country_code' => 'USA'
        //     ]);
        // $country->save();

        // $country = new \App\Country([
        //     'country_name' => 'England',
        //     'country_code' => 'UK'
        //     ]);
        // $country->save();

        // $country = new \App\Country([
        //     'country_name' => 'Singapore',
        //     'country_code' => 'SIN'
        //     ]);
        // $country->save();  

        DB::table('districts')->insert([
            ['country_id' => '2', 'district_name' => 'Anantapur'],
            ['country_id' => '2', 'district_name' => 'Chittoor'],
            ['country_id' => '3', 'district_name' => 'Maui'],
            ['country_id' => '3', 'district_name' => 'Kaua'],
            ]);

        

    }
}
