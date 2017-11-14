<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedTrainingcategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $trainingCategories = [
            [
                'name'        => 'CIP-1',
                'desc'        => '',
                'created_at'  => '2017-11-1',
            ],
            [
                'name'        => 'CIP-2',
                'desc'        => '',
                'created_at'  => '2017-11-1',
                'updated_at'  => '2017-11-1',
            ],
            [
                'name'        => 'CP1',
                'desc'        => '',
                'created_at'  => '2017-11-1',
                'updated_at'  => '2017-11-1',
            ],
            [
                'name'        => 'CP2',
                'desc'        => '',
                'created_at'  => '2017-11-1',
                'updated_at'  => '2017-11-1',
            ],
            [
                'name'        => 'NPP',
                'desc'        => '',
                'created_at'  => '2017-11-1',
                'updated_at'  => '2017-11-1',
            ],
            [
                'name'        => 'Peer Review',
                'desc'        => '',
                'created_at'  => '2017-11-1',
                'updated_at'  => '2017-11-1',
            ],
        ];
    
        DB::table('training_categories')->insert($trainingCategories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('training_categories')->truncate();
    }
}
