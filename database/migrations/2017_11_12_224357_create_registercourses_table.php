<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterCoursesTable extends Migration 
{
	public function up()
	{
		Schema::create('register_courses', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('training_id')->unsigned()->index();
            $table->boolean('deleted');
            $table->string('status', 2)->default('01');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('register_courses');
	}
}
