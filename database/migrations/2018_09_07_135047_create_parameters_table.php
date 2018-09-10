<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phone_id')->comment('手机id');
            $table->integer('brand_id')->comment('品牌id');
            $table->integer('model_id')->comment('型号id');
            $table->string('capacity')->comment('电池容量');
            $table->string('size')->comment('屏幕尺寸');
            $table->string('memory')->comment('运行内存');
            $table->string('pixel')->comment('像素');
            $table->string('edition')->comment('系统版本');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parameters');
    }
}
