<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domotica extends Model
{
    protected  $table = 'domotica';
    protected  $fillable = array('name','status');
}
