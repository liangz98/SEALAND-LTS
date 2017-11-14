<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenewCertificationsTable extends Migration 
{
	public function up()
	{
		Schema::create('renew_certifications', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('number')->index()->nullable();
            $table->string('level')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->timestamp('birth_date')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_password')->nullable();
            $table->string('person_address')->nullable();
            $table->string('person_city')->nullable();
            $table->string('person_country')->nullable();
            $table->string('person_zip_code')->nullable();
            $table->string('person_email')->nullable();
            $table->string('person_phone')->nullable();
            $table->string('work_address')->nullable();
            $table->string('work_city')->nullable();
            $table->string('work_country')->nullable();
            $table->string('work_zip_code')->nullable();
            $table->string('work_email')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('work_type')->nullable();
            $table->string('company_name')->nullable();
            $table->timestamp('from_date')->nullable();
            $table->timestamp('to_date')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_city')->nullable();
            $table->string('company_province')->nullable();
            $table->string('company_country')->nullable();
            $table->string('company_zip_code')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->boolean('deleted');
            $table->string('status', 2)->default('01');
            $table->integer('created_by')->unsigned()->default(0);
            $table->integer('last_updated_by')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('renew_certifications');
	}
}
