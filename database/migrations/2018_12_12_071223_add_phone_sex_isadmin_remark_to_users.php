<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneSexIsadminRemarkToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->smallInteger("sex")->comment('性别1男，0女,2表示保密');
            $table->integer("phone")->comment("电话号码");
            $table->string('remark',200)->nullable()->comment("备注信息");
            $table->smallInteger('isadmin')->comment("是否是管理员1是0否");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['sex','phone','remark','isadmin']);
        });
    }
}
