<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Training;

class TrainingPolicy extends Policy
{
    public function update(User $user, Training $training)
    {
        // return $training->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Training $training)
    {
        return true;
    }
}
