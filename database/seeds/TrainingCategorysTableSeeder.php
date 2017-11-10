<?php

use Illuminate\Database\Seeder;
use App\Models\TrainingCategory;

class TrainingCategorysTableSeeder extends Seeder
{
    public function run()
    {
        $training_categorys = factory(TrainingCategory::class)->times(50)->make()->each(function ($training_category, $index) {
            if ($index == 0) {
                // $training_category->field = 'value';
            }
        });

        TrainingCategory::insert($training_categorys->toArray());
    }

}

