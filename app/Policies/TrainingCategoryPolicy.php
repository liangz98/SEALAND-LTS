<?php

namespace App\Policies;

use App\Models\User;
use App\Models\TrainingCategory;

class TrainingCategoryPolicy extends Policy
{
    public function update(User $user, TrainingCategory $training_category)
    {
        // return $training_category->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, TrainingCategory $training_category)
    {
        return true;
    }
}
