<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tennis_shop.users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lName');
            $table->string('fName');
            $table->string('address');
            $table->string('relationWithPlayer');
            $table->integer('NTRP');
            $table->dateTime('created_at');
             $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tennis_shop.users');
    }
}
