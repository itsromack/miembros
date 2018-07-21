<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $results = app('db')->select('SELECT id, name FROM locales');
        foreach ($results as $locale)
        {
            Log::info('adding members to locale name [' . $locale->name . ']');
            $members_count = rand(10, 40);
            while ($members_count-- > 0)
            {
                $first_name = $faker->firstName;
                $last_name = $faker->lastName;
                $member_name = $first_name . ' ' . $last_name;
                Log::info(' [' . $locale->name . '] ' . $member_name);

                app('db')->insert(
                    "INSERT INTO members
                    SET
                        church_id = ?,
                        locale_church_id = ?,
                        baptised_at = ?,
                        first_name = ?,
                        last_name = ?,
                        primary_address = ?
                    ",
                    [
                        $faker->randomNumber,
                        $locale->id,
                        $faker->date,
                        $first_name,
                        $last_name,
                        $faker->address
                    ]
                );
            }
        }
    }
}
