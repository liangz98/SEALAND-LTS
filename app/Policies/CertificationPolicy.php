<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Certification;

class CertificationPolicy extends Policy
{
    public function update(User $user, Certification $certification)
    {
        // return $certification->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Certification $certification)
    {
        return true;
    }
}
