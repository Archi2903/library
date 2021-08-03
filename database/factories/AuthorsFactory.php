<?php

/** @var Factory $factory */


use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'slug'=>Str::lower($name),
        'name'=>$name,
        'dateBirth'=>$faker->date('Y-m-d','2000-01-01'),
        'created_at'=>$faker->dateTimeBetween('-1 years','now')

    ];
});
