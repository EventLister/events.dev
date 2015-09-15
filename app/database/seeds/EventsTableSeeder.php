<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			CalendarEvent::create([
            'event_name' => $faker->name,
            'event_description' => $faker->realText($maxNbChars = 200),
            'event_location' => $faker->streetAddress,
            'event_start' => $faker->dateTimeThisYear,
            'event_end' => $faker->dateTimeThisMonth,
            'img_url' => "nature-q-c-640-480-" . $faker->numberBetween($min = 1, $max = 10) . '.jpg',
            'user_id' => $faker->numberBetween($min = 1, $max = 4),
			]);
		}
	}

}