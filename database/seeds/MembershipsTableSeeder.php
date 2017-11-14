<?php

use Illuminate\Database\Seeder;
use App\Models\Membership;

class MembershipsTableSeeder extends Seeder
{
    public function run()
    {
        $memberships = factory(Membership::class)->times(50)->make()->each(function ($membership, $index) {
            if ($index == 0) {
                // $membership->field = 'value';
            }
        });

        Membership::insert($memberships->toArray());
    }

}

