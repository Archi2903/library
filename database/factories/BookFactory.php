<?php

/** @var Factory $factory */

use App\Book;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Book::class, function (Faker $faker) {
    $bookname = $faker->sentence(3);
    return [
        'slug' => Str::of($bookname)->slug('-'),
        'bookname' => $bookname,
        'created_at' => $faker->dateTimeBetween('-20 years', 'now'),
        'author_id'=>rand(1,10),
    ];
});
