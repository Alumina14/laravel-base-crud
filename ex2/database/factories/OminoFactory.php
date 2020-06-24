<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omini;
use Faker\Generator as Faker;

$factory->define(Omini::class, function (Faker $faker) {
    return [

      "nome"      => $faker -> firstName($gender = null),
      "cognome"   => $faker -> lastName(),
      "indirizzo" => $faker -> address(),
      "cap"       => $faker -> postcode(),
      "nazione"   => $faker -> state(),
      "telefono"  => $faker -> phoneNumber(),
      "ruolo"     => $faker -> jobTitle()

    ];
});
