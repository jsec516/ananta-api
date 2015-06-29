<?php

use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function ($faker) {
    return [
    	'first_name' => 'Alexendre',
    	'last_name' => 'Treatzakov',
    	'email' => $faker->email,
        'password' => 'alexmine',
    	'security_question_id' => 1,
    	'security_answer' => 'revenge',
    	'registered_as' => 'owner',
    ];
});

$factory->define(App\Models\Clinic::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'subdomain' => str_random(5),
        'country_id' => '2',
    	'city_id' => '1',
    	'address' => 'Bonnyville, +1 780 573 1775, 5502 - 54th Street',
    	'published_at' => Carbon::now()
    ];
});