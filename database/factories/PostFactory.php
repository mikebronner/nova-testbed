<?php

use App\Category;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        "title" => $faker->words(3, true),
        "body" => $faker->text(),
        "category_id" => function () {
            return factory(Category::class)->create()->id;
        }
    ];
});
