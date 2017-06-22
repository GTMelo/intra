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


$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    $brFaker = new Faker\Generator();
    $brFaker->addProvider(new Faker\Provider\pt_BR\Person($brFaker));
    $firstName = $faker->firstName;
    $lastName = $faker->lastName;

    return [
        'cpf' => $brFaker->cpf(false),
        'nome_completo' => $firstName . ' ' . $faker->lastName . ' ' . $lastName,
        'nome_curto' => $firstName . ' ' . $lastName,
        'email' => $faker->unique()->safeEmail,
        'ativo' => true,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Artigo::class, function (Faker\Generator $faker) {

    $maxUser = \App\Models\User::all()->count();
    $maxTipoArt = \App\Models\ArtigoTipo::all()->count();
    $maxUnidade = \App\Models\Unidade::all()->count();
    $today = new \Carbon\Carbon();
    return [
        'autor_id' => $faker->numberBetween(1, $maxUser),
        'artigo_tipo_id' => $faker->numberBetween(1, $maxTipoArt),
        'unidade_id' => $faker->numberBetween(1, $maxUnidade),
        'titulo' => $faker->sentence(9, true),
        'tldr' => $faker->sentence(10, true),
        'ativo' => true,
        'published_at' => $today,
    ];

});

//$factory->define(App\Models\Usuario::class, function (Faker\Generator $faker){
//
//    $brFaker = new Faker\Generator();
//    $brFaker->addProvider(new Faker\Provider\pt_BR\Person($brFaker));
//    $firstName = $faker->firstName;
//    $lastName = $faker->lastName;
//
//    return [
//        'cpf' => $brFaker->cpf(false),
//        'nome_completo' => $firstName . ' ' . $faker->lastName . ' ' . $lastName,
//        'nome_curto' => $firstName . ' ' . $lastName,
//        'password' => bcrypt($faker->password),
//        'remember_token' => str_random(10),
//        'ativo' => $faker->boolean(60),
//    ];
//});

$factory->define(\App\Models\Objeto::class, function (Faker\Generator $faker) {

    $faker->addProvider(new \Faker\Provider\Lorem($faker));
    $faker->addProvider(new \Faker\Provider\Miscellaneous($faker));

    return [
        'objeto_tipo_id' => 1,
        'identifier' => null,
        'descricao' => $faker->text(60),
        'tldr' => $faker->text(140),
        'conteudo' => null,
        'ativo' => $faker->boolean(60),
    ];
});

$factory->define(\App\Models\CarrosselItem::class, function (\Faker\Generator $faker){

    $maxArtigos = \App\Models\Artigo::all()->count();
    $maxImagens = \App\Models\Objeto::tipo('imagem')->count();

    return [
        'artigo_id' => $faker->numberBetween(1, $maxArtigos),
        'imagem_id' => $faker->numberBetween(1, $maxImagens),
        'published_at' => $faker->dateTimeThisMonth(),
        'ativo' => true,
    ];

});

$factory->define(\App\Models\UsuarioRH::class, function (\Faker\Generator $faker) {

    $maxUsuarios = \App\Models\User::withoutGlobalScopes()->count();
    $maxCargos = \App\Models\Cargo::withoutGlobalScopes()->count();
    $maxEscolaridades = \App\Models\Escolaridade::all()->count();
    $maxUnidades = \App\Models\Unidade::withoutGlobalScopes()->count();

    $randomDays = mt_rand(-31, 31);
    $randomMonths = mt_rand(-12, 12);
    $randomYears = mt_rand(-25, 25);
    $date = \Carbon\Carbon::createFromDate(1970, 5, 15);
    $date->addDays($randomDays);
    $date->addMonths($randomMonths);
    $date->addYears($randomYears);

    return [
        'usuario_id' => $faker->unique()->numberBetween(1, $maxUsuarios),
        'cargo_id' => $faker->numberBetween(1, $maxCargos),
        'escolaridade_id' => $faker->numberBetween(1, $maxEscolaridades),
        'unidade_id' => $faker->numberBetween(1, $maxUnidades),
        'siape' => $faker->randomNumber(7),
        'data_nascimento' => $date,
        'sexo' => $faker->randomElement(['m', 'f']),
    ];

});

$factory->define(\App\Models\Telefone::class, function (\Faker\Generator $faker) {

    $maxCidades = \App\Models\Cidade::all()->count();

    return [
        'cidade_id' => $faker->numberBetween(1, $maxCidades),
        'prefixo' => $faker->randomNumber(4, true),
        'ramal' => $faker->randomNumber(4, true),
        'ativo' => $faker->numberBetween(0, 1),
    ];
});

$factory->define(\App\Models\Colecao::class, function (\Faker\Generator $faker) {

    $faker->addProvider(new \Faker\Provider\Lorem($faker));

    return [
        'label' => $faker->unique()->word(),
        'ativo' => 1,
    ];

});