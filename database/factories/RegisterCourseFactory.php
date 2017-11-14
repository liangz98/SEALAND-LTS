<?php

use Faker\Generator as Faker;

$factory->define(App\Models\RegisterCourse::class, function (Faker $faker) {
    // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);
    
    // 所有分类 ID 数组，如：[1,2,3,4]
    $member_ids = \App\Models\Member::all()->pluck('id')->toArray();
    $training_ids = \App\Models\Training::all()->pluck('id')->toArray();
    
    return [
        'member_id'   => $faker->randomElement($member_ids),
        'training_id' => $faker->randomElement($training_ids),
        'status'      => '01',
        'created_at'  => $created_at,
        'updated_at'  => $updated_at,
    ];
});
