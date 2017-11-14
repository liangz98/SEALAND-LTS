<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration 
{
	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
            $table->increments('id');
            $table->string('subject')->index();
            $table->text('body');
            $table->timestamp('release_date');
            $table->boolean('deleted');
            $table->integer('view_count')->unsigned()->default(0);
            $table->integer('created_by')->unsigned()->default(0);
            $table->integer('last_updated_by')->unsigned()->default(0);
            $table->text('excerpt');
            $table->string('slug')->nullable();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('news');
	}
}
