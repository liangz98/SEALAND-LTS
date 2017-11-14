<?php

namespace App\Observers;

use App\Models\Membership;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class MembershipObserver
{
    public function creating(Membership $membership)
    {
        //
    }

    public function updating(Membership $membership)
    {
        //
    }
}