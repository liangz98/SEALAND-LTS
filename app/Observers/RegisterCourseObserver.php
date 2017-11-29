<?php

namespace App\Observers;

use App\Models\RegisterCourse;
use App\Notifications\RegisterCoursed;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class RegisterCourseObserver
{
    public function creating(RegisterCourse $register_course)
    {
        //
    }
    
    public function created(RegisterCourse $register_course)
    {
        $register_course->notify(new RegisterCoursed($register_course));
    }

    public function updating(RegisterCourse $register_course)
    {
        //
    }
}