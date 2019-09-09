<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChampionOrigin extends Model
{
    protected $table = 'champions_origins';
    protected $primaryKey = ['champion_id', 'origin_id'];
    protected $fillable = ['champion_id', 'origin_id'];

    public $timestamps = false;
    public $incrementing = false;

    public function champions() 
    {
        return $this->belongsToMany(Champion::class, 'id', 'champion_id');
    }
}
