<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Snew;

class SnewPolicy extends Policy
{
    public function update(User $user, Snew $snew)
    {
        // return $snew->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Snew $snew)
    {
        return true;
    }
}
