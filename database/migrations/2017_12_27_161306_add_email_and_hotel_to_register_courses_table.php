<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailAndHotelToRegisterCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('register_courses', function (Blueprint $table) {
            $table->string('email', 32)->nullable();           // 邮箱
            $table->string('name', 32)->nullable();            // 中文姓名
            $table->boolean('need_hotel');      // 是否需要预订酒店
            $table->string('room_type', 6)->nullable();           // 房型 01-标房 02-豪华房
            $table->string('bed_type', 6)->nullable();           // 床型 01-双床 02-大床
            $table->string('hotel_check_in_name', 32)->nullable();            // 入住者姓名
            $table->dateTime('hotel_check_in_date')->nullable();            // 入住时间
            $table->integer('hotel_days')->nullable();            // 入住时间
            $table->boolean('need_invoice');      // 是否需要开发票
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
            $table->dropColumn('email');
            $table->dropColumn('name');
            $table->dropColumn('need_hotel');
            $table->dropColumn('room_type');
            $table->dropColumn('bed_type');
            $table->dropColumn('hotel_check_in_name');
            $table->dropColumn('hotel_check_in_date');
            $table->dropColumn('hotel_days');
            $table->dropColumn('need_invoice');
        });
    }
}
