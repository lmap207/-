<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('money')->comment('价格');
            $table->string('pname')->comment('手机名称');
            $table->text('content')->comment('商品详情');
            $table->integer('view')->default(0)->comment('浏览次数');
            $table->integer('recom')->default(0)->comment('推荐');
            $table->integer('brand_id')->comment('品牌id');
            $table->integer('type_id')->comment('网络类型id');
            $table->integer('model_id')->comment('手机型号id');
            $table->integer('color_id')->comment('颜色id');
            $table->integer('memory_id')->comment('内存id');
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
        Schema::dropIfExists('phones');
    }
}
