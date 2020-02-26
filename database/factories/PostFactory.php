<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Faker\Provider\Base;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title_en' => $faker->title,
        'title_fr' => $faker->title,
        'content_en' => $faker->paragraph,
        'content_fr' => $faker->paragraph,
        'user_id' => 1,
        'post_category_id' => Base::randomElement([1, 2, 3, 4])
    ];
});
