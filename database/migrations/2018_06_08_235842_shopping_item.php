<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShoppingItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tennis_shop.shoppingitem', function (Blueprint $table){
            $table->increments('id');
            $table->string('description');
            $table->double('price');
            $table->boolean('deleted');
            $table->dateTime('created_at'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tennis_shop.shoppingitem');
    }
}
