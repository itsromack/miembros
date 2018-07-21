<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        $results = DB::select('SELECT id, name FROM locales');
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
                        born_at = ?,
                        first_name = ?,
                        last_name = ?,
                        primary_address = ?,
                        secondary_address = ?,
                        provincial_address = ?,
                        contact_numbers = ?,
                        picture = ?,
                        history = ?,
                        progress_history = ?,
                        medical_history = ?,
                        philhealth_number = ?,
                        sss_number = ?,
                        precint_number = ?
                    ",
                    [
                        $faker->randomNumber,
                        $locale->id,
                        $faker->date,
                        $faker->date,
                        $first_name,
                        $last_name,
                        $faker->address,
                        $faker->address,
                        $faker->address,
                        json_encode([$faker->phoneNumber, $faker->phoneNumber, $faker->phoneNumber]),
                        'https://picsum.photos/200/200?random',
                        'Ut ab voluptas sed a nam. Sint autem inventore aut officia aut aut blanditiis. Ducimus eos odit amet et est ut eum.',
                        'Fuga totam reiciendis qui architecto fugiat nemo. Consequatur recusandae qui cupiditate eos quod.',
                        'Sit vitae voluptas sint non voluptates.',
                        $faker->isbn13,
                        $faker->isbn10,
                        $faker->ean8
                    ]
                );
            }
        }
    }
}
