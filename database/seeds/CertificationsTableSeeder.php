<?php

use Illuminate\Database\Seeder;
use App\Models\Certification;

class CertificationsTableSeeder extends Seeder
{
    public function run()
    {
        $certifications = factory(Certification::class)->times(20)->make()->each(function ($certification, $index) {
            if ($index == 0) {
                // $certification->field = 'value';
            }
        });

        Certification::insert($certifications->toArray());
    }

}

