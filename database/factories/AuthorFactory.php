<?php

/** @var Factory $factory */


use App\Author;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Author::class, function (Faker $faker) {
    $firstName = $faker->firstName;
    $lastName = $faker->lastName;
    return [
        'book_id'=>rand(1,10),
        'slug'=>Str::of("$firstName $lastName")->slug('-'),
        'firstname'=>"$firstName",
        'lastname'=>"$lastName",
        'dateBirth'=>$faker->date('Y-m-d','1950-01-01'),
        'created_at'=>$faker->dateTimeBetween('-1 years','now')

    ];
});
