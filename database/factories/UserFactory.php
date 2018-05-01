<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name_ar' => $faker->name,
        'name_en' => $faker->name,
        'name_fr' => $faker->name,
    ];
});


$factory->define(App\Article::class, function (Faker $faker) {
    $states = ['DRAFT', 'LIVE','DELETED','APPROVAL'];
    
    return [
        'headline_ar' => $faker->paragraph,
        'text_ar' => $faker->paragraph(5),
        'image' => $faker->paragraph,
        'thumb_image' => $faker->paragraph,
        // 'publish_date' => Carbon::now(),
        'author_id' => 1,
        'category_id' => $faker->numberBetween(1, 100),
        'state' => $states[$faker->numberBetween(0, 3)],
    ];
});
