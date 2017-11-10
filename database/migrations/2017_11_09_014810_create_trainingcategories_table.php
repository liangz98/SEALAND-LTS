<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingCategoriesTable extends Migration 
{
	public function up()
	{
		Schema::create('training_categories', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('pid')->unsigned()->default(0);
            $table->string('name')->index();
            $table->string('en_name')->nullable();
            $table->string('desc')->nullable();
            $table->string('en_desc')->nullable();
            $table->boolean('deleted');
            $table->string('status', 2)->default('01');
            $table->integer('created_by')->default(0);
            $table->integer('last_updated_by')->default(0);
            $table->integer('order')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('training_categories');
	}
}
