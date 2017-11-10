<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvatarAndIntroductionToUsersTable extends Migration
{
    /**
     * 执行迁移
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();           // 头像
            $table->string('introduction')->nullable();     // 个人简介
            $table->integer('member_id')->nullable();           // 会员ID
            $table->boolean('activated')->default(false);       // 是否激活,default: false
            $table->boolean('deleted')->default(false);         // 是否删除,default: false
            $table->string('status', 2);                 // 状态,[01: 有效, 02: 禁用]
        });
    }

    /**
     * 回滚迁移
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('introduction');
            $table->dropColumn('member_id');
            $table->dropColumn('activated');
            $table->dropColumn('deleted');
            $table->dropColumn('status');
        });
    }
}
