<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    public $table = 'tiers';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = ['name'];

    public function champions() 
    {
        return $this->hasMany(Champion::class);
    }
}
