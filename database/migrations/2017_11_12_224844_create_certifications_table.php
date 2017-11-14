<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationsTable extends Migration 
{
	public function up()
	{
		Schema::create('certifications', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('number')->nullable()->index();
            $table->string('level')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('expiry_date')->nullable();
            $table->boolean('deleted');
            $table->string('status', 2)->default('01');
            $table->integer('created_by')->unsigned()->default(0);
            $table->integer('last_updated_by')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('certifications');
	}
}
