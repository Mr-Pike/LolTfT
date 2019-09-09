<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    protected $table = 'origins';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = ['name', 'description', 'image'];

    public function champions()
    {
        return $this->belongsToMany(Champion::class, 'champions_origins');
    }

    public function champion_classes()
    {
        return $this->hasMany(ChampionClass::class);
    }
}
