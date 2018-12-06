<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected  $table ='event';
    protected $primaryKey='eventId';
    public $timestamps =false;
}
