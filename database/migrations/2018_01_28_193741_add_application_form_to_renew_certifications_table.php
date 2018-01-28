<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApplicationFormToRenewCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('renew_certifications', function (Blueprint $table) {
            $table->string('application_form')->nullable();         // 申请表
            $table->dateTime('expired_date')->nullable();           // 到期日
    
            $table->string('contact_name')->nullable();             // 证明人
            $table->string('contact_company')->nullable();          // 证明人公司全称
            $table->string('contact_address')->nullable();          // 证明人公司地址
            $table->string('contact_city')->nullable();             // 城市
            $table->string('contact_province')->nullable();         // 省份
            $table->string('contact_postal_code')->nullable();      // 邮政编码
            $table->string('contact_country')->nullable();          // 国家
            $table->string('contact_phone')->nullable();            // 证明人手机
            $table->string('contact_email')->nullable();            // 证明人邮箱
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('renew_certifications', function (Blueprint $table) {
            $table->dropColumn('application_form');
            $table->dropColumn('expired_date');
    
            $table->dropColumn('contact_name');
            $table->dropColumn('contact_company');
            $table->dropColumn('contact_address');
            $table->dropColumn('contact_city');
            $table->dropColumn('contact_province');
            $table->dropColumn('contact_postal_code');
            $table->dropColumn('contact_country');
            $table->dropColumn('contact_phone');
            $table->dropColumn('contact_email');
        });
    }
}
