<?php

namespace App\Policies;

use App\Models\User;
use App\Models\RenewCertification;

class RenewCertificationPolicy extends Policy
{
    public function update(User $user, RenewCertification $renew_certification)
    {
        // return $renew_certification->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, RenewCertification $renew_certification)
    {
        return true;
    }
}
