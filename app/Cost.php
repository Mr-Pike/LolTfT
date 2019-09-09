<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    public $table = 'costs';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = ['name'];

    public function champions() 
    {
        return $this->hasMany(Champion::class);
    }
}
