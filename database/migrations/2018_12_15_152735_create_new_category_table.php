<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_category', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('pid')->comment("parentCategory上级分类");
            $table->string("name",200)->comment("分类名称");
            $table->smallInteger("sort")->default("0")->comment("分类名称");
            $table->smallInteger("status")->default("1")->comment("1显,0隐");
            $table->timestamps();
            $table->comment = '咨询的分类表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_category');
    }
}
