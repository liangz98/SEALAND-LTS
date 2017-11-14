<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Member::class, function (Faker $faker) {
    // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);
    
    return [
        'member_number'   => $faker->randomNumber(5),
        'name'            => $faker->name,
        'sex'             => $faker->randomElement([
            'F',
            'M'
        ]),
        'email'           => $faker->email,
        'mobile_phone'    => '13800000000',
        'address'         => $faker->address,
        'status'          => $faker->randomElement([
            '01',
            '02',
        ]),
        'created_by'      => 1,
        'last_updated_by' => 1,
        'created_at'      => $created_at,
        'updated_at'      => $updated_at,
    ];
});
