<?php

use Illuminate\Database\Seeder;
use App\Models\RenewCertification;

class RenewCertificationsTableSeeder extends Seeder
{
    public function run()
    {
        $renew_certifications = factory(RenewCertification::class)->times(50)->make()->each(function ($renew_certification, $index) {
            if ($index == 0) {
                // $renew_certification->field = 'value';
            }
        });

        RenewCertification::insert($renew_certifications->toArray());
    }

}

