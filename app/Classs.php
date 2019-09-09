<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = ['name', 'description', 'image'];

    public function champions()
    {
        return $this->belongsToMany(Champion::class, 'champions_classes');
    }

    public function champion_classes()
    {
        return $this->hasMany(ChampionClass::class);
    }
}
