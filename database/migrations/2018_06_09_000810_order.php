<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tennis_shop.order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shoppingitem_id');
            $table->integer('user_id');            
            $table->dateTime('created_at');
            
            $table->engine = 'InnoDB';
        });
      /*  Schema::table('tennis_shop.order', function($table){
            $table->foreign('shoppingitem_id')->references('id')->on('tennis_shop.shoppingitem')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('tennis_shop.users')->onDelete('cascade');
        });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tennis_shop.order');
    }
}
