<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    protected  $table ='eventimage';
    protected $primaryKey='eId';
    public $timestamps =false;
}
