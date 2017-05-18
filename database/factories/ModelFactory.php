<?php

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Artigo::class, function (Faker\Generator $faker) {

    $userCount = (array) \DB::table('usuarios')->count();
    $tipoArtcount = (array)\DB::table('tipo_artigos')->count();
    return [
        'autor_id' => $faker->numberBetween(1, $userCount[0]),
        'tipo_artigo_id' => $faker->numberBetween(1, $tipoArtcount[0]),
        'titulo' => $faker->sentence(9, true),
        'tldr' => $faker->sentence(10, true),
        'ativo' => true
    ];

});

$factory->define(App\Models\Usuario::class, function (Faker\Generator $faker){

    $brFaker = new Faker\Generator();
    $brFaker->addProvider(new Faker\Provider\pt_BR\Person($brFaker));
    $firstName = $faker->firstName;
    $lastName = $faker->lastName;

    return [
        'cpf' => $brFaker->cpf(false),
        'nome_completo' => $firstName . ' ' . $faker->lastName . ' ' . $lastName,
        'nome_curto' => $firstName . ' ' . $lastName,
        'password' => bcrypt($faker->password),
        'remember_token' => str_random(10),
        'ativo' => true,
    ];
});