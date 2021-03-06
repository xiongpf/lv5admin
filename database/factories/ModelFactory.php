<?php

/*
|--------------------------------------------------------------------------
| Models Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Models factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/**
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
**/
$factory->define(App\Models\Goods::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(6),
        'goods_sn' => str_random(10),
	'pcate'=>1,
	'ccate'=>5,
	'provider_id'=>rand(1,5),
	'parameter'=>'1箱',
	'unit'=>'箱',
	 'status'=>1,
	'total'=>0,
	'admin_id'=>rand(1,5),
	'created_at'=>$faker->unixTime($max = 'now'),
    ];
});
