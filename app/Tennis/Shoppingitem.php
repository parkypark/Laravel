<?php

namespace App\Tennis;

use Illuminate\Database\Eloquent\Model;

class Shoppingitem extends Model
{
    //
    protected  $connection = "tennismysql";
  	protected $table = 'tennis_shop.shoppingitem';
}
