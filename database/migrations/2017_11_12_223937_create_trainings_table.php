<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration 
{
	public function up()
	{
		Schema::create('trainings', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->index();
            $table->string('title')->index();
            $table->string('en_title')->index();
            $table->string('number')->index();
            $table->string('level');
            $table->string('body')->nullable();
            $table->string('en_content')->nullable();
            $table->string('location')->nullable();
            $table->string('en_location')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date');
            $table->boolean('deleted');
            $table->string('status', 2)->default('01');
            $table->integer('created_by')->unsigned()->default(0);
            $table->integer('last_updated_by')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('trainings');
	}
}
