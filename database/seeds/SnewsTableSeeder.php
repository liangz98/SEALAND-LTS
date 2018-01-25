<?php

use Illuminate\Database\Seeder;
use App\Models\Snew;

class SnewsTableSeeder extends Seeder
{
    public function run()
    {
        $snews = factory(Snew::class)->times(50)->make()->each(function ($snew, $index) {
            if ($index == 0) {
                // $snew->field = 'value';
            }
        });

        Snew::insert($snews->toArray());
    }

}

