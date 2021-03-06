<?php

declare(strict_types=1);

use App\Thread;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
    ];
});
