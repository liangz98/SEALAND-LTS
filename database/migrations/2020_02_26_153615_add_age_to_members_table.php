<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgeToMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->date('birthday')->nullable();         // 出生日期
            $table->integer('age')->nullable();           // 年龄
            $table->string('industry')->nullable();       // 从事行业
            $table->string('certification_number')->nullable(); // 认证号码
            $table->string('certification_level')->nullable(); // 认证级别
            $table->date('certification_date')->nullable(); // 证书到期日
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('birthday');
            $table->dropColumn('age');
            $table->dropColumn('industry');
            $table->dropColumn('certification_number');
            $table->dropColumn('certification_level');
            $table->dropColumn('certification_date');
        });
    }
}
