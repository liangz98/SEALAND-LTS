<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration 
{
	public function up()
	{
		Schema::create('members', function(Blueprint $table) {
            $table->increments('id');
            $table->string('member_number')->index();
            $table->string('name');
            $table->string('en_name')->nullable();
            $table->string('sex', 6);
            $table->string('email', 64)->nullable();
            $table->string('oth_email', 64)->nullable();
            $table->string('mobile_phone', 64)->nullable();
            $table->string('oth_mobile_phone', 64)->nullable();
            $table->string('country', 64)->nullable();
            $table->string('en_country', 64)->nullable();
            $table->string('country_code', 8)->nullable();
            $table->string('state', 64)->nullable();
            $table->string('en_state', 64)->nullable();
            $table->string('state_code', 8)->nullable();
            $table->string('city', 64)->nullable();
            $table->string('en_city', 64)->nullable();
            $table->text('street')->nullable();
            $table->text('en_street')->nullable();
            $table->text('address')->nullable();
            $table->text('en_address')->nullable();
            $table->string('company_name', 512)->nullable();
            $table->string('en_company_name', 512)->nullable();
            $table->string('title', 64)->nullable();
            $table->string('company_address', 512)->nullable();
            $table->string('en_company_address', 512)->nullable();
            $table->string('mailing_address', 512)->nullable();
            $table->string('en_mailing_address', 512)->nullable();
            $table->string('mailing_name', 128)->nullable();
            $table->string('mailing_mobile', 32)->nullable();
            $table->integer('certification_id')->unsigned()->default(0);
            $table->boolean('deleted');
            $table->string('status', 2)->default('01');
            $table->integer('created_by')->unsigned()->default(0);
            $table->integer('last_updated_by')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('members');
	}
}
