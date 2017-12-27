<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInfoFieldsToRegisterCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('register_courses', function (Blueprint $table) {
            $table->text('company_name')->nullable();               // 公司名
            $table->text('en_company_name')->nullable();            // 公司英文名
            $table->text('company_address')->nullable();            // 公司地址
            $table->text('en_company_address')->nullable();         // 公司英文地址
            $table->string('company_phone', 32)->nullable();    // 办公电话
            $table->string('company_fax', 32)->nullable();      // 办公传真
            $table->text('mailing_address')->nullable();            // 邮寄地址
            $table->text('en_mailing_address')->nullable();         // 邮寄英文地址
            $table->text('nace_number')->nullable();                // NACE会员号
            $table->string('en_name')->nullable();                  // 英文名
            $table->string('department', 64)->nullable();                   // 部门
            $table->string('en_department', 64)->nullable();                // 部门
            $table->string('title', 64)->nullable();                // 职务
            $table->string('en_title', 64)->nullable();             // 职务
            $table->string('identification_number', 18)->nullable();        // 身份证号码
            $table->string('phone', 32)->nullable();            // 家庭电话
            $table->string('mobile', 32)->nullable();           // 手机号码
            $table->string('invoice_mailing_address')->nullable();     // 发票邮寄地址
            $table->string('invoice_mailing_name', 32)->nullable();         // 发票邮寄收件人
            $table->string('invoice_mailing_zip_code', 16)->nullable();     // 发票邮寄邮编
            $table->string('invoice_mailing_phone', 32)->nullable();        // 发票邮寄收件人电话
            $table->string('invoice_type', 16)->nullable();         // 发票类型
            $table->string('taxpayer_identification_number', 64)->nullable();     // 纳税人识别号
            $table->string('invoice_address')->nullable();                     // 发票地址
            $table->string('invoice_phone', 32)->nullable();            // 发票电话
            $table->string('invoice_bank_name', 32)->nullable();        // 开户行
            $table->string('invoice_bank_no', 32)->nullable();          // 银行帐号
            $table->string('invoice_title', 32)->nullable();            // 发票抬头
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('register_courses', function (Blueprint $table) {
            $table->dropColumn('company_name');
            $table->dropColumn('en_company_name');
            $table->dropColumn('company_address');
            $table->dropColumn('en_company_address');
            $table->dropColumn('company_phone');
            $table->dropColumn('company_fax');
            $table->dropColumn('mailing_address');
            $table->dropColumn('en_mailing_address');
            $table->dropColumn('nace_number');
            $table->dropColumn('en_name');
            $table->dropColumn('department');
            $table->dropColumn('en_department');
            $table->dropColumn('title');
            $table->dropColumn('en_title');
            $table->dropColumn('identification_number');
            $table->dropColumn('phone');
            $table->dropColumn('mobile');
            $table->dropColumn('invoice_mailing_address');
            $table->dropColumn('invoice_mailing_name');
            $table->dropColumn('invoice_mailing_zip_code');
            $table->dropColumn('invoice_mailing_phone');
            $table->dropColumn('invoice_type');
            $table->dropColumn('taxpayer_identification_number');
            $table->dropColumn('invoice_address');
            $table->dropColumn('invoice_phone');
            $table->dropColumn('invoice_bank_name');
            $table->dropColumn('invoice_bank_no');
            $table->dropColumn('invoice_title');
        });
    }
}
