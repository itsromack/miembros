<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class LocalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $i = 100;
        while ($i-- > 0)
        {
            $locale_name = $faker->city;

            Log::info('adding locale name [' . $locale_name . ']');

            app('db')->insert(
                "INSERT INTO locales
                SET
                    name = ?,
                    address = ?,
                    contact_persons = ?,
                    contact_numbers = ?,
                    zone = ?,
                    district = ?,
                    division = ?",
                [
                    $locale_name,
                    $faker->address,
                    $faker->name,
                    $faker->phoneNumber,
                    rand(1, 3),
                    '',
                    'Central Apalit'
                ]
            );
        }
    }
}
