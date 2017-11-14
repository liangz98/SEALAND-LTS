<?php

use Illuminate\Database\Seeder;
use App\Models\Member;

class MembersTableSeeder extends Seeder
{
    public function run()
    {
        $members = factory(Member::class)
            ->times(10)
            ->make();

        Member::insert($members->toArray());
    }

}

