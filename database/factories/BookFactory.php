<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    
    return [
        //
        'isbn'=>$this->faker->isbn13(),
        'title'=>$this->faker->word(),
        'price'=>$this->faker->numberBetween(2000,5000),
        'publisher'=>$this->faker->randomElement(['ジャパンIT','優丸システム','走跳社','IT Emotion','テックCode']),
        'published'=>$this->faker->dateTimeBetween('-5 years','now'),
    ];
});
