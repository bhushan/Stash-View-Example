<?php declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
    return [
        'card_id' => factory(\App\Card::class),
        'body' => $faker->paragraph
    ];
});
