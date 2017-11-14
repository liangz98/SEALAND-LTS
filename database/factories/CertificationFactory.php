<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Certification::class, function (Faker $faker) {
    // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);
    
    // 随机取一个月以内的时间
    $expiry_date = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $start_date = $faker->dateTimeThisMonth($expiry_date);
    
    // 所有分类 ID 数组，如：[1,2,3,4]
    $member_ids = \App\Models\Member::all()->pluck('id')->toArray();
    $trainings = \App\Models\Training::all()->toArray();
    $training = $faker->randomElement($trainings);
    
    return [
        'member_id'       => $faker->randomElement($member_ids),
        'training_id'     => $training['id'],
        'number'          => $training['number'],
        'level'           => $training['level'],
        'start_date'      => $start_date,
        'expiry_date'     => $expiry_date,
        'status'          => '01',
        'created_by'      => 1,
        'last_updated_by' => 1,
        'created_at'      => $created_at,
        'updated_at'      => $updated_at,
    ];
});
