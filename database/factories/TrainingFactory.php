<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Training::class, function (Faker $faker) {
    // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);
    
    // 随机取一个月以内的时间
    $end_date = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $start_date = $faker->dateTimeThisMonth($end_date);
    
    return [
        'content'       => $faker->sentence(),
        'location'     => $faker->address,
        'address'    => $faker->address,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'created_by'        => 1,
        'last_updated_by'   => 1,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
