<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'level'];

    public $timestamps = false;
}
