<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected  $table ='projectimage';
    protected $primaryKey='projectImageId';
    public $timestamps =false;
    protected $fillable=['fkprojectId'];
}
