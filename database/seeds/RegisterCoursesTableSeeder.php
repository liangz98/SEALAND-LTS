<?php

use Illuminate\Database\Seeder;
use App\Models\RegisterCourse;

class RegisterCoursesTableSeeder extends Seeder
{
    public function run()
    {
        $register_courses = factory(RegisterCourse::class)
            ->times(50)
            ->make()
            ->each(function ($register_course, $index) {
                if ($index == 0) {
                    // $register_course->field = 'value';
                }
            });

        RegisterCourse::insert($register_courses->toArray());
    }

}

