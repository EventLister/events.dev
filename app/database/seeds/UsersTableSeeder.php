<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::create([

            'username'   => $_ENV['USER_USERNAME'],
            'first_name' => $_ENV['USER_FIRSTNAME'],
            'last_name'  => $_ENV['USER_LASTNAME'],
            'email'      => $_ENV['USER_EMAIL'],
            'city'       => $_ENV['USER_CITY'],
            'state'      => $_ENV['USER_STATE'],
            'address'      => $_ENV['USER_ADDRESS'],
            'time_zone'  => $_ENV['USER_TIME_ZONE'],
            'zip_code'   => $_ENV['USER_ZIP_CODE'],
            'phone'      => $_ENV['USER_PHONE'],
            'password'   => $_ENV['USER_PASSWORD'],
            'password_confirmation'   => $_ENV['USER_PASSWORD'],
        ]);

        $faker = Faker::create('en_EN');

        foreach(range(1, 3) as $index)
        {
            User::create([
                
                'username'   => $faker->userName,
                'first_name' => $faker->firstName,
                'last_name'  => $faker->lastName,
                'email'      => $faker->freeEmail,
                'city'      => $faker->city,
                'state'      => $faker->state,
                'address'      => $faker->streetAddress,
                'time_zone'      => $faker->timezone,
                'zip_code'      => $faker->postcode,
                'phone'      => $faker->phoneNumber,
                'password'   => $_ENV['USER_PASSWORD'],
                'password_confirmation'   => $_ENV['USER_PASSWORD'],
            ]);
        }
    }

}