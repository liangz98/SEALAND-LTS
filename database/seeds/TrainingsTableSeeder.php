<?php

use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingsTableSeeder extends Seeder
{
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);
    
        // 所有分类 ID 数组，如：[1,2,3,4]
        $trainingCategory_ids = \App\Models\TrainingCategory::all()->pluck('id')->toArray();
        
        // 课程名称
        $title = [
            '课程名称-1',
            '课程名称-2',
            '课程名称 Review',
            '课程名称-CP1',
            '课程名称-NPP',
            '课程名称-CP2',
        ];
    
        // 状态数据
        $status = [
            '01',
            '02',
        ];
    
        $trainings = factory(Training::class)
            ->times(50)
            ->make()
            ->each(function ($trainings, $index)
            use ($faker, $trainingCategory_ids, $title, $status)
            {
                // 从头像数组中随机取出一个并赋值
                $trainings->category_id = $faker->randomElement($trainingCategory_ids);
                $trainings->name = $faker->randomElement($title);
                $trainings->status = $faker->randomElement($status);
            });
        Training::insert($trainings->toArray());
    }

}

