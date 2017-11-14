<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Membership;

class MembershipPolicy extends Policy
{
    public function update(User $user, Membership $membership)
    {
        // return $membership->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Membership $membership)
    {
        return true;
    }
}
