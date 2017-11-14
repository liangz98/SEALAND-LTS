<?php

namespace App\Policies;

use App\Models\User;
use App\Models\RegisterCourse;

class RegisterCoursePolicy extends Policy
{
    public function update(User $user, RegisterCourse $register_course)
    {
        // return $register_course->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, RegisterCourse $register_course)
    {
        return true;
    }
}
